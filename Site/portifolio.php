<h3>CADASTRO</h3>
<a href="ListaContatos.php">Visualizar</a>
<form action="GravarDados.php" method="post">
<fieldset>
	<legend>Usuário</legend>
	<label>Nome</label>
	<input type="text" name="nome" placeholder="Insira seu nome" required>
	<label>Telefone</label>
	<input type="text" name="tel" placeholder="(xx) xxxxx-xxxx" required>
	<label>Celular</label>
	<input type="text" name="cel" placeholder="(xx)  xxxxx-xxxx" required>
	<label>E-mail</label>
	<input type="email" name="email" placeholder="exemplo@ex.com" required>
	<label>Endereço</label>
	<input type="text" name="end" placeholder="Insira seu endereço" required>
	
	<input type="submit" name="ok" value="Gravar">
	<input type="reset" name="Limpar" value="Limpar">
	</fieldset>
</form>