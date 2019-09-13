<?php
	$query = mysqli_query($con, "SELECT * FROM calendario WHERE id='".$_GET['edit']."'");
	$dados = mysqli_fetch_assoc($query);
	$date = $dados['data'];

	$d1 = substr($date, -2);
	$d2 = substr($date, -5,2);
	$d3 = substr($date, -10,4);

	$data = $d1."/".$d2."/".$d3;
?>

<h3>Alterar Atividade</h3>

<form class="form" method="post" <?php echo "action='calendario_add_p.php?edit=".$dados['id']."'"; ?>>

<div class="row">

	<div class="col-sm-6">
			<label>Data</label>
			<input class="form-control" type="text" name="data" <?php echo "value='".$data."'"; ?> required>
	</div>

	<div class="col-sm-6">
			<label>Local</label>
			<input class="form-control" type="text" name="local" <?php echo "value='".$dados['local']."'"; ?> required>
	</div>


</div>

<div class="row">

	<div class="col-sm-12">

			<label>Atividade</label>
			<input class="form-control" type="text" name="atividade" <?php echo "value='".$dados['atividade']."'"; ?> required>

			<input style="margin-top: 15px; margin-bottom: 25px" class="form-control btn btn-primary" type="submit" value="Alterar">


	</div>

</div>
</form>