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
                        <div class="col-md">
                            <div class="box box-primary">
                                <div class="box-header">
                                </div>
                                <div class="box-body">
                                    <form method="post" action="<?= base_url('master/daerah_operasi_penangkapan/update') ?>">

                                        <div class="form-group">
                                            <label for="wpp">WPP <span class="mandatory">*</span></label>
                                            <select name="id_wpp" id="id_wpp" class="form-control select2">
                                                <option value="<?= $edit_dop['id_wpp'] ?>"><?= $edit_dop['nama_wpp'] ?></option>
                                                <?php foreach ($wpp as $data) : ?>
                                                    <option value="<?= $data['id_wpp'] ?>"><?= $data['nama_wpp'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="country">DPI</label>
                                            <input type="text" value="<?= $edit_dop['dpi'] ?>" name="dpi" id="dpi" class="form-control" maxlength="255">
                                            <input type="text" hidden value="<?= $edit_dop['id_daerah_operasional_penangkapan_ikan'] ?>" name="id_daerah_operasional_penangkapan_ikan" id="id_daerah_operasional_penangkapan_ikan" class="form-control" maxlength="255">
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status <span class="mandatory">*</span></label>
                                            <select name="status" id="status" class="form-control">
                                                <?php if ($edit_dop['status_di_dop'] == "1") { ?>
                                                    <option value="1">Aktif</option>
                                                <?php } elseif ($edit_dop['status_di_dop'] == "0") { ?>
                                                    <option value="0">Tidak Aktif</option>
                                                <?php } ?>
                                                <option value="1">Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
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