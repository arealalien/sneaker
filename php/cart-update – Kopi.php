<?php

$total = 0;
$to = 0;
$output = "";

if (!empty($_SESSION['mycart'])) {

    foreach ($_SESSION['mycart'] as $key => $value) {

        $output .= '
                <div class="cart-item">
                    <div class="cart-item-image-wrapper crt-itm-img-1">

                    </div>
                    <div class="cart-item-info-wrapper flexbox-col-left-ns">
                        <h3>'.$value['name'].'</h3>
                        <p>'.$value['quantity'].'</p>
                    </div>
                    <div class="cart-item-price-wrapper flexbox">
                        <p>$199</p>
                    </div>
                    <div class="cart-item-last flexbox">
                        <div cursor-class="pointer" id="'.$value['name'].'" class="cart-item-remove remove flexbox">
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
                </div>
        ';

    }

    $to = count($_SESSION['mycart']);

} else {

}

$data['da'] = $to;
$data['out'] = $output;

echo json_encode($data);
