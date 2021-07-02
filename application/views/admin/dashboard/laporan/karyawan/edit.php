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
                                    <form method="post" action="<?= base_url('master/karyawan/update') ?>" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Nama <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" value="<?= $edit_karyawan['nama'] ?>" name="nama" id="nama" maxlength="255" required />
                                                    <input type="text" hidden class="form-control" value="<?= $edit_karyawan['id_karyawan'] ?>" name="id_karyawan" id="nama" maxlength="255" required />
                                                </div>
                                                <div class="form-group">
                                                    <label for="nik">NIP <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" value="<?= $edit_karyawan['nip'] ?>" name="nip" id="nip" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="placeofbirth">Tempat Lahir <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" value="<?= $edit_karyawan['tempat_lahir'] ?>" name="tempat_lahir" id="tempat_lahir" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="birthdate">Tanggal Lahir <span class="mandatory">*</span></label>
                                                    <input type="date" class="form-control date" value="<?= $edit_karyawan['tgl_lahir'] ?>" name="tgl_lahir" id="tgl_lahir" maxlength="10" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Alamat</label>
                                                    <textarea class="form-control" name="alamat" id="alamat" rows="7"> <?= $edit_karyawan['alamat'] ?> </textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Nomor Telepon</label>
                                                    <input type="text" class="form-control" value="<?= $edit_karyawan['no_telpon'] ?>" name="no_telpon" id="no_telpon" maxlength="50" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" value="<?= $edit_karyawan['email'] ?>" name="email" id="email" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan">Jabatan <span class="mandatory">*</span></label>
                                                    <select name="id_jabatan_karyawan" id="id_jabatan_karyawan" class="form-control">
                                                        <option value="<?= $edit_karyawan['id_jabatan_karyawan'] ?>"><?= $edit_karyawan['status_pengguna_jasa'] ?></option>
                                                        <?php foreach ($jabatan_karyawan as $data) : ?>
                                                            <option value="<?= $data['id_jabatan_karyawan'] ?>"><?= $data['status_pengguna_jasa'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Status <span class="mandatory">*</span></label>
                                                    <select name="status" id="status" class="form-control">
                                                        <?php if ($edit_karyawan['status_di_karyawan'] == "1") { ?>
                                                            <option value="1">Aktif</option>
                                                        <?php } elseif ($edit_karyawan['status_di_karyawan'] == "0") { ?>
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