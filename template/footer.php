
<!-- script JS para el correcto funcionamiento de Bootstrap NO QUITAR :P -->

<script src="js/bootstrap.min.js"></script>
<!-- Abajo de aqui poner los script JS propios -->
<div id='IrArriba'>
<a href='#Arriba'><span/></a>
</div>
<script type='text/javascript'>
	//
	// Botón para Ir Arriba
	jQuery.noConflict();
	jQuery(document).ready(function() {
		jQuery("#IrArriba").hide();
		jQuery(function () {
			jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 200) {
				jQuery('#IrArriba').fadeIn();
			} 
			else {
				jQuery('#IrArriba').fadeOut();
			}
			});
			jQuery('#IrArriba a').click(function () {
				jQuery('body,html').animate({
				scrollTop: 0
				}, 800);
				return false;
			});
		});

	});
</script>
</body>
</html>