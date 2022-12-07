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
		<title>Tecnologia</title><!--Titulo-->
	</head>
	<body><!--Todo dentro de este apartado si lo puede ver-->
		<header>
		<div class="contanedor_encabezado">
			<h1 class="titulo">Tecnologia</h1><!--Encabezado de primer nivel-->
		</div>
		<div class="enlaces">
			<a href="normas.php">Paises</a>
			<a href="index.php">Inicio</a>
			<a href="fauna.php">Fauna</a>
		</div>
		</header>
		<p>
			Como lo demuestran los ejemplos citados a continuación, si un país o ciudad desea cambiar la forma en que utiliza y maneja sus recursos hídricos, debe primero cambiar la idea que la gente tiene del agua.
		</p>
		<p>
			Tanto Singapur como Israel, en sus ambiciosos proyectos de reutilización del agua, se han concentrado en educar a sus ciudadanos en las cuestiones relacionadas con el agua. En el caso de los Países Bajos y Estocolmo, Suecia, los innovadores diseños de las ciudades y las nuevas formas de vida han permitido el desarrollo de soluciones sostenibles.
		</p>
		<center>
			<table><!--tabla border(para que toda la tabla tenga borde)-->
				<tr><!--Filas-->
					<td>Pais</td><!--columnas-->
					<td>Cantidad De Fondos Destinados</td>
					<td>Indice De Desempeno Ambiental</td>
				</tr>
				<?php
				$sql="SELECT * from tecnologia";
				$result=mysqli_query($conexion,$sql);
				while($mostrar=mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $mostrar['pais'] ?></td>
					<td><?php echo $mostrar['cantidadDeFondosDestinados'] ?></td>
					<td><?php echo $mostrar['indiceDeDesempenoAmbiental'] ?></td>
				</tr>
				<?php
				}
				?>
			</table>
		</center>
	<p>
		No hay recurso más esencial para la vida ni peor gestionado que el agua. El agua potable y el saneamiento son derechos universales desde 2010, aunque este reconocimiento no garantiza su buen uso.
	</p>
	<p>
		A menudo desperdiciada o usada en exceso, el agua padece las tensiones derivadas conciliar el interés personal -sacar el máximo beneficio propio- con el colectivo -garantizar la sostenibilidad de las reservas-.
	</p>
	<p>
		No existe una fórmula que garantice el acceso a reservas de agua potable en todo el mundo, sin por ello agotar las reservas terrestres y subterráneas.
	</p>
	<p>
		Con los retos existentes, el sector del agua es uno de los entornos más prometedores para que empresas de tecnologías limpias mejoren el uso del agua en la agricultura, la industria y los hogares
	</p>
	</body>
</html>