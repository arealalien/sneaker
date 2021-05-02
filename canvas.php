<?php

require "php/misc/config.php";
$product = "";
$productPrice = "";

//if (isset($_SESSION["cart"]))

if (strpos($_SERVER['REQUEST_URI'], "&product=sneaker")!==false) {
    $product = "SNEAKER";
    $productPrice = "199";
} else if (strpos($_SERVER['REQUEST_URI'], "&product=90s")!==false) {
    $product = "90s";
    $productPrice = "129";
} else if (strpos($_SERVER['REQUEST_URI'], "&product=blue")!==false) {
    $product = "Blue";
    $productPrice = "219";
} else if (strpos($_SERVER['REQUEST_URI'], "&product=cardboard")!==false) {
    $product = "Cardboard";
    $productPrice = "349";
} else if (strpos($_SERVER['REQUEST_URI'], "&product=tekken")!==false) {
    $product = "Tekken";
    $productPrice = "299";
} else {
    $product = "Default";
    $productPrice = "199";
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
        <div class="shoebox-info view-width flexbox-col-left">
            <h1 id="product-name"><?php echo $product ?></h1>
            <p>$<?php print $productPrice ?></p>
            <div class="button-wrapper">
                <button id="buy-button" cursor-class="pointer" type="button" class="button btn-primary">Buy and pick up<div class="btn-secondary"></div></button>
            </div>
        </div>
    </div>
</main>

<script type="text/javascript">
    let name = $("#product-name").html();
    let namedb = {name: name}

    $('#buy-button').click(function(){
        $.ajax({
            type: "POST",
            url: "php/cart-update.php",
            data: namedb,
            success: function(msg){

            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("Some error occured");
            }
        });
    });
</script>

<!-- Footer -->
<?php require "structure/items/footer.php" ?>

</body>
</html>