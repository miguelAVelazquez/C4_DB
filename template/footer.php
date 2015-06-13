
<!-- script JS para el correcto funcionamiento de Bootstrap NO QUITAR :P -->

<script src="js/bootstrap.min.js"></script>
<!-- Abajo de aqui poner los script JS propios -->
<div id='IrArriba'>
<a href='#Arriba'><span/></a>
</div>
<script type='text/javascript'>
	//
	// Botón para Ir Arriba

	$(document).ready(function()
    {
		$("#IrArriba").hide();
		$(function ()
        {
			$(window).scroll(function ()
            {
                if ($(this).scrollTop() > 200)
                {
                    $('#IrArriba').fadeIn();
                }
			    else
                {
				    $('#IrArriba').fadeOut();
			    }
			});
			$('#IrArriba a').click(function ()
            {
				$('body,html').animate({scrollTop: 0}, 800);
				return false;
			});
		});
	});
</script>
<nav class="navbar navbar-inverse navbar-fixed-bottom text-center" role="navigation">
    <br>
    <p style="color:#fff">Sistema de busqueda de la cronica C4 &copy; 2015 algunos derechos reservados. con la colaboracion de <a href="http://uninformatico.com" style="color:peachpuff">uninformatico.com</a></p>
</nav>
</body>
</html>