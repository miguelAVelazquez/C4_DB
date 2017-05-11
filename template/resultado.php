<?php
    $resultado = 0;

    function mostrarResultado($pResultado)
    {
        if ($pResultado <= 0)
        {
           echo "<center><h2>No results</h2><center>";
        }
        else if ($pResultado == 1)
        {
             echo "<center><h2>1 result</h2><center>";
        }
        else if ($pResultado >= 2)
        {
            echo "<center><h2>". $pResultado. " results</h2><center>";
        }
    }
?>