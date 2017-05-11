<?php
    include("../db/Conexion.php");
    $con = Conexion::conectar();
    @$radio = $_POST['buscar'];
    @$dato = $_POST['dato'];
    $dato = preg_replace("/[^A-Za-z0-9 ]/", '', $dato);
    $tabla = "skill";
    //Se hace uso de include para incluir una plantilla y que sea mas facil su modificacion-->
    include('template/header.php');
    // Inclusion de la barra de navegacion
    include('template/navbar.php');
    // Formulario de busqueda
    include('template/formulario-busqueda.php');
    include('template/resultado.php'); // Este maneja la variable $resultado
    // Encabezados de la tabla enviados por un array
    require_once('../template/tabla_inicio.php');
        crearEncabezados(array("icon","id_clase","nombre_clase", "id_habilidad", "nivel_maximo", "nombre", "sp", "nivel_minimo"));

    if($radio == "id" && $dato != "")
    {
        $consultaSQL = "SELECT class_id, class_name, skill_id, MAX(level) as skill_max_level, name, sp, min_level FROM $tabla WHERE skill_id='$dato' GROUP BY class_id ORDER BY skill_id ;";
    }
    else if ($radio =="nombre" && $dato != "")
    {
        $consultaSQL = "SELECT class_id, class_name, skill_id, MAX(level) as skill_max_level, name, sp, min_level FROM $tabla WHERE name LIKE '%$dato%' GROUP BY class_id ORDER BY skill_id;";
    }
    else
    {
        $con = Conexion::desconectar(); /* Comentario1: Aplicar una desconexion ya que no hay nada seleccionado*/
    }
    if ($con != null)
    {
        echo "<script type='text/javascript'>cargarConsulta();</script>";
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

            echo "<tr>";
            echo "<td><img src='../img/icon/".$imgIcon.".bmp'></td>";
            echo "<td>".$fila['class_id']."</td>";
            echo "<td>".$fila['class_name']."</td>";
            echo "<td>".$fila['skill_id']."</td>";
            echo "<td>".$fila['skill_max_level']."</td>";
            echo "<td>".$fila['name']."</td>";
            echo "<td>".$fila['sp']."</td>";
            echo "<td>".$fila['min_level']."</td>";
            echo "</tr>";
            $resultado++;
        }
        $con = Conexion::desconectar(); /* Desconectar: Aplicar una desconexion ya que se completo la consulta*/
        mostrarResultado($resultado);
        echo "<script type='text/javascript'>mostrarResultado();</script>";
    }
?>
<script type="text/javascript">
    $(document).ready(function(){$('#form-busqueda').attr('action','skill');});
</script>
<?php include('template/footer.php');?>