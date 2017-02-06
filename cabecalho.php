<?php
error_reporting(E_ALL ^ E_NOTICE);
include('mostra-alerta.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Estoque Embrapa</title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estoque.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Estoque</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="formulario.php">Adicionar Produto</a></li>
					<li><a href="lista.php">Produtos</a></li>
					<li><a href="listaMovimentacoes.php">Movimentações</a></li>
				</ul>
			</div>
		</div>		
	</div>

	<div class="container">
		<div class="principal">
		<?php
			mostraAlerta('success');
			mostraAlerta('danger');
		?>