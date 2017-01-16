<?php


$conexao = mysqli_connect('localhost', 'root', 'root', 'app');

/*mysqli_query("SET NAMES 'utf8'");
mysqli_query('SET character_set_connection=utf8');
mysqli_query('SET character_set_client=utf8');
mysqli_query('SET character_set_results=utf8');*/

if (!$conexao) {
	echo 'Conexão Falhou!' . mysqli_error();
}