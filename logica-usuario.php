<?php 

function usuarioLogado(){
	return $_COOKIE['usuario_logado'];
}

function usuarioEstaLogado() {
	return isset($_COOKIE['usuario_logado']);
}

function verificaUsuario () {
	if (usuarioEstaLogado()) {
		header('Location: index.php?falhaDeSeguranca=true');
		die();
	}
}

function logaUsuario($email) {
	setcookie('usuario_logado', email);
}
