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
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
					<li><a href="contato.php">Contato</a></li>

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