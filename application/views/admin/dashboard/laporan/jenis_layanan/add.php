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
                                    <form method="post" action="<?= base_url('master/jenis_layanan/save')  ?>">
                                        <div class="form-group">
                                            <label for="category">Layanan <span class="mandatory">*</span></label>
                                            <select name="id_layanan" id="id_layanan" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($layanan as $data) : ?>
                                                    <option value="<?= $data['id_layanan'] ?>"><?= $data['nama'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Jenis Layanan <span class="mandatory">*</span></label>
                                            <input type="text" class="form-control" name="nama_jenis_layanan" id="nama_jenis_layanan" maxlength="255" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Satuan <span class="mandatory">*</span></label>
                                            <select name="id_satuan" id="id_satuan" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($satuan as $data) : ?>
                                                    <option value="<?= $data['id_satuan'] ?>"><?= $data['nama_satuan'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="7"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Harga <span class="mandatory">*</span></label>
                                            <input type="text" class="form-control dotseparator" name="harga" id="harga" required maxlength="15" />
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