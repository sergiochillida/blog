<?php require_once('inc/clases/bd.inc.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<?php 
		require_once('inc/header.inc.php'); 
		require_once('inc/buscar.inc.php');
		require_once('inc/aside.inc.php');
	?>

	<h2>Login</h2>

	<form method="POST" action="listarentradas.php">
		<label for="usuario">Usuario: </label><input type="text" name="usuario"><br>
		<label for="pass">Contraseña: </label><input type="password" name="pass"><br>
		<input type="submit" value="enviar">
	</form>

</body>
</html>