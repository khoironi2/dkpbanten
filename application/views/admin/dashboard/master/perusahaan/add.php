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

                                    <form action="<?= base_url('master/perusahaan/add'); ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="name">Nama <span class="mandatory">*</span></label>
                                            <input type="text" class="form-control" name="nama" id="nama" maxlength="255" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="siupnum">No. SIUP <span class="mandatory">*</span></label>
                                            <input type="text" class="form-control" name="no_siup" id="no_siup" required maxlength="255" />
                                        </div>
                                        <div class="form-group">
                                            <label for="siupimage">Upload SIUP</label>
                                            <input type="file" id="file_siup" name="file_siup" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="npwpnum">No. NPWP <span class="mandatory">*</span></label>
                                            <input type="text" class="form-control" name="no_npwp" id="no_npwp" required maxlength="255" />
                                        </div>
                                        <div class="form-group">
                                            <label for="npwpimage">Upload NPWP</label>
                                            <input type="file" id="file_npwp" name="file_npwp" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat" rows="7"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Nomor Telepon</label>
                                            <input type="text" class="form-control" name="no_telpon" id="no_telpon" required maxlength="50" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" id="email" required maxlength="255" />
                                        </div>
                                        <div class="form-group">
                                            <label for="picname">Nama PIC</label>
                                            <input type="text" class="form-control" name="nama_pic" id="nama_pic" required maxlength="255" />
                                        </div>
                                        <div class="form-group">
                                            <label for="picphone">No Telepon PIC</label>
                                            <input type="text" class="form-control" name="no_telpon_pic" id="no_telpon_pic" maxlength="50" />
                                        </div>
                                        <div class="form-group">
                                            <label for="picemail">Email PIC</label>
                                            <input type="text" class="form-control" name="email_pic" id="email_pic" required maxlength="255" />
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status <span class="mandatory">*</span></label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="1" selected>Aktif</option>
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
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
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