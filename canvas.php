<!DOCTYPE html>
<html lang="no">
<head>
    <?php $rootPath = "" ?>
    <!-- Meta Tags -->
    <?php require "structure/head/meta.php" ?>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Areal Alien">
    <!-- ======= -->
    <!-- General -->
    <title>Sneaker</title>
    <?php require "structure/head/icons.php" ?>
    <!-- ===== -->
    <!-- Fonts -->
    <?php require "structure/head/fonts.php" ?>
    <!-- ======= -->
    <!-- Scripts -->
    <?php require "structure/head/scripts.php" ?>
    <script src="javascript/models.js" defer></script>
    <script src="javascript/three.js"></script>
    <script src="javascript/GLTFLoader.js"></script>
    <!--<script src="javascript/OrbitControls.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/102/three.js"></script>
    <script src="https://unpkg.com/three@0.126.0/examples/js/loaders/GLTFLoader.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <!-- =========== -->
    <!-- Stylesheets -->
    <?php require "structure/head/stylesheets.php" ?>
</head>
<body>
<main id="shoebox-main">
    <nav class="sidebar flexbox-col">
        <div class="navbar-items">
            <ul class="navbar-items-inner flexbox-col">
                <li class="navbar-item"><a><i class="uil uil-shopping-cart"></i></a></li>
                <li class="navbar-item"><a><i class="uil uil-estate"></i></a></li>
            </ul>
        </div>
    </nav>
    <div class="center">
        <div id="shoebox-wrapper" class="flexbox-col">
            <div class="title-wrapper flexbox-col">
                <h1 class="bebas">SNEAKER</h1>
                <h3>UNDERTITTEL FOR PRODUKT</h3>
            </div>
            <canvas id="shoebox"></canvas>
        </div>
    </div>
</main>
</body>
</html>