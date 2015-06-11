<html>
	<head>
		<title>Menu inicio</title>
		<link href="css/sitio.css" rel="stylesheet"/>
		<!-- INICIO Javascript recargar una seccion de pagina -->
		<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<script>
		$(document).ready(function() {
    		$('#etc_item').click(function(){
       		$("#cuerpo").load("conexion.php");
    											});

    		$('#x').click(function(){
       		$("#cuerpo").load("{% static 'index.html' %}");
    											});

									});
		</script>
		<!-- FIN Javascript recargar una seccion de pagina -->
	</head>
	<body>
		<div>
			<fieldset>
				<legend>Inicio: </legend>
				<div>
					Elige una opcion:
					<br>
					<a href="#" id="etc_item">etc_item</a>
					<table border ="1" id="cuerpo">
					</table>
				</div>
			</fieldset>
		</div>
	</body>
	<footer>
	</footer>
</html>