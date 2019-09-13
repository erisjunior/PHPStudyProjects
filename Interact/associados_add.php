<form class="form" method="post" action="associados_add_p.php">

<div class="row"><div class="col-sm-2"></div><div class="col-sm-8">
	<h3>Adicionar Associado</h3>
</div><div class="col-sm-2"></div></div>

<div class="row">
	<div class="col-sm-2">
	</div>

	<div class="col-sm-4">
			<label>Nome</label>
			<input class="form-control" type="text" name="nome" required>
	</div>

	<div class="col-sm-2">
			<label>Data de Admissão</label>
			<input class="form-control" type="text" name="data_adm" required>
	</div>
	<div class="col-sm-2">
			<label>Cargo</label>
			<select class="form-control" name="cargo">
				<option>Diretor de Secretaria</option>
				<option>Diretor de Tesouraria</option>
				<option>Diretor de Protocolo</option>
				<option>Diretor de Administração</option>
				<option>Diretor de DQA</option>
				<option>Diretor de Projetos Humanitarios</option>
				<option>Diretor de Imagem Publica</option>
				<option>Diretor de Fundacao Rotaria</option>
				<option>Subcomissão de Secretaria</option>
				<option>Subcomissão de Tesouraria</option>
				<option>Subcomissão de Protocolo</option>
				<option>Subcomissão de Administração</option>
				<option>Subcomissão de DQA</option>
				<option>Subcomissão de Projetos Humanitarios</option>
				<option>Subcomissão de Imagem Publica</option>
				<option>Subcomissão de Fundacao Rotaria</option>
			</select>
	</div>
	<div class="col-sm-2"></div>
</div>

<div class="row">
	<div class="col-sm-2"></div>

	<div class="col-sm-4">
		<label>Endereço</label>
		<input class="form-control" type="text" name="endereco" required>
	</div>
	<div class="col-sm-2">
		<label>Senha de Acesso</label>
		<input class="form-control" type="password" name="senha" required>
	</div>
	<div class="col-sm-2">
		<label>Data de Nascimento</label>
		<input class="form-control" type="date" name="data_nasc" required>
	</div>
	<div class="col-sm-2"></div>
</div>
<div class="row">
	<div class="col-sm-2"></div>

	<div class="col-sm-4">
		<label>Email</label>
		<input class="form-control" type="email" name="email" required>
	</div>
	<div class="col-sm-2">
		<label>Telefone 1</label>
		<input class="form-control" id="telefone" type="text" name="telefone" required>
	</div>
	<div class="col-sm-2">
		<label>Telefone 2</label>
		<input class="form-control" type="text" name="telfone_2">
	</div>
	<div class="col-sm-2"></div>
</div>
<br><br>

<div class="row">
	<div class="col-sm-2"></div>

	<div class="col-sm-4">
		<label>Nome da Mãe</label>
		<input class="form-control" type="text" name="nome_mae">
	</div>
	<div class="col-sm-2">
		<label>Telefone da Mãe</label>
		<input class="form-control" type="text" name="telefone_mae">
	</div>
	<div class="col-sm-2">
		<label>Data de Nascimento da Mãe</label>
		<input class="form-control" type="date" name="data_mae">
	</div>
	<div class="col-sm-2"></div>
</div>
<div class="row">
	<div class="col-sm-2"></div>

	<div class="col-sm-4">
		<label>Nome da Pai</label>
		<input class="form-control" type="text" name="nome_pai">
	</div>
	<div class="col-sm-2">
		<label>Telefone da Pai</label>
		<input class="form-control" type="text" name="telefone_pai">
	</div>
	<div class="col-sm-2">
		<label>Data de Nascimento da Pai</label>
		<input class="form-control" type="date" name="data_pai">
	</div>
	<div class="col-sm-2"></div>
</div>
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<input style="margin-top: 15px; margin-bottom: 25px" class="form-control btn btn-primary" type="submit" value="Enviar" name="Enviar">
	</div>
	<div class="col-sm-2"></div>
</div>