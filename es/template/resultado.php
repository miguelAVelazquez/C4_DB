<?php
    $resultado = 0;

    function mostrarResultado($pResultado)
    {
        if ($pResultado <= 0)
        {
           echo "<center><p class='text-warning'>Sin resultados</p><center>";
        }
        else if ($pResultado == 1)
        {
             echo "<center><p class='text-warning'>1 resultado</p><center>";
        }
        else if ($pResultado >= 2)
        {
            echo "<center><p class='text-warning'>". $pResultado. " resultados</p><center>";
        }
    }
?>