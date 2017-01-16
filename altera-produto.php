<?php 
include("cabecalho.php"); 
include("conexaoBD.php");
include("persistenciaProdutos.php");
//include("logica-usuario.php");

//verificaUsuario();

$id = $_POST['id'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$dt_entrada = $_POST['dt_entrada'];
$descricao = $_POST['descricao'];

//alteração realizada aqui.

if(alteraProduto($conexao, $id, $nome, $quantidade, $dt_entrada, $descricao))

{?>
	<p class="alert-success">O produto <?php echo $nome; ?> foi, alterado com sucesso! </p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="alert-danger">O produto <?php echo $nome; ?> não foi alterado: <?php echo $msg ?> </p>
<?php 
}
include("rodape.php"); ?>