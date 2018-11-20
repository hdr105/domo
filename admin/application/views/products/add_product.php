
<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Gerir produto

        </h1>
    </div>
    <!-- END PAGE TITLE -->

</div>
<!-- END PAGE HEAD-->
<!-- BEGIN PAGE BREADCRUMB -->
<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="#">Home</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="#">Produto</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="#">Gerir Produto</a>
        
    </li>
</ul>

<!--     Start     -->

<?php

if($this->session->flashdata("error") != ""){
    ?>

    <div class="alert alert-danger">
        <?php echo $this->session->flashdata("error"); ?>
    </div>

    <?php
}

?>
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">

            <span class="caption-subject font-blue-hoki bold uppercase">Gerir produto</span>

        </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>
            
            
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="" class="horizontal-form" method="POST" enctype="multipart/form-data">
            <div class="form-body">
            <h3 class="form-section">Informação do produto</h3>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        $product_name_error = form_error('product_name');
                        ?>
                        <div class="form-group <?php echo ($product_name_error != "" ? 'has-error' : '') ?> ">
                            <label class="control-label">Nome do produto</label>
                            <input type="text"  class="form-control product_name" name="product_name" value="<?php echo set_value("product_name") ?>">
                            <span class="help-block"><?php echo $product_name_error?></span>
                            
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <?php
                        $product_category_error = form_error('product_category');
                        ?>
                        <div class="form-group <?php echo ($product_category_error != '' ? 'has-error' : '') ?>">
                            <label>Categoria</label>
                            <select class="form-control select2 product_category" name="product_category">
                                <?php
                                foreach ($product_category as $key => $value) {
                                    echo "<option value='".$value->cat_id."' >".$value->category_name."</option>";
                                }

                                ?>
                            </select>
                            <span class="help-block"><?php echo $product_category_error?></span>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <?php 
                        $product_subcategory_error = form_error('product_subcategory');
                        ?>
                        <div class="form-group <?php 
                        if($product_subcategory_error !=''){
                            echo 'has-error';
                        }

                        $product_subcategory = set_value('product_subcategory');
                        ?>">
                        <label>Sub Categoria</label>
                        <select class="form-control select2 product_subcategory" name="product_subcategory">
                        </select>
                        <span class="help-block"><?php echo $product_subcategory_error ?></span>
                    </div>
                </div>
                <!--/span-->
                <div class="col-md-4">
                    <?php 
                    $product_image_error = form_error('product_image');
                    ?>
                    <div class="form-group <?php echo ($product_image_error != '' ? 'has-error' : '') ?>">
                        <label for="exampleInputFile1">Imagem</label>
                        <input type="file" name="product_image">
                        <span class="help-block"><?php echo $product_image_error?></span>

                    </div>
                </div>
                <!--/span-->
                   <?php
                if (isset($product) && $product->product_image != "") {
                    ?>
                     <div class="col-md-2">
                     <img src="<?php echo base_url().PRODUCT_IMAGE_UPLOAD_PATH.$product->product_image ?>" width="80px" height="80px">
                </div>
                   <?php 
                }
                ?>
            </div>
            <!--/row-->
            <div class="row">
                <div class="col-md-12">
                    <?php $product_description_error = form_error('product_description');
                    $product_description  = set_value("product_description");

                    if ($product_description == "" && isset($product)) {
                        
                        $product_description = $product->product_description;
                    }

                    ?>
                    <div class="form-group <?php 
                    if($product_description_error!='')
                    {
                        echo 'has-error';
                    }
                    ?>">
                    <label>Descrição</label>
                    <span class="help-block"><?php echo $product_description_error ?></span>
                    <textarea class="form-control summernote product_description" name="product_description" rows="8"><?php echo $product_description; ?></textarea>

                </div>
            </div>
            <!--/span-->

            <!--/span-->
        </div>
        <!--/row-->

        <h3 class="form-section">Outra informação</h3>
           <div class="row">
                    <div class="col-md-6">
                        <?php
                        $title_error = form_error('title');
                        ?>
                        <div class="form-group <?php echo ($title_error != "" ? 'has-error' : '') ?> ">
                            <label class="control-label">Título</label>
                            <input type="text"  class="form-control title" name="title" value="<?php echo set_value("title") ?>">
                            <span class="help-block"><?php echo $title_error?></span>
                            
                        </div>
                    </div>
                    <!--/span-->
                       <div class="col-md-6">
                        <?php
                        $subtitle_error = form_error('subtitle');
                        ?>
                        <div class="form-group <?php echo ($subtitle_error != "" ? 'has-error' : '') ?> ">
                            <label class="control-label">Sub Título</label>
                            <input type="text"  class="form-control subtitle" name="subtitle" value="<?php echo set_value("subtitle") ?>">
                            <span class="help-block"><?php echo $subtitle_error?></span>
                            
                        </div>
                    </div>
                </div>
                <!--/row-->
                <div class="row">

                       <div class="col-md-6">
                        <?php
                        $product_badges_error = form_error('product_badges');
                        ?>
                        <div class="form-group <?php echo ($product_badges_error != '' ? 'has-error' : '') ?>">
                            <label>Badges</label>
                            <select class="form-control select2 product_badges" name="product_badges[]" multiple="">
                                <?php
                                foreach ($badges as $key => $value) {
                                    echo "<option value='".$value->badge_id."' >".$value->badge_name."</option>";
                                }

                                ?>
                            </select>
                            <span class="help-block"><?php echo $product_badges_error?></span>
                        </div>
                    </div>

                <!--/span-->
                <div class="col-md-4">
                    <?php 
                    $other_image_error = form_error('other_image');
                    ?>
                    <div class="form-group <?php echo ($other_image_error != '' ? 'has-error' : '') ?>">
                        <label for="exampleInputFile1">Imagem</label>
                        <input type="file" name="other_image">
                        <span class="help-block"><?php echo $other_image_error?></span>

                    </div>
                </div>

                <?php
                if (isset($product) && $product->other_image != "") {
                    ?>
                     <div class="col-md-2">
                     <img src="<?php echo base_url().PRODUCT_IMAGE_UPLOAD_PATH.$product->other_image ?>" width="80px" height="80px">
                </div>
                   <?php 
                }
                ?>
                <!--/span-->
            </div>
            <!--/row-->
            <div class="row">
                <div class="col-md-12">
                    <?php $description_error = form_error('description');
                    $description  = set_value("description");

                    if ($description == "" && isset($product)) {
                        
                        $description = $product->description;
                    }

                    ?>
                    <div class="form-group <?php 
                    if($description_error!='')
                    {
                        echo 'has-error';
                    }
                    ?>">
                    <label>Descrição</label>
                    <span class="help-block"><?php echo $description_error ?></span>
                    <textarea class="form-control summernote description" name="description" rows="8"><?php echo $description; ?></textarea>

                </div>
            </div>
            <!--/span-->

            <!--/span-->
        </div>
        <!--/row-->

        <div class="form-actions right">
            <input type="hidden" name="product_id" class="product_id">
            <input type="hidden" name="old_product_image" class="product_image">
            <input type="hidden" name="old_other_image" class="other_image">
            <button type="submit" class="btn blue">
            Submeter</button>
        </div>
    </form>
    <!-- END FORM-->
