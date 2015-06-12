<!-- Se hace uso de include para incluir una plantilla y que sea mas facil su modificacion-->
<?php include('template/header.php');?>
<div class="container">
    <!-- Inclusion de la barra de navegacion -->
    <?php include('template/navbar.php');?>
    <!-- Formulario de busqueda -->
    <?php include('template/formulario-busqueda.php');?>


    <div class="row"><!-- Tabla que muestra los resultados de la busqueda -->
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>item_id</th>
                        <th>name</th>
                        <th>crytallizable</th>
                        <th>item_type</th>
                        <th>consume_type</th>
                        <th>crystal_type</th>
                        <th>sellable</th>
                        <th>dropable</th>
                        <th>destroyable</th>
                        <th>tradeable</th>
                    </tr>
                </thead>
                <tbody id="cuerpo">
                <?php
                    include("db/Conexion.php");
                    $con = Conexion::conectar();
                    @$radio = $_POST['buscar'];
                    @$dato = $_POST['dato'];

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
                        $con = Conexion::desconectar(); /* Comentario1: Aplicar una desconexion ya que no hay nada seleccionado*/
                    }

                    if ($con != null)
                    {
                        foreach( $con->query( $consultaSQL ) as $fila )
                            {
                                echo "<tr>";
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
                        $con = Conexion::desconectar(); /* Comentario2: Aplicar una desconexion ya que se completo la consulta*/
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('template/footer.php');?>