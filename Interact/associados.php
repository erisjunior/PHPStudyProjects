<!DOCTYPE html>
<html>
<body>


<div class="row"><div class="col-sm-2"></div>

<div class="col-sm-8">
<?php
	require("conexao.php");

	if (isset($_GET['pagina'])) {
		$pagina = $_GET['pagina'];
	}else{
		$pagina = 1;
	}

	$sql = "SELECT * FROM associados ORDER BY nome ASC";
	$query = mysqli_query($con, $sql);
	$numPaginas = mysqli_num_rows($query);

	$inicial = $pagina-1;

	$sql = "SELECT * FROM associados ORDER BY nome ASC LIMIT $inicial, 1";
	$query = mysqli_query($con, $sql);

	echo "<ul class ='pagination'>";

	if ($pagina > 1) {
		echo "<li><a href='index.php?envia=associados&&pagina=".($_GET['pagina'] - 1)."'>&laquo</a></li>";
	}
	for ($i=1; $i < $numPaginas + 1 ; $i++) {
		if ($pagina == $i) {
			echo "<li class='active'><a href='index.php?envia=associados&&pagina=".$i."'>$i</a></li>";
		}else{
			echo "<li><a href='index.php?envia=associados&&pagina=".$i."'>$i</a></li>";
		}

	}
	if ($numPaginas > $pagina) {
		echo "<li><a href='index.php?envia=associados&&pagina=".($pagina + 1)."'>&raquo</a></li> ";
	}

	echo "</ul>";
?>

<table class="table table-striped table-bordered">
	<thead bgcolor="#ccc">
		<th colspan="2">Nome</th>
		<th>Data de Admissão</th>
		<th>Cargo</th>
	</thead>
	<tbody>
		<?php

			while ($dados =  mysqli_fetch_assoc($query)) {

				echo "<tr>

					<td colspan='2'>".$dados['nome']."</td>
					<td>".$dados['data_adm']."</td>
					<td>".$dados['cargo']."</td>

				</tr>";
			}

		?>
	</tbody>
	<thead bgcolor="#ccc">
		<th colspan="3">Endereço</th>
		<th>Data de Nascimento</th>
	</thead>
	<tbody>
		<?php

			$sql = "SELECT * FROM associados ORDER BY nome ASC LIMIT $inicial, 1";
			$query = mysqli_query($con, $sql);

			while ($dados =  mysqli_fetch_assoc($query)) {

				$date = $dados['data_nasc'];

				$d1 = substr($date, -2);
				$d2 = substr($date, -5,2);
				$d3 = substr($date, -10,4);

				$data = $d1."/".$d2."/".$d3;

				echo "<tr>

				<td colspan='3'>".$dados['endereco']."</td>
				<td>".$data."</td>

				</tr>";
			}


		?>
	</tbody>
	<thead bgcolor="#ccc">
		<th colspan="2">Email</th>
		<th>Telefone 1</th>
		<th>Telefone 2</th>
	</thead>
	<tbody>
		<?php

			$sql = "SELECT * FROM associados ORDER BY nome ASC LIMIT $inicial, 1";
			$query = mysqli_query($con, $sql);

			while ($dados =  mysqli_fetch_assoc($query)) {

				echo "<tr>

				<td colspan='2'>".$dados['email']."</td>
				<td>".$dados['telefone']."</td>
				<td>".$dados['telfone_2']."</td>

				</tr>";
			}


		?>
	</tbody>
</table>

<br>

<table class="table table-striped table-bordered">
	<thead bgcolor="#ccc">
		<th>Nome da Mãe</th>
		<th>Data de Nascimento da Mãe</th>
		<th>Telefone da Mãe</th>
	</thead>
	<tbody>
		<?php

			$sql = "SELECT * FROM associados ORDER BY nome ASC LIMIT $inicial, 1";
			$query = mysqli_query($con, $sql);

			while ($dados =  mysqli_fetch_assoc($query)) {

				$date = $dados['data_mae'];

				$d1 = substr($date, -2);
				$d2 = substr($date, -5,2);
				$d3 = substr($date, -10,4);

				$data = $d1."/".$d2."/".$d3;

				echo "<tr>

				<td>".$dados['nome_mae']."</td>
				<td>".$data."</td>
				<td>".$dados['telefone_mae']."</td>

				</tr>";
			}


		?>
	</tbody>

	<thead bgcolor="#ccc">
		<th>Nome do Pai</th>
		<th>Data de Nascimento do Pai</th>
		<th>Telefone do Pai</th>
	</thead>
	<tbody>
		<?php

			$sql = "SELECT * FROM associados ORDER BY nome ASC LIMIT $inicial, 1";
			$query = mysqli_query($con, $sql);

			while ($dados =  mysqli_fetch_assoc($query)) {

				$date = $dados['data_pai'];

				$d1 = substr($date, -2);
				$d2 = substr($date, -5,2);
				$d3 = substr($date, -10,4);

				$data = $d1."/".$d2."/".$d3;

				echo "<tr>

				<td>".$dados['nome_pai']."</td>
				<td>".$data."</td>
				<td>".$dados['telefone_pai']."</td>

				</tr>";
			}


		?>
	</tbody>

</table>

</div>
<div class="col-sm-2"></div></div>

</body>
</html>