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
    <title>Sneaker - Contact</title>
    <?php require "structure/head/favicons.php" ?>
    <!-- ===== -->
    <!-- Fonts -->
    <?php require "structure/head/fonts.php" ?>
    <!-- ======= -->
    <!-- Scripts -->
    <?php require "structure/head/scripts.php" ?>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <!-- =========== -->
    <!-- Stylesheets -->
    <?php require "structure/head/stylesheets.php" ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
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

    <div class="contact view-width">
        <div class="contact-inner">
            <div class="map-wrapper">
                <div cursor-class="grab" id="map"></div>
            </div>
            <div id="contact-form">
                <h3 class="bebas">Contact</h3>
                <p>All fields marked * are required.</p>
                <p>Address 1922, Haukøy</p>
                <fieldset class="input-grid inpt-grd-2">
                    <div class="input-wrapper">
                        <p>First Name*</p>
                        <div class="input-inner flexbox">
                            <ion-icon name="person-outline"></ion-icon>
                            <input id="fname" class="input" placeholder="First Name" name="fname" aria-label="" required>
                        </div>
                    </div>
                    <div class="input-wrapper flexbox-col-left-ns">
                        <p>Last Name*</p>
                        <div class="input-inner flexbox">
                            <ion-icon name="add-outline"></ion-icon>
                            <input id="lname" class="input" placeholder="Last Name" name="lname" aria-label="" required>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="input-grid inpt-grd-1">
                    <div class="input-wrapper flexbox-col-left-ns">
                        <p>Email*</p>
                        <div class="input-inner flexbox">
                            <ion-icon name="at-outline"></ion-icon>
                            <input id="mail" class="input" type="email" placeholder="Email" aria-label="" required>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="input-grid inpt-grd-2">
                    <div class="input-wrapper flexbox-col-left-ns">
                        <p>&nbsp</p>
                        <a href="checkout.php">
                            <button cursor-class="pointer" type="button" class="button btn-primary">Send<div class="btn-secondary"></div></button>
                        </a>
                    </div>
                </fieldset>
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

    var map = L.map('map').setView([70.044785, 21.240332], 13.3);
    L.tileLayer('https://opencache.statkart.no/gatekeeper/gk/gk.open_gmaps?layers=topo4&zoom={z}&x={x}&y={y}', {
        attribution: '<a href="http://www.kartverket.no/">Kartverket</a>'
    }).addTo(map);
    var marker = L.marker([70.044785, 21.240332]).addTo(map);
</script>
</html>