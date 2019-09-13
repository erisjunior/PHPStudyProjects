<?php

	require("conexao.php");

	$nome = $_POST['nome'];
	$senhaa = $_POST['senha'];
	$cargo = $_POST['cargo'];
	$data_nasc = $_POST['data_nasc'];
	$telefone = $_POST['telefone'];
	$telfone_2 = $_POST['telfone_2'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$data_adm = $_POST['data_adm'];
	$nome_mae = $_POST['nome_mae'];
	$telefone_mae = $_POST['telefone_mae'];
	$data_mae = $_POST['data_mae'];
	$nome_pai = $_POST['nome_pai'];
	$telefone_pai = $_POST['telefone_pai'];
	$data_pai = $_POST['data_pai'];
	$mensalidades = "000000000000";

	$senha = md5(base64_encode($senhaa));

	$boolean = True;

	$sql = "SELECT * FROM associados";
	$query = mysqli_query($con,$sql);

	while ($dados = mysqli_fetch_assoc($query)) {
		if ($dados['nome'] == $nome) {
			echo "<script>setTimeout(alert('Nome ja existe'),1000)</script>";
			$boolean = False;
		}
		else if($dados['email'] == $email) {
			echo "<script>setTimeout(alert('Email ja existe'),1000)</script>";
			$boolean = False;
		}


	}

		if ($boolean == True) {
			$sql = "INSERT INTO associados (nome,senha,cargo,data_nasc,telefone,telfone_2,email,endereco,data_adm,nome_mae,telefone_mae,data_mae,nome_pai,telefone_pai,data_pai,mensalidades) VALUES ('$nome','$senha','$cargo','$data_nasc','$telefone','$telfone_2','$email','$endereco','$data_adm','$nome_mae','$telefone_mae','$data_mae','$nome_pai','$telefone_pai','$data_pai','$mensalidades')";
			$query = mysqli_query($con,$sql);
		}

	header("location:index.php?envia=associados_add");

?>