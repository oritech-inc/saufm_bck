

<div id="img-slider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#img-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#img-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#img-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#img-slider" data-bs-slide-to="3" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#img-slider" data-bs-slide-to="4" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?=$dirs['img']?>slider/img_1.jpg" class="d-block w-100 img-fluid" alt="Slider 1 image">
        </div>
        <div class="carousel-item">
            <img src="<?=$dirs['img']?>slider/img_2.jpg" class="d-block w-100 img-fluid" alt="Slider Image 2">
        </div>
        <div class="carousel-item">
            <img src="<?=$dirs['img']?>slider/img_3.jpg" class="d-block w-100 img-fluid" alt="Slider Image 3">
        </div>
        <div class="carousel-item">
            <img src="<?=$dirs['img']?>slider/img_4.jpg" class="d-block w-100 img-fluid" alt="Slider Image 4">
        </div>
        <div class="carousel-item">
            <img src="<?=$dirs['img']?>slider/img_5.jpg" class="d-block w-100 img-fluid" alt="Slider Image 5">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#img-slider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#img-slider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>