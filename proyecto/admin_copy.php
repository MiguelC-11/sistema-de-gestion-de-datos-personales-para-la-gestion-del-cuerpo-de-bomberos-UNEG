<header>
	<?php
	require_once(`admin_copy.php`);
	?>
</header>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Control de personal</title>
	<link rel="stylesheet" href="menu.css">
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Logotipo</h1>
			</div>
			<nav class="menu">
				<a href="inicio.html">Inicio</a>
				<a href="#">Ayuda</a>
				<a href="pavo.html">Salir</a>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="#">Información del personal</a>
			<a href="#">Horas de guardia</a>
			<a href="#">Asistencia de alumnos y aspirantes</a>
			<a href="#">Registrar usuario</a>
			<a href="#">Respaldo de la base de datos</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>