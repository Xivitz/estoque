<?php
 
function listaProdutos ($conexao)
{
	$produtos = array();
	$resultado = mysqli_query($conexao, "select * from produtos");
	while ($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto ($conexao, $nome, $quantidade, $dtEntrada, $descricao)
{
	$query = "insert into produtos (nome, quantidade, dt_entrada, descricao) values ('{$nome}', {$quantidade}, {$dtEntrada}, '{$descricao}')";
	return mysqli_query($conexao, $query);
}

function alteraProduto ($conexao, $id, $nome, $quantidade, $dtEntrada, $descricao) 
{
	$query = "update produtos set nome = '{$nome}', quantidade = {$quantidade}, dt_entrada = {$dtEntrada}, descricao = '{$descricao}'
	where id = {$id}";
	$produtos = mysqli_query($conexao, $query);
	return $produtos;
}

function buscaProduto ($conexao, $id)
{
	$query = "select * from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function removeProduto ($conexao, $id)
{
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);
}

function moveProduto ($conexao, $id, $nome, $data, $quantidade, $destino, $observacao)
{
	$retorno = array();
	$query = "select quantidade from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);

	while ($movimentacoes = mysqli_fetch_assoc($resultado)) {
		array_push($retorno, $movimentacoes);
	}

	$qntProdutosEmEstoque = (int) $retorno[0]['quantidade'];

	if ($qntProdutosEmEstoque >= $quantidade) {
		$saida = $qntProdutosEmEstoque - $quantidade;

		$qntProdutosAtual = "update produtos set quantidade = {$saida} where id = {$id}";
		mysqli_query($conexao, $qntProdutosAtual);

		$saidaProdutos = "insert into movimentacoes (id_produto, dt_movimentacao, destino, observacao, produto, quantidade) values ({$id},
		 				 {$data}, '{$destino}', '{$observacao}', '{$nome}', {$quantidade})";
	}
	
	return mysqli_query($conexao, $saidaProdutos);
}

function listaMovimentacoes ($conexao)
{
	$movimentacoes = array();
	$resultado = mysqli_query($conexao, "select * from movimentacoes");
	while ($produto = mysqli_fetch_assoc($resultado)) {
		array_push($movimentacoes, $produto);
	}
	return $movimentacoes;
}