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
                <!-- <a href="<?= base_url('master/pengguna_jasa/add') ?>"><button type="button" class=" card-title btn btn-primary btn-flat mr-1">+ Tambah</button></a> -->

            </div>
            <p><?php echo $this->session->flashdata('success'); ?></p>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pas Masuk</th>
                            <th>Nama</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                            <th>Nomor Kartu</th>
                            <th>Status Pengguna Jasa</th>
                            <th>Status</th>
                            <!-- <th>Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($pengguna_jasa as $data) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td>
                                    <div class="p-3 mb-2 bg-danger text-white"></div>
                                </td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['no_telpon'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['nomor_kartu'] ?></td>
                                <td><?= $data['status_pengguna_jasa'] ?></td>
                                <td>
                                    <?php if ($data['status_di_pengguna_jasa'] == "1") { ?>
                                        Aktif
                                    <?php } elseif ($data['status_di_pengguna_jasa'] == "0") { ?>
                                        Tidak Aktif
                                    <?php } ?>
                                </td>

                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Pas Masuk</th>
                            <th>Nama</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                            <th>Nomor Kartu</th>
                            <th>Status Pengguna Jasa</th>
                            <th>Status</th>
                            <!-- <th>Aksi</th> -->
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
<?php foreach ($pengguna_jasa as $data) : ?>
    <div class="modal fade" id="delete<?= $data['id_pengguna_jasa'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PERINGATAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?= base_url('master/pengguna_jasa/delete/' . $data['id_pengguna_jasa']) ?>">
                    <div class="modal-body">
                        <P style="color: darkred;">Apakah anda yakin ingin menghapus data <b><?= $data['nama'] ?></b></P>
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