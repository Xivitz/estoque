<?php


$conexao = mysqli_connect('localhost', 'root', '1234567', 'estoque');

if (!$conexao) {
	echo 'Conexão Falhou!' . mysqli_error();
}
