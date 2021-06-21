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

            </div>
            <p><?php echo $this->session->flashdata('success'); ?></p>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Profil</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php foreach ($profil as $data) : ?>
                                    <form method="POST" action="<?= base_url('dkp/profil/edit/' . $data['id_profil']) ?>" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <input type="text" value="<?= $data['nama'] ?>" name="nama" id="nama" class="form-control">
                                            <input type="text" hidden value="<?= $data['id_profil'] ?>" name="id_profil" id="id_profil" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="content" id="compose-textarea" class="form-control" style="height: 300px"><?= $data['content'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <img class="img" height="100" src="<?= base_url('assets/images/logo/' . $data['gambar_profil']) ?>" alt="Photo">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="gambar_profil" id="gambar_profil">
                                            <p class="help-block">Max. 32MB</p>
                                        </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="float-right">
                                    <!-- <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button> -->
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <!-- <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button> -->
                            </div>
                            </form>
                            <!-- /.card-footer -->
                        </div>
                    <?php endforeach ?>
                    <!-- /.card -->
                    </div>
                </div>
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
<?php foreach ($pengguna as $data) : ?>
    <div class="modal fade" id="delete<?= $data['id_pegawai'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PERINGATAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?= base_url('pengaturan/user/delete/' . $data['id_pegawai']) ?>">
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
<?php foreach ($pengguna as $data) : ?>
    <div class="modal fade" id="reset<?= $data['id_pegawai'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">UPDATE PASSWORD <?= $data['nama'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?= base_url('pengaturan/user/updatepwd/') ?>">
                    <div class="modal-body">
                        <input type="password" name="password" id="password" class="form-control">
                        <input hidden type="text" name="id_pegawai" id="id_pegawai" value="<?= $data['id_pegawai'] ?>" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>