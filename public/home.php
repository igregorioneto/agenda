<?php require_once '../config/header.inc.html'; ?>

<div class="row container">
	<div class="col s12"><p>&nbsp;</p>
		<?php  
			require_once '../forms/form-search-contato.php';
		?>

		<table class="striped">
			<thead>
				<tr>
					<td>Nome</td>
					<td>Telefone</td>
					<td>Email</td>
				</tr>
			</thead>
			<tbody>
				<?php  
					require_once '../database/agenda/read.php';
				?>
			</tbody>
		</table>
	</div>
</div>

<?php require_once '../config/footer.inc.html'; ?>