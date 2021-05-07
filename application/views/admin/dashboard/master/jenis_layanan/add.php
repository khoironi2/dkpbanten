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
                                    <form method="post" action="http://103.41.205.125/kalbusmarttrial/jenis-layanan/add">
                                        <input type="hidden" name="id" id="id" value="" />
                                        <div class="form-group">
                                            <label for="category">Layanan <span class="mandatory">*</span></label>
                                            <select name="category" id="category" class="form-control">
                                                <option value="1">Pelayanan Wisata Bahari</option>
                                                <option value="2">Penyewaan Peralatan/Kendaraan</option>
                                                <option value="5">Pelayanan Pemakaian Gedung</option>
                                                <option value="6">Pelayanan Sewa Lahan</option>
                                                <option value="7">Pelayanan Sewa Bangunan</option>
                                                <option value="8">Pemakaian Slipway Docking</option>
                                                <option value="9">Pelayanan Air Bersih</option>
                                                <option value="10">Layanan Jasa Tambat Labuh Kapal Perikanan</option>
                                                <option value="13">Pelayanan Pas Masuk</option>
                                                <option value="14">Pendapatan Lain-lain yang sah</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Jenis Layanan <span class="mandatory">*</span></label>
                                            <input type="text" class="form-control" name="name" id="name" value="" maxlength="255" autofocus />
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Satuan <span class="mandatory">*</span></label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="33">per tahun</option>
                                                <option value="34">per hari</option>
                                                <option value="35">per m2 per tahun</option>
                                                <option value="36">per m2 per hari</option>
                                                <option value="37">per jam</option>
                                                <option value="38">per sekali pakai</option>
                                                <option value="39">per unit per hari</option>
                                                <option value="40">per lembar</option>
                                                <option value="41">per tabung</option>
                                                <option value="42">per orang</option>
                                                <option value="43">per 8 jam</option>
                                                <option value="44">per 10 jam</option>
                                                <option value="45">per kamar</option>
                                                <option value="46">per bulan</option>
                                                <option value="47">per 10 hari</option>
                                                <option value="48">per pekerjaan</option>
                                                <option value="49">per GT per hari</option>
                                                <option value="50">Meter Kubik</option>
                                                <option value="51">etmal</option>
                                                <option value="52">per meter panjang kapal per hari</option>
                                                <option value="53">per sekali bongkar</option>
                                                <option value="54">per kendaraan</option>
                                                <option value="55">per sekali masuk</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Deskripsi</label>
                                            <textarea class="form-control" name="description" id="description" rows="7"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Harga <span class="mandatory">*</span></label>
                                            <input type="text" class="form-control dotseparator" name="price" id="prices" value="" maxlength="15" />
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status <span class="mandatory">*</span></label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="1" selected>Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                            </select>
                                        </div>

                                    </form>
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