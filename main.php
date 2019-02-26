<?php

require __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$PATH_TO_PROCESS = 'files/to_process/';
$PATH_PROCESSED = 'files/processed/';
$PATH_BILLET = 'files/billet/';
$PATH_WITH_ERROR = 'files/with_error/';

$fileList = glob($PATH_TO_PROCESS . '*');

if (empty($fileList)) {
    echo "File not found \n";
    exit;
}

foreach ($fileList as $fileName) {
    if (!is_file($fileName)) {
        continue;
    }
    
    processFile($fileName);
}

function exportToHtml($billetName, $templateHtml) {
    file_put_contents("{$GLOBALS['PATH_BILLET']}{$billetName}.html", $templateHtml);
}

function exportToPdf($billetName, $templateHtml) {
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($templateHtml);
    $mpdf->Output("{$GLOBALS['PATH_BILLET']}{$billetName}.pdf", 'F');
}

function getFileData($worksheet, $row) {
    $data = [];
    $data['customer'] = [];
    $data['customer']['code'] = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
    $data['customer']['name'] = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
    $data['date'] = date('d/m/Y');
    $data['receipt_number'] = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
    $data['value'] = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
    $data['expiration_date'] = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
    $data['background'] = getFileEncodedToHtml($_SERVER['PWD'] . "/assets/img/tim_template.jpg", "image/jpg");
    $data['digitable_line'] = $worksheet->getCellByColumnAndRow(9, $row)->getValue();

    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
    $data['barcode'] = $generator->getBarcode($data['digitable_line'], $generator::TYPE_CODE_128, 1, 35);

    return $data;
}

function getFileEncodedToHtml($file, $mime) {  
$contents = file_get_contents($file);
$base64   = base64_encode($contents); 
return ('data:' . $mime . ';base64,' . $base64);
}

function getFileName($fileName) {
    $fileNameArray = explode("/", $fileName);
    return $fileNameArray[(count($fileNameArray) - 1)];
}

function getBilletName($row, $data) {
    return sprintf("%s_%s_%s", date('Ymdhis'), $row, str_replace(" ", "_", strtolower($data['customer']['name'])));
}

function getTemplateHtml($data) {
    ob_start();
    include('billet_template.php');
    $templateHtml = ob_get_contents();
    ob_end_clean();

    return $templateHtml;
}

function processFile($fileName) {
    try {
        echo "File: {$fileName} \n";
        $spreadsheet = PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
        $worksheet = $spreadsheet->getActiveSheet();
        $highestRow = $worksheet->getHighestRow();
        
        for ($row = 2; $row <= $highestRow; $row++) {
            if (empty($worksheet->getCellByColumnAndRow(1, $row)->getValue())) {
                break;
            }

            echo "Row: {$row} \n";

            $data = getFileData($worksheet, $row);
            $templateHtml = getTemplateHtml($data);
            $billetName = getBilletName($row, $data);

            exportToHtml($billetName, $templateHtml);
            exportToPdf($billetName, $templateHtml);
        }
        
        rename($fileName, $GLOBALS['PATH_PROCESSED'] . "PROCESSADO_" . getFileName($fileName));
        echo "Moved {$fileName} to {$GLOBALS['PATH_PROCESSED']} \n";
    } catch (Exception $e) {
        rename($fileName, $GLOBALS['PATH_WITH_ERROR'] . "ERRO_" . getFileName($fileName));
        echo "Exception {$e->getMessage()} \n";
        echo "Moved {$fileName} to {$GLOBALS['PATH_WITH_ERROR']} \n";
    }
}
