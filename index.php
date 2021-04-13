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
    <?php require "structure/head/favicons.php" ?>
    <!-- ===== -->
    <!-- Fonts -->
    <?php require "structure/head/fonts.php" ?>
    <!-- ======= -->
    <!-- Scripts -->
    <?php require "structure/head/scripts.php" ?>
    <script src="javascript/product.js" defer></script>
    <!-- =========== -->
    <!-- Stylesheets -->
    <?php require "structure/head/stylesheets.php" ?>
    <!-- ===== -->
    <!-- Icons -->
    <?php require "structure/head/icons.php" ?>
</head>
<body>

<!-- Loading - Pace -->
<div class="pace">
    <div class="pace-progress"></div>
</div>

<!-- Cursor -->
<?php require "structure/cursor.php" ?>

<!-- Navbar -->
<?php require "structure/items/navbar.php" ?>

<!-- Header -->
<header id="header">
    <div class="header-title flexbox">
        <!--<h1 class="view-width">Sneaker</h1>-->
    </div>
    <div class="header-background-wrapper flexbox rellax" data-rellax-speed="-7">
        <!--<img id="header-background" class="header-background" src="images/header-vertical.jpg" alt="">-->
        <video id="header-background" class="header-background" loop autoplay preload="auto">
            <source src="videos/header-2.m4v" type="video/mp4">
        </video>
    </div>
</header>

<!-- Main -->
<main id="main" class="flexbox-col">

    <!-- Animated Bar -->
    <div class="animated-bar pribc flexbox">
        <div class="animated-bar-inner flexbox">
            <h3 class="animated-first bebas">
                <?php require "structure/items/animated-bar-header.php" ?>
            </h3>
            <h3 class="animated-second bebas">
                <?php require "structure/items/animated-bar-header.php" ?>
            </h3>
        </div>
    </div>

    <!-- Product View -->
    <section class="product-view view-width">
        <div cursor-class="pointer" class="product-view-item flexbox-col">
            <div class="product-info">
                <div class="product-item-top">
                    <h3>Name</h3>
                </div>
            </div>
            <img class="product-item-image pitem1" src="images/sneakers/sneaker-1.png" alt="">
            <img class="product-item-image pitem2" src="images/sneakers/sneaker-1-front.png" alt="">
        </div>
        <div cursor-class="pointer" class="product-view-item flexbox-col">
            <div class="product-info">
                <div class="product-item-top">
                    <h3>Name</h3>
                </div>
            </div>
            <img class="product-item-image pitem1" src="images/sneakers/sneaker-2.png" alt="">
            <img class="product-item-image pitem2" src="images/sneakers/sneaker-2-side.png" alt="">
        </div>
        <div cursor-class="pointer" class="product-view-item flexbox-col">
            <div class="product-info">
                <div class="product-item-top">
                    <h3>Name</h3>
                </div>
            </div>
            <img class="product-item-image pitem1" src="images/sneakers/sneaker-3.png" alt="">
            <img class="product-item-image pitem2" src="images/sneakers/sneaker-3-front.png" alt="">
        </div>
        <div cursor-class="pointer" class="product-view-item flexbox-col">
            <div class="product-info">
                <div class="product-item-top">
                    <h3>Name</h3>
                </div>
            </div>
            <img class="product-item-image pitem1" src="images/sneakers/sneaker-4.png" alt="">
            <img class="product-item-image pitem2" src="images/sneakers/sneaker-4-front.png" alt="">
        </div>
        <div cursor-class="pointer" class="product-view-item flexbox-col">
            <div class="product-info">
                <div class="product-item-top">
                    <h3>Name</h3>
                </div>
            </div>
            <img class="product-item-image pitem1" src="images/sneakers/sneaker-5.png" alt="">
            <img class="product-item-image pitem2" src="images/sneakers/sneaker-5-front.png" alt="">
        </div>
    </section>

    <!-- Animated Bar -->
    <div class="animated-bar pribc flexbox">
        <div class="animated-bar-inner flexbox">
            <h3 class="animated-first bebas flexbox">
                <?php require "structure/items/animated-bar-footer.php" ?>
            </h3>
            <h3 class="animated-second bebas flexbox">
                <?php require "structure/items/animated-bar-footer.php" ?>
            </h3>
        </div>
    </div>

</main>

<!-- Footer -->
<?php require "structure/items/footer.php" ?>

</body>
<script>
    paceOptions = {
        elements: true
    };

    // Accepts any class name
    var rellax = new Rellax('.rellax');

    // Video playing with timeout
    let vid = document.querySelector("#header-background");
    vid.autoplay = true;
    vid.volume = 0;
    vid.load();
</script>
</html>