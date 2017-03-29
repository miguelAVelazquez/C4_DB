<!-- Se hace uso de include para incluir una plantilla y que sea mas facil su modificacion-->
<?php include('template/header.php');?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="container">
    <!-- Inclusion de la barra de navegacion -->
    <?php include('template/navbar.php');?>
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <!-- Aqui va el contenido que quieras agregar como un saludo o una instruccion -->
                <h1>Welcome to the search system for Scions of Destiny!</h1>
                <h2><strong>Instructions:</strong></h2>
                <ul>
                    <li>Select the category (Etc item, Armors, etc ...).</li>
                    <li>Select the search method (ID and Name).</li>
                    <li>Enter the number (in case of ID) or the related word (in case of name).</li>
                    <li>Press the <en>Search</en> button.</li>
                </ul>
                <br>
                <div class="alert alert-info" role="alert">
                    <strong>Note:</strong> In case of not show is because no record was found.
                </div>
                <center>
                    <span class="label label-primary"><a href="http://l2devsadmins.net/l2devsAdmins2-0-11/">Visit us L2DevsAdmins</span>
                </center>
            </div>
        </div>
    </div>
</div>
<?php include('template/footer.php');?>