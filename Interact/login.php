<!DOCTYPE html>
<html>
<head>
	<title>IC dos Pavão</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<style type="text/css">
		@media print{
			input {display: none}
		}
		.btn-primary {
			background-color: rgb(7,183,233);
			border-color: rgb(20,150,200);
		}
		.btn-primary:hover {
			background-color: rgb(20,150,200);
			border-color: rgb(7,183,233);
		}
		body{
			background: linear-gradient(to bottom ,rgba(0, 123, 148, .1),rgba(0, 123, 148, .2), rgba(0, 123, 148, .4),rgba(0,181,234,.4));
			background-repeat: no-repeat;
			background-attachment: fixed
		}
	</style>

</head>
<body style="margin-left: 15px; margin-right: 15px;" class="content">
<div class="row"><div class="col-sm-4">
	<h2>Entrar na sua conta</h2>

	<form class="form" action="login_verifica.php" method="post">

		<label>Nome</label>
		<input class="form-control" type="text" name="nome" placeholder="Insira seu nome">

		<label>Senha</label>
		<input class="form-control" type="password" name="senha" placeholder="Insira sua senha"><br>
		<input class="form-control btn btn-primary" type="submit" class="btn btn-primary" value="Entrar"><br> 
	</form>
</div>
<div class="col-sm-8">
	<img style="margin: 30px; " src="img/Logo.png" alt="">
</div>

</div>
</body>
</html>