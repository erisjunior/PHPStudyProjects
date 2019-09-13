<!DOCTYPE html>
<html>
<?php
$cont = fopen('resulta.txt','r');

$f = fgets($cont);

$e = explode(".",$f);

$s = $e[0];
$n = $e[1];

fclose($cont);

$votos=$n+$s;
$widthS=(($s*100)/$votos)*10;
$widthN=(($n*100)/$votos)*10;
$pS=(($s*100)/$votos);
$pN=(($n*100)/$votos);
?>
<head>
    <title>RESULTADOS</title>
    
    <style type="text/css">
        *{
            margin: auto;padding: 0;
        }
        
        #resultado{
            margin: 50px 200px;width: 400px;height: 600px;display: block;margin-top: 5px;
        }
        
        #sim{
            position: relative;display: block;background: green;width: <?php echo $widthS; ?>px; height: 30px;
        }
        
        #nao{
            position: relative;background: red;width: <?php echo $widthN; ?>px; height: 30px;
        }
        
    </style>
    
</head>

<body>
<div id="resultado">
    <label>SIM <?php echo $s ." - ".$pS."%" ?></label>
    <div id="sim"> </div><br>
    <label>NÃO <?php echo $n ." - ".$pN."%"?></label>
    <div id="nao"> </div>
    
</div>

</body>
</html>