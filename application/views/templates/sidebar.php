   <!-- end header -->

   <!-- menu -->
   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-info  elevation-4">
       <!-- Brand Logo -->
       <a href="<?php echo base_url('dashboard'); ?>" class="brand-link navbar-cyan">
           <img src="<?php echo base_url(); ?>assets/images/logo/banten.png" alt="<?php echo $title; ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
           <span class="brand-text font-weight-light">OMBAK PERIKANAN</span>
       </a>

       <!-- Sidebar -->
       <div class="sidebar ">
           <!-- Sidebar user panel (optional) -->
           <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                   <img src="<?= base_url('assets/') ?>images/profile/<?= $users['gambar_pegawai']; ?>" class="img-circle elevation-2" alt="User Image">
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
                       <a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
                           <i class="nav-icon fas fa-tachometer-alt"></i>
                           <p>
                               Dashboard
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
                               <a href="<?= base_url('master/kapal') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Kapal</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/tipe_kapal') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Tipe Kapal</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/jenis_kapal') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Jenis Kapal</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/bendera_kapal') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Bendera Kapal</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/provinsi') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Provinsi</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/wpp') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>WPP</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/alat_tangkap') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Alat Tangkap</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/pengguna_jasa') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Pengguna Jasa</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/karyawan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Karyawan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/perusahaan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Perusahaan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/daerah_operasi_penangkapan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Daerah Operasi Penangkapan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/jabatan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Jabatan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/satuan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Satuan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/layanan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Layanan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/jenis_layanan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Jenis Layanan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/dermaga') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Dermaga</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/peralatan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Peralatan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/jenis_ikan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Jenis Ikan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('master/harga_ikan') ?>" class="nav-link">
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