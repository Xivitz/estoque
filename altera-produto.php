<?php 
include("cabecalho.php"); 
include("conexaoBD.php");
include("persistenciaProdutos.php");
include("logica-usuario.php");

verificaUsuario();

$id = $_POST['id'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$dtEntrada = $_POST['dtEntrada'];
$descricao = $_POST['descricao'];

if(alteraProduto($conexao, $id, $nome, $quantidade, $dtEntrada, $descricao))

{?>
	<p class="alert-success">O produto <?php echo $nome; ?> foi alterado com sucesso! </p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="alert-danger">O produto <?php echo $nome; ?> não foi alterado: <?php echo $msg ?> </p>
<?php 
}
include("rodape.php"); ?>