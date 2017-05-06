<div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
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
                