<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPK</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?= base_url('vendor/') ?>assetberanda/images/UMP.png" type="">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('vendor') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('vendor') ?>/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/toast-master/css/jquery.toast.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/summernote/dist/summernote.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('vendor') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?= base_url('vendor') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary">
            <div class="container">
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?= site_url('controllerHome') ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('ControllerSiswa') ?>" class="nav-link">Data Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('ControllerBobot') ?>" class="nav-link">Data Bobot</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('ControllerKriteria') ?>" class="nav-link">Data Kriteria</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('ControllerAlternatif') ?>" class="nav-link">Data Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('ControllerSubKriteria') ?>" class="nav-link">Sub Kriteria</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('ControllerHasil') ?>" class="nav-link">Analisis Hasil</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('controllerLaporan') ?>" class="nav-link">Laporan</a>
                        </li>
                        <li class="nav-item pull-right">
                            <a href="<?= site_url('controllerLogin/logout') ?>" class="nav-link">Logout</a>
                        </li>
                    </ul>


                </div>

            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> Halaman</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">