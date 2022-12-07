<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
	<link rel="icon" type="text/css" href="imagenes\diamundialdelagua.jpg"><!--Etiqueta para los iconos-->
	<!--Meta son los metadatos sirve para configuracion y para un mejor reconocimiento del buscador-->
	<meta name="keywords" content="harina,leche,galletas"><!--content sirve para indicar palabras claves de la pagina(para el navegador)-->
	<meta name="description" cont="tienda de venta de abarrotes"><!--Descripcion la pagina -->
	<meta name="author" content="Bernabe"><!--Autor de la pagina-->
	<meta name="copyright" content="Christopher Inc."><!--Derechos de la pagina-->
	<meta name="robots" content="noindex"><!--Index es para que el navagador muestre o no la pagina en busqueda-->
</head>
<body>
	<header><!--Encabezado de la pagina-->
		<nav><!--Nav para ajustes de la barra de navegacion-->
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="contacto.php">Mi cuenta</a></li>
			</ul>
		</nav>

	</header>
	<section><!--Seccion-->
		<h1>
			Prueba
		</h1>

	</section>
	<aside></aside>
	<footer><!--Pie de pagina-->
		
	</footer>
	<table>
		<tr><!--Filas-->
			<td><b></b></td><!--Columnas-->
		</tr>
	</table>
	<ol><!--declaracion de una lista-->
		<li>Leche</li><!--Elementos de la lista-->
		<li id="#Harina">Harina</li> <!--id es un identificador para mandarlo a llamar con a(ref)-->
	</ol>
	<form>
		<input type="text" name="">		<!--Entrada de datos el type es para indicar el tipo de dato que se va a solictar-->
		<input type="password" name="" required=""><!--El required es para que se complete el campo forzozamente -->
		<input type="number" name="" value=""><!--Value es el valor que va tomar el campo en cuestion-->
		<input type="email" name="">
		<input type="color" name="">
		<input type="range" name="" min="0" max="10">
		<input type="date" name="">
		<input type="time" name="">
		<input type="button" name="" value="Boton">
		<input type="submit" name="">
		<textarea readonly="">Hola</textarea><!--Solo para lectura(readonly) no se puede borrar el texto del recuadro-->
	</form>

	<b>Negrita</b>		<!--tipo de letras-->
	<i>Italica</i>
	<strike>Tachada</strike>
	<small>Chiquita</small><br>
	<video src="https://www.youtube.com/s/desktop/0ca757a5/jsbin/desktop_polymer.vflset/desktop_polymer.js" controls=""></video>
	<div><!--Separar los datos-->		
	</div>
	<ul><!--Listas desacomodadas---><!--Para realizar lista ordenadas pones ol-->
			<li>fauna</li>
			<li>Normas</li>
	</ul>

	<a href="index.php" target="_blank">Inicio con nueva pestaña</a><!--Target es para que apunte el servidor(Nueva pestaña)-->
</body>
</html>