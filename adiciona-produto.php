<?php 
include("cabecalho.php"); 
include("conexaoBD.php");
include("persistenciaProdutos.php");

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$dtEntrada = $_POST['dtEntrada'];
$descricao = $_POST['descricao'];
	
if(insereProduto($conexao, $nome, $quantidade, $dtEntrada, $descricao))
{?>
	<p class="alert-success">O produto <?php echo $nome; ?> foi <?php echo $preco; ?> adicionado com sucesso! </p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="alert-danger">O produto <?php echo $nome; ?> não foi adicionado: <?php echo $msg ?> </p>
<?php 
}

include("rodape.php"); ?>