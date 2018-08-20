<?php
	class conexion{
		function recuperarDatos(){
			$host ="localhost";
			$user ="root";
			$pw = "123";
			$bd = "test";

			$con = mysql_connect($host,$user,$pw) or die("No se pudo conectar a la BD.") ;
			mysql_select_db($bd,$con) or die("No se encontro la Base de datos.");
			$query = "SELECT * FROM tabla_persona";
			$resultado = mysql_query($query);

			while ($fila = mysql_fetch_array($resultado)) {
				
				echo "<tr>";
				echo "<td>$fila[nombre] </td> <td>$fila[telefono] </td>  <td>$fila[edad] </td> <br>";
				echo "</tr>";


					/*
					$ GLOBAL: se utiliza para acceder a variables globales desde cualquier lugar del script PHP 
					$ _SERVER: contiene información sobre encabezados, rutas y ubicaciones de script 
					$ _REQUEST: se usa para recopilar datos después de enviar un formulario HTML 
					$ _POST: se usa para recopilar datos del formulario después de enviar un Forma HTML También se usa para pasar variables 
					$ _GET - Recolectar datos enviados en la URL
					*/
			}
		}
	}
?>