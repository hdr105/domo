

<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Visualizar categorias

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
        <a href="#">Visualizar Categorias</a>
        
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
                    
                    <span class="caption-subject bold uppercase">Categorias</span>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table datatable table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome da categoria</th>
                            <th>Categoria Pai</th>
                            <th>Tipo de categoria</th>
                            <th>Imagem</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($categories as $key => $value) {
                        ?>

                            <tr>
                                <td><?=$i?></td>
                                <td><?=$value->category_name?></td>
                                <td>
                                    <?php
                                    if (isset($value->parent)) {
                                        
                                        echo $value->parent->category_name;
                                    }
                                    ?>

                                </td> 
                                <td>
                                      <?php
                                    if ($value->category_scope == 1) {
                                        echo "Produtos";
                                    }else{
                                        echo "Projectos";
                                    }
                                    ?>
                                </td>   
                                <td>
                                    <?php
                                    if ($value->category_image != "") {
                                        ?>
                                        
                                    <a download="" href="<?php echo base_url().CATEGORY_IMAGE_UPLOAD_PATH.$value->category_image ?>">Ver imagem</a>
                                     <?php   
                                    }
                                    ?></td>

                                <td>
                                    <a href="<?php echo base_url()."categories?cat_id=".$value->cat_id ?>" class="btn btn-primary">Editar</a>
                                    <a href="<?php echo base_url()."categories/delete_cat/".$value->cat_id ?>" class="btn btn-danger delete-btn">Apagar</a>

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
    </div>
</div>

<!--     End     -->




<!-- END PAGE BASE CONTENT -->
</div>
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->

