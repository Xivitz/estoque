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

function insereProduto ($conexao, Produto $produto)
{ 
	
	$data = implode("-", array_reverse(explode("/", $dtEntrada)));
	$query = "insert into produtos (nome, quantidade, dt_entrada, descricao)
			 values ('{$produto->nome}',
			 		  {$produto->quantidade},
			 		 '{$produto->dt_entrada}',
			 		 '{$produto->descricao}')";			 		 
	return mysqli_query($conexao, $query);
}

function alteraProduto ($conexao, $id, $nome, $quantidade, $dtEntrada, $descricao)
{
	$data = implode("-", array_reverse(explode("/", $dtEntrada)));
	$query = "update produtos set nome = '{$nome}', quantidade = {$quantidade}, dt_entrada = '{$data}', descricao = '{$descricao}'
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
	//Conversão para sucesso ao subtrair a quantidade em estoque.
	$qntProdutosEmEstoque = (int) $retorno[0]['quantidade'];

	if ($qntProdutosEmEstoque >= $quantidade) {
		$saida = $qntProdutosEmEstoque - $quantidade;

		$qntProdutosAtual = "update produtos set quantidade = {$saida} where id = {$id}";
		mysqli_query($conexao, $qntProdutosAtual);

		$dataMovimentacao = implode("-", array_reverse(explode("/", $data)));		

		$saidaProdutos = "insert into movimentacoes (id_produto, dt_movimentacao, destino, observacao, produto, quantidade) values ({$id},
		 				 '{$dataMovimentacao}', '{$destino}', '{$observacao}', '{$nome}', {$quantidade})";		 				 
	}	
	return mysqli_query($conexao, $saidaProdutos);
}

function listaMovimentacoes ($conexao)
{
	$movimentacoes = array();
	$resultado = mysqli_query($conexao, "select * from movimentacoes");
	
	if ($resultado != 0) {
		while ($produto = mysqli_fetch_assoc($resultado)) {
			array_push($movimentacoes, $produto); 
		}
	} 
	echo "Não há movimentações.";
	return $movimentacoes;
}

function produtoMovido ($conexao, $id)
{
	$query 		= "select produto from movimentacoes where id_produto = {$id} limit 1";
	$retorno 	= mysqli_query($conexao, $query);
	$qtd_linhas = mysqli_num_rows($retorno);
	
	if ($qtd_linhas == 1) {
		return true;
	}
	return false;
}