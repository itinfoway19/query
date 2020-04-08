<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Blank Page</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url(); ?>assert/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?= base_url(); ?>assert/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assert/plugins/selectize/css/selectize.bootstrap3.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assert/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- jQuery -->
        <script src="<?= base_url(); ?>assert/plugins/jquery/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    </head>
    <body class="hold-transition sidebar-mini sidebar-collapse">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="index3.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>


                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-power-off"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="<?= base_url(); ?>assert/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                         style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="<?= base_url(); ?>assert/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Alexander Pierce</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->
                            <?php

                            function MenuHed($parent, $category) {
                                $html = "";
                                if (isset($category['parent_cats'][$parent])) {
                                    if ($parent != 0) {
                                        $html .= '<ul class="nav nav-treeview">';
                                    }
                                    $count = 1;
                                    foreach ($category['parent_cats'][$parent] as $cat_id) {
                                        if (!isset($category['parent_cats'][$cat_id])) {
                                            if ($parent != 0) {
                                                $html .= '<li class="nav-item"><a href="' . base_url($category['menus'][$cat_id]['menu_link']) . '" class="nav-link"><i class="fas ' . $category['menus'][$cat_id]['fas_icon'] . ' nav-icon"></i><p>' . $category['menus'][$cat_id]['menu_name'] . "</p></a></li>";
                                            } else {
                                                $html .= '<li class="nav-item"><a href="' . base_url($category['menus'][$cat_id]['menu_link']) . '" class="nav-link"><i class="fas ' . $category['menus'][$cat_id]['fas_icon'] . ' nav-icon"></i><p>' . $category['menus'][$cat_id]['menu_name'] . "</p></a></li>";
                                            }
                                        }
                                        if (isset($category['parent_cats'][$cat_id])) {
                                            if ($parent == 0) {
                                                $html .= '<li class="nav-item has-treeview"><a href="' . base_url($category['menus'][$cat_id]['menu_link']) . '" class="nav-link"><i class="nav-icon fas ' . $category['menus'][$cat_id]['fas_icon'] . '"></i><p>' . $category['menus'][$cat_id]['menu_name'] . '<i class="right fas fa-angle-left"></i></p></a>';
                                            } else {
                                                $html .= '<li class="nav-item has-treeview"> <a href="' . base_url($category['menus'][$cat_id]['menu_link']) . '" class="nav-link">
                                                            <i class="fas ' . $category['menus'][$cat_id]['fas_icon'] . ' nav-icon"></i>
                                                                 <p>' . $category['menus'][$cat_id]['menu_name'] . ' <i class="right fas fa-angle-left"></i>
                                                                </p>
                                                            </a>';
                                            }
                                            $html .= MenuHed($cat_id, $category);
                                            $html .= "</li> \n";
                                        }
                                    }
                                    if ($parent != 0) {
                                        $html .= "</ul> \n";
                                    }
                                }
                                return $html;
                            }

                            $menuData = $this->session->userdata("menu");
                            echo MenuHed(0, unserialize($menuData));
                            ?>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">

                    <br>