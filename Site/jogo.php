<?php

//error_reporting(0);

$letra = $_POST['letra'];
$jogo = $_GET['jogo'];

foreach($_POST as $k => $form){
    //echo"valor:$valor[$k]<br>";
}
for($m =0; $m <(strlen($palavra[0]))-2;$m++){  
    echo $campo[$m] = $form[$m];
}

if($jogo == "NovoJogo"){
    $L = fopen("letras.txt","w");
    fwrite($L, "");
    fclose($L);
}else{

    if(!empty($letra)){
    $L = fopen("letras.txt","a");
    fwrite($L, strtolower($letra)."-");
    fclose($L);

    $file = file("letras.txt");
        foreach($file as $k=>$linha){
        }
    }
}
    
$palavra = file("palavra.txt");
echo "Palavra: ".$palavra[0]."<p>";
echo "Qnt de letras: ".(strlen($palavra[0])-2);

echo "<hr>";

echo "Letra: ".$linha;

echo "<form action='jogo.php?jogo=Jogando' method='post'>";

$p = str_split($palavra[0]);
for($j = 0; $j < (strlen($palavra[0]))-2;$j++){
    if($letra==$p[$j]){
        $pos = $j +1;
        $result .= "Letra $letra na posição $pos <br>";
    }
    echo "<input maxlength='1' value='".$campo."' type='text' size='1' name='campo".$j."' >";
}

/*for($i=0; $i <(strlen($palavra[0]))-1;$i){
    //if($p[0] == $letra){
    //    echo "<script>alert('Na posição".$a."')</script>"
    //    $test = true;
    //}
    //echp $p;
}*/


    
/*for($a = 0;$a < (strlen($palavra[0]))-2; $a++){
    
    if($p[0] == $letra){
        echo "<input maxlength='1' valeu='".strtoupper($p[$a])."' type='text' size='1' name='campo".$a."'>";    
    }
    
    
}*/

echo"<hr>";
echo $result;
echo "<hr>
<input maxlength='1' type='text' size='1' name='letra'>
<input type='submit' value='Verificar'>
</form>";

?>