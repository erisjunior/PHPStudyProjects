<?php
	require('db.php');

	if (isset($_POST['Enviar'])) {
		$nome = $_POST['nome'];
		$usuario = $_POST['usuario'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$passCrip = base64_encode(md5($senha));

		$sql = "INSERT INTO users (nome, usuario, email, senha) VALUES('$nome', '$usuario', '$email', '$passCrip')";
		$query = mysqli_query($con, $sql);

		if ($query) {
			echo "<script> var msg = alert('Usuário cadastrado com sucesso'); 
			if (msg = true) {
				window.location='login.php';
			}</script>";
		}
		else{
			echo "<script> alert('Usuário não cadastrado')</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastre-se - CitySocial</title>
	<style type="text/css">
		input{
			text-align: center;
		}
		form{
			text-align: center;
			margin-top: 20px;
		}
		*{
			font-family: 'Montserrat', cursive;
		}
		img{
			width: 200px;
			margin-top: 20px;
			margin: auto;
			display: block;
		}
		input[name="nome"]{
			border: 1px solid #CCC;
			width: 250px; 
			height: 25px; 
			padding-left: 10px; 
			border-radius: 3px;
		}
		input[name="usuario"]{
			border: 1px solid #CCC;
			width: 250px; 
			height: 25px; 
			padding-left: 10px;
			margin-top: 10px; 
			border-radius: 3px;
		}
		input[type="email"]{
			border: 1px solid #CCC;
			width: 250px; 
			height: 25px; 
			padding-left: 10px;
			margin-top: 10px; 
			border-radius: 3px;
		}
		input[type="password"]{
			border: 1px solid #CCC;
			width: 250px; 
			height: 25px; 
			padding-left: 10px; 
			margin-top: 10px;
			border-radius: 3px;
		}
		input[type="submit"]{
			margin-top: 20px;
		}
		h2{
			text-align: center;
			margin-top: 100px;
		}
		label{
			margin-top: 20px; 
		}
	</style>
	<meta charset="utf-8">
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
</head>
<body>
	<img src="images/logo.jpg">
	<h2>Cadastre-se</h2>
	<form  action="" method="post">
		<input type="text" name="nome" placeholder="Nome completo"><br>
		<input type="text" name="usuario" placeholder="Nome de usuário"><br>
		<input type="email" name="email" placeholder="exemplo@exemplo.com"><br>
		<input type="password" name="senha" placeholder="Insira sua senha"><br>
		<input type="submit" class="btn btn-primary" name="Enviar"><br> 
		<label>Já tem uma conta ? <a href="login.php">Entre agora.</a></label>
	</form>
</body>
</html>

