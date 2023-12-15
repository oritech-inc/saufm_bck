
<!-- Preloader  -->
<?= require_once "views/lib/preload.php" ?>


<main id="main-app">

    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Main App container  -->
    <div class="d-flex flex-column align-items-center" id="app-content" hidden="hidden">

        <!-- Header Content -->
        <header class="container-fluid p-0 m-0" id="header">
            <?php
                include_once "header/navbar.php";
                include_once "header/slider.php";
            ?>
        </header>

        <section class="container-fluid p-0 m-0" id="sections">
            <?php
            include_once "sections/sections.php";
            ?>
        </section>

        <footer id="footer">
            <!-- Footer Content -->
            <?php
            include_once "./footer.php";
            ?>
        </footer>

        <!-- To top -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-chevron-double-up"></i>
        </a>

    </div>
</main>