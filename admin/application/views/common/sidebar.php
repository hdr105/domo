<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="glyphicon glyphicon-th-large"></i>
                    <span class="title">Categoria</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="<?php echo base_url(); ?>categories" class="nav-link ">
                            <span class="title">Adicionar Categoria</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="<?php echo base_url(); ?>categories/view_category" class="nav-link ">
                            <span class="title">Ver Categorias</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="glyphicon glyphicon-align-left"></i>
                    <span class="title">Produtos</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="<?php echo base_url(); ?>products" class="nav-link ">
                            <span class="title">Adicionar Produto</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="<?php echo base_url(); ?>products/view_products" class="nav-link ">
                            <span class="title">Ver Produtos</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="glyphicon glyphicon-align-left"></i>
                    <span class="title">Projectos</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="<?php echo base_url(); ?>projects" class="nav-link ">
                            <span class="title">Adicionar Projectos</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="<?php echo base_url(); ?>projects/view_projects" class="nav-link ">
                            <span class="title">Ver Projectos</span>
                        </a>
                    </li>
                </ul>
            </li>
              <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="glyphicon glyphicon-align-left"></i>
                    <span class="title">Badges</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="<?php echo base_url(); ?>badges" class="nav-link ">
                            <span class="title">Adicionar Badges</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="<?php echo base_url(); ?>badges/view_badges" class="nav-link ">
                            <span class="title">Ver Badges</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="glyphicon glyphicon-picture"></i>
                    <span class="title">Slide Show</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="<?php echo base_url(); ?>slideshow" class="nav-link ">
                            <span class="title">Adicionar Slide</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="<?php echo base_url(); ?>slideshow/view_slideshow" class="nav-link ">
                            <span class="title">Ver Slides</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
