
<main id="app-content">
    <!-- Preloader and navbar  -->
    <?php
//        include "views/lib/preload.php";
        include_once "views/lib/nav.php";
    ?>

    <!-- Main App container  -->
    <div class="d-flex flex-column align-items-center align-items-center justify-content-center" id="app-container">

        <!-- Header Content -->
        <header class="container-fluid p-0 m-0" id="header">
            <?php
                include_once "views/welcome/slider.php";
            ?>
        </header>

        <!-- Sections Content -->
        <section class="container-fluid align-items-center text-center justify-content-center" id="sections">
            <?php
            include_once "views/sections/welcome.php";
            include_once "views/sections/story.php";
            include_once "views/sections/value.php";
            include_once "views/sections/counter.php";
            ?>

        </section>

        <!-- Footer Content -->
        <footer class="container-fluid p-0 m-0 opacity-75" id="footer">
            <?php
                include_once "views/lib/footer.php";
            ?>

        </footer>
    </div>
</main>
