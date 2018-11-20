

<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Ver Slideshows

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
        <a href="#">Ver slideshows</a>
        
    </li>
</ul>

<!--     Start     -->
<?php

if($this->session->flashdata("success") != ""){
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

                    <span class="caption-subject bold uppercase">Slideshows (homepage)</span>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table datatable table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Texto Linha 1</th>
                            <th>Texto Linha 2</th>
                            <th>Texto Linha 3</th>
                            <th>Link para botão</th>
                            <th>Imagem do Slide</th>
                            <th style="width: 130px;">Ação</th>
                        </tr>
                    </thead>

                    <tbody>
                       <?php
                       $i = 1;
                       foreach ($slideshow as $key => $value) {
                        ?>

                        <tr>
                            <td><?=$i?></td>
                            <td><?=$value->text_1?></td>
                            <td><?=$value->text_2?></td>
                            <td><?=$value->text_3?></td>
                            <td><?=$value->text_link?></td>
                            

                            <td><a download="" href="<?php echo base_url().SLIDESHOW_IMAGE_UPLOAD_PATH.$value->slide_image ?>">Ver Imagem</a></td>

                            <td>
                                <a href="<?php echo base_url()."slideshow?slide_id=".$value->slide_id ?>" class="btn btn-primary">Editar</a>
                                <a href="<?php echo base_url()."slideshow/delete_slide/".$value->slide_id ?>" class="btn btn-danger delete-btn">Apagar</a>

                            </td>

                        </tr>


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
<!-- 
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>View Products </div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Product Name </th>
                            <th> Product Category </th>
                            <th> Product Sub-Category </th>
                            <th> Product Price </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td> Table cell </td>
                            <td> Table cell </td>
                            <td> Table cell </td>
                            <td> Table cell </td>
                            
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td> Table cell </td>
                            <td> Table cell </td>
                            <td> Table cell </td>
                            <td> Table cell </td>
                            
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td> Table cell </td>
                            <td> Table cell </td>
                            <td> Table cell </td>
                            <td> Table cell </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> -->

    <!--     End     -->




    <!-- END PAGE BASE CONTENT -->
</div>
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->

