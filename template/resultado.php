<?php
    $resultado = 0;

    function mostrarResultado($pResultado)
    {
        if ($pResultado <= 0)
        {
           echo "<center><p class='text-warning'>No results</p><center>";
        }
        else if ($pResultado == 1)
        {
             echo "<center><p class='text-warning'>1 result</p><center>";
        }
        else if ($pResultado >= 2)
        {
            echo "<center><p class='text-warning'>". $pResultado. " results</p><center>";
        }
    }
?>