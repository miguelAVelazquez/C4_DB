<!-- ESTO ES UNA PAGINA CON DISEÑO DE BOOTSTRAP-->
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CUALQUIER OTRO TAG VA DEBAJO DE AQUI -->

    <title>Inicio</title>
    <!-- Hojas de estilo de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    <!-- Hoja de estilo CSS -->
    <link href="css/sitio.css" rel="stylesheet">

</head>
<body>
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Inicio</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="etc_item.php">Etc item<span class="sr-only">(current)</span></a></li>
                    <li><a href="armor.php">Armors</a></li>
                    <li class="active"><a href="weapon.php">Weapons</a></li>
                    <li><a href="npc.php">Npcs</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="row">
        <div class="col-md-12">
            <form method="post" action="weapon.php" >
                <div class="row">
                    <div class="col-md-1">
                        <div class="radio">
                            <label>
                                <input type="radio" name="buscar"  value="id" checked>ID
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label>
                                <input type="radio" name="buscar" value="nombre">Nombre
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="dato">
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-default" id="buscar">Buscar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>item_id</th>
                        <th>name</th>
                        <th>bodypart</th>
                        <th>crystallizable</th>
                        <th>crystal_type</th>
                        <th>weaponType</th>
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
                        $consultaSQL = "SELECT * FROM weapon WHERE item_id = '$dato'";
                    }
                    else if ($radio =="nombre" && $dato != "")
                    {
                        $consultaSQL = "SELECT * FROM weapon WHERE name LIKE '%$dato%'";
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
                        $con = Conexion::desconectar(); /* Comentario2: Aplicar una desconexion ya que se completo la consulta*/
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>