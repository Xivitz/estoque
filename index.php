<?php
include('cabecalho.php');
include('logica-usuario.php');
?>

	<img src="./imagens/logo.jpg">

		<?php if(usuarioEstaLogado()) {?>
			<p class="text-success">Você está logado como <?php echo usuarioLogado();?> <a href="logout.php">Deslogar</a></p>
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


