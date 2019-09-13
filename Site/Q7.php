<form action="#" method="post">
<label>Nome do Livro</label>
<input type="text" name="idade">
<label>Classificação</label><br>
<input type="radio" value="Prof" name="tipo">Prof
<input type="radio" value="Aluno" name="tipo">Aluno
<input type="date" value="data">
<input type="submit" value="Enviar">
</form>

<?php
$nome = $_POST['idade'];
$irineu = $_POST['tipo'];



if($irineu == "Prof"){
    echo "Devolver em 10 dias";
    
    $dia = date('d')+10;
    
    $mes = date('m');
    
    if($dia>30){
        $dia = (date('d')+10) - 30;
        $mes = date('m')+1;
        
    }

    echo "<br>Data devolução: $dia/$mes/".date('Y')."<br>";
    
} else if($irineu == "Aluno"){
    echo "Devolver em 3 dias";
    
    $dia = date('d')+3;
    
    $mes = date('m');
    
    if($dia>30){
        $dia = (date('d')+3) - 30;
        $mes = date('m')+1;
    }
    
    echo "<br>Data devolução: $dia/$mes/".date('Y')."<br>";
}


?>