<?php
include("db/Conexion.php");
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
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>idTemplate</th>
                        <th>name</th>
                        <th>title</th>
                        <th>class</th>
                        <th>level</th>
                    </tr>
                </thead>
                <tbody id="cuerpo">
                <?php
                    if($radio == "id" && $dato != "")
                    {
                        $consultaSQL = "SELECT * FROM npc WHERE id = '$dato'";
                    }
                    else if ($radio =="nombre" && $dato != "")
                    {
                        $consultaSQL = "SELECT * FROM npc WHERE name LIKE '%$dato%'";
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
                            echo "<td>".$fila['id']."</td>";
                            echo "<td>".$fila['idTemplate']."</td>";
                            echo "<td>".$fila['name']."</td>";
                            echo "<td>".$fila['title']."</td>";
                            echo "<td>".$fila['class']."</td>";
                            echo "<td>".$fila['level']."</td>";
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
<script type="text/javascript">
    $(document).ready(function(){$('#form-busqueda').attr('action','npc');});
</script>
<?php include('template/footer.php');?>