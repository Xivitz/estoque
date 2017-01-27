<?php 
include('cabecalho.php'); 
include('conexaoBD.php');
include('persistenciaProdutos.php');
include('logica-usuario.php');

$id = $_POST['id'];
removeProduto($conexao, $id);
$_SESSION['success'] = 'Produto removido com sucesso.';
header("Location: lista.php");
die();
include("rodape.php");
?>