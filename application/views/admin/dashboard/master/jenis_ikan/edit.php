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
                        <li class="breadcrumb-item active"><?= $newchild; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- page-wrapper -->
    <section class="content mb-3">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Tambah</h3>


                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                </div>
                                <div class="box-body">
                                    <form method="post" action="<?= base_url('master/jenis_ikan/edit/' . $edit_jenis_ikan['id_jenis_ikan']) ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="name">Nama Indonesia <span class="mandatory">*</span></label>
                                            <input type="text" class="form-control" value="<?= $edit_jenis_ikan['nama_indonesia'] ?>" name="nama_indonesia" id="nama_indonesia" maxlength="255" autofocus />
                                        </div>
                                        <div class="form-group">
                                            <label for="namelatin">Nama Latin <span class="mandatory">*</span></label>
                                            <input type="text" class="form-control" value="<?= $edit_jenis_ikan['nama_latin'] ?>" name="nama_latin" id="nama_latin" maxlength="255" />
                                        </div>
                                        <div class="form-group">
                                            <label for="namedaerah">Nama Daerah <span class="mandatory">*</span></label>
                                            <input type="text" class="form-control" value="<?= $edit_jenis_ikan['nama_daerah'] ?>" name="nama_daerah" id="nama_daerah" maxlength="255" />
                                        </div>
                                        <div class="form-group">
                                            <img height="100" src="<?= base_url('assets/master/jenis_ikan/upload/' . $edit_jenis_ikan['gambar_ikan']) ?>" alt="<?= $edit_jenis_ikan['nama_indonesia'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="fileurl">Gambar / File Jenis Ikan</label>
                                            <input type="file" class="form-control" name="gambar_ikan" id="gambar_ikan" />
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="7"><?= $edit_jenis_ikan['deskripsi'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status <span class="mandatory">*</span></label>
                                            <select name="status" id="status" class="form-control">
                                                <?php if ($edit_jenis_ikan['status'] == "1") { ?>
                                                    <option value="1">Aktif</option>
                                                <?php } elseif ($edit_jenis_ikan['status'] == "0") { ?>
                                                    <option value="0">Tidak Aktif</option>
                                                <?php } ?>
                                                <option value="1" selected>Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.content-wrapper -->

                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" name="submit" value="submit" class="btn btn-primary">SIMPAN</button>
                <button type="button" class="btn btn-danger">BATAL</button>
            </div>
        </div>
        </form>
</div>
<!-- /.content-wrapper -->

</div>
</section>
<!-- Main content -->
<!-- <section class="content"> -->

<!-- </section> -->
<!-- /# end page-wrapper -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- /#wrapper -->