<?php
include "./functs/incl.php";
$url = getUrl();
$dirs = getDir($url);

echo $url;exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "views/head.php" ?>
    </head>

    <body data-app-theme="default">
        <?= require_once "views/lib/preload.php" ?>
    </body>

</html>