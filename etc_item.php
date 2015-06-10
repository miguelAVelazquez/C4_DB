<html>
	<head>
		<title>Recuperando datos de Mysql desde PHP</title>
	</head>
	<body>
		<div>
			<fieldset>
				<legend> Datos recuperados: </legend>
				<div>
					<table border ="1">
						<tr>
							<td>ID</td>
							<td>NOMBRE</td>
							<td>LEYENDA</td>
							<td>DESCRIPCION</td>
						</tr>
						<?php
						    include("conexion.php");
						    $Con = new conexion();
						    $Con->recuperarDatos();
						?>
					</table>
				</div>
			</fieldset>
		</div>
	</body>
	<footer>
	</footer>
</html>