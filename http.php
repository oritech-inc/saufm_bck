<?php
$page = '/';
$err = array();
if($page != '404') {
    $err = [
        "status"=>404,
        "name"=>"Page not found",
        "text"=>"Ooops, something went wrong while loading requested url, Click on refresh button below to reload or click on contact button to contact administrator",
    ];
} else {
    $err = [
        "status"=>500,
        "name"=>"Access denied",
        "text"=>"Ooops, your access was denied, Click on refresh button below to reload or click on contact button to contact administrator",
    ];
}
?>

<div class="py-5 m-5 rounded-4 text-center bg-light">
    <img class="d-block mx-auto mb-4" src="<?=$dirs['img'];?>/icons/http/<?=$err["status"]?>.svg" alt="<?=$err["name"]?>" width="202" height="167">
    <h1 class="display-5 fw-bold text-body-emphasis">
        <?=$err["name"]?>
    </h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
            <?=$err["text"]?>
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="/" type="button" class="btn btn-primary btn-xs px-4 gap-3">
                <i class="bi bi-app-indicator"></i> Reload
            </a>
            <button type="button" class="btn btn-outline-secondary btn-xs px-4">Secondary</button>
        </div>
    </div>
</div>