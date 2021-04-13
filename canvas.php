<?php
    $product = "";
    $imgLink = "";
?>
<?php
if (strpos($_SERVER['REQUEST_URI'], "&product=sneaker")!==false) {
    $product = "SNEAKER";
    $imgLink = "images/sneakers/sneaker-1-bc.jpg";
} else if (strpos($_SERVER['REQUEST_URI'], "&product=90s")!==false) {
    $product = "90s";
    $imgLink = "images/sneakers/sneaker-2-bc.jpg";
} else if (strpos($_SERVER['REQUEST_URI'], "&product=blue")!==false) {
    $product = "Blue";
    $imgLink = "images/sneakers/sneaker-3-bc.jpg";
} else if (strpos($_SERVER['REQUEST_URI'], "&product=cardboard")!==false) {
    $product = "Cardboard";
    $imgLink = "images/sneakers/sneaker-4-bc.jpg";
} else if (strpos($_SERVER['REQUEST_URI'], "&product=tekken")!==false) {
    $product = "Tekken";
    $imgLink = "images/sneakers/sneaker-5-bc.jpg";
} else {
    $product = "Default";
    $imgLink = "images/sneakers/sneaker-1-bc.jpg";
}
?>
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
    <script src="javascript/models.js" type="module" defer></script>
    <script src="https://threejs.org/build/three.js"></script>
    <script src="javascript/GLTFLoader.js"></script>
    <script src="javascript/BetterOrbitControls.js"></script>
    <!-- =========== -->
    <!-- Stylesheets -->
    <?php require "structure/head/stylesheets.php" ?>
    <link rel="stylesheet" type="text/css" href="css/canvas.css">
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
<main id="shoebox-main">
    <div class="center flexbox-col">
        <div id="shoebox-wrapper" class="flexbox-col">
            <div class="shoebox-arrows flexbox-space-bet">
                <a cursor-class="pointer" class="arrow arrow-left">
                    <?php require "structure/arrow.php" ?>
                </a>
                <a cursor-class="pointer" class="arrow arrow-right">
                    <?php require "structure/arrow.php" ?>
                </a>
            </div>
            <canvas cursor-class="grab" id="shoebox"></canvas>
        </div>
        <div class="shoebox-info flexbox-col-left">
            <h1 class="bebas"><?php echo $product ?></h1>
            <h3>UNDERTITTEL FOR PRODUKT</h3>
        </div>
    </div>
</main>

<!-- Footer -->
<?php require "structure/items/footer.php" ?>

</body>
</html>