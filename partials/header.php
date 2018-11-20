<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.4.2/css/all.css"
      integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v3.1&appId=138844992956017';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<?php

require_once("connection.php");

$select = "SELECT * FROM categories where parent_category = 0 and category_scope = 1";

$pro_categories = mysqli_query($connect, $select);

$product_categories = array();

while ($category = mysqli_fetch_array($pro_categories)) {

    $select = "SELECT * FROM categories where parent_category = " . $category['cat_id'];

    $product_sub_categories = mysqli_query($connect, $select);

    $product_category = $category;

    while ($subcategory = mysqli_fetch_array($product_sub_categories)) {

        $product_category['subcategory'][] = $subcategory;
    }
    array_push($product_categories, $product_category);
}

$select = "SELECT * FROM categories where parent_category = 0 and category_scope = 2";

$proj_categories = mysqli_query($connect, $select);

$project_categories = array();

while ($category = mysqli_fetch_array($proj_categories)) {

    $select = "SELECT * FROM categories where parent_category = " . $category['cat_id'];

    $project_sub_categories = mysqli_query($connect, $select);

    $project_category = $category;

    while ($subcategory = mysqli_fetch_array($project_sub_categories)) {

        $project_category['subcategory'][] = $subcategory;
    }
    array_push($project_categories, $project_category);
}

?>
<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
</style>
<header id="Header">
    <div id="Top_bar">
        <div class="container">
            <div class="column one">
                <div class="top_bar_left clearfix">
                    <div class="logo">
                        <a id="logo" href="index.php" title="Domo Sports Grass" data-height="43" data-padding="20">
                            <img class="logo-main scale-with-grid" src="assets/images/logo.png"
                                 data-retina="assets/images/retina-logo.png" data-height="60" alt="gym2">
                            <img class="logo-sticky scale-with-grid" src="assets/images/logo.png"
                                 data-retina="assets/images/retina-logo.png" data-height="60" alt="gym2">
                            <img class="logo-mobile scale-with-grid" src="assets/images/logo.png"
                                 data-retina="assets/images/retina-logo.png" data-height="60" alt="gym2">
                            <img class="logo-mobile-sticky scale-with-grid" src="assets/images/logo.png"
                                 data-retina="assets/images/retina-logo.png" data-height="43" alt="gym2"></a>
                    </div>
                    <div class="menu_wrapper">
                        <nav id="menu">
                            <ul id="menu-main-menu" class="menu menu-main">

                                <li class="dropdown-submenu">

                                    <a class="test" tabindex="-1" href="sobre-nos.php">Sobre Nós <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">

                                        <li>
                                            <a tabindex="-1"
                                               href="domo.php">A DOMO</a>
                                        </li>

                                        <li>
                                            <a tabindex="-1"
                                               href="missao_valores.php">Missão, Visão e Valores</a>
                                        </li>

                                        <li>
                                            <a tabindex="-1"
                                               href="equipa.php">A Nossa Equipa</a>
                                        </li>

                                        <li>
                                            <a tabindex="-1"
                                               href="historia.php">História</a>
                                        </li>

                                        <li>
                                            <a tabindex="-1"
                                               href="meio_ambiente.php">Meio Ambiente e Qualidade</a>
                                        </li>

                                        <li>
                                            <a tabindex="-1"
                                               href="produtor_fifa.php">Produtor Favorito FIFA</a>
                                        </li>

                                    </ul>

                                </li>

                                <!-- <li>
                                    <a href="produtos.php"><span>Produtos</span></a>
                                </li> -->
                                <li class="dropdown-submenu">
                                    <a class="test" tabindex="-1" href="produtos.php">Produtos <span
                                            class="caret"></span></a>
                                    <?php
                                    if (!empty($product_categories)) {
                                        ?>
                                        <ul class="dropdown-menu">

                                            <?php
                                            foreach ($product_categories as $key => $category) {

                                                if (empty($category['subcategory'])) {

                                                    ?>
                                                    <li><a tabindex="-1"
                                                           href="produtos.php"><?= $category['category_name'] ?></a>
                                                    </li>

                                                    <?php
                                                } else {
                                                    ?>

                                                    <li class="dropdown-submenu">
                                                        <a class="test"
                                                           href="#"><?= $category['category_name'] ?> <span
                                                                class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <?php
                                                            foreach ($category['subcategory'] as $skey => $subcategory) {
                                                                ?>
                                                                <li>
                                                                    <a href="view_products.php?subcategory=<?= $subcategory['cat_id'] ?>"><?= $subcategory['category_name'] ?></a>
                                                                </li>
                                                                <?php
                                                            }
                                                            ?>


                                                        </ul>
                                                    </li>

                                                    <?php
                                                }
                                            }
                                            ?>

                                        </ul>
                                        <?php
                                    }
                                    ?>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="test" tabindex="-1" href="servicos.php">Serviços <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">

                                        <li><a tabindex="-1"
                                               href="producao.php">Produção</a>
                                        </li>

                                        <li><a tabindex="-1"
                                               href="manutencao.php">Manutenção</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="test" tabindex="-1" href="projetos.php">Projetos <span
                                            class="caret"></span></a>
                                    <?php
                                    if (!empty($project_categories)) {
                                        ?>
                                        <ul class="dropdown-menu">

                                            <?php
                                            foreach ($project_categories as $key => $category) {

                                                if (empty($category['subcategory'])) {

                                                    ?>
                                                    <li><a tabindex="-1"
                                                           href="projetos.php"><?= $category['category_name'] ?></a>
                                                    </li>

                                                    <?php
                                                } else {
                                                    ?>

                                                    <li class="dropdown-submenu">
                                                        <a class="test"
                                                           href="projetos.php"><?= $category['category_name'] ?> <span
                                                                class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <?php
                                                            foreach ($category['subcategory'] as $skey => $subcategory) {
                                                                ?>
                                                                <li>
                                                                    <a href="view_projects.php?subcategory=<?= $subcategory['cat_id'] ?>"><?= $subcategory['category_name'] ?></a>
                                                                </li>
                                                                <?php
                                                            }
                                                            ?>


                                                        </ul>
                                                    </li>

                                                    <?php
                                                }
                                            }
                                            ?>

                                        </ul>
                                        <?php
                                    }
                                    ?>
                                </li>
                                <li>
                                    <a href="contactos.php"><span>Contatos</span></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/domoportugal/" target="_blank"><i
                                            class="icon-facebook"></i></a>
                                </li>
                                <li style="color: #000">
                                    <a href="contactos.php">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </li>
                                <li style="color: #000">
                                    <a href="contactos.php">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </li>

                            </ul>
                        </nav>
                        <a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
