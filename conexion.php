<?php
	class conexion{
		function recuperarDatos(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "l2_items";

			$con = mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos ");
			mysql_select_db($db, $con) or die ("No se encontro la base de datos. ");
			$query = "SELECT * FROM etcitem";
			$resultado = mysql_query($query);

			while ($fila = mysql_fetch_array($resultado)) {
				echo "<tr>";
				echo "<td>$fila[id]</td> <td>$fila[name]</td> <td>$fila[add_name]</td> <td>$fila[description]</td>";
				echo "</tr>";
			}
		}
	}
?>