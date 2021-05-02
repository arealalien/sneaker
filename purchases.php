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

<!-- Main -->
<main id="main" class="flexbox-col">

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