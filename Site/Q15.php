<?php

$n = array(2,4,5,6,8,9,10,12,15,17);
$n2 = array(1,4,5,7,9,10,13,15,16,17);
$text = "";

for($i = 0; $i <10;$i++){
    $cont = 0;
    $cont2 = 0;
    for($o = 0; $o <10;$o++){
        if($n[$i] != $n2[$o]){
            $cont++;
            if($cont>9){
                $text .= " ".$n[$i];
                //$n3[$i]=$n[$i];
                //echo "<pre>".$n3[$i]."</pre>";
            }
        }
        if($n2[$i] != $n[$o]){
            $cont2++;
            if($cont2>9){
                $text .= " ".$n2[$i];
                //$n3[$i]=$n2[$i];
                //echo "<pre>".$n3[$i]."</pre>";    
            }
        }
    }
}

$n3 = explode(" ",$text);
sort($n3);
for($a=0;$a<count($n3);$a++){
    echo "<pre>".$n3[$a]."</pre>";
}

?>