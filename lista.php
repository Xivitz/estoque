<?php 
include("cabecalho.php");	
include("conexaoBD.php");
include("persistenciaProdutos.php");

?>

<?php if (array_key_exists("removido", $_GET) && $_GET['removido'] == 'true') : ?>
	<p class="alert-success">Produto removido com sucesso!</p>
<?php endif ?>

<table class="table table-striped table-bordered">

	<thead>
		<tr>
			<th>Nome</th>
			<th>Quantidade</th>
			<th>Data de Entrada</th>
			<th>Descrição</th>
		</tr>
	</thead>
	<tbody>

		<?php
			$produtos = listaProdutos($conexao);
			foreach ($produtos as $produto) :
			?>
			<tr>
				<td><?=$produto['nome'];?></td>
				<td><?= $produto['quantidade']?></td>
				<td><?= $produto['dt_entrada']?></td>
				<td><?= utf8_encode(substr($produto['descricao'], 0, 100))?></td>
				<td><a class="btn btn-default" href="altera-produto.php?id=<?=$produto['id_produto']?>">mover</a></td>
				<td><a class="btn btn-primary" href="formulario-altera-produto.php?id=<?=$produto['id_produto']?>">alterar</a></td>
				<td>
					<form action="remove-produto.php" method="post">
						<input type="hidden" name="id" value="<?=$produto['id_produto']?>">
						<button class="btn btn-danger">remover</button>
					</form>
				</td>
			</tr>
		<?php
			endforeach
		?>
	</tbody>
</table>

<?= include("rodape.php"); ?>
