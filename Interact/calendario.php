<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

	require("conexao.php");

	if (isset($_GET['acao'])) {

		$id = $_GET['id'];

		$sql = "SELECT * FROM calendario WHERE id='$id'";
		$query = mysqli_query($con,$sql);
		while ($dados = mysqli_fetch_assoc($query)) {
			$data = $dados['data'];
			$local = $dados['local'];
			$atividade = $dados['atividade'];
		}

		$sql = "INSERT INTO atividades (data,local,atividade) VALUES ('$data','$local','$atividade')";
		$query = mysqli_query($con,$sql);

		$sql = "DELETE FROM calendario WHERE id='$id'";
		$query = mysqli_query($con,$sql);

	}

?>


<div class="row"><div class="col-sm-2"></div>
<div class="col-sm-8">
<?php
	if ($_SESSION['cargo'] == "Presidente" || $carg == "Diretor") {
		include 'calendario_add.php';
		if (isset($_GET['edit'])) {
			include 'calendario_edit.php';
		}
	}
?>
<h3>Atividades</h3>

<table class="table table-striped" style="border: 1px solid #aaa">
	<thead bgcolor="#ccc">
		<th>Data</th>
		<th>Local</th>
		<th colspan="2">Atividade</th>
		<?php

			$carg = substr($_SESSION['cargo'], 0,7);
			if ($_SESSION['cargo'] == "Presidente" || $carg == "Diretor") {
				echo "<th colspan='3'>Ação</th>";
			}

		?>
	</thead>
	<tbody>
		<?php

			$sql = "SELECT * FROM calendario ORDER BY data ASC";
			$query = mysqli_query($con, $sql);

			while ($dados =  mysqli_fetch_assoc($query)) {

				$date = $dados['data'];

				$d1 = substr($date, -2);
				$d2 = substr($date, -5,2);
				$d3 = substr($date, -10,4);

				$data = $d1."/".$d2."/".$d3;

				echo "<tr>

					<td>".$data."</td>
					<td>".$dados['local']."</td>
					<td colspan='2'>".$dados['atividade']."</td>";

					if ($_SESSION['cargo'] == "Presidente" || $carg == "Diretor") {
						echo "<td><a href='?envia=calendario&&id=".$dados['id']."&&acao=up'>Concluido</a></td>";
						echo "<td><a href='calendario_remove.php?id=".$dados['id']."'>Cancelado</a></td>
						<td><a href='index.php?envia=calendario&&edit=".$dados['id']."'>Editar</a></td>";
					}

					echo "</tr>";
			}

		?>
	</tbody>

</table>
</div></div>
</body>
</html>