<?php 

$Nombre_web = "Garnica";

$Facebook = "https://www.youtube.com/watch?v=9vMLTcftlyI&list=RDiHLmSXJLH8E&index=5";
$Whatsapp = "https://wa.me/523332566484";
$Youtube = "https://www.youtube.com/watch?v=9vMLTcftlyI&list=RDiHLmSXJLH8E&index=5";


?>

<!doctype html>
<html>

<head>

    <!-- META TAG OBLIGATORIOS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="lang" content="es-ES" />

    <!--    Librerias Principales   -->

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <!-- BOOSTRAP CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <!-- POPPER JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>

    <!-- unpkg TRANSICIONES 
    <script src="https://unpkg.com/@barba/core"></script>
    <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
    <script src="js/transiciones.js"></script>
    -->

    <!-- MAPA LeafLet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <link rel="stylesheet" href="css/mapa.css">
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <script src="js/mapa.js"></script>

    <!-- FONT AWESOME ICONOS -->
    <script src="https://kit.fontawesome.com/874d8b6408.js" crossorigin="anonymous"></script>

    <!--Script personal-->
    <script src="js/js-general.js"></script>
    <script src="js/eventosonclick.js"></script>
    <script src="js/owl.js"></script>

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl/owl.theme.default.min.css">
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ownframework.css">
    <link rel="stylesheet" href="css/vectores.css">
    <link rel="stylesheet" href="css/moviles.css">

    <!-- SIDEBAR SOCIAL -->
    <link rel="stylesheet" href="css/sidebarsocial.css">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/ico/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- TITULO -->
    <title><?php echo $Nombre_web ?></title>

</head>

</html>