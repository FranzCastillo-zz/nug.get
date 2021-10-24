<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- BOOTSTRAP IMPLEMENTATION-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!---->
        <title>Solicitar - nug.get</title>
        <link rel = "stylesheet" href = "css/stylesheet.css">
    </head>
    <body>
        <div class="container-fluid" style="background-color:#FFBF69;height:150px;">
            <a href="index.html"><img src="images/nugget-logo-white.png" width="500" height="130"></a>
        </div>
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="200">
            <ul class="nav navbar-nav">
            <li><a href="index.html">Inicio</a></li> 
            <li class="active"><a href="solicitar.php">Solicitar</a></li> <!-- Cambiar la extension al momento de implementar php-->
            <li><a href="ofrecer.php">Ofrecer</a></li>
            <li><a href="form.php">Publicar</a></li>
            </ul>
        </nav>
        <div class="container-fluid" style="height:1000"> <!--AQUI VA TODO EL CONTENIDO DE LA PAGINA-->
            <!--AQUI SE TIENE QUE PONER EL PHP-->
            <?php
                include 'Tablas.php';
                include 'tablaSolicitar.php';
                include 'Vista.php';
                $solicitar = new tablaSolicitar();
                $ingresos =  $solicitar->obtenerIngresos();

                $vista = new Vista();
                $vista -> mostrarPublicaciones($ingresos);
            ?>


            <!--<div class="well">
                <img src="https://cdn-icons-png.flaticon.com/512/79/79693.png" ALIGN="right" width="120" height="120">
                <p class="lead"><b>Impresion de Playeras</b></p>
                <p style="font-size: medium;" >Necesitamos serigrafiado para playeras de equipo de futbol.</p>
                <p style="font-size: small;" class="text-muted"> Publicado por: Osvaldo Gonzáles el 20/12/2021</p> 
            </div>
            <div class="well">
                <img src="https://as1.ftcdn.net/v2/jpg/00/86/04/64/1000_F_86046485_eBot78b6lYMEPxgimydLCIbfbf63Z6n3.jpg" ALIGN="right" width="120" height="120">
                <p class="lead"><b>Libros Usados</b></p>
                <p style="font-size: medium;"> Necesitamos comprar libros nuevos o usados de lectura.</p>
                <p style="font-size: small;" class="text-muted"> Publicado por: Ramses Hernández el 25/12/2021</p> 
            </div>
            <div class="well">
                <img src="https://cdn-icons-png.flaticon.com/512/2731/2731956.png" ALIGN="right" width="120" height="120">
                <p class="lead"><b>Ciudadod de Mascotas</b></p>
                <p style="font-size: medium;"> Necesitamos a una persona que pueda ciudar a un perro de raza labrador por 2 dias.</p>
                <p style="font-size: small;" class="text-muted"> Publicado por: Lucia Pérez el 1/10/2021</p> 
            </div>
            <div class="well">
                <img src="https://t4.ftcdn.net/jpg/02/29/53/11/240_F_229531197_jmFcViuzXaYOQdoOK1qyg7uIGdnuKhpt.jpg" ALIGN="right" width="120" height="120">
                <p class="lead"><b>Enfermero/a</b></p>
                <p style="font-size: medium;"> Necesitamos de un enfermero/a que pueda cuidar a un paciente. Mas info por número de teléfono</p>
                <p style="font-size: small;" class="text-muted"> Publicado por: Rosio De León el 15/01/2021</p> 
            </div>-->
        </div>
    </body>
</html>