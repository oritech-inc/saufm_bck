<?php

function getUrl()
{
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        return "https"."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    else
        return "http"."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}
function getDir($u)
{
    return array(
        "css" => $u."assets/css/",
        "ven" => $u."assets/vendor/",
        "jsx" => $u."assets/js/",
        "img" => $u."assets/img/",
        "gui" => $u."views/",
    );
}