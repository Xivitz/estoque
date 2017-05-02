<?php 
require_once('class/Produto.php');
require_once('cabecalho.php');
require_once('conexaoBD.php');
require_once('persistenciaProdutos.php');
require_once('logica-usuario.php');

verificaUsuario();

$produto = new Produto;

$produto->nome = $_POST['nome'];
$produto->quantidade = $_POST['quantidade'];
$produto->dtEntrada = $_POST['dtEntrada'];
$produto->descricao = $_POST['descricao'];


if(insereProduto($conexao, $produto))
{?>
	<p class="alert-success">O produto <?php echo $produto->nome; ?> foi adicionado com sucesso! </p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="alert-danger">O produto <?php echo $produto->nome; ?> não foi adicionado: <?php echo $msg ?></p>
<?php 
}

include("rodape.php"); ?>