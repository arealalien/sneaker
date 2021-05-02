<?php

$rootPath = "";
require "php/misc/config.php";

?>
<!DOCTYPE html>
<html lang="no">
<head>
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
<header id="products-header">

</header>

<!-- Main -->
<main id="main" class="flexbox-col">

    <!-- Featured Row -->
    <div class="featured-row flexbox-col-right view-width">
        <p>Discover</p>
        <h3 class="bebas">Latest Sneakers</h3>
        <div class="featured-row-inner">
            <div cursor-class="pointer" class="featured-item flexbox">
                <div class="featured-item-title feat-top">
                    <h3>Summer Collection</h3>
                </div>
                <div class="featured-item-title feat-bottom">
                    <h3>Summer Collection</h3>
                </div>
                <div class="featured-discover">
                    <p class="bebas">Discorver</p>
                    <div class="featured-discover-bar"></div>
                </div>
                <div class="featured-overlay"></div>
                <img class="featured-item-image" src="images/featured-1.jpg" alt="">
            </div>
            <div cursor-class="pointer" class="featured-item flexbox">
                <div class="featured-item-title feat-top">
                    <h3>Product Name</h3>
                </div>
                <div class="featured-item-title feat-bottom">
                    <h3>Product Name</h3>
                </div>
                <div class="featured-discover">
                    <p class="bebas">Discorver</p>
                    <div class="featured-discover-bar"></div>
                </div>
                <div class="featured-overlay"></div>
                <img class="featured-item-image" src="images/featured-1.jpg" alt="">
            </div>
            <div cursor-class="pointer" class="featured-item flexbox">
                <div class="featured-item-title feat-top">
                    <h3>Product Name</h3>
                </div>
                <div class="featured-item-title feat-bottom">
                    <h3>Product Name</h3>
                </div>
                <div class="featured-discover">
                    <p class="bebas">Discorver</p>
                    <div class="featured-discover-bar"></div>
                </div>
                <div class="featured-overlay"></div>
                <img class="featured-item-image" src="images/featured-1.jpg" alt="">
            </div>
            <div cursor-class="pointer" class="featured-item flexbox">
                <div class="featured-item-title feat-top">
                    <h3>Product Name</h3>
                </div>
                <div class="featured-item-title feat-bottom">
                    <h3>Product Name</h3>
                </div>
                <div class="featured-discover">
                    <p class="bebas">Discorver</p>
                    <div class="featured-discover-bar"></div>
                </div>
                <div class="featured-overlay"></div>
                <img class="featured-item-image" src="images/featured-1.jpg" alt="">
            </div>
        </div>
    </div>

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
        <a cursor-class="pointer" href="canvas.php?&product=sneaker">
            <div class="product-view-item flexbox-col">
                <img class="product-item-image pitem1" src="images/sneakers/sneaker-1.png" alt="">
                <img class="product-item-image pitem2" src="images/sneakers/sneaker-1-front.png" alt="">
            </div>
            <div class="product-info">
                <div class="product-item-top flexbox-col-left">
                    <h3>Sneaker</h3>
                    <p>$149.00</p>
                </div>
            </div>
        </a>
        <a cursor-class="pointer" href="canvas.php?&product=90s">
            <div class="product-view-item flexbox-col">
                <img class="product-item-image pitem1" src="images/sneakers/sneaker-2.png" alt="">
                <img class="product-item-image pitem2" src="images/sneakers/sneaker-2-side.png" alt="">
            </div>
            <div class="product-info">
                <div class="product-item-top flexbox-col-left">
                    <h3>90s</h3>
                    <p>$129.00</p>
                </div>
            </div>
        </a>
        <a cursor-class="pointer" href="canvas.php?&product=blue">
            <div class="product-view-item flexbox-col">
                <img class="product-item-image pitem1" src="images/sneakers/sneaker-3.png" alt="">
                <img class="product-item-image pitem2" src="images/sneakers/sneaker-3-front.png" alt="">
            </div>
            <div class="product-info">
                <div class="product-item-top flexbox-col-left">
                    <h3>Blue</h3>
                    <p>$219.00</p>
                </div>
            </div>
        </a>
        <a cursor-class="pointer" href="canvas.php?&product=cardboard">
            <div class="product-view-item flexbox-col">
                <img class="product-item-image pitem1" src="images/sneakers/sneaker-4.png" alt="">
                <img class="product-item-image pitem2" src="images/sneakers/sneaker-4-front.png" alt="">
            </div>
            <div class="product-info">
                <div class="product-item-top flexbox-col-left">
                    <h3>Cardboard</h3>
                    <p>$349.00</p>
                </div>
            </div>
        </a>
        <a cursor-class="pointer" href="canvas.php?&product=tekken">
            <div class="product-view-item flexbox-col">
                <img class="product-item-image pitem1" src="images/sneakers/sneaker-5.png" alt="">
                <img class="product-item-image pitem2" src="images/sneakers/sneaker-5-front.png" alt="">
            </div>
            <div class="product-info">
                <div class="product-item-top flexbox-col-left">
                    <h3>Tekken</h3>
                    <p>$299.00</p>
                </div>
            </div>
        </a>
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