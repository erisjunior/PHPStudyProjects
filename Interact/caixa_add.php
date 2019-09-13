<h3>Adicionar Transação</h3>
<form class="form" method="post" action="caixa_add_p.php">

<div class="row">
	<div class="col-sm-6">
			<label>Data</label>
			<input class="form-control" type="date" name="data" required>
	</div>

	<div class="col-sm-6">
			<label>Valor</label>
			<input class="form-control" type="text" name="valor" required>
	</div>


</div>

<div class="row">

	<div class="col-sm-12">

			<label>Origem</label>
			<input class="form-control" type="text" name="origem" required>

			<input style="margin-top: 15px; margin-bottom: 25px" class="form-control btn btn-primary" type="submit" value="Enviar">


	</div>

</div>
</form>