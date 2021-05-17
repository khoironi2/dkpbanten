<div class="content-wrapper">

    <!-- end menu -->


    <!-- Content Header (Page header) -->
    <section class="content-header " style="opacity: 0.8; ">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4><?= $title; ?></h4>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href=""><?= $parent; ?></a></li>
                        <li class="breadcrumb-item active"><?= $child; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- page-wrapper -->

    <!-- Main content -->
    <!-- <section class="content"> -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url('master/kapal/add') ?>"><button type="button" class=" card-title btn btn-primary btn-flat mr-1">+ Tambah</button></a>

            </div>
            <p><?php echo $this->session->flashdata('success'); ?></p>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>SIPI</th>
                            <th>Nama</th>
                            <th>Jenis Kapal</th>
                            <th>GT</th>
                            <th>No. SIPI</th>
                            <th>Tanggal SIPI</th>
                            <th>Tanggal AKhir</th>
                            <th>ALat Tangkap</th>
                            <th>Panjang</th>
                            <th>Tanda Selar</th>
                            <th>No. Gross Akte</th>
                            <th>Nama Perusahaan</th>
                            <th>No. SIUP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($kapal as $data) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['status_sipi'] ?></td>
                                <td><?= $data['nama_kapal'] ?></td>
                                <td><?= $data['nama_jenis_kapal'] ?></td>
                                <td><?= $data['gt'] ?></td>
                                <td><?= $data['sipi'] ?></td>
                                <td><?= $data['tanggal_sipi'] ?></td>
                                <td><?= $data['tanggal_akhir_sipi'] ?></td>
                                <td><?= $data['nama_alat_tangkap_kapal'] ?></td>
                                <td><?= $data['panjang_kapal'] ?></td>
                                <td><?= $data['tanda_selar'] ?></td>
                                <td><?= $data['gross_akte_kapal'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['siup'] ?></td>
                                <td>
                                    <a href="<?= base_url('master/kapal/edit/' . $data['id_kapal']) ?>"><i class="fas fa-edit"></i></a>
                                    <a data-toggle="modal" data-target="#delete<?= $data['id_kapal'] ?>"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>SIPI</th>
                            <th>Nama</th>
                            <th>Jenis Kapal</th>
                            <th>GT</th>
                            <th>No. SIPI</th>
                            <th>Tanggal SIPI</th>
                            <th>Tanggal AKhir</th>
                            <th>ALat Tangkap</th>
                            <th>Panjang</th>
                            <th>Tanda Selar</th>
                            <th>No. Gross Akte</th>
                            <th>Nama Perusahaan</th>
                            <th>No. SIUP</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>

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

<?php foreach ($kapal as $data) : ?>
    <div class="modal fade" id="delete<?= $data['id_kapal'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PERINGATAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?= base_url('master/kapal/delete/' . $data['id_kapal']) ?>">
                    <div class="modal-body">
                        <P style="color: darkred;">Apakah anda yakin ingin menghapus data <b><?= $data['nama_kapal'] ?></b></P>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="submit" class="btn btn-primary">HAPUS</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>