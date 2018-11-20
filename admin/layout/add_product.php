<?php
require("header.php");
require("sidebar.php");
?>

<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Add Product
            
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
        <a href="#">Product</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="#">Add Product</a>
        
    </li>
</ul>

<!--     Start     -->


<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">

            <span class="caption-subject font-blue-hoki bold uppercase">Add Product</span>

        </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>
            
            
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="" class="horizontal-form">
            <div class="form-body">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Product Name</label>
                            <input type="text" id="firstName" class="form-control" placeholder="">
                            
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Product Category</label>
                            <select class="form-control select2">
                                <option value="Category 1">Category 1</option>
                                <option value="Category 2">Category 2</option>
                                <option value="Category 3">Category 3</option>
                                <option value="Category 4">Category 4</option>
                            </select>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Product Sub-Category</label>
                            <select class="form-control select2">
                                <option value="Category 1">Category 1</option>
                                <option value="Category 2">Category 2</option>
                                <option value="Category 3">Category 3</option>
                                <option value="Category 4">Category 4</option>
                            </select>
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputFile1">File input</label>
                            <input type="file" id="exampleInputFile1">
                            
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label>Textarea</label>
                            <textarea class="form-control summernote" rows="8"></textarea>
                        </div>
                    </div>
                    <!--/span-->

                    <!--/span-->
                </div>
                <!--/row-->

                <div class="form-actions right">

                    <button type="submit" class="btn blue">
                    </i>Add Product</button>
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

                        <?php
                        require("footer.php");

                        ?>