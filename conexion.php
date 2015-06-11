<?php
	class conexion{
		function recuperarDatos()
		{
			$host = "localhost";
			$user = "root";	
			$pw = "";
			$db = "l2_items";

			$con = mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos ");
			mysql_select_db($db, $con) or die ("No se encontro la base de datos. ");
			$query = "SELECT * FROM etcitem WHERE name LIKE '%sword%' ORDER BY id ASC";
			$resultado = mysql_query($query);

			echo "<tr><td><b>ID</b></td><td><b>NOMBRE</b></td><td><b>LEYENDA</b></td><td><b>DESCRIPCION</b></td></tr>";
				while ($fila = mysql_fetch_array($resultado))
				{
					echo "<tr>";
					echo "<td><b>$fila[id]</b></td> <td>$fila[name]</td> <td>$fila[add_name]</td> <td>$fila[description]</td>";
					echo "</tr>";
				}
		}
	}

	$Con = new conexion();
	$Con->recuperarDatos();
?>