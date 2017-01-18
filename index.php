<?php
include("cabecalho.php");
include("logica-usuario.php");
 ?>

<?php if(isset($_GET['login']) && $_GET['login']==true) {?>
	<p class="alert-success">Logado com sucesso!</p>
<?php } ?>
<?php if(isset($_GET['login']) && $_GET['login']==false) {?>
	<p class="alert-danger">Usuário ou senha inválida!</p>
<?php }?>

<?php if(isset($_GET['falhaDeSeguranca']) && $_GET['falhaDeSeguranca']==true) {?>
	<p class="alert-danger">Você não tem acesso a essa funcionalidade!</p>
<?php }?>

	<img src="./imagens/logo.jpg">

		<?php if(usuarioEstaLogado()) {?>
			<p class="text-success">Você está logado como <?=usuarioLogado()?></p>
		<?php } else { ?>

	<form action="login.php" method="POST">
		<table class="table">
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="email" name="email"></input></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input class="form-control" type="password" name="senha"></input></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary">Login</button></td>
			</tr>
		</table>
	</form>
	<?php }?>
<?php include("rodape.php"); ?>


