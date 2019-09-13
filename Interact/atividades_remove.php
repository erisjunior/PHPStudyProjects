<?php

	require("conexao.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM atividades WHERE id='$id'";
	$query = mysqli_query($con,$sql);

	header("location:index.php?envia=atividades");

?>