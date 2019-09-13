<?php

define("HOST", "localhost");
define("USER","root");
define("PASS", "");
define("DB", "carrinho");

$con = mysqli_connect(HOST, USER, PASS) or die("Não foi possível Conectar!");
$banco = mysqli_select_db($con, DB);

?>