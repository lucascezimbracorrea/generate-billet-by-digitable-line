<?php 
    if (empty($data)) {
        $data = [];
    }
?>
<html>
    <head>
        <meta http-equiv=Content-Type content="text/html; charset=UTF-8">

        <style type="text/css">
            span.cls_003{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
            div.cls_003{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
            span.cls_004{font-family:Times,serif;font-size:6.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
            div.cls_004{font-family:Times,serif;font-size:6.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
            span.cls_005{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
            div.cls_005{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
            span.cls_002{font-family:Times,serif;font-size:7.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
            div.cls_002{font-family:Times,serif;font-size:7.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
            span.cls_006{font-family:Times,serif;font-size:10.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
            div.cls_006{font-family:Times,serif;font-size:10.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        </style>
    </head>

    <body>
        <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
            <div style="position:absolute;left:0px;top:0px"><img src="<?= $data['background'] ?>" width="595" height="841" /></div>
            <div style="position:absolute;left:159.96px;top:26.44px" class="cls_003"><span class="cls_003">TIM S.A.</span></div>
            <div style="position:absolute;left:159.96px;top:41.32px" class="cls_004"><span class="cls_004">Insc. Est.:115.608.065.110   CNPJ:02.421.421/0006-26</span></div>
            <div style="position:absolute;left:159.96px;top:52.24px" class="cls_004"><span class="cls_004">AV. ERMANO MARCHETTI 172 - AGUA BRANCA</span></div>
            <div style="position:absolute;left:372.00px;top:49.72px" class="cls_005"><span class="cls_005">Atenção: Não Receber após o Vencimento</span></div>
            <div style="position:absolute;left:159.96px;top:63.28px" class="cls_004"><span class="cls_004">SÃO PAULO - SP - CEP: 05038-000</span></div>
            <div style="position:absolute;left:27.00px;top:84.76px" class="cls_002"><span class="cls_002">NOME DO CLIENTE</span></div>
            <div style="position:absolute;left:372.00px;top:84.76px" class="cls_002"><span class="cls_002">NUMERO DO RECIBO</span></div>
            <div style="position:absolute;left:27.00px;top:98.56px" class="cls_006"><span class="cls_006"><?= $data['customer']['name'] ?></span></div>
            <div style="position:absolute;left:372.00px;top:99.64px" class="cls_006"><span class="cls_006"><?= $data['receipt_number'] ?></span></div>
            <div style="position:absolute;left:27.00px;top:120.76px" class="cls_002"><span class="cls_002">CÓDIGO DO CLIENTE</span></div>
            <div style="position:absolute;left:132.96px;top:120.76px" class="cls_002"><span class="cls_002">REFERÊNCIA</span></div>
            <div style="position:absolute;left:213.00px;top:120.76px" class="cls_002"><span class="cls_002">DATA DE EMISSÃO</span></div>
            <div style="position:absolute;left:321.00px;top:120.76px" class="cls_002"><span class="cls_002">DATA DE VENCIMENTO</span></div>
            <div style="position:absolute;left:444.96px;top:120.76px" class="cls_002"><span class="cls_002">VALOR</span></div>
            <div style="position:absolute;left:27.00px;top:137.56px" class="cls_006"><span class="cls_006"><?= $data['customer']['code'] ?></span></div>
            <div style="position:absolute;left:213.00px;top:137.56px" class="cls_006"><span class="cls_006"><?= $data['date'] ?></span></div>
            <div style="position:absolute;left:321.02px;top:137.56px" class="cls_006"><span class="cls_006"><?= $data['expiration_date'] ?></span></div>
            <div style="position:absolute;left:444.96px;top:137.68px" class="cls_006"><span class="cls_006">R$ <?= $data['value'] ?></span></div>
            <div style="position:absolute;left:433.08px;top:163.60px" class="cls_006"><span class="cls_006">AUTENTICAÇÃO MECÂNICA</span></div>
            <div style="position:absolute;left:20.04px;top:177.64px" class="cls_003"><span class="cls_003"><?= $data['digitable_line'] ?></span></div>
            <div style="position:absolute;left:512.52px;top:178.60px" class="cls_006"><span class="cls_006">VIA BANCO</span></div>
            <div style="position:absolute;left:20.04px;top:199.64px" class="cls_006"><span class="cls_006"><?= $data['barcode']; ?></span></div>
            <div style="position:absolute;left:159.96px;top:292.48px" class="cls_003"><span class="cls_003">TIM S.A.</span></div>
            <div style="position:absolute;left:159.96px;top:307.24px" class="cls_004"><span class="cls_004">Insc. Est.:115.608.065.110   CNPJ:02.421.421/0006-26</span></div>
            <div style="position:absolute;left:159.96px;top:318.28px" class="cls_004"><span class="cls_004">AV. ERMANO MARCHETTI 172 - AGUA BRANCA</span></div>
            <div style="position:absolute;left:372.00px;top:314.80px" class="cls_005"><span class="cls_005">Atenção: Não Receber após o Vencimento</span></div>
            <div style="position:absolute;left:159.96px;top:329.32px" class="cls_004"><span class="cls_004">SÃO PAULO - SP - CEP: 05038-000</span></div>
            <div style="position:absolute;left:27.00px;top:350.80px" class="cls_002"><span class="cls_002">NOME DO CLIENTE</span></div>
            <div style="position:absolute;left:372.00px;top:350.80px" class="cls_002"><span class="cls_002">NUMERO DO RECIBO</span></div>
            <div style="position:absolute;left:27.00px;top:364.60px" class="cls_006"><span class="cls_006"><?= $data['customer']['name'] ?></span></div>
            <div style="position:absolute;left:372.00px;top:365.56px" class="cls_006"><span class="cls_006"><?= $data['receipt_number'] ?></span></div>
            <div style="position:absolute;left:27.00px;top:386.80px" class="cls_002"><span class="cls_002">CÓDIGO DO CLIENTE</span></div>
            <div style="position:absolute;left:132.96px;top:386.80px" class="cls_002"><span class="cls_002">REFERÊNCIA</span></div>
            <div style="position:absolute;left:213.00px;top:386.80px" class="cls_002"><span class="cls_002">DATA DE EMISSÃO</span></div>
            <div style="position:absolute;left:321.00px;top:386.80px" class="cls_002"><span class="cls_002">DATA DE VENCIMENTO</span></div>
            <div style="position:absolute;left:444.96px;top:386.80px" class="cls_002"><span class="cls_002">VALOR</span></div>
            <div style="position:absolute;left:27.00px;top:403.60px" class="cls_006"><span class="cls_006"><?= $data['customer']['code'] ?></span></div>
            <div style="position:absolute;left:213.00px;top:403.60px" class="cls_006"><span class="cls_006"><?= $data['date'] ?></span></div>
            <div style="position:absolute;left:321.00px;top:403.60px" class="cls_006"><span class="cls_006"><?= $data['expiration_date'] ?></span></div>
            <div style="position:absolute;left:444.96px;top:403.60px" class="cls_006"><span class="cls_006">R$ <?= $data['value'] ?></span></div>
            <div style="position:absolute;left:433.08px;top:429.64px" class="cls_006"><span class="cls_006">AUTENTICAÇÃO MECÂNICA</span></div>
            <div style="position:absolute;left:20.04px;top:443.68px" class="cls_003"><span class="cls_003"><?= $data['digitable_line'] ?></span></div>
            <div style="position:absolute;left:505.92px;top:444.64px" class="cls_006"><span class="cls_006">VIA CLIENTE</span></div>
            <div style="position:absolute;left:20.04px;top:467.64px" class="cls_006"><span class="cls_006"><?= $data['barcode']; ?></span></div>
        </div>
    </body>
</html>
