<?php 	
require_once('cabecalho.php'); ?>

<form action="envia-contato.php" method="post" accept-charset="utf-8">
	<table class="table">
		<tr>
			<td>Nome</td>
			<td><input type="nome" name="nome" class="form-control"></input></td>			
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="email" name="email" class="form-control"></input></td>
		</tr>

		<tr>
			<td>Mensagem</td>
			<td><textarea class="form-control" name="mensagem"></textarea></td>
		</tr>

		<tr>
			<td><button class="btn btn-primary">Enviar</button></td>

		</tr>
	</table>
	
</form>



<?php require_once('rodape.php');