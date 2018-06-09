<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="<?php echo BASE_URL ?>/AdminController/home">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                </a>
            </li>

            <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg"></i> Site Option <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="products">
                <li><a href="<?php echo BASE_URL ?>/AdminController/home">Home</a></li>
                <li><a href="<?php echo BASE_URL ?>/AdminController/uioption">UI Option</a></li>
                <li><a href="<?php echo BASE_URL ?>/LoginController/logout">Logout</a></li>
            </ul>

            <?php
            if (Session::get('level') == 1 || Session::get('level') == 3) {
            ?>
            <li data-toggle="collapse" data-target="#service" class="collapsed">
                <a href="#"><i class="fa fa-globe fa-lg"></i> Category Option <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="service">
                <li><a href="<?php echo BASE_URL ?>/AdminController/addCategory"> Add Category</a></li>
                <li><a href="<?php echo BASE_URL ?>/AdminController/categoryList"> Category List</a></li>
            </ul>
            <?php } ?>

            <?php if (Session::get('level') != 3) { ?>
            <li data-toggle="collapse" data-target="#user" class="collapsed">
                <a href="#"><i class="fa fa-user fa-lg"></i> Manage Users<span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="user">
                <li><a href="<?php echo BASE_URL ?>/UserController/makeUser"> Make User</a></li>
                <li><a href="<?php echo BASE_URL ?>/UserController/UserList"> User List</a></li>
            </ul>
            <?php } ?>


            <li data-toggle="collapse" data-target="#new" class="collapsed">
                <a href="#"><i class="fa fa-comment fa-lg"></i> Post Option <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="new">
                <li><a href="<?php echo BASE_URL ?>/AdminController/addArticle"> Add Article</a></li>
                <li><a href="<?php echo BASE_URL ?>/AdminController/articleList"> Article List</a></li>
            </ul>

        </ul>
    </div>
</div>