</div>
</div>


<!--     End     -->




<!-- END PAGE BASE CONTENT -->
</div>
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<script type="text/javascript">
    let product_category = '<?php echo set_value("product_category"); ?>';

    let product_subcategory = '<?php echo set_value("product_subcategory"); ?>';

    function get_subcategories(parent_category){

            $.ajax({
                url: "categories/get_subcategories",
                data:{
                    cat_id: parent_category
                },
                type: "POST",
                success:function(res){
                    res = JSON.parse(res);

                    var options = "";

                    $.each(res,function(k,v){

                     options += '<option value="'+v.cat_id+'">'+v.category_name+'</option>';

                    });

                    $(".product_subcategory").html(options);

                    if(product_subcategory != ""){
                        $(".product_subcategory").val(product_subcategory);
                    }
                }
            });
    }

    $(document).ready(function(){
        $(".product_category").val(product_category);

      





        get_subcategories(product_category);

        $(".product_category").change(function(){

            product_category =  $(this).val();

            get_subcategories(product_category);

        })


        <?php

         if ( isset($product) && !empty($product)) {
            foreach ($product as $key => $value) {
                if ($key != "product_description" && $key != "product_badges") {
            ?>
            $(".<?php echo $key ?>").val('<?php echo $value ?>');
            <?php
            }elseif ($key == "product_badges") {
                ?>
             selectvalues = JSON.parse('<?php echo $value ?>');
            $(".product_badges").val(selectvalues).trigger('change');
            
        <?php
            }   
         }
         ?>

         product_subcategory = "<?=$product->product_subcategory?>";

         get_subcategories("<?=$product->product_category?>");

         <?php

        }

        ?>



    })
</script>

