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
                                    <form method="post" action="http://103.41.205.125/kalbusmarttrial/pengguna-jasa/add" enctype="multipart/form-data">
                                        <input type="hidden" name="id" id="id" value="" />
                                        <input type="hidden" name="main_img" id="main_img" value="" />
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Nama <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="name" id="name" value="" maxlength="255" autofocus />
                                                </div>
                                                <div class="form-group">
                                                    <label for="nik">NIK KTP <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="nik" id="nik" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Upload KTP</label>
                                                    <input type="file" class="form-control" name="image" id="image" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="placeofbirth">Tempat Lahir <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="placeofbirth" id="placeofbirth" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="birthdate">Tanggal Lahir <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control date" name="birthdate" id="birthdate" value="" maxlength="10" readonly />
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Alamat</label>
                                                    <textarea class="form-control" name="address" id="address" rows="7"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Nomor Telepon</label>
                                                    <input type="text" class="form-control" name="phone" id="phone" value="" maxlength="50" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" name="email" id="email" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan">Status Pengguna Jasa <span class="mandatory">*</span></label>
                                                    <select name="jabatan" id="jabatan" class="form-control">
                                                        <option value=""></option>
                                                        <option value="1">Nelayan Andon (Nahkoda)</option>
                                                        <option value="2">Bakul</option>
                                                        <option value="10">Pengawas PSDKP</option>
                                                        <option value="11">Anggota POKMASWAS</option>
                                                        <option value="12">Pengurus HNSI</option>
                                                        <option value="13">Pengelola TPI</option>
                                                        <option value="14">Pengelola SPDN</option>
                                                        <option value="15">BPR JATIM</option>
                                                        <option value="16">Pemilik kapal</option>
                                                        <option value="17">Nahkoda</option>
                                                        <option value="18">Pemancing</option>
                                                        <option value="19">Pemilik KIOS</option>
                                                        <option value="20">Pekerja KIOS</option>
                                                        <option value="21">Pekerja Bongkar Muat</option>
                                                        <option value="22">Pengurus Kapal</option>
                                                        <option value="23">Penguras Kapal</option>
                                                        <option value="24">Pengurus Gudang</option>
                                                        <option value="25">Pemanol</option>
                                                        <option value="26">Nelayan Lokal (Pemilik Kapal)</option>
                                                        <option value="28">Supir</option>
                                                        <option value="31">Nelayan Lokal (ABK)</option>
                                                        <option value="32">Nelayan Andon (ABK)</option>
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pasmasuk">Pas Masuk <span class="mandatory">*</span></label>
                                                            <input type="text" name="pasmasuk" id="pasmasuk" class="form-control datestart" value="" maxlength="10" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="paskeluar">Pas Keluar <span class="mandatory">*</span></label>
                                                            <input type="text" name="paskeluar" id="paskeluar" class="form-control dateend" value="" maxlength="10" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cardnum">Nomor Kartu <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="cardnum" id="cardnum" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="pin">PIN <span class="mandatory">*</span></label>
                                                    <input type="password" class="form-control" name="pin" id="pin" maxlength="6" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggalkartu">Tanggal Kartu<span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control datestart" name="tanggalkartu" id="tanggalkartu" maxlength="10" readonly value="" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggalkartuakhir">Tanggal Akhir Kartu<span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control dateend" name="tanggalkartuakhir" id="tanggalkartuakhir" maxlength="10" readonly value="" />
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

                                    </form>
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