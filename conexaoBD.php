<?php


$conexao = mysqli_connect('localhost', 'root', 'root', 'estoque');

if (!$conexao) {
	echo 'Conexão Falhou!' . mysqli_error();
}