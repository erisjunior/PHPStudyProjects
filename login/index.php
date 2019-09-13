<?php
session_start();

if (isset($_SESSION['email'])) {
	$logado = $_SESSION['email'];
}
else{
	header('location:login.php');
}
if (isset($_GET['sair'])) {
	unset($_SESSION['email']);
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>City - Social</title>
</head>
<body>
<h5>Parabéns, você está conectado</h5>
<a href="?sair=sair">Sair</a>
</body>
</html>