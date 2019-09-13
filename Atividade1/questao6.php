<meta charset='utf-8'>
<?php

function gera_senha(){
    for($i = 0; $i<8; $i++){
        $num = mt_rand(0,127);
        echo chr($num);
    }
} gera_senha();
?>