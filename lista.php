<?php 
include('cabecalho.php');
include('conexaoBD.php');
include('persistenciaProdutos.php');
include('logica-usuario.php');

verificaUsuario();
?>

<?php if (array_key_exists("removido", $_GET) && $_GET['removido'] == 'true') : ?>
	<p class="alert-success">Produto removido com sucesso!</p>
<?php endif ?>

<table class="table table-striped table-bordered">

	<thead>
		<tr>
			<th>Produto</th>
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
				<td><?php echo $produto['nome']?></td>
				<td><?php echo $produto['quantidade']?></td>
				<td><?php echo $produto['dt_entrada']?></td>
				<td><?php echo substr($produto['descricao'], 0, 100)?></td>
				<td><a class="btn btn-default" href="formulario-move-produto.php?id=<?php echo $produto['id']?>">mover</a></td>
				<td><a class="btn btn-primary" href="formulario-altera-produto.php?id=<?php echo $produto['id']?>">alterar</a></td>
				<td>
					<form action="remove-produto.php" method="post">
						<input type="hidden" name="id" value="<?=$produto['id']?>">
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
