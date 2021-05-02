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

    <form class="checkout view-width" method="post" action="php/order.php">
        <div class="checkout-top">
            <h3 class="bebas">Checkout</h3>
        </div>
        <div class="checkout-inner">
            <div id="checkout-form">
                <h3 class="bebas">Personal Info</h3>
                <p>All fields marked * are required.</p>
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
                        <p>Phone Number*</p>
                        <div class="input-inner flexbox">
                            <ion-icon name="call-outline"></ion-icon>
                            <input id="pnumber" id="phone" class="input" type="tel" placeholder="Phone Number" name="phoneNumber" minlength="8" maxlength="8" aria-label="" required>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="input-grid inpt-grd-1 inpt-grd-crd">
                    <div class="input-wrapper flexbox-col-left-ns">
                        <p>Pickup Time*</p>
                        <div class="input-inner flexbox">
                            <ion-icon name="alarm-outline"></ion-icon>
                            <input id="time" class="input" type="time" name="orderPickupTime" min="09:00" max="18:00" aria-label="" required>
                        </div>
                        <p class="checkout-note">We only allow for pickup the same day as your purchase</p>
                    </div>
                </fieldset>
            </div>
            <div class="order-details">
                <?php require "php/order-details.php" ?>
                <div class="button-wrapper">
                    <button cursor-class="pointer" type="submit" class="button btn-primary">Checkout<div class="btn-secondary"></div></button>
                </div>
            </div>
        </div>
    </form>

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

    // Restricts input for input to the given inputFilter.
    function setInputFilter(textbox, inputFilter) {
        ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
            textbox.addEventListener(event, function() {
                if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                } else {
                    this.value = "";
                }
            });
        });
    }

    setInputFilter(document.getElementById("phone"), function(value) {
        return /^-?\d*$/.test(value); });
</script>
</html>