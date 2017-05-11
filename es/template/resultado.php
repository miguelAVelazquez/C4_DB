<?php
    $resultado = 0;

    function mostrarResultado($pResultado)
    {
        if ($pResultado <= 0)
        {
            echo "<center><h2>Sin resultados</h2><center>";
        }
        else if ($pResultado == 1)
        {
            echo "<center><h2>1 resultado</h2><center>";
        }
        else if ($pResultado >= 2)
        {
            echo "<center><h2>". $pResultado. " resultados</h2><center>";
        }
    }
?>