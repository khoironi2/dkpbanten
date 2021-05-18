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
                <a href="<?= base_url('master/jenis_ikan/add') ?>"><button type="button" class=" card-title btn btn-primary btn-flat mr-1">+ Tambah</button></a>

            </div>
            <p><?php echo $this->session->flashdata('success'); ?></p>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Indonesia</th>
                            <th>Nama Latin</th>
                            <th>Nama Daerah</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($jenis_ikan as $data) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['nama_indonesia'] ?></td>
                                <td><?= $data['nama_latin'] ?></td>
                                <td><?= $data['nama_daerah'] ?></td>
                                <td>
                                    <?php if ($data['status'] == "1") { ?>
                                        Aktif
                                    <?php } elseif ($data['status'] == "0") { ?>
                                        Tidak Aktif
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('master/jenis_ikan/edit/' . $data['id_jenis_ikan']) ?>"><i class="fas fa-edit"></i></a>
                                    <a data-toggle="modal" data-target="#delete<?= $data['id_jenis_ikan'] ?>"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Indonesia</th>
                            <th>Nama Latin</th>
                            <th>Nama Daerah</th>
                            <th>Status</th>
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
<?php foreach ($jenis_ikan as $data) : ?>
    <div class="modal fade" id="delete<?= $data['id_jenis_ikan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PERINGATAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?= base_url('master/jenis_ikan/delete/' . $data['id_jenis_ikan']) ?>">
                    <div class="modal-body">
                        <P style="color: darkred;">Apakah anda yakin ingin menghapus data <b><?= $data['nama_indonesia'] ?></b></P>
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