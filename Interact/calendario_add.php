<h3>Adicionar Atividade</h3>
<form class="form" method="post" action="calendario_add_p.php">

<div class="row">


	<div class="col-sm-6">
			<label>Data</label>
			<input class="form-control" type="date" name="data" required>
	</div>

	<div class="col-sm-6">
			<label>Local</label>
			<input class="form-control" type="text" name="local" required>
	</div>


</div>

<div class="row">
	<div class="col-sm-12">

			<label>Atividade</label>
			<input class="form-control" type="text" name="atividade" required>

			<input type="hidden" name="acao" value="cada">

			<input style="margin-top: 15px; margin-bottom: 25px" class="form-control btn btn-primary" type="submit" value="Registrar">


	</div>

</div>
</form>