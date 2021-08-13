<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/log.css">
	<title>Login</title>
</head>
<body>
<?php 
	require_once "header.php";
?>

<div class="contenedor">
	<form>
		<H1>¡Iniciar Sesion!</H1>
		<h4>Ingresa tus datos para poder entrar</h4>
		<input type="Text" name="usuario" placeholder="Usuario">
		<input type="password" name="contraseña" placeholder="Contraseña">
		<button>INGRESAR</button>
	</form>
</div>
<?php 
	require_once "footer.php";
?>
</body>
</html>