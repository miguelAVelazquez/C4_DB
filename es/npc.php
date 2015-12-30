<?php
    include("../db/Conexion.php");
    $con = Conexion::conectar();
    @$radio = $_POST['buscar'];
    @$dato = $_POST['dato'];
    $tabla = "npc";
    //Se hace uso de include para incluir una plantilla y que sea mas facil su modificacion-->
    include('template/header.php');
    // Inclusion de la barra de navegacion
    include('template/navbar.php');
    // Formulario de busqueda
    include('template/formulario-busqueda.php');
    // Encabezados de la tabla enviados por un array
    require_once('../template/tabla_inicio.php');
        crearEncabezados(array("id", "id_plantilla", "nombre", "titulo", "clase", "nivel"));

    if($radio == "id" && $dato != "")
    {
        $consultaSQL = "SELECT * FROM $tabla WHERE id = '$dato'";
    }
    else if ($radio =="nombre" && $dato != "")
    {
        $consultaSQL = "SELECT * FROM $tabla WHERE name LIKE '%$dato%'";
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
        $con = Conexion::desconectar(); /* Desconectar: Aplicar una desconexion ya que se completo la consulta*/
    }
?>
<script type="text/javascript">
    $(document).ready(function(){$('#form-busqueda').attr('action','npc');});
</script>
<?php include('template/footer.php');?>