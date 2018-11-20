<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Gerir Slide

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
        <a href="#">Gerir Slide</a>

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

            <span class="caption-subject font-blue-hoki bold uppercase">Gerir Slide</span>

        </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>


        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="" class="horizontal-form" method="POST" enctype="multipart/form-data">
            <div class="form-body">

                <div class="row">
                    <div class="col-md-6">
                        <?php
                        $text_1_error = form_error('text_1');
                        ?>
                        <div class="form-group <?php echo($text_1_error != "" ? 'has-error' : '') ?> ">
                            <label class="control-label">Linha de texto 1</label>
                            <input type="text" class="form-control text_1" name="text_1"
                                   value="<?php echo set_value("text_1") ?>">
                            <span class="help-block"><?php echo $text_1_error ?></span>

                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <?php
                        $text_2_error = form_error('text_2');
                        ?>
                        <div class="form-group <?php echo($text_2_error != "" ? 'has-error' : '') ?> ">
                            <label class="control-label">Linha de texto 2</label>
                            <input type="text" class="form-control text_2" name="text_2"
                                   value="<?php echo set_value("text_2") ?>">
                            <span class="help-block"><?php echo $text_2_error ?></span>

                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        $text_3_error = form_error('text_3');
                        ?>
                        <div class="form-group <?php echo($text_3_error != "" ? 'has-error' : '') ?> ">
                            <label class="control-label">Linha de texto 3 </label>
                            <input type="text" class="form-control text_3" name="text_3"
                                   value="<?php echo set_value("text_3") ?>">
                            <span class="help-block"><?php echo $text_3_error ?></span>

                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <?php
                        $text_link_error = form_error('text_link');
                        ?>
                        <div class="form-group <?php echo($text_link_error != "" ? 'has-error' : '') ?> ">
                            <label class="control-label"> Link para o botão (saiba mais) </label>
                            <input type="text" class="form-control text_link" name="text_link"
                                   value="<?php echo set_value("text_link") ?>">
                            <span class="help-block"><?php echo $text_link_error ?></span>

                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-4">
                        <?php
                        $slide_image_error = form_error('slide_image');
                        ?>
                        <div class="form-group <?php echo($slide_image_error != '' ? 'has-error' : '') ?>">
                            <label for="exampleInputFile1">Imagem</label>
                            <input type="file" name="slide_image">
                            <span class="help-block"><?php echo $slide_image_error ?></span>

                        </div>
                    </div>
                    <!--/span-->
                    <?php
                    if (isset($slide) && $slide->slide_image != "") {
                        ?>
                        <div class="col-md-2">
                            <img src="<?php echo base_url() . SLIDESHOW_IMAGE_UPLOAD_PATH . $slide->slide_image ?>"
                                 width="80px" height="80px">
                        </div>
                        <?php
                    }
                    ?>

                    <!--/span-->
                </div>
                <!--/row-->

                <div class="form-actions right">
                    <input type="hidden" name="slide_id" class="slide_id">
                    <input type="hidden" name="old_slide_image" class="slide_image">
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


    $(document).ready(function () {


        <?php

        if ( isset($slide) && !empty($slide)) {
        foreach ($slide as $key => $value) {
        ?>
        $(".<?php echo $key ?>").val("<?php echo $value ?>");
        <?php
        }
        ?>

        <?php

        }

        ?>



    })
</script>
