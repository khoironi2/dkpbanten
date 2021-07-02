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
                                    <form method="post" action="<?= base_url('master/pengguna_jasa/edit/' . $edit_pengguna_jasa['id_pengguna_jasa']) ?>" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Nama <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" value="<?= $edit_pengguna_jasa['nama'] ?>" name="nama" id="nama" maxlength="255" required />
                                                </div>
                                                <div class="form-group">
                                                    <label for="nik">NIK KTP <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" value="<?= $edit_pengguna_jasa['nik_ktp'] ?>" name="nik_ktp" id="nik_ktp" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <img height="200" src="<?= base_url('assets/master/pengguna_jasa/upload/' . $edit_pengguna_jasa['file_ktp']) ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Upload KTP</label>
                                                    <input type="file" class="form-control" value="<?= $edit_pengguna_jasa['file_ktp'] ?>" name="file_ktp" id="file_ktp" />
                                                </div>

                                                <div class="form-group">
                                                    <label for="placeofbirth">Tempat Lahir <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" value="<?= $edit_pengguna_jasa['tempat_lahir'] ?>" name="tempat_lahir" id="tempat_lahir" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="birthdate">Tanggal Lahir <span class="mandatory">*</span></label>
                                                    <input type="date" class="form-control date" value="<?= $edit_pengguna_jasa['tanggal_lahir'] ?>" name="tanggal_lahir" id="tanggal_lahir" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Alamat</label>
                                                    <textarea class="form-control" name="alamat" id="alamat" rows="7"><?= $edit_pengguna_jasa['alamat'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Nomor Telepon</label>
                                                    <input type="text" class="form-control" name="no_telpon" id="no_telpon" value="<?= $edit_pengguna_jasa['no_telpon'] ?>" maxlength="50" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" name="email" id="email" value="<?= $edit_pengguna_jasa['email'] ?>" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan">Status Pengguna Jasa <span class="mandatory">*</span></label>
                                                    <select name="id_jabatan_karyawan" id="id_jabatan_karyawan" class="form-control" required>
                                                        <option value="<?= $edit_pengguna_jasa['id_jabatan_karyawan'] ?>"><?= $edit_pengguna_jasa['status_pengguna_jasa'] ?></option>
                                                        <?php foreach ($jabatan_karyawan as $data) : ?>
                                                            <option value="<?= $data['id_jabatan_karyawan'] ?>"><?= $data['status_pengguna_jasa'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pasmasuk">Pas Masuk <span class="mandatory">*</span></label>
                                                            <input type="date" value="<?= $edit_pengguna_jasa['pas_masuk'] ?>" name="pas_masuk" id="pas_masuk" class="form-control datestart" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="paskeluar">Pas Keluar <span class="mandatory">*</span></label>
                                                            <input type="date" value="<?= $edit_pengguna_jasa['pas_keluar'] ?>" name="pas_keluar" id="pas_keluar" class="form-control dateend" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cardnum">Nomor Kartu <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" value="<?= $edit_pengguna_jasa['nomor_kartu'] ?>" name="nomor_kartu" id="nomor_kartu" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="pin">PIN <span class="mandatory">*</span></label>
                                                    <input type="password" class="form-control" value="<?= $edit_pengguna_jasa['pin'] ?>" name="pin" id="pin" maxlength="6" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggalkartu">Tanggal Kartu<span class="mandatory">*</span></label>
                                                    <input type="date" class="form-control datestart" value="<?= $edit_pengguna_jasa['tgl_kartu'] ?>" name="tgl_kartu" id="tgl_kartu" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggalkartuakhir">Tanggal Akhir Kartu<span class="mandatory">*</span></label>
                                                    <input type="date" class="form-control dateend" value="<?= $edit_pengguna_jasa['tgl_akhir_kartu'] ?>" name="tgl_akhir_kartu" id="tgl_akhir_kartu" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Status <span class="mandatory">*</span></label>
                                                    <select name="status" id="status" class="form-control">
                                                        <?php if ($edit_pengguna_jasa['status_di_pengguna_jasa'] == "1") { ?>
                                                            <option value="1">Aktif</option>
                                                        <?php } elseif ($edit_pengguna_jasa['status_di_pengguna_jasa'] == "0") { ?>
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