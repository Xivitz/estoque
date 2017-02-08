<?php 
include('cabecalho.php'); 
include('conexaoBD.php');
include('persistenciaProdutos.php');
include('logica-usuario.php');

verificaUsuario();

$id = $_POST['id'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$quantidade = $_POST['quantidade'];
$destino = $_POST['destino'];
$observacao = $_POST['observacao'];
	
if(moveProduto($conexao, $id, $nome, $data, $quantidade, $destino, $observacao))
{?>
	<p class="alert-success">O produto <?php echo $nome; ?> foi retirado com sucesso! </p>
<?php } else {
?>
	<p class="alert-danger">O produto <?php echo $nome; ?> não foi retirado pois não há itens suficientes em estoque.</p>
<?php 
}

include("rodape.php"); ?>


