<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Gerir Categoria

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
        <a href="#">Categoria</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="#">Gerir Categoria</a>

    </li>
</ul>

<!--     Start     -->
<?php

if ($this->session->flashdata("error") != "") {
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

            <span class="caption-subject font-blue-hoki bold uppercase">Gerir Categoria</span>

        </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>


        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="" class="horizontal-form" method="post" enctype="multipart/form-data">
            <div class="form-body">

                <div class="row">
                    <div class="col-md-6">
                        <?php
                        $category_scope_error = form_error('category_scope');
                        ?>
                        <div class="form-group <?php
                        if ($category_scope_error != '') {
                            echo 'has-error';
                        }
                        ?>">
                            <label class="control-label">Tipo de categoria</label>
                            <select class="form-control select2 category_scope" name="category_scope">
                                <option value="1">Produtos</option>
                                <option value="2">Projectos</option>

                            </select>
                            <span class="help-block"><?php echo $category_scope_error ?></span>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php
                        $category_name_error = form_error('category_name');
                        ?>
                        <div class="form-group <?php
                        if ($category_name_error != '') {
                            echo 'has-error';
                        }
                        ?>">
                            <label class="control-label">Nome da Categoria</label>
                            <input type="text" id="firstName" class="form-control category_name" placeholder=""
                                   name="category_name" value="<?php echo set_value("category_name") ?>">
                            <span class="help-block"><?php echo $category_name_error ?></span>

                        </div>
                    </div>
                    <!--/span-->

                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Categoria Pai</label>
                            <select class="form-control select2 parent_category" name="parent_category">


                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <?php
                        $category_image_error = form_error('category_image');
                        ?>
                        <div class="form-group <?php echo($category_image_error != '' ? 'has-error' : '') ?>">
                            <label for="exampleInputFile1">Imagem da categoria</label>
                            <input type="file" id="exampleInputFile1" name="category_image">
                            <span class="help-block"><?php echo $category_image_error ?></span>

                        </div>


                    </div>
                    <?php
                    if (isset($category) && $category->category_image != "") {
                        ?>
                        <div class="col-md-2">
                            <img src="<?php echo base_url() . CATEGORY_IMAGE_UPLOAD_PATH . $category->category_image ?>"
                                 width="80px" height="80px">
                        </div>
                        <?php
                    }
                    ?>


                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-12">
                        <?php $category_description_error = form_error('category_description'); ?>
                        <div class="form-group <?php
                        if ($category_description_error != '') {
                            echo 'has-error';
                        } else {
                            echo '';
                        }
                        ?>">
                            <label>Descrição da categoria</label>
                            <textarea class="form-control category_description" rows="8"
                                      name="category_description"><?php echo set_value("category_description") ?></textarea>
                            <span class="help-block"><?php echo
                                $category_description_error ?></span>
                        </div>
                    </div>


                    <!--/span-->
                </div>
                <!--/row-->

                <div class="form-actions right">
                    <input type="hidden" name="cat_id" class="cat_id">
                    <input type="hidden" name="old_category_image" class="category_image">
                    <button type="submit" class="btn blue">Submeter</button>
                </div>
        </form>
        <!-- END FORM-->
    </div>
</div>


<!--     End     -->


<!-- END PAGE BASE CONTENT -->
<!-- END CONTENT BODY -->
<!-- END CONTENT -->


<script type="text/javascript">

    let category_scope = '<?php echo set_value("category_scope"); ?>';

    let parent_category = '<?php echo set_value("parent_category"); ?>';

    function get_categories(category_scope) {

        $.ajax({
            url: "categories/get_categories",
            data: {
                category_scope: category_scope
            },
            type: "POST",
            success: function (res) {
                res = JSON.parse(res);

                var options = "<option value='0'>None</option>";

                $.each(res, function (k, v) {

                    options += '<option value="' + v.cat_id + '">' + v.category_name + '</option>';

                });

                $(".parent_category").html(options);

                if (parent_category != "") {
                    $(".parent_category").val(parent_category);
                }
            }
        });
    }

    $(document).ready(function () {

        $(".category_scope").val(category_scope);

        get_categories(category_scope);

        $(".category_scope").change(function () {

            category_scope = $(this).val();

            get_categories(category_scope);

        })


        <?php

        if ( isset($category) && !empty($category)) {
        foreach ($category as $key => $value) {
        ?>
        $(".<?php echo $key ?>").val("<?php echo $value ?>");
        <?php
        }

        ?>
        parent_category = "<?=$category->parent_category?>";

        get_categories("<?=$category->category_scope?>");
        <?php
        }

        ?>


    })
</script>
