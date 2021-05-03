<!-- header -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/stylearyo.css"> -->
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        <!-- end header -->

        <!-- menu -->


        <!-- main-header navbar navbar-expand navbar-default navbar-dark navbar-cyan -->
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-default navbar-dark navbar-cyan">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
            </ul>

            <!-- SEARCH FORM -->
            <!--  <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <div class="user-panel">
                            <!-- <div class="image"> -->
                            <img src="<?= base_url('assetsa/') ?>images/profile/<?= $users['gambar_pegawai']; ?>" class="img-circle" alt="User Image">
                            <?php echo $this->session->userdata['nama']; ?>
                        </div>
                        <!-- </div> -->

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('login/logout') ?>" role="button">
                        <i class="fas fa-sign-out-alt" title="Sign Out"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-info  elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url('dashboard'); ?>" class="brand-link navbar-cyan">
                <img src="<?php echo base_url(); ?>assets/foto/logo/download.png" alt="<?php echo $title; ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?php echo  $title; ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar ">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assetsa/') ?>images/profile/<?= $users['gambar_pegawai']; ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <!-- <a href="#" class="d-block"><?php echo $this->session->userdata['name']; ?></a> -->
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard tes

                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Master
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="layout/top-nav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kapal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout/top-nav-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jenis Kapal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout/boxed.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Alat Tangkap</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout/fixed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pengguna Jasa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout/fixed-topnav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Karyawan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout/fixed-footer.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Perusahaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daerah Operasi Penangkapan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jabatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Satuan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Layanan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dermaga</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Peralatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jenis Ikan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Harga Ikan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Kesyahbandaran
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="charts/chartjs.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>STBL Kedatangan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts/flot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>STBL Keberangkatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SPB</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Pelayanan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="UI/general.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Antrian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="UI/icons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Work Order Kapal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="UI/buttons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Work Order Non Kapal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="UI/sliders.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pembayaran</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    DKP Banten
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="forms/general.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profil</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/advanced.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Undang-Undang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/editors.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Info Cuaca</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/validation.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Info Daerah Penangkapan Ikan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/validation.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Info Harga Ikan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Laporan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="tables/simple.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Kapal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/data.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Pengguna Jasa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Karyawan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Perusahaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Peralatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Jenis Layanan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Perubahan Harga</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rekap STBL Kedatangan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rekap STBL Keberangkatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rekap SPB</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Produksi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Muatan Logistik</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Bongkar Muat</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    System
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="forms/general.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Aplikasi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/advanced.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/editors.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>User Level</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/validation.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Info Daerah Penangkapan Ikan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/validation.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Info Harga Ikan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="calendar.html" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Sign Out
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <!-- <script src="<?php echo base_url(); ?>assets/plugins/sparklines/sparkline.js"></script> -->
        <!-- JQVMap -->
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>


        <!-- DataTables -->
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

        <!-- SweetAlert2 -->
        <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
        <!-- Toastr -->
        <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

        <!-- InputMask -->
        <script src="<?php echo base_url(); ?>assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
        <!-- Select2 -->
        <script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script> -->
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>

        <!-- bootstrap color picker -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

        <!-- Bootstrap Switch -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- end menu -->


            <!-- Content Header (Page header) -->
            <section class="content-header " style="opacity: 0.8; ">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4><?php echo ucfirst($this->uri->segment(1)); ?></h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo $this->uri->segment(1); ?>">Home</a></li>
                                <li class="breadcrumb-item active"><?php echo ucfirst($this->uri->segment(1)); ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page-wrapper -->

            <!-- Main content -->
            <!-- <section class="content"> -->
            <div class="container-fluid">

                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>500.000</h3>

                                <p>Jumlah Top Up</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-cash"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>2.300</h3>

                                <p>Jumlah Piutang</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>275</h3>

                                <p>Jumlah Pengguna Kalbu Smart</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>2.030.002</h3>

                                <p>Jumlah Hutang</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pendapatan Per Layanan</h3>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>No.</th>
                                <th>Jenis Penerimaan</th>
                                <th style="text-align: right">Tahun 2021</th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
                </section>

            </div>
            <!-- </section> -->
            <!-- /# end page-wrapper -->
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- /#wrapper -->
        <!-- footer -->
        <?php

        // $apl = $this->db->get("aplikasi")->row();
        ?>
        <footer class="main-footer navbar-default">
            <strong>Copyright &copy; 2021 <a href="#">DKP Banten</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b>
            </div>
        </footer>
        <!-- end footer -->

</body>

</html>