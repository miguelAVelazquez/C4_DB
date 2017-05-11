<!-- Se hace uso de include para incluir una plantilla y que sea mas facil su modificacion-->
<?php include('template/header.php');?>
<div class="container">
    <!-- Inclusion de la barra de navegacion -->
    <?php include('template/navbar.php');?>
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <!-- Aqui va el contenido que quieras agregar como un saludo o una instruccion -->
                <h1>Bienvenido(a) al sistema de búsqueda de la crónica C4!</h1>
                <h2><strong>Instrucciones:</strong></h2>
                <ul>
                    <li>Selecciona la categoria (Etc item, Armors ,etc...).</li>
                    <li>Elige el método de búsqueda (ID o Nombre).</li>
                    <li>Ingresa el número (en caso de ser ID) o la palabra relacionada (en caso de ser Nombre).</li>
                    <li>Presiona el botón <en>Buscar</en></li>
                </ul>
                <br>
                <center><a class="text-info" href="http://l2devsadmins.net/l2devsAdmins2-0-11/">Visit us L2DevsAdmins</a></center>
            </div>
        </div>
    </div>
</div>

<?php include('template/footer.php');?>