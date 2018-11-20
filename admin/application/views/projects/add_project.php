<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Gerir Projecto

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
        <a href="#">Gerir Projecto</a>

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

            <span class="caption-subject font-blue-hoki bold uppercase">Gerir Projecto</span>

        </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>


        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="" class="horizontal-form" method="POST" enctype="multipart/form-data">
            <div class="form-body">
                <h3 class="form-section">Informação do projecto</h3>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        $project_name_error = form_error('project_name');
                        ?>
                        <div class="form-group <?php echo($project_name_error != "" ? 'has-error' : '') ?> ">
                            <label class="control-label">Nome</label>
                            <input type="text" class="form-control project_name" name="project_name"
                                   value="<?php echo set_value("project_name") ?>">
                            <span class="help-block"><?php echo $project_name_error ?></span>

                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <?php
                        $project_category_error = form_error('project_category');
                        ?>
                        <div class="form-group <?php echo($project_category_error != '' ? 'has-error' : '') ?>">
                            <label>Categoria</label>
                            <select class="form-control select2 project_category" name="project_category">
                                <?php
                                foreach ($project_category as $key => $value) {
                                    echo "<option value='" . $value->cat_id . "' >" . $value->category_name . "</option>";
                                }

                                ?>
                            </select>
                            <span class="help-block"><?php echo $project_category_error ?></span>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        $project_subcategory_error = form_error('project_subcategory');
                        ?>
                        <div class="form-group <?php
                        if ($project_subcategory_error != '') {
                            echo 'has-error';
                        }

                        $project_subcategory = set_value('project_subcategory');
                        ?>">
                            <label>Sub Categoria</label>
                            <select class="form-control select2 project_subcategory" name="project_subcategory">
                            </select>
                            <span class="help-block"><?php echo $project_subcategory_error ?></span>
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-4">
                        <?php
                        $project_image_error = form_error('project_image');
                        ?>
                        <div class="form-group <?php echo($project_image_error != '' ? 'has-error' : '') ?>">
                            <label for="exampleInputFile1">Imagem</label>
                            <input type="file" name="project_image[]" multiple>
                            <span class="help-block"><?php echo $project_image_error ?></span>

                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                    <!--/span-->
                    <?php
                    if (isset($project) && $project->project_image != "") {
                        ?>
                        <div class="row text-center">
                            <?php 
                            if(isset($project->project_image))
                            {
                                $project_images =  json_decode($project->project_image); 
                                $array_check = is_array($project_images);
                                if($array_check)
                                {
                                    foreach ($project_images as $project_image) {
                                        ?>
                                        <img src="<?php echo base_url() . PROJECT_IMAGE_UPLOAD_PATH . $project_image; ?>"
                                        width="80px" height="80px">
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>

                                     <img src="<?php echo base_url() . PROJECT_IMAGE_UPLOAD_PATH . $project->project_image; ?>"
                                        width="80px" height="80px">
                                    <?php
                                }
                            }
                             
                            ?>

                           
                        </div>
                        <?php
                    }
                    ?>
           
                <!--/row-->
                <div class="row">
                    <div class="col-md-12">
                        <?php $project_description_error = form_error('project_description');
                        $project_description = set_value("project_description");

                        if ($project_description == "" && isset($project)) {

                            $project_description = $project->project_description;
                        }

                        ?>
                        <div class="form-group <?php
                        if ($project_description_error != '') {
                            echo 'has-error';
                        }
                        ?>">
                            <label>Descrição</label>
                            <span class="help-block"><?php echo $project_description_error ?></span>
                            <textarea class="form-control summernote project_description" name="project_description"
                                      rows="8"><?php echo $project_description; ?></textarea>

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
                        <div class="form-group <?php echo($title_error != "" ? 'has-error' : '') ?> ">
                            <label class="control-label">Título</label>
                            <input type="text" class="form-control title" name="title"
                                   value="<?php echo set_value("title") ?>">
                            <span class="help-block"><?php echo $title_error ?></span>

                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <?php
                        $subtitle_error = form_error('subtitle');
                        ?>
                        <div class="form-group <?php echo($subtitle_error != "" ? 'has-error' : '') ?> ">
                            <label class="control-label">Sub Título</label>
                            <input type="text" class="form-control subtitle" name="subtitle"
                                   value="<?php echo set_value("subtitle") ?>">
                            <span class="help-block"><?php echo $subtitle_error ?></span>

                        </div>
                    </div>
                </div>
                <!--/row-->
                <div class="row">

                    <div class="col-md-6">
                        <?php
                        $related_products_error = form_error('related_products[]');
                        ?>
                        <div class="form-group <?php echo($related_products_error != '' ? 'has-error' : '') ?>">
                            <label>Produtos relacionados</label>
                            <select class="form-control select2 related_products" name="related_products[]" multiple="">
                                <?php
                                foreach ($products as $key => $value) {
                                    echo "<option value='" . $value->product_id . "' >" . $value->product_name . "</option>";
                                }

                                ?>
                            </select>
                            <span class="help-block"><?php echo $related_products_error ?></span>
                        </div>
                    </div>

                    <!--/span-->
                    <div class="col-md-4">
                        <?php
                        $other_image_error = form_error('other_image');
                        ?>
                        <div class="form-group <?php echo($other_image_error != '' ? 'has-error' : '') ?>">
                            <label for="exampleInputFile1">Imagem</label>
                            <input type="file" name="other_image">
                            <span class="help-block"><?php echo $other_image_error ?></span>

                        </div>
                    </div>
                    <?php
                    if (isset($project) && $project->other_image != "") {
                        ?>
                        <div class="col-md-2">
                            <img src="<?php echo base_url() . PROJECT_IMAGE_UPLOAD_PATH . $project->other_image ?>"
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
                        <?php $description_error = form_error('description');
                        $description = set_value("description");

                        if ($description == "" && isset($project)) {

                            $description = $project->description;
                        }

                        ?>
                        <div class="form-group <?php
                        if ($description_error != '') {
                            echo 'has-error';
                        }
                        ?>">
                            <label>Descrição</label>
                            <span class="help-block"><?php echo $description_error ?></span>
                            <textarea class="form-control summernote description" name="description"
                                      rows="8"><?php echo $description; ?></textarea>

                        </div>
                    </div>
                    <!--/span-->

                    <!--/span-->
                </div>
                <!--/row-->
                
                <div class="form-actions right">
                    <input type="hidden" name="project_id" class="project_id">
                    <input type="hidden" name="old_project_image" class="project_image" value="
                    <?php 
                        if(isset($project->project_image)) 
                        { 
                            echo $project->project_image ;
                        } ?>">
                    <input type="hidden" name="old_other_image" class="other_image">
                    <button type="submit" class="btn blue">
                        Submeter
                    </button>
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
    let project_category = '<?php echo set_value("project_category"); ?>';

    let project_subcategory = '<?php echo set_value("project_subcategory"); ?>';

    let related_products = '<?php echo json_encode(set_value("related_products")); ?>';

    related_products = JSON.parse(related_products);

    function get_subcategories(parent_category) {

        $.ajax({
            url: "categories/get_subcategories",
            data: {
                cat_id: parent_category
            },
            type: "POST",
            success: function (res) {
                res = JSON.parse(res);

                var options = "";

                $.each(res, function (k, v) {

                    options += '<option value="' + v.cat_id + '">' + v.category_name + '</option>';

                });

                $(".project_subcategory").html(options);

                if (project_subcategory != "") {
                    $(".project_subcategory").val(project_subcategory);
                }
            }
        });
    }

    $(document).ready(function () {
        $(".project_category").val(project_category);

        get_subcategories(project_category);

        $(".project_category").change(function () {

            project_category = $(this).val();

            get_subcategories(project_category);

        })


        <?php

        if ( isset($project) && !empty($project)) {
        foreach ($project as $key => $value) {
        if ($key != "project_description") {
        ?>
        $(".<?php echo $key ?>").val('<?php echo $value ?>');
        <?php
        }
        }
        ?>

        related_products = '<?=$project->related_products?>';

        if (related_products != "") {
            related_products = JSON.parse(related_products);
        }

        project_subcategory = "<?=$project->project_subcategory?>";

        get_subcategories("<?=$project->project_category?>");

        <?php

        }

        ?>

        $('.related_products').val(related_products).trigger('change');

    })
</script>

