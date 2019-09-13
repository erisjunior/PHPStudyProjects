<?php

	$num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    for($i = 0; $i<20; $i++){
        echo mt_rand($num1,$num2)."<br>";
    }

?>