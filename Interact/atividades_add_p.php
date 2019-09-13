<?php

	require("conexao.php");

	if ($_GET) {
		$date = $_POST['data'];
		$local = $_POST['local'];
		$atividade = $_POST['atividade'];

		$d1 = substr($date, -4);
		$d2 = substr($date, -7,2);
		$d3 = substr($date, -10,2);

		$date = $d1."/".$d2."/".$d3;

		$sql = "UPDATE atividades SET data='$date',local='$local',atividade='$atividade' WHERE id='".$_GET['edit']."'";
		$query = mysqli_query($con,$sql);
	}else{
		$date = $_POST['data'];
		$local = $_POST['local'];
		$atividade = $_POST['atividade'];

		$sql = "INSERT INTO atividades (data,local,atividade) VALUES ('$date','$local','$atividade')";
		$query = mysqli_query($con,$sql);
	}

	header("location:index.php?envia=atividades");

?>