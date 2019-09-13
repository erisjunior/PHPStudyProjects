<?php

	require("conexao.php");

	$id = $_GET['id'];
	$pago = $_GET['pago'];
	$i = $_GET['i'];

	$sql = "SELECT * FROM associados WHERE id = '$id'";
	$query = mysqli_query($con,$sql);

	$dados = mysqli_fetch_assoc($query);

	$mensalidades=$dados['mensalidades'];

	$array = str_split($mensalidades);

	if ($pago == "sim") {
		$array[$i] = "1";
	}else if ($pago == "nao") {
		$array[$i] = "0";
	}
	$mensalidades="";
	for ($u=0; $u <12; $u++) {
		$mensalidades .= $array[$u];
	}

	$sql = "UPDATE associados SET mensalidades='$mensalidades' WHERE id = '$id'";
	$query = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<div class="row"><div class="col-sm-2"></div>
<div class="col-sm-8">

<?php
	$carg = substr($_SESSION['cargo'], 0,7);

	if ($_SESSION['cargo'] == "Presidente" || $carg == "Diretor de Tesouraria") {

		echo "<div class='btn-group'>
		<form class='form' method='post'>
			<select name='nid' class='form-control'>
				<option></option>";

				$sql = "SELECT * FROM associados";
				$query = mysqli_query($con, $sql);

				while ($dados = mysqli_fetch_assoc($query)) {
					echo "<option value='".$dados['id']."'>".$dados['nome']."</option>";
				}

			echo "</select>
			<input type='submit' class='btn btn-primary form-control' value='Escolher'>
		</form>
		</div>";
	}

?>
<h3>Dividas</h3>
<table style="margin-top: 15px;" class="table table-striped">
	<thead bgcolor="#ccc">
		<th>Divida</th>
		<th>Valor</th>
		<?php

			if ($_SESSION['cargo'] == "Presidente" || $carg == "Diretor de Tesouraria") {
				echo "<th>Ação</th>";
			}
		?>
	</thead>
	<tbody>

	</tbody>

</table>


<h3>Mensalidades</h3>
<table style="margin-top: 15px;" class="table table-striped">
	<thead bgcolor="#ccc">
		<th>Mês</th>
		<th>Situação</th>
		<?php

			if ($_SESSION['cargo'] == "Presidente" || $carg == "Diretor de Tesouraria") {
				echo "<th>Ação</th>";
			}
		?>
	</thead>
	<tbody>
		<?php
			if (isset($_POST['nid']) && $_POST['nid'] != "") {
				$id = $_POST['nid'];
			}else if(isset($_GET['nid']) && $_GET['nid'] != "") {
				$id = $_GET['nid'];
			}else{
				$id = $_SESSION['id'];
			}

			$sql = "SELECT mensalidades FROM associados WHERE id='".$id."'";
			$query = mysqli_query($con, $sql);

			$mes = array("Julho","Agosto","Setembro","Outubro","Novembro","Dezembro","Janeiro","Fevereiro","Março","Abril","Maio","Junho");

			$dados =  mysqli_fetch_assoc($query);

			for ($i=0; $i < 12; $i++) {
				$situ = $dados['mensalidades']{$i};
				if ($situ == "0") {
					echo "<tr style='background:rgba(245,5,5,.4)'>
					<td>".$mes[$i]."</td>
					<td>Pendente</td>";

					if ($_SESSION['cargo'] == "Presidente" || $carg == "Diretor de Tesouraria") {
						echo "<td><a href='?envia=dividas&&nid=".$id."&&id=".$id."&&pago=sim&&i=".$i."'>Pago</a></td>";
					}
					echo "</tr>";
				}else{
					echo "<tr style='background:rgba(5,245,5,.4)'>
					<td>".$mes[$i]."</td>
					<td>Pago</td>";

					if ($_SESSION['cargo'] == "Presidente" || $carg == "Diretor de Tesouraria") {
						echo "<td><a href='?envia=dividas&&nid=".$id."&&id=".$id."&&pago=nao&&i=".$i."'>Despago</a></td>";
					}
					echo "</tr>";
				}
			}

		?>
	</tbody>

</table>
</div></div>
</body>
</html>