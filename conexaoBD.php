<?php


$conexao = mysqli_connect('localhost', 'root', 'xivitz194032', 'estoque');

if (!$conexao) {
	echo 'Conexão Falhou!' . mysqli_error();
}