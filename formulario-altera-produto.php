<?php
include('cabecalho.php');
include('conexaoBD.php');
include('persistenciaProdutos.php');

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
?>

	<h2>Alteração de Produtos</h2>
	<form action="altera-produto.php" method="post">

	<table class="table">
		<tr>
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td>
		</tr>
			<td>Quantidade:</td>
			<td><input class="form-control" type="number" name="quantidade" value="<?=$produto['quantidade']?>"></td></td>
		</tr>

		</tr>
			<td>Data de Entrada:</td>
			<td><input class="form-control" type="date" name="dtEntrada" value="<?=$produto['dtEntrada']?>"></td></td>
		</tr>

		</tr>
			<td>Descrição:</td>
			<td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
		<tr>

			<td><input class="btn btn-primary" type="submit" value="Alterar"></td>
		</tr>
	</form>
	</table>

<?php include("rodape.php"); ?>	