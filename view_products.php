<?php
require_once("connection.php");

$select = "SELECT * FROM products join categories on products.product_subcategory=categories.cat_id where product_subcategory = " . $_GET['subcategory'];
$products = mysqli_query($connect, $select);

$select = "SELECT category_name from categories where cat_id = " . $_GET['subcategory'];

$cats = mysqli_query($connect, $select);

$cat = mysqli_fetch_array($cats);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>
<html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Domo Sports Grass</title>
    <meta name="description" content="">
    <meta name="author" content="Becompi">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,500,700,700italic'>
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css?family=Montserrat:100,300,400,400italic,500,700,700italic'>
    <link rel='stylesheet' href='assets/css/global.css'>
    <link rel='stylesheet' href='assets/css/structure.css'>
    <link rel='stylesheet' href='assets/css/style.css'>
    <link rel='stylesheet' href='assets/css/custom.css'>
    <link rel="stylesheet" type="text/css" href="assets/plugins/rs-plugin/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/rs-plugin/css/navigation.css">
</head>
<body
    class="color-custom style-default button-default layout-full-width if-border-hide no-content-padding header-classic minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-left menu-link-color menuo-right menuo-no-borders mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-sticky be-reg-2095">
<div id="Wrapper">
    <div id="Header_wrapper" class="bg-parallax" data-enllax-ratio="0.3">
        <?php include 'partials/header.php'; ?>
        <div id="Subheader">
            <div class="container">
                <div class="column one">
                    <h1 class="title"><?= $cat['category_name'] ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section"
                         style="padding-top:120px; padding-bottom:80px; background-color:#f1f1f1;">
                        <div class="section_wrapper mcb-section-inner">

                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column ">
                                        <div class="column_attr clearfix animate" data-anim-type="fadeIn">
                                            <div class="woocommerce columns-3">
                                                <div class="products_wrapper isotope_wrapper">
                                                    <ul class="products ">
                                                        <?php
                                                        $i = 1;
                                                        while ($product = mysqli_fetch_array($products)) {
                                                            ?>

                                                            <li class="isotope-item post-96 product type-product has-post-thumbnail product_cat-amplifiers product_cat-headphones <?php echo($i % 2 == 0 ? '' : 'first'); ?> instock downloadable shipping-taxable purchasable product-type-simple">
                                                                <div
                                                                    class="image_frame scale-with-grid product-loop-thumb"
                                                                    ontouchstart="this.classList.toggle('hover');">
                                                                    <div class="image_wrapper">
                                                                        <a href="product_details.php?product_id=<?= $product['product_id'] ?>">
                                                                            <div class="mask"></div>
                                                                            <img style="height: 315px;" width="600"
                                                                                 height="600"
                                                                                 src="admin/assets/images/products/<?= $product['product_image'] ?>"
                                                                                 class="scale-with-grid wp-post-image"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <a href="product_details.php?product_id=<?= $product['product_id'] ?>"><span
                                                                            class="product-loading-icon added-cart"></span></a>
                                                                </div>
                                                                <div class="desc">
                                                                    <h4>
                                                                        <a href="product_details.php?product_id=<?= $product['product_id'] ?>"
                                                                           style="padding-bottom:15px; border-bottom: 1px solid #d4d4d4;"> <?= $product['product_name'] ?>
                                                                            <i class="icon-right-open-big"></i></a></h4>
                                                                </div>
                                                            </li>

                                                            <?php
                                                            $i++;
                                                        }
                                                        ?>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include 'partials/footer.php'; ?>
                </div>
            </div>
        </div>
    </div>
    <footer id="Footer" class="clearfix">
        <div class="footer_copy">
            <div class="container">
                <div class="column one">
                    <a id="back_to_top" class="button button_js" href="#"><i class="icon-up-open-big"></i></a>
                    <div class="copyright">
                        &copy; 2018 DOMO SPORTS GRASS - Todos os direitos reservados - Design by <a target="_blank"
                                                                                                    rel="nofollow"
                                                                                                    href="http://becompi.com">Becompi</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- side menu -->
<div id="Side_slide" class="right dark" data-width="250">
    <div class="close-wrapper">
        <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
    </div>
    <div class="menu_wrapper"></div>
</div>
<div id="body_overlay"></div>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/mfn.menu.js"></script>
<script src="assets/js/jquery.plugins.js"></script>
<script src="assets/js/jquery.jplayer.min.js"></script>
<script src="assets/js/animations/animations.js"></script>
<script src="assets/js/translate3d.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/email.js"></script>
</body>
</html>
