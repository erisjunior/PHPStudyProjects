<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CitySocial</title>
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
		input[type="email"]{
			border: 1px solid #CCC;
			width: 250px; 
			height: 25px; 
			padding-left: 10px; 
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
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
</head>
<body>
	<img src="images/logo.jpg">
	<h2>Entrar na sua conta</h2>
	<form action="verificalogin.php" method="post">
		<input type="email" name="email" placeholder="exemplo@ex.com"><br>
		<input type="password" name="senha" placeholder="Insira sua senha"><br>
		<input type="submit" class="btn btn-primary" value="Entrar"><br> 
		<label>Ainda não tem uma conta ? <a href="cadastro.php">Cadastre-se.</a></label>
	</form>
</body>
</html>  