<?php 
include('cabecalho.php'); 
include('conexaoBD.php');
include('persistenciaProdutos.php');
include('logica-usuario.php');

$id = $_POST['id'];

if (produtoMovido($conexao, $id)) {
	$_SESSION['danger'] = 'Esse produto não pode ser excluído. Constam movimentações deste produto em banco.';
	header("Location: lista.php");
	die();
} else { 
	removeProduto($conexao, $id);
	$_SESSION['success'] = 'Produto removido com sucesso.';	
	header("Location: lista.php");
	die();
}
include("rodape.php");
