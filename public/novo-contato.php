<?php require_once '../config/header.inc.html'; ?>

<div class="row container">
	<div class="col s12">
		<h5 class="light">Cadastro do Contato</h5>
		<?php
			if (isset($_SESSION['sucesso'])) {
			  echo "<p class='center green lighten-2 white-text' padding:10px>";
			  echo $_SESSION['sucesso'];
			  unset($_SESSION['sucesso']);
			  echo "</p>";
			}elseif (isset($_SESSION['erro'])) {
			  echo "<p class='center red lighten-2 white-text' padding:10px>";
			  echo $_SESSION['erro'];
			  unset($_SESSION['erro']);
			  echo "</p>";
			}  
			require_once '../forms/form-add-contato.php';
		?>
	</div>
</div>

<?php require_once '../config/footer.inc.html'; ?>