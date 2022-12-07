<?php
	//Conexion a la base de datos(host,usuario,contraseña,nombre_base_de_datos)
	$conexion=mysqli_connect('127.0.0.1:3307','root','','contaminacionagua_db');
?>
<!DOCTYPE html>
<html>
	<head><!--Esto no lo puede ver el usuario-->
		<meta charset="utf-8" /> <!--Este funciona para que reconosca el idioma español-->
		<title>Cuidado del agua</title>><!--Titulo-->
	</head>
	<body><!--Todo dentro de este apartado si lo puede ver-->
		<body bgcolor="blue"><!--Color de fondo-->
		<h1>Contacto</h1><!--Encabezado de primer nivel-->
		<ul>
			<li>
				<a href="index.php">Inicio</a>
				<a href="contacto.php">contacto</a>
			</li>
		</ul>
		<h1>Formulario</h1>
		<p>Formulario de contacto</p>
		<form><!---Formulario-->
			<label>Nombre</label><!--Nombre del campo-->
			<input type="text" name="" ><br/><!--Input type(tipo de dato a ingresar)-->
			<label>Apellido</label>
			<input type="text" name="" ><br/>
			<select><!--Crear una lista de opciones-->
				<option value = "HOMBRE">Hombre</option><!--Una opcion de la lista value(valor que se le da si elige esa opcion)-->
				<option value = "MUJER">Mujer</option>
			</select><br/>
			<input type="submit" value="enviar" name=""><!--creacion de un boton para que envie el formulario value(el nombre del botom)-->
		</form>

	</body>
</html>>