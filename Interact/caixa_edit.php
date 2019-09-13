<?php
	$query = mysqli_query($con, "SELECT * FROM caixa WHERE id='".$_GET['edit']."'");
	$dados = mysqli_fetch_assoc($query);
	$date = $dados['data'];

	$d1 = substr($date, -2);
	$d2 = substr($date, -5,2);
	$d3 = substr($date, -10,4);

	$data = $d1."/".$d2."/".$d3;
?>

<h3>Editar Transação</h3>
<form class="form" method="post" <?php echo "action='caixa_add_p.php?edit=".$dados['id']."'"; ?>>

<div class="row">


	<div class="col-sm-6">
			<label>Data</label>
			<input class="form-control" type="text" name="data" <?php echo "value='".$data."'"; ?> required>
	</div>

	<div class="col-sm-6">
			<label>Valor</label>
			<input class="form-control" type="text" name="valor" <?php echo "value='".$dados['valor']."'"; ?> required>
	</div>


</div>

<div class="row">

	<div class="col-sm-12">

			<label>Origem</label>
			<input class="form-control" type="text" name="origem" <?php echo "value='".$dados['origem']."'"; ?> required>

			<input style="margin-top: 15px; margin-bottom: 25px" class="form-control btn btn-primary" type="submit" value="Alterar">


	</div>

</div>
</form>