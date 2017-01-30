<?php
include('cabecalho.php');
include('conexaoBD.php');
include('persistenciaProdutos.php');

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
?>

	<h2>Formulário de Saída de Produtos</h2>
	<form action="move-produto.php" method="post">

	<table class="table">
		<tr>
			<td>Produto:</td>
			<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td>
		</tr>

		<tr>
			<td>Data:</td>
			<td><input class="form-control" type="text" name="data" value="<?php echo date('Y-m-d');?>"></td>
		</tr>

		</tr>
			<td>Quantidade:</td>
			<td><input class="form-control" type="number" name="quantidade"></input></td>
		<tr>

		</tr>
			<td>Destino:</td>
			<td><input class="form-control" type="text" name="destino"></input></td>
		<tr>

		</tr>
			<td>Observação:</td>
			<td><textarea class="form-control" type="text" name="observacao"></textarea>			
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Mover"></td>
			<input type="hidden" name="id" value="<?=$produto['id']?>">
		</tr>
	</form>
	</table>

<?php include("rodape.php"); ?>	