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
    <title>Sneaker - Cart</title>
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

    <!-- Cart -->
    <div class="cart-wrapper view-width">
        <div class="cart-top">
            <h3 class="bebas">My cart</h3>
        </div>
        <div class="cart-items-wrapper">
            <div class="cart-items">
                <!-- Create Elements From Files -->
                <?php

                $i = "0";
                $orders = file_get_contents( "php/cart-items.txt");
                $orderslist = explode(",", $orders);

                if ($orders === "") {
                    print "<p class='quite-gray'>Du har ingenting i handlekurven din</p>";
                } else if ($orders === "SNEAKER,") {
                    print '<div class="cart-item">
                        <div class="cart-item-image-wrapper crt-itm-img-1">
    
                        </div>
                        <div class="cart-item-info-wrapper flexbox-col-left-ns">
                            <h3>Sneaker</h3>
                            <p>Size 44</p>
                        </div>
                        <div class="cart-item-price-wrapper flexbox">
                            <p>$199</p>
                        </div>
                        <div class="cart-item-last flexbox">
                            <div cursor-class="pointer" class="cart-item-remove flexbox">
                                <div class="cart-item-rem-ico flexbox">
                                    <div class="crt-itm-rem-lin1"></div>
                                    <div class="crt-itm-rem-lin2"></div>
                                </div>
                                <!-- Note -->
                                <div class="cart-item-remove-note flexbox">
                                    <span class="cart-item-remove-note-icon flexbox">
                                        <ion-icon name="trash-outline"></ion-icon>
                                        Remove
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>';
                } else {
                    foreach($orderslist as $ordlist) {
                        $i++;
                        print '<div class="cart-item">
                    <div class="cart-item-image-wrapper crt-itm-img-1">

                    </div>
                    <div class="cart-item-info-wrapper flexbox-col-left-ns">
                        <h3>Sneaker</h3>
                        <p>Size 44</p>
                    </div>
                    <div class="cart-item-price-wrapper flexbox">
                        <p>$199</p>
                    </div>
                    <div class="cart-item-last flexbox">
                        <div cursor-class="pointer" class="cart-item-remove flexbox">
                            <div class="cart-item-rem-ico flexbox">
                                <div class="crt-itm-rem-lin1"></div>
                                <div class="crt-itm-rem-lin2"></div>
                            </div>
                            <!-- Note -->
                            <div class="cart-item-remove-note flexbox">
                                <span class="cart-item-remove-note-icon flexbox">
                                    <ion-icon name="trash-outline"></ion-icon>
                                    Remove
                                </span>
                            </div>
                        </div>
                    </div>
                </div>';
                    };
                }

                ?>
            </div>
            <div class="order-details">
                <?php require "php/order-details.php" ?>
                <div class="button-wrapper">
                    <a href="checkout.php">
                        <button cursor-class="pointer" type="button" class="button btn-primary">Go to Checkout<div class="btn-secondary"></div></button>
                    </a>
                </div>
            </div>
        </div>
        <div class="cart-bottom">

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
<script type="text/javascript">
    $(document).ready(function(){

        show_mycart();
        function show_mycart(){
            $.ajax({
                url: "php/show-mycart.php",
                method:"POST",
                dataType:"JSON",
                success:function(data){
                    $("#get_cart").html(data.out);
                    $("#cart-viewer").text(data.da);
                    $("#total").text(data.total);
                }
            });
        }

        setInterval(show_mycart,1000);

    });

    $(document).on("click",".remove",function(){
        let name = $(this).attr("name");

        let action = "delete";

        $.ajax({
            url: "php/cart-update.php",
            method:"POST",
            data:{name:name,action:action},
            dataType:"JSON",
            success:function(data){

            }
        });
    });

    $(document).on("click",".clearall",function(){
        let name = $(this).attr("name");

        let action = "clearall";

        $.ajax({
            url: "ajax/cart_action.php",
            method:"POST",
            data:{name:name,action:action},
            dataType:"JSON",
            success:function(data){

            }
        });
    });
</script>
</html>