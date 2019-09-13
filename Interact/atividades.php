<!DOCTYPE html>
<html>
<head>
</head>
<body>

<div class="row"><div class="col-sm-2"></div>
<div class="col-sm-8">
<?php
	require("conexao.php");
	if ($_SESSION['cargo'] == "Presidente" || $carg == "Diretor") {
		include 'atividades_add.php';
		if (isset($_GET['edit'])) {
			include 'atividades_edit.php';
		}
	}
?>
<table class="table table-striped" style="border: 1px solid #aaa">
	<thead bgcolor="#ccc">
		<th>Data</th>
		<th>Local</th>
		<th colspan="2">Atividade</th>
		<?php
			$carg = substr($_SESSION['cargo'], 0,7);
			if ($_SESSION['cargo'] == "Presidente" || $carg == "Diretor") {
				echo "<th colspan='2'>Ação</th>";
			}
		?>
	</thead>
	<tbody>
		<?php

			$sql = "SELECT * FROM atividades ORDER BY data ASC";
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
						echo "<td><a href='atividades_remove.php?id=".$dados['id']."'>Excluir</a></td>
						<td><a href='index.php?envia=atividades&&edit=".$dados['id']."'>Editar</a></td>";
					}

					echo "</tr>";
			}

		?>
	</tbody>

</table>
</div></div>

</body>
</html>