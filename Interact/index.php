<?php
	error_reporting(0);
	session_start();
	if (isset($_SESSION['nome'])) {

	}else{
		unset($_SESSION['nome']);
		header('location:login.php');

	}

	if (isset($_GET['sair'])) {
		unset($_SESSION['nome']);
		header("Location:index.php");

	}
#azul claro#00b5ea, rosa #fc145d, amarelo #ffd351, azul escuro#007b94
?>

<!DOCTYPE html>
<html>
<head>
	<title>IC dos Pavão</title>
	<meta charset="utf-8">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style type="text/css">
		@media print{
			input {display: none}
		}

		/*body{
			background: linear-gradient(to bottom , #007b94,#fc145d,#ffd351,#007b94);
			background-size: cover;
		}*/

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
			background-attachment: fixed;
		}
        
        h1#logo {
            width: 270px;
            height: 40px;
            background-image: url(img/Logo.png);
        }
        
        h1#topo span {
            display: none;
        }
	</style>


</head>
<body style="margin: 15px" class="content">

<div class="row">
<div class="col-sm-12">
	<h3><!--<img src="img/Logo.png" style="width: 5%">--><span style="color: rgb(7,183,233); ">Bem vindo companheiro </span><i><?php echo $_SESSION['nome']; ?></i><!--<img src="img/RotaryRoda.png" style="float: right; width: 5%">--></h3>

	<div class="btn-group" style="display: block;">

		<?php
			echo "<a class='btn btn-primary' href='?envia=calendario'><span style='margin-right: 10px' class='glyphicon glyphicon-calendar'></span>Calendario</a>";

			echo "<a class='btn btn-primary' href='?envia=caixa'><span style='margin-right: 8px' class='glyphicon glyphicon-usd'></span>Caixa</a>";

//			echo "<a class='btn btn-primary' href='?envia=projetos'><span style='margin-right: 10px' class='glyphicon glyphicon-edit'></span>Projetos</a>";

			echo "<a class='btn btn-primary' href='?envia=atividades'><span style='margin-right: 10px' class='glyphicon glyphicon-list-alt'></span>Atividades</a>";

//			echo "<a class='btn btn-primary' href='?envia=sobre'><span style='margin-right: 10px' class='glyphicon glyphicon-folder-open'></span>Sobre o Clube</a>";

			echo "<a class='btn btn-primary' href='?envia=associados'><span style='margin-right: 10px' class='glyphicon glyphicon-user'></span>Associados</a>";

			if ($_SESSION['cargo'] == "Presidente") {
				echo "<a class='btn btn-primary' href='?envia=associados_add'><span style='margin-right: 10px' class='glyphicon glyphicon-off'></span>Cadastrar Associados</a>";
			}

			echo "<a class='btn btn-primary' href='?envia=dividas'><span style='margin-right: 10px' class='glyphicon glyphicon-stats'></span>Suas Dividas</a>";

			echo "<a class='btn btn-primary' href='?envia=chat'><span style='margin-right: 10px' class='glyphicon glyphicon-comment'></span>Chat Muito Crazy</a>";

		?>
	</div>
	
	<h1 id="logo"><span>ASASASAS</span></h1>

	<form action="?sair" method="get">
		<input type="submit" style="float: right; margin-right: 15px;" class="btn btn-primary" name="sair" value="Sair">
	</form>

</div>
</div>
	<br><hr>

	<div>
		<?php

			if (isset($_GET['envia'])) {
				include $_GET['envia'].".php";
			}else{
				echo "<div class='row'><div class='col-sm-4'></div><img src='img/Logo.png'></div></div>";
			}

		?>
	</div>
</body>
</html>