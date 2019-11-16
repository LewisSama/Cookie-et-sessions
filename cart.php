<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php

        if(isset($_SESSION['shoppingCart'])){

            foreach($_SESSION['shoppingCart'] as $productId){

                if ($productId === 46){
                    echo '<p>One Pecan nuts cookie Cooked By Penny !' . "<img src='assets/img/product-" . $productId . ".jpg'></p>";
                }
                elseif ($productId === 36) {
                    echo '<p>One Chocolate chips cookie Cooked By Bernadette !'. "<img src='assets/img/product-" . $productId . ".jpg'></p>";
                }
                elseif ($productId === 58){
                    echo '<p>One Full Chocolate cookie Cooked by Bernadette !'. "<img src='assets/img/product-" . $productId . ".jpg'></p>";
                }
                else{
                    echo '<p>One M&M\'s&copy; cookies Cookie by Penny !'. "<img src='assets/img/product-" . $productId . ".jpg'</p>";
                }
            }
        } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
