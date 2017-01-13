<?php 
include("cabecalho.php"); 
include("conexaoBD.php");
include("persistenciaProdutos.php");

$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location: lista.php?removido=true");
die();
include("rodape.php");
?>