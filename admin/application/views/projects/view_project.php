<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Ver Projectos

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
        <a href="#">Ver Projectos</a>

    </li>
</ul>

<!--     Start     -->
<?php

if ($this->session->flashdata("success") != "") {
    ?>

    <div class="alert alert-success">
        <?php echo $this->session->flashdata("success"); ?>
    </div>

    <?php
}

?>


<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">

                    <span class="caption-subject bold uppercase">Projectos</span>
                </div>
                <div class="tools"></div>
            </div>
            <div class="portlet-body">
                <table class="table datatable table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Sub Categoria</th>
                        <th>Imagem</th>
                        <th>Ação</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    $i = 1;
                    foreach ($projects as $key => $value) {
                        ?>

                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $value->project_name ?></td>
                            <td><?= $value->parent_cat_name ?></td>
                            <td><?= $value->sub_cat_name ?></td>

                            <td><a
                                    href="#mydiv<?php echo $i; ?>" data-group="mygroup" class="badge1 badge yes-cursor html5lightbox" data-slideshadow="true" data-fullscreenmode="true" data-transition="slide" data-width="800" data-height="400" title="">View
                                    Image</a></td>

                            <td>
                                <a href="<?php echo base_url() . "projects?project_id=" . $value->project_id ?>"
                                   class="btn btn-primary">Editar</a>
                                <a href="<?php echo base_url() . "projects/delete_project/" . $value->project_id ?>"
                                   class="btn btn-danger delete-btn">Apagar</a>

                            </td>

                        </tr>
                         <div id="mydiv<?php echo $i; ?>" style="display:none;" class="html5gallery" data-slideshadow="true" data-skin="gallery" ddata-fullscreenmode="true" data-transition="slide" data-width="800" data-height="400" >
                            <?php 
    
                                $project_images =  json_decode($value->project_image); 
                                $array_check = is_array($project_images);
                                if($array_check)
                                {
                                   
                                    foreach ($project_images as $project_image) {
                                        
                                        ?>

                                        <a href="<?php echo base_url() . PROJECT_IMAGE_UPLOAD_PATH . $project_image; ?>" class="image_tn html5lightbox" data-group="mygroup">
                                            <img src="<?php echo base_url() . PROJECT_IMAGE_UPLOAD_PATH . $project_image; ?>">
                                        </a>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>

                                     <a href="<?php echo base_url() . PROJECT_IMAGE_UPLOAD_PATH . $value->project_image; ?>"><img src="<?php echo base_url() . PROJECT_IMAGE_UPLOAD_PATH . $value->project_image; ?>"></a>
                                    <?php
                                }
                                ?>
                       </div>

                        <?php
                        $i++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->

    </div>
    <!--     End     -->


    <!-- END PAGE BASE CONTENT -->
</div>
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->

