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
                                    <h3 class="box-title">Tambah</h3>
                                </div>
                                <div class="box-body">
                                    <form method="post" action="<?= base_url('pengaturan/user/save') ?>">
                                        <div class="form-group">
                                            <label for="nik">NIP/NIPTT <span class="mandatory">*</span></label>
                                            <input type="text" class="form-control" name="nik" id="nik" maxlength="255" autofocus />
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Nama <span class="mandatory">*</span></label>
                                            <input type="text" class="form-control" name="nama" id="nama" maxlength="255" />
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat" rows="7"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Nomor Telepon</label>
                                            <input type="text" class="form-control" name="no_hp" id="no_hp" maxlength="35" />
                                        </div>
                                        <div class="form-group">
                                            <label for="jabatan">Jabatan <span class="mandatory">*</span></label>
                                            <select class="form-control" name="jabatan" id="jabatan">
                                                <option value="PNS">PNS</option>
                                                <option value="Non PNS">Non PNS</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email <span class="mandatory">*</span></label>
                                            <input type="text" class="form-control" name="email" id="email" maxlength="255" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password <span class="mandatory">*</span></label>
                                            <input type="password" class="form-control" name="password" id="password" maxlength="50" />
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status <span class="mandatory">*</span></label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="1" selected>Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                            </select>
                                        </div>
                                        <div class="box-tools pull-right">
                                            <button type="submit" name="submit" value="submit" class="btn btn-primary">SIMPAN</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
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