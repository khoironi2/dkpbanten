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
                                    <form method="post" action="<?= base_url('master/satuan/update') ?>">
                                        <?php foreach ($edit_satuan as $data) : ?>
                                            <div class="form-group">
                                                <label for="name">Nama Satuan <span class="mandatory">*</span></label>
                                                <input type="text" class="form-control select-with-select2" value="<?= $data['nama_satuan'] ?>" name="nama_satuan" id="nama_satuan" required />
                                                <input type="text" hidden class="form-control select-with-select2" value="<?= $data['id_satuan'] ?>" name="id_satuan" id="id_satuan" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="unit">Satuan <span class="mandatory">*</span></label>
                                                <input type="text" class="form-control" value="<?= $data['satuan'] ?>" name="satuan" id="satuan" required maxlength="255" />
                                            </div>
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi <span class="mandatory">*</span></label>
                                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="7"><?= $data['deskripsi'] ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status <span class="mandatory">*</span></label>
                                                <select name="status" id="status" class="form-control">
                                                    <?php if ($data['status'] == "1") { ?>
                                                        <option value="1">Aktif</option>
                                                    <?php } elseif ($data['status'] == "0") { ?>
                                                        <option value="0">Tidak Aktif</option>
                                                    <?php } ?>
                                                    <option value="1">Aktif</option>
                                                    <option value="0">Tidak Aktif</option>
                                                </select>
                                            </div>
                                        <?php endforeach ?>
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
            </form>
        </div>
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