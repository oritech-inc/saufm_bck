<?php
    include "./functs/incl.php";
    $url = getUrl();
    $dirs = getDir($url);
    ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="Promoting the professional management of markets to the benefit of all participants in the fresh produce industry.">
<meta name="author" content="Samkelwe Attwel Wakeni, Mathew Davis, and Freshman Systems Web Development">
<meta name="generator" content="FMS 0.0.1">
<link rel="shortcut icon" href="<?=$dirs['img'];?>logo/logo_icon.png">
<!--<title>Welcome to South African Union of Food Markets</title>-->

<link rel="canonical" href="<?=getUrl()?>">
<!-- App style   -->
<link rel="stylesheet" href="<?=$dirs['css'];?>app.css">

<!-- Vendor styles(Bootstrap 5, Bootstrap icons, Fontawesome 6   -->
<link rel="stylesheet" href="<?=$dirs['ven'];?>bs5/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=$dirs['ven'];?>bi1/bootstrap-icons.min.css">
<link rel="stylesheet" href="<?=$dirs['ven'];?>fa6/css/fontawesome.min.css">

<!-- Scripts(Jquery, Bootstrap Bundle)  -->
<script type="text/javascript" src="<?=$dirs['ven'];?>jqr/jquery.min.js" ></script>
<script type="text/javascript" src="<?=$dirs['ven'];?>bs5/js/bootstrap.bundle.min.js" ></script>

<!-- JS   -->
<script src="<?=$dirs['css'];?>js/main.js" ></script>