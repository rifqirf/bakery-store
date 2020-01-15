<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from demo.themefisher.com/themefisher/focus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 15:14:17 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?= APP_NAME; ?></title>

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

        <!-- Styles -->
        <link href="<?= base_url("assets/css/lib/weather-icons.css"); ?>" rel="stylesheet" />
        <link href="<?= base_url("assets/css/lib/owl.carousel.min.css"); ?>" rel="stylesheet" />
        <link href="<?= base_url("assets/css/lib/owl.theme.default.min.css"); ?>" rel="stylesheet" />
        <link href="<?= base_url("assets/css/lib/font-awesome.min.css"); ?>" rel="stylesheet">
        <link href="<?= base_url("assets/css/lib/themify-icons.css"); ?>" rel="stylesheet">
        <link href="<?= base_url("assets/css/lib/menubar/sidebar.css"); ?>" rel="stylesheet">
        <link href="<?= base_url("assets/css/lib/bootstrap.min.css"); ?>" rel="stylesheet">

        <link href="<?= base_url("assets/css/lib/helper.css"); ?>" rel="stylesheet">
        <link href="<?= base_url("assets/css/style.css"); ?>" rel="stylesheet">
    </head>

    <body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index-2.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Focus</span></a></div>
                    <ul>
                        <li class="label">Menu</li>
                        <li><a href="<?= base_url("control/dashboard/"); ?>"><i class="ti-dashboard"></i> Dashboard </a></li>
                        <li><a href="<?= base_url("control/profile/"); ?>"><i class="ti-user"></i> Profile </a></li>
                        <li><a href="<?= base_url("control/penjualan/"); ?>"><i class="ti-money"></i> Penjualan </a></li>
                        <li><a href="<?= base_url("control/pembelian/"); ?>"><i class="ti-anchor"></i> Pembelian </a></li>
                        <li><a href="<?= base_url("control/produksi/"); ?>"><i class="ti-anchor"></i> Produksi </a></li>
                        <li><a href="<?= base_url("control/keuangan/"); ?>"><i class="ti-money"></i> Keuangan </a></li>
                        <li><a href="<?= base_url("control/produk/"); ?>"><i class="ti-bag"></i> Produk </a></li>
                        <li><a href="<?= base_url("control/bahan/"); ?>"><i class="ti-bag"></i> Bahan </a></li>
                        <li><a href="<?= base_url("control/customer/"); ?>"><i class="ti-user"></i> Customer </a></li>
                        <li><a href="<?= base_url("control/supplier/"); ?>"><i class="ti-briefcase"></i> Supplier </a></li>
                        <li><a href="<?= base_url("control/logout/"); ?>"><i class="ti-close"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- /# sidebar -->

        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="float-right">
                            <ul>                                
                                <li class="header-icon dib"><span class="user-avatar"><?= $this->session->userdata["user"][0]["nama_toko"]; ?> <i class="ti-angle-down f-s-10"></i></span>
                                    <div class="drop-down dropdown-profile">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">Administrator</span>
                                            <p class="trial-day"><?= strtoupper("toko") ?></p>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li><a href="<?= base_url("control/profile/"); ?>"><i class="ti-user"></i> <span>Profile</span></a></li>
                                                <li><a href="<?= base_url("control/logout/"); ?>"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
