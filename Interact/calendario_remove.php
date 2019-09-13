<?php

	require("conexao.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM calendario WHERE id='$id'";
	$query = mysqli_query($con,$sql);

	header("location:index.php?envia=calendario");

?>