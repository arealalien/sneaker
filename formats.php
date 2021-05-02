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
    <title>Sneaker - Checkout</title>
    <?php require "structure/head/favicons.php" ?>
    <!-- ===== -->
    <!-- Fonts -->
    <?php require "structure/head/fonts.php" ?>
    <!-- ======= -->
    <!-- Scripts -->
    <?php require "structure/head/scripts.php" ?>
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

    <div class="formats view-width">

        <div class="formats-inner">
            <div class="formats-item">
                <h3>.ai</h3>
                <p>AI-filtypen representerer en Adobe Illustrator fil. Det er et program der du kan lage vektorbasert grafikk.</p>
            </div>
            <div class="formats-item">
                <h3>.svg</h3>
                <p>SVG eller Scaleable Vector Graphics er et XML-basert filformat for markeringsspråk som beskriver todimensjonal vektorgrafikk.</p>
            </div>
            <div class="formats-item">
                <h3>.jpg</h3>
                <p>jpg (forkortelsen av jpeg) er et bildeformat. Dette bildeformatet bruker en komprimeringsmetode med kvalitetstap, men til gjengjeld blir filene oftest mye mindre enn ved bruk av bildeformater som bruker komprimeringsmetoder uten kvalitetstap.</p>
            </div>
            <div class="formats-item">
                <h3>.png</h3>
                <p>png (Portable Network Graphics) er et bildeformat uten kvalitetstap. Hver piksel i et PNG-bilde kan inneholde grader av gjennomsiktighet.</p>
            </div>
        </div>

    </div>

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
</script>
</html>