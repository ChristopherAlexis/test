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
				
</body>
</html>
