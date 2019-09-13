<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

require("db.php");

$passDecrip = base64_encode(md5($senha));

$sql = "SELECT * FROM users WHERE email='".$email."' AND senha ='".$passDecrip."'";

$query = mysqli_query($con, $sql);
echo $passDecrip;
if (mysqli_num_rows($query) > 0) {
	session_start();

	$_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;
	header('location:index.php');
}
else{
	echo "<script>alert('Caraleo')</script>";
}
?>