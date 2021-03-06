   <!-- end header -->

   <!-- menu -->
   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-info  elevation-4">
       <!-- Brand Logo -->
       <?php foreach ($profil as $data) : ?>
           <a href="<?php echo base_url('admin/dashboard'); ?>" class="brand-link navbar-cyan">
               <img src="<?php echo base_url('assets/images/logo/' . $data['gambar_profil']); ?>" alt="<?= $data['gambar_profil'] ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
               <span class="brand-text font-weight-light"><?= $data['nama'] ?></span>
           </a>
       <?php endforeach ?>







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
                           <i class="fas fa-server"></i>
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
                           <i class="fas fa-place-of-worship"></i>
                           <p>
                               Kesyahbandaran
                               <i class="right fas fa-angle-left"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="<?= base_url('kesyahbandaraan/stbl_kedatangan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>STBL Kedatangan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('kesyahbandaraan/stbl_keberangkatan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>STBL Keberangkatan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('kesyahbandaraan/spb') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>SPB</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item has-treeview">
                       <a href="#" class="nav-link">
                           <i class="fab fa-servicestack"></i>
                           <p>
                               Pelayanan
                               <i class="fas fa-angle-left right"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="<?= base_url('pelayanan/daftar_antrian') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Daftar Antrian</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('pelayanan/work_order_kapal') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Work Order Kapal</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('pelayanan/work_order_non_kapal') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Work Order Non Kapal</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('pelayanan/pembayaran') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Pembayaran</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item has-treeview">
                       <a href="#" class="nav-link">
                           <i class="fas fa-ship"></i>
                           <p>
                               DKP Banten
                               <i class="fas fa-angle-left right"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="<?= base_url('dkp/profil') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Profil</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('dkp/undang_undang') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Undang-Undang</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('dkp/cuaca') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Info Cuaca</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('dkp/info_dpi') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Info Daerah Penangkapan Ikan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('dkp/info_harga_ikan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Info Harga Ikan</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item has-treeview">
                       <a href="#" class="nav-link">
                           <i class="fas fa-book"></i>
                           <p>
                               Laporan
                               <i class="fas fa-angle-left right"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="<?= base_url('laporan/kapal') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Laporan Kapal</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('laporan/pengguna_jasa') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Laporan Pengguna Jasa</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('laporan/karyawan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Laporan Karyawan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('laporan/perusahaan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Laporan Perusahaan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('laporan/peralatan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Laporan Peralatan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('laporan/jenis_layanan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Laporan Jenis Layanan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('laporan/perubahan_harga') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Laporan Perubahan Harga</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('laporan/stbl_kedatangan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Rekap STBL Kedatangan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('laporan/stbl_keberangkatan') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Rekap STBL Keberangkatan</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('laporan/rekap_spb') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Rekap SPB</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('laporan/produksi') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Laporan Produksi</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('laporan/muatan_logistik') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Laporan Muatan Logistik</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?= base_url('laporan/bongkar_muat') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Laporan Bongkar Muat</p>
                               </a>
                           </li>
                       </ul>
                   </li>

                   <li class="nav-item has-treeview">
                       <a href="#" class="nav-link">
                           <i class="fas fa-cog"></i>
                           <p>
                               Pengaturan
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="<?= base_url('pengaturan/user') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Pengguna</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item">
                       <a href="<?php echo base_url('auth/logout') ?>" class="nav-link">
                           <i class="fas fa-sign-out-alt"></i>
                           <p>
                               Sign Out
                           </p>
                       </a>
                   </li>
               </ul>
           </nav>
           <!-- /.sidebar-menu -->
       </div>
       <!-- /.sidebar -->
   </aside>