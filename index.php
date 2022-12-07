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
		<title>Cuidado del agua</title><!--Titulo-->
	</head>
	<body><!--Todo dentro de este apartado si lo puede ver-->
		<header>
		<div class="contanedor_encabezado">
			<h1 class="titulo">Contaminacion del agua</h1><!--Encabezado de primer nivel-->
		</div>
		<div class="enlaces">
			<a href="normas.php">Paises</a>
			<a href="tecnologia.php">Tecnologia</a>
			<a href="fauna.php">Fauna</a>
		</div>
		</header>
		<div class="text1">
			<p>
				El planeta nos recuerda continuamente, con sequías cada vez más extremas, que sin agua no hay vida. Este recurso es imprescindible no solo para la supervivencia de los seres vivos que lo habitamos, sino también para el desarrollo socioeconómico, la producción de energía o la adaptación al cambio climático. Sin embargo, en la actualidad, nos enfrentamos a un enorme reto: la contaminación de ríos, mares, océanos, canales, lagos y embalses.
			</p>
			<img class="logo" width="37%" height="37%" src="https://www.iberdrola.com/wcorp/gc/prod/es_ES/comunicacion/contaminacion_agua_mult_1_res/contami_agua_746x419.jpg">
		</div>
		<br/><!--Salto de linea---><!----->
			<h2 class="subtitulo1">QUÉ ES LA CONTAMINACIÓN DEL AGUA</h2>
		<div>
			<img class="imagen_texto" width="50%" height="50%" src="https://agua.org.mx/wp-content/uploads/2017/08/Noticia-contaminacio%CC%81n-agua-consecuencias-soluciones.jpg">
			<p>
				La Organización Mundial de la Salud (OMS) define el agua contaminada como aquella que sufre cambios en su composición hasta quedar inservible. Es decir, es agua tóxica que no se puede ni beber ni destinar a actividades esenciales como la agricultura, además de una fuente de insalubridad que provoca más de 500.000 muertes anuales a nivel global por diarrea y transmite enfermedades como el cólera, la disentería, la fiebre tifoidea y la poliomielitis.
			</p>
			<p>	
				Los principales contaminantes del agua incluyen bacterias, virus, parásitos, fertilizantes, pesticidas, fármacos, nitratos, fosfatos, plásticos, desechos fecales y hasta sustancias radiactivas. Estos elementos no siempre tiñen el agua, haciendo que la contaminación hídrica resulte invisible en muchas ocasiones. Por esta razón, se suele recurrir al análisis químico de pequeñas muestras y organismos acuáticos para conocer el estado de la calidad del agua.
			</p>
			<p>
				El cuidado del medio ambiente tomó relevancia entre las principales potencial del mundo debido al cambio climático y sus repercusiones si no se actúa con políticas que impulsen el cuidado de los recursos naturales.
			</p>
			<p>
				Aunque la contaminación es un problema mundial, los más afectados son los países en desarrollo, consideró Paula Caballero, directora Senior de Medio Ambiente y Recursos Naturales del instituto Práctica Global, que se encarga de la evaluación de las prácticas empresariales y de política pública para preservar el medio ambiente.
			</p>
			<p>
				El índice mide (en una escala de 0 a 100) el grado en que los países apliquen políticas para proteger sus entornos naturales, mediante el cálculo de 20 indicadores independientes a través de áreas como la calidad del aire, la agricultura, el clima y la energía.	
			</p>
			<h3>CAUSAS DE LA CONTAMINACIÓN DEL AGUA: </h3>
			<p>
				Los factores naturales, como la filtración del mercurio presente en la corteza de la Tierra, pueden contaminar los océanos, ríos, lagos, canales y embalses. Sin embargo, lo habitual es que el deterioro del agua proceda de las actividades humanas y sus consecuencias, que detallamos a continuación:	
			</p>
			<center>
				<img height="50%" width="50%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1EO9xwgDikpb2vj1DmuvsmOYgJ2EDrY4wQA&usqp=CAU">
			</center>
		</div>
		<div class="flora">
		<h2>
			Flora
		</h2>
		<p>
			En los últimos 250 años se han extinguido casi 600 especies de plantas en el planeta. Es una cifra alarmante, que desgraciadamente apunta en nuestra dirección a la hora de buscar culpables. El ser humano parece responsable del enorme número de extinciones botánicas de las últimas décadas, habitualmente por culpa de acciones como la tala masiva, la deforestación, la apropiación de terrenos para la agricultura o las actividades de ganadería. Buena parte de estas especies se han extinguido en islas y zonas tropicales o de clima mediterráneo, como es el caso del sánadalo de Juan Fernández, en Chile. Cuando se habla de extinciones, prácticamente todo el mundo piensa en animales, pero las plantas han sufrido y sufren también bajas que merecen el mismo respeto.
		</p>
		<dir>
		<table class="tabla_flora"><!--tabla border(para que toda la tabla tenga borde)-->
			<tr><!--Filas-->
				<td>Nombre Cientifico</td><!--columnas-->
				<td>Zona De Flora</td>
				<td>Desventajas De La Desaparicion</td>
				<td>Cantidad De Flora Desaparecida</td>
				<td>Fecha De Extinsion</td>
			</tr>
			<?php
			$sql="SELECT * from flora";
			$result=mysqli_query($conexion,$sql);
			while($mostrar=mysqli_fetch_array($result)){
			?>
			<tr>
				<td><?php echo $mostrar['nombreCientifico'] ?></td>
				<td><?php echo $mostrar['zonaDeFlora'] ?></td>
				<td><?php echo $mostrar['desventajasDeLaDesaparicion'] ?></td>
				<td><?php echo $mostrar['cantidadDeFloraDesaparecida'] ?></td>
				<td><?php echo $mostrar['fechaExtinsion'] ?></td>
			</tr>
			<?php
			}
			?>
		</table>
		</dir>
		</div>
		<h3>Informacion relevante</h3>
		<ul class="menu" style ="-style-type lista: none; ">
			<li><a href="http://www.conagua.gob.mx/CONAGUA07/Publicaciones/Publicaciones/SGAA-15-13.pdf" target="_blank">Normas mexicanas</a></li><!--Etiqueta para otras paginas-->
			<li><a href="https://agua.org.mx/tecnologias-del-agua/" target="_blank">Tecnologia para el cuidado del agua</a></li>
			<li><a href="http://www.conagua.gob.mx/CONAGUA07/Publicaciones/Publicaciones/Libros/11DisenoDePlantasPotabilizadorasTipoDeTecnologiaSimplificada.pdf" target="_blank">Potabilizacion del agua</a></li>
		</ul>
		<footer>
			<a href="">Contacto</a>
			<a href="">Mas acerca de mi</a>
		</footer>
	</body>
</html>