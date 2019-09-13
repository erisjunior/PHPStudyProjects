<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];

require("conexao.php");

$passDecrip = md5(base64_encode($senha));

$sql = "SELECT * FROM associados WHERE nome='".$nome."' AND senha ='".$passDecrip."'";

$query = mysqli_query($con, $sql);

if (mysqli_num_rows($query) > 0) {
	while ($dados = mysqli_fetch_assoc($query)) {
		$cargo = $dados['cargo'];
		$id = $dados['id'];
	}
	session_start();

	$_SESSION['nome'] = $nome;
	$_SESSION['senha'] = $senha;
	$_SESSION['cargo'] = $cargo;
	$_SESSION['id'] = $id;

	header('location:index.php');

}
else{
	header('location:login.php');
}
?>