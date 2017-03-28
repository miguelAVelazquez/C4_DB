<?php
    include("../db/Conexion.php");
    $con = Conexion::conectar();
    @$radio = $_POST['buscar'];
    @$dato = $_POST['dato'];
    $tabla = "skill";
    //Se hace uso de include para incluir una plantilla y que sea mas facil su modificacion-->
    include('template/header.php');
    // Inclusion de la barra de navegacion
    include('template/navbar.php');
    // Formulario de busqueda
    include('template/formulario-busqueda.php');
    // Encabezados de la tabla enviados por un array
    require_once('../template/tabla_inicio.php');
        crearEncabezados(array("icon","class_name", "class_id", "skill_id", "level", "name", "sp", "min_level"));

    if($radio == "id" && $dato != "")
    {
        $consultaSQL = "SELECT class_name, class_id, skill_id, MAX(level) as maximo, name, sp, min_level FROM $tabla WHERE skill_id='$dato'";
    }
    else if ($radio =="nombre" && $dato != "")
    {
        $consultaSQL = "SELECT class_name, class_id, skill_id, MAX(level) as maximo, name, sp, min_level FROM $tabla WHERE name LIKE '%$dato%'";
    }
    else
    {
        $con = Conexion::desconectar(); /* Comentario1: Aplicar una desconexion ya que no hay nada seleccionado*/
    }
    if ($con != null)
    {
        $imgIcon = "";
        foreach( $con->query( $consultaSQL ) as $fila )
        {
            $skillID = $fila['skill_id'];
            if ($skillID <= 9)
            {
                 $imgIcon = "skill000";
            }
            else if ($skillID <= 99) {
                $imgIcon = "skill00";
            }
            else if ($skillID <= 999) {
               $imgIcon = "skill0";
            }
            else
            {
                $imgIcon = "skill";
            }
            $imgIcon .= $skillID."_0";
            if ($imgIcon == "skill000_0")
            {
                echo "<tr>";
                echo "<td colspan='8'>No results found</td>";
                echo "</tr>";
            }
            else
            {
                echo "<tr>";
                echo "<td><img src='../img/icon/".$imgIcon.".bmp'></td>";
                echo "<td>".$fila['class_name']."</td>";
                echo "<td>".$fila['class_id']."</td>";
                echo "<td>".$fila['skill_id']."</td>";
                echo "<td>".$fila['maximo']."</td>";
                echo "<td>".$fila['name']."</td>";
                echo "<td>".$fila['sp']."</td>";
                echo "<td>".$fila['min_level']."</td>";
                echo "</tr>";
            }

        }
        $con = Conexion::desconectar(); /* Desconectar: Aplicar una desconexion ya que se completo la consulta*/
    }
?>
<script type="text/javascript">
    $(document).ready(function(){$('#form-busqueda').attr('action','skill');});
</script>
<?php include('template/footer.php');?>