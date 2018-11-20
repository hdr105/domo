<?php
require_once("connection.php");

$select = "SELECT * FROM projects join categories on projects.project_subcategory=categories.cat_id where project_id = " . $_GET['project_id'];
$project = mysqli_query($connect, $select);

$project = mysqli_fetch_assoc($project);

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
                    <h1 class="title">projetos</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="Content" class="project_details">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section"
                         style="padding-top:30px; padding-bottom:30px; background-color:#f8f8f8">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix align_center">
                                            <h6 class="themecolor"><?= $project['category_name'] ?></h6>
                                            <h2><?= $project['project_name'] ?></h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top move-up clearfix"
                                 data-tablet="no-up" data-mobile="no-up">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_image">
                                        <div
                                            class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid"
                                                     src="admin/assets/images/category/<?= $project['category_image'] ?>">
                                            </div>
                                            <hr class="no_line" style="margin:0 auto 35px">

                                            <div class="image_wrapper" style="display: none">
                                                <img class="scale-with-grid" src="assets/images/certificado-01-.png">
                                                <img class="scale-with-grid" src="assets/images/garantia-01-.png">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section equal-height-wrap"
                         style="padding-top:30px; padding-bottom:30px; display: none">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one-second valign-middle clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix" style="padding:0 10% 0 0">
                                            <h3><?= $project['project_name'] ?></h3>
                                            <h6 class="themecolor"><?= $project['category_name'] ?></h6>
                                            <hr class="no_line" style="margin:0 auto 15px">
                                            <?= $project['project_description'] ?>

                                            <hr class="no_line" style="margin:0 auto 15px">
                                            <a class="button  button_right button_size_2 button_theme button_js kill_the_icon"
                                               id="ficha-tecnica">
                                                <span class="button_icon"><i class="icon-right-open-big"></i></span>
                                                <span class="button_label">SOLICITAR FICHA TÉCNICA</span>
                                            </a>
                                            <div class="" id="form-ficha" style="display:none">
                                                <div id="contactWrapper">
                                                    <form id="contactform" class="get_orcamento align-center"
                                                          style="margin-top:30px;">
                                                        <p>Insira os seus dados para receber o link de acesso à ficha
                                                            técnica por email.</p>
                                                        <div class="column one-second">
                                                            <input placeholder="Nome" type="text" name="name" id="name"
                                                                   size="40" aria-required="true" aria-invalid="false"/>
                                                        </div>
                                                        <div class="column one-second">
                                                            <input placeholder="Entidade/empresa" type="text"
                                                                   name="entidade" id="entidade" size="40"
                                                                   aria-invalid="false"/>
                                                        </div>
                                                        <div class="column one-second">
                                                            <input placeholder="Email" type="email" name="email"
                                                                   id="email" size="40" aria-required="true"
                                                                   aria-invalid="false"/>
                                                        </div>
                                                        <div class="column one-second">
                                                            <input placeholder="Telefone" type="text" name="telefone"
                                                                   id="telefone" size="40" aria-invalid="false"/>
                                                        </div>
                                                        <div class="column one" style="color:#000;">
                                                            <input type="checkbox" name="vehicle" value="Bike"> <span
                                                                style="font-size:11px;">Tomei conhecimento e declaro que CONCORDO com os termos e condições</span>
                                                            <a href="#">Ler mais</a>
                                                        </div>

                                                        <div class="column one">
                                                            <input type="button" value="Enviar" id="submit"
                                                                   onClick="return check_values()">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-second valign-middle clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_image">
                                        <div
                                            class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid"
                                                     src="admin/assets/images/projects/<?= $project['project_image'] ?>">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($project['other_image'] != "" && $project['subtitle'] != "" && $project['title'] != "" && $project['description'] != "") {
                        ?>
                        <div class="section mcb-section equal-height-wrap"
                             style="padding-top:30px; padding-bottom:30px; background-color:#f8f8f8; display: none">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one-second valign-middle clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div
                                                class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid"
                                                         src="admin/assets/images/projects/<?= $project['other_image'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second valign-middle clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix" style="padding:0 0 0 10%">
                                                <h6 class="themecolor"><?= $project['subtitle'] ?></h6>
                                                <h3> <?= $project['title'] ?></h3>
                                                <hr class="no_line" style="margin:0 auto 15px">
                                                <?= $project['description'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }

                    if ($project['related_products'] != "") {
                        ?>
                        <div class="section mcb-section"
                             style="padding-top:30px; padding-bottom:30px; background-color:#fff">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_center">
                                                <h3>PRODUTOS UTILIZADOS NESTE PROJECTO</h3>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_image_gallery ">
                                            <style>
                                                #sc_gallery-1 {
                                                    margin: auto;
                                                }

                                                #sc_gallery-1 .gallery-item {
                                                    float: left;
                                                    margin-top: 10px;
                                                    text-align: center;
                                                    width: 33.33%;
                                                }

                                                #sc_gallery-1 img {
                                                    border: 2px solid #cfcfcf;
                                                }

                                                #sc_gallery-1 .gallery-caption {
                                                    margin-left: 0;
                                                }
                                            </style>
                                            <div id='sc_gallery-1'
                                                 class='gallery galleryid-9 gallery-columns-3 gallery-size-thumbnail file flat'>

                                                <?php

                                                $related_products = $project['related_products'];

                                                $related_products = json_decode($related_products);

                                                foreach ($related_products as $key => $value) {
                                                    $select = "SELECT product_image, product_name from products where product_id = " . $value;

                                                    $product_img = mysqli_query($connect, $select);

                                                    $product_img = mysqli_fetch_assoc($product_img);
                                                    ?>


                                                    <dl class='gallery-item'>
                                                        <dt class='gallery-icon landscape'>

                                                            <img
                                                                src="admin/assets/images/products/<?= $product_img['product_image'] ?>"
                                                                class="attachment-thumbnail size-thumbnail">

                                                        </dt>

                                                        <a href='product_details.php?product_id=4<?= $product_img['product_id'] ?>'>
                                                            <h4 style="padding-top: 20px"><?= $product_img['product_name'] ?></h4>
                                                        </a>
                                                    </dl>

                                                    <?php
                                                }
                                                ?>


                                                <br style="clear:both">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <?php include 'partials/orcamento_form.php'; ?>
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
<script type="text/javascript">
    jQuery(document).ready(function ($) {

        $("#ficha-tecnica").click(function () {
            $("#form-ficha").toggle(1000);
        });
    });
</script>
</body>

</html>
