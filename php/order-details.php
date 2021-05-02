<h3 class="bebas">Order Details</h3>
<div class="order-details-inner">
    <div class="order-details-top">
        <!-- Create Elements From Files -->
        <?php

        $i = "0";
        $orders = file_get_contents( "php/cart-items.txt");
        $orderslist = explode(",", $orders);

        if ($orders === "") {
            print "<p class='quite-gray'>Du har ingenting i handlekurven din</p>";
        } else if ($orders === "SNEAKER,") {
            print '<div class="order-details-item odr-pc flexbox-space-bet">
                <p>Sneaker</p>
                <p class="order-details-item-price">$199</p>
            </div>';
        } else {
            foreach ($orderslist as $ordlist) {
                $i++;
                print '<div class="order-details-item odr-pc flexbox-space-bet">
                <p>Sneaker</p>
                <p class="order-details-item-price">$199</p>
            </div>';
            };
        }

        ?>
    </div>
    <div class="order-details-bottom flexbox-space-bet">
        <p>Total</p>
        <p id="total-price" class="order-details-item-price">$995</p>
    </div>
</div>

