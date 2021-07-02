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
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-header">
                                </div>
                                <div class="box-body">
                                    <form method="post" action="<?= base_url('master/pengguna_jasa/add') ?>" enctype="multipart/form-data">
                                        <input type="hidden" name="id" id="id" value="" />
                                        <input type="hidden" name="main_img" id="main_img" value="" />
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Nama <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="nama" id="nama" maxlength="255" required />
                                                </div>
                                                <div class="form-group">
                                                    <label for="nik">NIK KTP <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="nik_ktp" id="nik_ktp" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Upload KTP</label>
                                                    <input type="file" class="form-control" name="file_ktp" id="file_ktp" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="placeofbirth">Tempat Lahir <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="birthdate">Tanggal Lahir <span class="mandatory">*</span></label>
                                                    <input type="date" class="form-control date" name="tanggal_lahir" id="tanggal_lahir" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Alamat</label>
                                                    <textarea class="form-control" name="alamat" id="alamat" rows="7"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Nomor Telepon</label>
                                                    <input type="text" class="form-control" name="no_telpon" id="no_telpon" maxlength="50" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" name="email" id="email" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan">Status Pengguna Jasa <span class="mandatory">*</span></label>
                                                    <select name="id_jabatan_karyawan" id="id_jabatan_karyawan" class="form-control" required>
                                                        <?php foreach ($jabatan_karyawan as $data) : ?>
                                                            <option value="<?= $data['id_jabatan_karyawan'] ?>"><?= $data['status_pengguna_jasa'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pasmasuk">Pas Masuk <span class="mandatory">*</span></label>
                                                            <input type="date" name="pas_masuk" id="pas_masuk" class="form-control datestart" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="paskeluar">Pas Keluar <span class="mandatory">*</span></label>
                                                            <input type="date" name="pas_keluar" id="pas_keluar" class="form-control dateend" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cardnum">Nomor Kartu <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="nomor_kartu" id="nomor_kartu" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="pin">PIN <span class="mandatory">*</span></label>
                                                    <input type="password" class="form-control" name="pin" id="pin" maxlength="6" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggalkartu">Tanggal Kartu<span class="mandatory">*</span></label>
                                                    <input type="date" class="form-control datestart" name="tgl_kartu" id="tgl_kartu" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggalkartuakhir">Tanggal Akhir Kartu<span class="mandatory">*</span></label>
                                                    <input type="date" class="form-control dateend" name="tgl_akhir_kartu" id="tgl_akhir_kartu" />
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