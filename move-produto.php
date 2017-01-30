<?php 
include('cabecalho.php'); 
include('conexaoBD.php');
include('persistenciaProdutos.php');
include('logica-usuario.php');

verificaUsuario();

$id = $_POST['id'];
$data = $_POST['data'];
$quantidade = $_POST['quantidade'];
$destino = $_POST['destino'];
$observacao = $_POST['observacao'];
	
if(moveProduto($conexao, $id, $data, $quantidade, $destino, $observacao))
{?>
	<p class="alert-success">O produto <?php echo $nome; ?> foi retirado com sucesso! </p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="alert-danger">O produto <?php echo $nome; ?> não foi retirado: <?php echo $msg ?> </p>
<?php 
}

include("rodape.php"); ?>


