<?php
/**
 * Created by PhpStorm.
 * User: Dominik Kolesar
 * Date: 8. 12. 2015
 * Time: 11:51
 */

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= 'ProjektX/newDesign/';
include_once ($path.'config.php');
include (ROOT.'controllers/ProductPreviewController.php');
include (ROOT.'API/ImageScaling.php');

$productController = new ProductPreviewController();
$product = $productController->getProduct($_GET['product']);
?>

<link rel="stylesheet" type="text/css" href="libraries/css/productPreview.css">

<div id="product-prewiew">

    <div class="product-name">
        <h1><?php echo strtoupper($product['name']);?></h1>
    </div>

    <div id="about-product" class="group">

        <div class="product-slider">
            <?php

            $scaling = new ImageScaling();
            $size = $scaling->productPreviewImage($product['productid']);
            echo '<img src="libraries/img/products/' . $product['productid'] . '/' . $product['productid'] . 'a.jpg" width="' . $size[0] . '" height="' . $size[1] . '">';
            ?>
        </div>

        <div id="product-info" class="group">

            <div class="product-ranking">
            <?php
                $rating = $product['sumofratings'] / $product['numofratings'];
                $id = $product['productid'];

                if(isset($_COOKIE[$id])) {
                    if($_COOKIE[$id] == "true") {
                        for($i = 1; $i <= 5; $i++) {
                            if($i <= $rating) {
                                echo '<img src="libraries/img/star-selected.png">';
                            }
                            else if($i > $rating) {
                                echo '<img src="libraries/img/star.png" style="opacity: 0.5;">';
                            }
                        }
                    }
                    else if($_COOKIE[$id] == "false") {
                        for($i = 1; $i <= 5; $i++) {
                            if($i <= $rating) {
                                echo '<a href="?page=productPreview&product=' . $id . '&rating=' . $i .'"><img src="libraries/img/star-selected.png"></a>';
                            }
                            else if($i > $rating) {
                                echo '<a href="?page=productPreview&product=' . $id . '&rating=' . $i .'"><img src="libraries/img/star.png" style="opacity: 0.5;"></a>';
                            }
                        }
                    }
                } else {
                    for($i = 1; $i <= 5; $i++) {
                        if($i <= $rating) {
                            echo '<a href="?page=productPreview&product=' . $id . '&rating=' . $i .'"><img src="libraries/img/star-selected.png"></a>';
                        }
                        else if($i > $rating) {
                            echo '<a href="?page=productPreview&product=' . $id . '&rating=' . $i .'"><img src="libraries/img/star.png" style="opacity: 0.5;"></a>';
                        }
                    }
                }
            ?>
            </div>

            <div class="product-brand">
                <?php echo strtoupper($product['brand']);?>
            </div>

            <span class="short-describtion">
            <?php echo substr($product['description'],0,200);?>
            </span>

            <form class="cost-form" action="" method="get">
                <span class="cost">
                    <?php echo $product['price'] . ' €';?>
                </span>
                <div class="submit-input">
                <input type="submit" value="BUY" name="BUY">
                </div>
            </form>
        </div>


        </div>


    <div class="description-title">
        <h2> DESCRIPTION</h2>

    </div>

    <div class="description-text">
        <?php echo $product['description'];?>

    </div>



</div>
