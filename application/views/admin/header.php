<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Pengaduan Pelanggan PT. PLN ULP Pangsid UP3 Parepare</title>

    <!-- Favicons -->
    <link href="<?= base_url('/assets/img/logo.png') ?>" rel="icon">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('/assets/lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url('/assets/lib/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/zabuto_calendar.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/lib/gritter/css/jquery.gritter.css') ?>" />
    <!-- Custom styles for this template -->
    <link href="<?= base_url('/assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/css/style-responsive.css') ?>" rel="stylesheet">
    <script src="<?= base_url('/assets/lib/chart-master/Chart.js') ?>"></script>
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="<?= base_url() ?>" class="logo"><b>PT <span>PLN ULP Pangsid UP3 Parepare</span></b></a>
            <!--logo end-->
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <h5 class="centered"><?= $this->nama ?></h5>
                    <li class="mt">
                        <a class="<?= $this->Model->getPage('admin') ?>" href="<?= base_url('admin/') ?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="<?= $this->Model->getPage('pelanggan') ?>" href="<?= base_url('admin/pelanggan') ?>">
                            <i class=" fa fa-users"></i>
                            <span>Data Pelanggan</span>
                        </a>
                    </li>
                    <li>
                        <a class="<?= $this->Model->getPage('pengaduan') ?>" href="<?= base_url('admin/pengaduan') ?>">
                            <i class=" fa fa-book"></i>
                            <span>Data Pengaduan</span>
                        </a>
                    </li>
                    <li>
                        <a class="<?= $this->Model->getPage('chat') ?>" href="<?= base_url('admin/chat') ?>">
                            <i class=" fa fa-comments"></i>
                            <span>Live Chat</span>
                        </a>
                    </li>
                    <li>
                        <a class="<?= $this->Model->getPage('petugas') ?>" href="<?= base_url('admin/petugas') ?>">
                            <i class=" fa fa-user"></i>
                            <span>Data Petugas</span>
                        </a>
                    </li>
                    <li>
                        <a class="<?= $this->Model->getPage('laporan') ?>" href="<?= base_url('admin/laporan') ?>">
                            <i class=" fa fa-print"></i>
                            <span>Laporan</span>
                        </a>
                    </li>
                    <hr>
                    <li class="mt">
                        <a href="<?= base_url('logout') ?>">
                            <i class="fa fa-sign-out"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->