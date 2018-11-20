<?php
require_once("connection.php");
    $select="SELECT * FROM slideshow";
$slideshows = mysqli_query($connect,$select);


?>
<section class="example">
    <article class="content">
        <div id="rev_slider_24_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="levano-restaurant-bar" style="background-color:transparent;padding:0px;">
             <div id="rev_slider_24_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
                <ul>
                  <?php
                while($slideshow=mysqli_fetch_array($slideshows)){
                    ?>
       <li data-index="rs-<?=$slideshow['slide_id']?>" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="assets/plugins/rs-plugin/assets/images/drink_cover-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Drinks" data-description="">
                      <img src="admin/assets/images/slideshow/<?=$slideshow['slide_image']?>" alt="" data-lazyload="admin/assets/images/slideshow/<?=$slideshow['slide_image']?>" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                      <div class="tp-caption NotGeneric-SubTitle tp-resizeme" id="slide-<?=$slideshow['slide_id']?>-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['250','300','180','130']" data-fontsize="['30','30','20','20']" data-lineheight="['59','59','40','40']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeOut;s:1000;e:Power3.easeOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; line-height: 59px;"><?=$slideshow['text_1']?>
                      </div>
                      <div class="tp-caption Restaurant-Display tp-resizeme" id="slide-<?=$slideshow['slide_id']?>-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','1','1']" data-y="['top','top','top','top']" data-voffset="['300','380','212','160']" data-fontsize="['60','60','40','40']" data-lineheight="['60','60','40','40']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeOut;s:1000;e:Power3.easeOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 60px;"><?=$slideshow['text_2']?>
                      </div>
                      <div class="tp-caption Restaurant-Price tp-resizeme" id="slide-<?=$slideshow['slide_id']?>-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','3','3']" data-y="['top','top','top','top']" data-voffset="['380','472','300','250']" data-fontsize="['30','30','20','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeOut;s:1000;e:Power3.easeOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1200" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><?=$slideshow['text_3']?>
                      </div>
                      <div class="tp-caption Restaurant-Button rev-btn " id="slide-<?=$slideshow['slide_id']?>-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','2','2']" data-y="['top','top','top','top']" data-voffset="['470','617','350','300']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(0, 0, 0, 0);bc:rgba(255, 224, 129, 1.00);" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="2200" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-83","delay":""}]' data-responsive_offset="on" data-responsive="off" style="z-index: 8; white-space: nowrap;letter-spacing:3px;"><a href="<?=$slideshow['text_link']?>"> saiba mais </a>
                      </div>
                  </li>
                    <?php
                  }
                    ?>
                  
                </ul>

                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->

    </article>
</section>
