<!DOCTYPE html>
<html>
<head>
	<title>Recuperando datos de Mysql desde PHP</title>
</head>
<body>
	<div>
		<fieldset>
			<legend>Datos recuperados: </legend>
			<div>
				<?php
					include("conexion.php");
					$con = new conexion();
					$con->recuperarDatos();
				?>
			</div>
		</fieldset>
	</div>
				/*
				La etiqueta <//legend> define un título para el elemento <//fieldset>.
				La etiqueta <//fieldset> se usa para agrupar elementos relacionados en un formulario.
				La etiqueta <//fieldset> dibuja un cuadro alrededor de los elementos relacionados.
				*/
</body>
</html>