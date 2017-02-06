<?php 
include('cabecalho.php');
include('conexaoBD.php');
include('persistenciaProdutos.php');
include('logica-usuario.php');

verificaUsuario();

?>

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
			$produtos = listaMovimentacoes($conexao);
			foreach ($produtos as $produto) :
			?>
			<tr>
				<td><?php echo $produto['produto']?></td>
				<td><?php echo $produto['quantidade']?></td>
				<td><?php echo $produto['dt_movimentacao']?></td>
				<td><?php echo $produto['destino']?></td>
			</tr>
		<?php
			endforeach
		?>
	</tbody>
</table>

<?= include("rodape.php"); ?>