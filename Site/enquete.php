<form action="#" method="post"> 
    
<label>Enquete: Voce dá o sul?</label><br>
<input type="radio" value="s" name="tipo">Sim
<input type="radio" value="n" name="tipo">Não
    
<input type="submit" value="Enviar">
</form>
<p>
<a href="resultado.php">Resultado</a>
<?php
    
$irineu = $_POST['tipo'];
$s=0;
$n=0;

if($irineu==""){
    
}else{
    $conta = fopen('resulta.txt','r');
    $f = fgets($conta);
    fclose($conta);

    $cont = fopen('resulta.txt','w');

    $e = explode(".",$f);

    $s = $e[0];
    $n = $e[1];

    if($irineu == "s"){
        $s++;
        fwrite($cont, "".$s.".".$n);
    } else if($irineu == "n"){
        $n++;
        fwrite($cont, "".$s.".".$n);
    }
    fclose($cont);
}
?>