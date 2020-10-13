<form action="../database/agenda/create.php" method="post" class="row">
	<dir class="input-field col s12">
		<input type="text" name="nome" id="nome" required autofocus>
		<label for="nome">Nome do Contato</label>
	</dir>
	<dir class="input-field col s12">
		<input type="tel" name="tel" id="tel" required>
		<label for="tel">Telefone</label>
	</dir>
	<dir class="input-field col s12">
		<input type="email" name="email" id="email" required>
		<label for="email">Email do Contato</label>
	</dir>
	<div>
		<input type="submit" name="cadastrar" class="btn" value="adicionar">
		<input type="reset" name="resetar" class="btn red" value="limpar">
	</div>
</form>