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
                                    <form method="post" action="http://103.41.205.125/kalbusmarttrial/harga-ikan/add">
                                        <input type="hidden" name="id" id="id" value="" />
                                        <div class="form-group">
                                            <label for="jenisikan">Jenis Ikan <span class="mandatory">*</span></label>
                                            <select name="jenisikan" id="jenisikan" class="form-control select2">
                                                <option value="">&nbsp;</option>
                                                <option value="1">tongkol</option>
                                                <option value="2">Ayam-ayam</option>
                                                <option value="3">Cakalang</option>
                                                <option value="4">Madidihang</option>
                                                <option value="5">Albakor</option>
                                                <option value="6">Tuna Mata Besar</option>
                                                <option value="7">Layang</option>
                                                <option value="8">Layur Sirip Kuning</option>
                                                <option value="9">Ikan Layur Sirip Hitam</option>
                                                <option value="10">Layaran</option>
                                                <option value="11">Lemadang</option>
                                                <option value="12">Pisang pisang</option>
                                                <option value="13">Cumi-cumi</option>
                                                <option value="14">Kembung</option>
                                                <option value="15">Hiu</option>
                                                <option value="16">Lemuru</option>
                                                <option value="17">Tenggiri</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Harga <span class="mandatory">*</span></label>
                                            <input type="text" name="price" class="form-control dotseparator" id="price" maxlength="15" value="" />
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