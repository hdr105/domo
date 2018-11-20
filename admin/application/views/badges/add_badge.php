
<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Gerir badge

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
        <a href="#">Badge</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="#">Gerir Badge</a>
        
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

            <span class="caption-subject font-blue-hoki bold uppercase">Gerir badge</span>

        </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>
            
            
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="" class="horizontal-form" method="POST" enctype="multipart/form-data">
            <div class="form-body">
            <h3 class="form-section">Informação do badge</h3>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        $badge_name_error = form_error('badge_name');
                        ?>
                        <div class="form-group <?php echo ($badge_name_error != "" ? 'has-error' : '') ?> ">
                            <label class="control-label">Nome do badge</label>
                            <input type="text"  class="form-control badge_name" name="badge_name" value="<?php echo set_value("badge_name") ?>">
                            <span class="help-block"><?php echo $badge_name_error?></span>
                            
                        </div>
                    </div>
                    <!--/span-->
                     <div class="col-md-4">
                    <?php 
                    $badge_image_error = form_error('badge_image');
                    ?>
                    <div class="form-group <?php echo ($badge_image_error != '' ? 'has-error' : '') ?>">
                        <label for="exampleInputFile1">Imagem</label>
                        <input type="file" name="badge_image">
                        <span class="help-block"><?php echo $badge_image_error?></span>

                    </div>
                </div>
                <!--/span-->
                   <?php
                if (isset($badge) && $badge->badge_image != "") {
                    ?>
                     <div class="col-md-2">
                     <img src="<?php echo base_url().BADGE_IMAGE_UPLOAD_PATH.$badge->badge_image ?>" width="80px" height="80px">
                </div>
                   <?php 
                }
                ?>
                  
                </div>
                <!--/row-->
        

       

        <div class="form-actions right">
            <input type="hidden" name="badge_id" class="badge_id">
            <input type="hidden" name="old_badge_image" class="badge_image">
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


    $(document).ready(function(){


        <?php

         if ( isset($badge) && !empty($badge)) {
            foreach ($badge as $key => $value) {
            ?>
            $(".<?php echo $key ?>").val('<?php echo $value ?>');
            <?php
         }
         ?>

         <?php

        }

        ?>

    })
</script>

