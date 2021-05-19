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
                                    <form method="post" action="<?= base_url('master/harga_ikan/update') ?>">
                                        <div class="form-group">
                                            <img height="100" src="<?= base_url('assets/master/jenis_ikan/upload/' . $edit_harga_ikan['gambar_ikan']) ?>" alt="<?= $edit_harga_ikan['nama_indonesia'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenisikan">Jenis Ikan <span class="mandatory">*</span></label>
                                            <select name="id_jenis_ikan" id="id_jenis_ikan" class="form-control select2">
                                                <option value="<?= $edit_harga_ikan['id_jenis_ikan'] ?>"><?= $edit_harga_ikan['nama_indonesia'] ?></option>
                                                <?php foreach ($jenis_ikan as $data) : ?>
                                                    <option value="<?= $data['id_jenis_ikan'] ?>"><?= $data['nama_indonesia'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Harga <span class="mandatory">*</span></label>
                                            <input type="text" value="<?= $edit_harga_ikan['harga'] ?>" name="harga" class="form-control dotseparator" id="harga" maxlength="15" value="" />
                                            <input type="text" hidden value="<?= $edit_harga_ikan['id_harga_ikan'] ?>" name="id_harga_ikan" class="form-control dotseparator" id="harga" maxlength="15" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status <span class="mandatory">*</span></label>
                                            <select name="status" id="status" class="form-control">
                                                <?php if ($edit_harga_ikan['status'] == '1') { ?>
                                                    <option value="1" selected>Aktif</option>
                                                <?php } elseif ($edit_harga_ikan['status'] == '0') { ?>
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