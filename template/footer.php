                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
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
<script id="_wau5u5">var _wau = _wau || [];
_wau.push(["tab", "l1gsyeikhpu1", "5u5", "left-upper"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/tab.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>
<nav class="navbar navbar-inverse navbar-fixed-bottom text-center" role="navigation">
    <br>
    <p style="color:#fff">Some rights reserved 2015 &copy;. Powered by <a href="http://uninformatico.com" style="color:peachpuff">uninformatico.com</a></p>
</nav>
</body>
</html>