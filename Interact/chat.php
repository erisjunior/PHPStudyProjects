<?php

require("conexao.php");

if($_POST){
	if($_POST['msg'] == ""){
		header('location:index.php?envia=chat');
	}else{

		$user = $_SESSION['nome'];
		$msg = $_POST['msg'];

		$sql = "INSERT INTO chat (nome_send, msg) VALUES ('$user', '$msg')";
		$query = mysqli_query($con, $sql);

		unset($_POST);
		mysqli_close($con);

		header('location:index.php?envia=chat');
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		$(document).ready(function(){
			var a = document.getElementById("bp").scrollHeight;
			$("#bp").animate({scrollTop: a}, 1000);
			carrega();
			setInterval(function(){
				carrega();
			}, 1000);
		});
		function carrega(){
			var url;
			url = "chat_msg.php";
			jQuery.get(url, function(data){
				$("#bp").empty().append(data);
			});
		}
	</script>

</head>
<body>
	<h3>Chat Muito Crazy V1D4 L0K4 das B4L4D4</h3>
	<form class="form" method="post">
	<div class="row">
	<div class="col-md-12">
	<textarea class="form-control" id="bp" rows="20" readonly>

	</textarea>
	</div>
		</div>
		<div class="row" style="height: 10px">
			<div class="col-md-12"></div>
		</div>
		<div class="row">
			<div class="col-md-10">
				<input type="text" name="msg" class="form-control">
			</div>
			<div class="col-md-2">
				<input type="submit" value="Enviar" class="form-control btn btn-primary">
			</div>
		</div>
	</form>

</body>
</html>
