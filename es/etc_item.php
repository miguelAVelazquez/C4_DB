<?php
    include("../db/Conexion.php");
    $con = Conexion::conectar();
    @$radio = $_POST['buscar'];
    @$dato = $_POST['dato'];
?>
<!-- Se hace uso de include para incluir una plantilla y que sea mas facil su modificacion-->
<?php include('template/header.php');?>
<div class="container">
    <!-- Inclusion de la barra de navegacion -->
    <?php include('template/navbar.php');?>
    <!-- Formulario de busqueda -->
    <?php include('template/formulario-busqueda.php');?>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>icono</th>
                        <th>id</th>
                        <th>nombre</th>
                        <th>cristalizable</th>
                        <th>tipo_item</th>
                        <th>tipo_consumo</th>
                        <th>grado</th>
                        <th>vendible</th>
                        <th>arrojable</th>
                        <th>destruible</th>
                        <th>intercambiable</th>
                    </tr>
                </thead>
                <tbody id="cuerpo">
                    <?php
                        if($radio == "id" && $dato != "")
                        {
                            $consultaSQL = "SELECT * FROM etcitem WHERE item_id = '$dato'";
                        }
                        else if ($radio =="nombre" && $dato != "")
                        {
                            $consultaSQL = "SELECT * FROM etcitem WHERE name LIKE '%$dato%'";
                        }
                        else
                        {
                            $con = Conexion::desconectar(); /*Aplicar una desconexion ya que no hay nada seleccionado*/
                        }
                        if ($con != null)
                        {
                            foreach( $con->query( $consultaSQL ) as $fila )
                            {
                                echo "<tr>";
                                echo "<td><img src='../img/icon/" . $fila['icon'] . "_0.bmp'></td>";
                                echo "<td>".$fila['item_id']."</td>";
                                echo "<td>".$fila['name']."</td>";
                                echo "<td>".$fila['crystallizable']."</td>";
                                echo "<td>".$fila['item_type']."</td>";
                                echo "<td>".$fila['consume_type']."</td>";
                                echo "<td>".$fila['crystal_type']."</td>";
                                echo "<td>".$fila['sellable']."</td>";
                                echo "<td>".$fila['dropable']."</td>";
                                echo "<td>".$fila['destroyable']."</td>";
                                echo "<td>".$fila['tradeable']."</td>";
                                echo "</tr>";
                            }
                            $con = Conexion::desconectar(); /*Aplicar una desconexion ya que se completo la consulta*/
                        }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){$('#form-busqueda').attr('action','etc_item');});
</script>
<?php include('template/footer.php');?>