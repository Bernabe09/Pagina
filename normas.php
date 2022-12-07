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
		<title>Paises con mayor escasez</title><!--Titulo-->
	</head>
	<body><!--Todo dentro de este apartado si lo puede ver-->
		<header>
		<div class="contanedor_encabezado">
			<h1 class="titulo">Paises con mayor escasez</h1><!--Encabezado de primer nivel-->
		</div>
		<div class="enlaces">
			<a href="index.php">Inicio</a>
			<a href="index.php">Tecnologia</a>
			<a href="fauna.php">Fauna</a>
		</div>
		</header>
		<p>
			En su ranking sobre los países con mayor escasez de agua, el World Resources Institute (WRI) advierte de la situación será más grave en el futuro. De hecho, cerca de una quinta parte de los países del mundo padecerán agudos recortes en el suministro de agua en 2040. El estrés hídrico es uno de los mayores problemas a los que nos enfrentamos.
		</p>
		<center>
			<table><!--tabla border(para que toda la tabla tenga borde)-->
				<tr><!--Filas-->
					<td>Pais</td><!--columnas-->
					<td>Puesto</td>
					<td>Cantida de la poblacion que tiene acceso al agua(%)</td>
				</tr>
				<?php
				$sql="SELECT * from grupoafectado";
				$result=mysqli_query($conexion,$sql);
				while($mostrar=mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $mostrar['paises'] ?></td>
					<td><?php echo $mostrar['puesto'] ?></td>
					<td><?php echo $mostrar['cantidadDeAguaALaQueTienenAcceso'] ?></td>
				</tr>
				<?php
				}
				?>
			</table>
		</center>
		<p>
			El World Resources Institute (WRI) es una organización sin ánimo de lucro que investiga los recursos que le quedan al planeta. En su informe, el WRI publicó la lista de los países con mayor escasez de agua del mundo. Erradicar el conocido como estrés hídrico supone una tarea fundamental en la lucha contra la pobreza. En este artículo te haremos un repaso por los países que mayor escasez de agua tienen y veremos qué países corren el riesgo de sufrir un profundo estrés hídrico para el año 2040.
		</p>
		<p>
			Son múltiples los factores que causan el estrés hídrico que azota a millones de persona sen todo el mundo. A pesar de que hay factores que influyen de forma natural, el hombre tiene un papel preponderante en el agravamiento de este problema. El crecimiento demográfico, la crisis climática, los conflictos armados o el vertido de sustancias tóxicas derivados de la actividad industiral  ponen en jaque la disponibilidad de recursos hídricos.
		</p>
		<p>
			Como ilustra el ranking elaborado por el World Resources Institute, los países pobres sufren especialmente las consecuencias de este problema global. No obstante, muchos otros países desarrollados se han ganado un hueco en esta lista que sirve como señal de alerta de la importancia de actuar inmediatamente.
		</p>
	</body>
</html>