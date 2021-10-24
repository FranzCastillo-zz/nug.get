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
            <li><a href="solicitar.php">Solicitar</a></li> <!-- Cambiar la extension al momento de implementar php-->
            <li class="active"><a href="ofrecer.php">Ofrecer</a></li>
            <li><a href="form.php">Publicar</a></li>
            </ul>
        </nav>
        <div class="container-fluid" style="height:1000"> <!--AQUI VA TODO EL CONTENIDO DE LA PAGINA-->
            <!--AQUI SE TIENE QUE PONER EL PHP-->
            <?php
                include 'Tablas.php';
                include 'tablaOfrecer.php';
                include 'Vista.php';
                $solicitar = new tablaOfrecer();
                $ingresos =  $solicitar->obtenerIngresos();

                $vista = new Vista();
                $vista -> mostrarPublicaciones($ingresos);
            ?>
            <!--<div class="well">
                <img src="https://image.freepik.com/foto-gratis/bolsa-malla-textil-productos-frutas-verduras-cero-desperdicio-ecologico-reciclado-plastico-reutilizable-concepto-compra-comestibles-sostenible-fondo-plano-laico_419307-1408.jpg" ALIGN="right" width="120" height="120">
                <p class="lead"><b>Venta de Frutas y Verduras</b></p>
                <p style="font-size: medium;" > Se venden frutas y verduras variadas, entregas a domicilio a zonas céntricas.</p>
                <p style="font-size: small;" class="text-muted"> Publicado por: Osvaldo Gonzáles el 20/12/2021</p> 
            </div>
            <div class="well">
                <img src="https://t3.ftcdn.net/jpg/02/39/07/02/240_F_239070250_Sh0Mt5WSxZpxXbCLBFgOB7bTKgQ7siSB.jpg" ALIGN="right" width="120" height="120">
                <p class="lead"><b>Clases de Música Particulares</b></p>
                <p style="font-size: medium;"> Damos clases de cualquier instrumento de manera particular, en horarios flexibles.</p>
                <p style="font-size: small;" class="text-muted"> Publicado por: Ramses Hernández el 25/12/2021</p> 
            </div>
            <div class="well">
                <img src="https://t4.ftcdn.net/jpg/01/98/37/83/240_F_198378343_YbnLsmXY1cZQsbaXucyFeVuCHvBWp7nD.jpg" ALIGN="right" width="120" height="120">
                <p class="lead"><b>Ropa Importada</b></p>
                <p style="font-size: medium;"> Traemos ropa y accesorios de distintos estilos, siguenos en nuestra página de Instagram.</p>
                <p style="font-size: small;" class="text-muted"> Publicado por: Lucia Pérez el 1/10/2021</p> 
            </div>
            <div class="well">
                <img src="https://cdn-icons-png.flaticon.com/128/931/931950.png" ALIGN="right" width="120" height="120">
                <p class="lead"><b>Pasteles Pastelosos</b></p>
                <p style="font-size: medium;"> Encarga con nostros tu pastel, de cualquier tipo de relleno y estilo que desees!.</p>
                <p style="font-size: small;" class="text-muted"> Publicado por: Rosio De León el 15/01/2021</p> 
            </div>-->
        </div>
    </body>
</html>