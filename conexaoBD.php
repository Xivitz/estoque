<?php


$conexao = mysqli_connect('localhost', 'root', 'root', 'app');

/*mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');*/

if (!$conexao) {
	echo 'Conexão Falhou!' . mysqli_error();
}


