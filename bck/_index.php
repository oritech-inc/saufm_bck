<?php
//    $root = $_SERVER['DOCUMENT_ROOT']."/saufm/";
    $root = getcwd();
//    echo $root;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>South African Union of Food Markets | Welcome</title>

    <meta name="description" content="Promoting the professional management of markets to the benefit of all participants in the fresh produce industry.">
    <meta name="author" content="Samkelwe Attwel Wakeni, Mathew Davis, and Freshman Systems Web Development">
    <meta name="generator" content="FMS 0.0.1">
    <link rel="shortcut icon" href="./img/logo/logo_icon.png">

    <!-- Vendor styles(Bootstrap 5, Bootstrap icons, Fontawesome 6   -->
    <link rel="stylesheet" href="css/vendor/bs5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/vendor/bi1/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/vendor/fa6/css/fontawesome.min.css">

    <!-- Scripts(Jquery, Bootstrap Bundle   -->
    <script type="text/javascript" src="js/jquery.min.js" async defer></script>
    <script type="text/javascript" src="css/vendor/bs5/js/bootstrap.bundle.min.js" async defer></script>

    <!-- App style   -->
    <link rel="stylesheet" href="css/app.css">

</head>

<body>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Main App container  -->
    <main id="main-app">
        <header id="header">

        </header>
        <section id="sections">

        </section>
        <footer>

        </footer>

        <!-- Navbar -->
        <?php require_once './navbar.php' ?>

        <!-- Content -->
        <?php require_once './slider.php' ?>
    </main>


    <!-- App scrips   -->
    <script src="js/app.js" async defer></script>
</body>

</html>