<form action="#" method="post">
<input type="text" name="n1">
<input type="text" name="n2">
<input type="submit" value="Enviar">
</form>
<?php

function msg(){
    echo "Oi";
}

function quadrado($a){
    $b=$a*$a;
    echo "<h4>$b</h4>";
}

function mult($a,$c){
    $b=$a*$c;
    echo "<h4>$b</h4>";
} 

function fat($a){
    if($a>0){    
        $b=$a;
        $r=$a-1;
        $q=$b*$r;
        for($i=0;$i<$a;$i++){
            $r--;
            if($r>0){
            $q=$q*$r;
            }
        }
    } else{
        $q=1;
    } 
    echo "<h4>$q</h4>";
}

function fat1($a){
    $q=1;
    for($i=$a;$i>0;$i--){
        $q *= $i;
    }
    echo "<h4>$q</h4>";
}

msg();
quadrado(5);
mult($_POST['n1'],$_POST['n2']);
fat($_POST['n1']);
fat1($_POST['n2']);
?>