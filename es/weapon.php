<?php
    include("../db/Conexion.php");
    $con = Conexion::conectar();
    @$radio = $_POST['buscar'];
    @$dato = $_POST['dato'];
    $tabla = "weapon";
    //Se hace uso de include para incluir una plantilla y que sea mas facil su modificacion-->
    include('template/header.php');
    // Inclusion de la barra de navegacion
    include('template/navbar.php');
    // Formulario de busqueda
    include('template/formulario-busqueda.php');
    // Encabezados de la tabla enviados por un array
    require_once('../template/tabla_inicio.php');
        crearEncabezados(array("icono", "id", "nombre", "parte_cuerpo", "crystalizable", "grado", "tipo_arma", "vendible", "arrojable", "destruible", "comerciable"));

    if($radio == "id" && $dato != "")
    {
        $consultaSQL = "SELECT * FROM $tabla WHERE item_id = '$dato'";
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
            echo "<td><img src='../img/icon/".$fila['icon']."_0.bmp'></td>";
            echo "<td>".$fila['item_id']."</td>";
            echo "<td>".$fila['name']."</td>";
            echo "<td>".$fila['bodypart']."</td>";
            echo "<td>".$fila['crystallizable']."</td>";
            echo "<td>".$fila['crystal_type']."</td>";
            echo "<td>".$fila['weaponType']."</td>";
            echo "<td>".$fila['sellable']."</td>";
            echo "<td>".$fila['dropable']."</td>";
            echo "<td>".$fila['destroyable']."</td>";
            echo "<td>".$fila['tradeable']."</td>";
            echo "</tr>";
        }
        $con = Conexion::desconectar(); /* Desconectar: Aplicar una desconexion ya que se completo la consulta*/
    }
?>
<script type="text/javascript">
    $(document).ready(function(){$('#form-busqueda').attr('action','weapon');});
</script>
<?php include('template/footer.php');?>