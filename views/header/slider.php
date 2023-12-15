
<div id="slider" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="500">
            <img src="<?=$dirs['img']?>slider/img_1.jpg" class="d-block w-100" alt="Slider Image 1">
        </div>
        <div class="carousel-item" data-bs-interval="1000">
            <img src="<?=$dirs['img']?>slider/img_2.jpg" class="d-block w-100" alt="Slider Image 2">
        </div>
        <div class="carousel-item" data-bs-interval="1500">
            <img src="<?=$dirs['img']?>slider/img_3.jpg" class="d-block w-100" alt="Slider Image 3">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="<?=$dirs['img']?>slider/img_4.jpg" class="d-block w-100" alt="Slider Image 4">
        </div>
        <div class="carousel-item" data-bs-interval="2500">
            <img src="<?=$dirs['img']?>slider/img_5.jpg" class="d-block w-100" alt="Slider Image 5">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
