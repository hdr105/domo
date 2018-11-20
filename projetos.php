<?php
require_once("connection.php");

$select="SELECT * FROM categories where parent_category = 0 and category_scope = 2";
$categories = mysqli_query($connect,$select);

?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
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
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,500,700,700italic'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:100,300,400,400italic,500,700,700italic'>
    <link rel='stylesheet' href='assets/css/global.css'>
    <link rel='stylesheet' href='assets/css/structure.css'>
    <link rel='stylesheet' href='assets/css/style.css'>
    <link rel='stylesheet' href='assets/css/custom.css'>
    <link rel="stylesheet" type="text/css" href="assets/plugins/rs-plugin/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/rs-plugin/css/navigation.css">
</head>
<body class="color-custom style-default button-default layout-full-width if-border-hide no-content-padding header-classic minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-left menu-link-color menuo-right menuo-no-borders mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-sticky be-reg-2095">
    <div id="Wrapper">
      <div id="Header_wrapper" class="bg-parallax" data-enllax-ratio="0.3">
        <?php include 'partials/header.php';?>
        <div id="Subheader" >
          <div class="container">
              <div class="column one">
                  <h1 class="title">projetos</h1>
              </div>
          </div>
      </div>
  </div>
  <div id="Content">
      <div class="content_wrapper clearfix">
          <div class="sections_group">
              <div class="entry-content">
                <?php
                while($category=mysqli_fetch_array($categories)){
                    ?>
                    <div class="section mcb-section" style="padding-top:120px; padding-bottom:80px;">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one-third  valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column ">
                                        <div class="column_attr clearfix animate" data-anim-type="fadeInRight">
                                            <h2 style=" font-size: 40px; line-height: 50px;"><?=$category['category_name']?></h2>
                                            <hr class="no_line" style="margin: 0 auto 35px;" />
                                            <h4><?=$category['category_description']?></h4>
                                            <hr class="no_line" style="margin: 0 auto 35px;" />
                                        
                                             <a class="button  button_right button_size_2 button_theme button_js kill_the_icon"  id="ficha-tecnica">
                                                    <span class="button_icon"><i class="icon-right-open-big"></i></span>
                                                    <span class="button_label">Solicitar Contacto</span>
                                                </a>
                                                <div class="" id="form-ficha" style="display:none">
                                                  <div id="contactWrapper">
                                                      <form id="contactform" class="get_orcamento align-center" style="margin-top:30px;">
                                                        <p>Insira os seus dados para receber o link de acesso à ficha técnica por email.</p>
                                                          <div class="column one-second">
                                                              <input placeholder="Nome" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                          </div>
                                                          <div class="column one-second">
                                                              <input placeholder="Entidade/empresa" type="text" name="entidade" id="entidade" size="40" aria-invalid="false" />
                                                          </div>
                                                          <div class="column one-second">
                                                              <input placeholder="Email" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                          </div>
                                                          <div class="column one-second">
                                                              <input placeholder="Telefone" type="text" name="telefone" id="telefone" size="40" aria-invalid="false" />
                                                          </div>
                                                          <div class="column one" style="color:#000;">
                                                            <input type="checkbox" name="vehicle" value="Bike"> <span style="font-size:11px;">Tomei conhecimento e declaro que CONCORDO com os termos e condições</span> <a href="#">Ler mais</a>
                                                          </div>

                                                           <div class="column one">
                                                              <input type="button" value="Enviar" id="submit" onClick="return check_values()">
                                                          </div>
                                                      </form>
                                                  </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap two-third  valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column ">
                                        <div class="column_attr clearfix animate" data-anim-type="fadeIn">
                                            <div class="woocommerce columns-3">
                                                <div class="products_wrapper isotope_wrapper">
        <ul class="products ">
            <?php
            $select="SELECT * FROM categories where parent_category = ".$category['cat_id'];
            $subcategories = mysqli_query($connect,$select);
            $i = 1;
            while($subcategory=mysqli_fetch_array($subcategories)){
            ?>

            <li class="isotope-item post-97 product type-product has-post-thumbnail product_cat-amplifiers product_cat-headphones <?php echo( $i%2 == 0 ? '' : 'first'); ?> instock downloadable shipping-taxable purchasable product-type-simple">
        <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
            <div class="image_wrapper">
                <a href="view_projects.php?subcategory=<?=$subcategory['cat_id']?>">
                    <div class="mask"></div><img style="width: 361px;
height: 174px;" width="600" height="600" src="admin/assets/images/category/<?=$subcategory['category_image']?>" class="scale-with-grid wp-post-image" alt="Relvas de Jardim e Laser" />
                </a>
            </div><a href="relvas-de-jardim-e-laser.php"><span class="product-loading-icon added-cart"></span></a>
        </div>
        <div class="desc  button-stroke">
            <h4><a href="view_projects.php?subcategory=<?=$subcategory['cat_id']?>" style="padding-bottom:15px; border-bottom: 1px solid #d4d4d4;"><?=$subcategory['category_name']?> <i class="icon-right-open-big"></i></a> </h4>
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


                    <?php
                }
                ?>

                <?php include 'partials/footer.php';?>
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
                  &copy; 2018 DOMO SPORTS GRASS    - Todos os direitos reservados - Design by <a target="_blank" rel="nofollow" href="http://becompi.com">Becompi</a>
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
<script type="text/javascript">
    jQuery(document).ready(function ($) {

        $("#ficha-tecnica").click(function(){
            $("#form-ficha").toggle( 1000);
        });
    });
    </script>
</body>
</html>
