<form class="row" action="../database/agenda/update.php" method="post">
	<div class="input-field col s12">
		<input type="hidden" name="id" id="id" value="<?php echo $value['id']?>">
	</div>
	<div class="input-field col s12">
		<input type="text" name="nome" id="nome" value="<?php echo $value['nome']?>">
		<label for="nome">Nome do Contato</label>
	</div>
	<div class="input-field col s12">
		<input type="tel" name="tel" id="tel" value="<?php echo $value['telefone']?>">
		<label for="tel">Telefone</label>
	</div>
	<div class="input-field col s12">
		<input type="email" name="email" id="email" value="<?php echo $value['email']?>">
		<label for="email">Email do Contato</label>
	</div>
	<div class="input-field col s12">
		<input type="submit" value="editar" class="btn">
		<input type="reset" value="limpar" class="btn red">
	</div>
</form>