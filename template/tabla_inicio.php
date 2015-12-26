<div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <?php 
                            function crearEncabezados($array) { 
                                foreach ($array as $value) {
                                                                echo "<th>$value</th>";
                                } 
                            } 
                        ?>
                    </tr>
                </thead>
                <tbody id="cuerpo">