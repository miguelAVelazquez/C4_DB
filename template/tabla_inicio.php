<div class="spinner" id="cargando" hidden>
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
</div>
<div class="row">
        <div class="col-md-12">
            <div hidden class="table-responsive" id="tabla-resultado">
                <?php 
                    function crearEncabezados($array) 
                    { 
                        echo "<table class=\"table table-hover\">";
                        echo "<thead>";
                        echo "<tr>";
                        foreach ($array as $value)
                        {
                            echo "<th>$value</th>";
                        } 
                            echo "<tr>";
                            echo "</thead>";
                            echo "<tbody id=\"cuerpo\">";
                    }  
                ?>
                