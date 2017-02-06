<?php
include('cabecalho.php');
include('conexaoBD.php');
include('persistenciaProdutos.php');
include('logica-usuario.php');
verificaUsuario();
?>
	<h2>Formulário de Cadastro de Produtos</h2>
	<form action="adiciona-produto.php" method="post">

	<table class="table">
		<tr>
			<td>Produto:</td>
			<td><input class="form-control" type="text" name="nome"></td>
		</tr>
			<td>Quantidade:</td>
			<td><input class="form-control" type="number" name="quantidade"></td></td>
		</tr>

		</tr>
			<td>Data de Entrada:</td>
			<td><input class="form-control" type="date" name="dtEntrada"></td></td>
		</tr>

		</tr>
			<td>Descrição:</td>
			<td><textarea class="form-control" name="descricao"></textarea></td>
		<tr>

			<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr>
	</form>
	</table>

<?php include("rodape.php"); ?>