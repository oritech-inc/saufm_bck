<?php
    include "functs/incl.php";
    $url = getUrl();
    $dirs = getDir($url);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to South African Union of Food Markets</title>

    <meta name="description" content="Promoting the professional management of markets to the benefit of all participants in the fresh produce industry.">
    <meta name="author" content="Samkelwe Attwel Wakeni, Mathew Davis, and Freshman Systems Web Development">
    <meta name="generator" content="FMS 0.0.1">
    <link rel="shortcut icon" href="assets/img/logo/logo_icon.png">

    <!-- Vendor styles(Bootstrap 5, Bootstrap icons, Fontawesome 6   -->
    <link rel="stylesheet" href="assets/vendor/bs5/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/bi1/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/vendor/fa6/css/fontawesome.min.css">

    <link rel="canonical" href="<?=getUrl()?>">
    <!-- App style   -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Scripts(Jquery, Bootstrap Bundle)  -->
    <script src="assets/vendor/jqr/jquery-3.4.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/vendor/bs5/js/bootstrap.bundle.min.js" ></script>
</head>
<body class="app" data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php
        switch ($url) {
            case "":
                require_once "http.php";
                break;
            default:
                require_once "app.php";
                break;
        }
    ?>

    <!-- JS   -->
    <script src="assets/js/main.js" defer></script>
</body>
</html>