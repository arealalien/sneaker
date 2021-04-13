<nav id="navbar" class="flexbox">
    <div class="navbar-inner view-width">
        <!-- Left -->
        <div class="navbar-left">
            <a cursor-class="pointer" class="navbar-icon-wrapper flexbox">
                <?php require "{$rootPath}structure/logo.php" ?>
            </a>
        </div>
        <!-- Right -->
        <div class="navbar-right flexbox-right">
            <div class="navbar-items-wrapper flexbox-right">
                <ul class="navbar-items">
                    <li class="navbar-item flexbox">
                        <a cursor-class="pointer" class="navbar-item-inner flexbox" href="<?php echo $rootPath ?>index.php">
                            <span class="flexbox"><ion-icon name="planet-outline"></ion-icon></span>Home
                        </a>
                    </li>
                    <li class="navbar-item flexbox">
                        <a cursor-class="pointer" class="navbar-item-inner flexbox" href="<?php echo $rootPath ?>products.php">
                            <span class="flexbox"><ion-icon name="search-outline"></ion-icon></span>Products
                        </a>
                    </li>
                    <li class="navbar-item flexbox">
                        <a cursor-class="pointer" class="navbar-item-inner flexbox" href="<?php echo $rootPath ?>purchases.php">
                            <span class="flexbox"><ion-icon name="receipt-outline"></ion-icon></span>Purchases
                        </a>
                    </li>
                    <li id="cart" class="navbar-item flexbox">
                        <a cursor-class="pointer" class="navbar-item-inner flexbox" href="<?php echo $rootPath ?>cart.php">
                            <span class="flexbox"><ion-icon name="bag-outline"></ion-icon></span>Cart
                        </a>
                    </li>
                    <!-- Note -->
                    <div class="shopping-cart-note flexbox">
                        <span class="shopping-cart-note-icon flexbox">
                            <ion-icon name="folder-open-outline"></ion-icon>
                            Empty
                        </span>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>