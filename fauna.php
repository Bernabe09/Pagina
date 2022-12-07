<?php
	//Conexion a la base de datos(host,usuario,contraseña,nombre_base_de_datos)
	$conexion=mysqli_connect('127.0.0.1:3307','root','','contaminacionagua_db');
?>
<!DOCTYPE html>
<html>
	<head><!--Esto no lo puede ver el usuario-->
		<link rel="icon" type="text/css" href="imagenes\Icono.jpg">
		<!--Es para el icono de la pestania-->
		<link rel="stylesheet" type="text/css" href="estilo_index.css">
		<link rel="stylesheet" type="text/css" href="normalize.css"><!--Para regresara normalizar todas las caracteristicas del navegedor-->
		<meta charset="utf-8" /> <!--Este funciona para que reconosca el idioma español(cambia la codificacion de la pagina)-->
		<!--Para la tipografia-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet">
		<!-- <- -->
		<title>Fauna</title><!--Titulo-->
	</head>
	<body><!--Todo dentro de este apartado si lo puede ver-->
		<header>
		<div class="contanedor_encabezado">
			<h1 class="titulo">Fauna</h1><!--Encabezado de primer nivel-->
		</div>
		<div class="enlaces">
			<a href="normas.php">Paises</a>
			<a href="tecnologia.php">Tecnologia</a>
			<a href="index.php">Inicio</a>
		</div>
		</header>
		<h2 class="subtitulo1">
			Las especies de agua dulce disminuyen un 83% desde 1970, la mayor extinción de vertebrados a nivel mundial 
		</h2>
		<p>
			Más de 126.000 especies de peces, reptiles, moluscos, plantas, insectos y mamíferos de nuestro planeta habitan en ríos, lagos y humedales que se han visto gravemente amenazados por la acción humana.
		</p>
		<p>
			Algunas de las especies que fueron extintas fueron
		</p>
		<center>
			<table><!--tabla border(para que toda la tabla tenga borde)-->
				<tr><!--Filas-->
					<td>Nombre Cientifico</td><!--columnas-->
					<td>Habitad</td>
					<td>Fecha en la que se extinguio</td>
				</tr>
				<?php
				$sql="SELECT * from fauna";
				$result=mysqli_query($conexion,$sql);
				while($mostrar=mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $mostrar['nombreCientifico'] ?></td>
					<td><?php echo $mostrar['habitad'] ?></td>
					<td><?php echo $mostrar['fechaEnLaQueSeExtinguio'] ?></td>
				</tr>
				<?php
				}
				?>
			</table>
		</center>
	</body>
</html>