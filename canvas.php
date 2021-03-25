<?php $product = ""; ?>
<?php
if (strpos($_SERVER['REQUEST_URI'], "&product=sneaker")!==false) {
    $product = "SNEAKER";
}
else if (strpos($_SERVER['REQUEST_URI'], "&product=blue")!==false) {
    $product = "Blue";
}
else {
    $product = "Default";
}
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <?php $rootPath = ""; ?>
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
    <script src="javascript/models.js" type="module" defer></script>
    <script src="https://threejs.org/build/three.js"></script>
    <script src="javascript/GLTFLoader.js"></script>
    <script src="javascript/BetterOrbitControls.js"></script>
    <!--
        LOCAL:
    <script src="node_modules/three/build/three.js"></script>
    <script src="javascript/GLTFLoader.js"></script>
    <script src="node_modules/three/examples/jsm/controls/OrbitControls.js"></script>
    <script src="javascript/three.js"></script>
    <script src="javascript/GLTFLoader.js"></script>
    <script src="javascript/OrbitControls.js"></script>
        CDN:
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/102/three.js"></script>
    <script src="https://unpkg.com/three@0.126.0/examples/js/loaders/GLTFLoader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three-orbitcontrols@2.110.3/OrbitControls.min.js"></script>
    <script src="https://stemkoski.github.io/Three.js/js/OrbitControls.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>-->
    <!-- =========== -->
    <!-- Stylesheets -->
    <?php require "structure/head/stylesheets.php" ?>
</head>
<body>
<main id="shoebox-main">
    <div class="center flexbox-col">
        <div id="shoebox-wrapper" class="flexbox-col">
            <div class="shoebox-arrows flexbox-space-bet">
                <a class="arrow arrow-left">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="11px" viewBox="0 0 40 11" class="thumb_arrow" version="1.1">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Work---V.06---#FFF" transform="translate(-1031.000000, -968.000000)" stroke="#FFFFFF">
                                <g id="--&gt;" transform="translate(980.000000, 903.000000)">
                                    <g id="Group" transform="translate(51.000000, 65.000000)">
                                        <polyline id="Path" transform="translate(36.500000, 5.500000) rotate(-270.000000) translate(-36.500000, -5.500000) " points="31 8 36.5 3 36.5 3 42 8"/>
                                        <line x1="0.5" y1="5.5" x2="38.5" y2="5.5" id="Line-2" stroke-linecap="square"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
                <a class="arrow arrow-right">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="11px" viewBox="0 0 40 11" class="thumb_arrow" version="1.1">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Work---V.06---#FFF" transform="translate(-1031.000000, -968.000000)" stroke="#FFFFFF">
                                <g id="--&gt;" transform="translate(980.000000, 903.000000)">
                                    <g id="Group" transform="translate(51.000000, 65.000000)">
                                        <polyline id="Path" transform="translate(36.500000, 5.500000) rotate(-270.000000) translate(-36.500000, -5.500000) " points="31 8 36.5 3 36.5 3 42 8"/>
                                        <line x1="0.5" y1="5.5" x2="38.5" y2="5.5" id="Line-2" stroke-linecap="square"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="title-wrapper flexbox-col">
                <h1 class="bebas"><?php echo $product ?></h1>
                <h3>UNDERTITTEL FOR PRODUKT</h3>
            </div>
            <canvas id="shoebox"></canvas>
            <img class="shoebox-image" src="images/design/header.jpg" alt="shoe-background">
        </div>
        <div class="shoebox-info flexbox-col-left">
            <h1 class="bebas"><?php echo $product ?></h1>
        </div>
    </div>
</main>
</body>
</html>