<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title ?></h1>
                    <?= $this->session->flashdata('success'); ?>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><?= $parent ?></a></li>
                        <li class="breadcrumb-item active"><?= $child ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Select2 (Default Theme)</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <form action="<?= base_url('auth/registerform'); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama_lengkap" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" name="nik" id="nik" class="form-control" onkeyup='cek_email()' required>
                                    <span id='pesan_nik'>Silahkan mengisi NIK</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" minlength="5" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <div class="select2-purple">
                                        <select class="select2" name="id_jabatan" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-danger" required style="width: 100%;">
                                            <?php foreach ($jabatan as $data) : ?>
                                                <option value="<?= $data->id_jabatan ?>"><?= $data->nama_jabatan ?></option>
                                            <?php endforeach ?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn submit btn-primary btn-flat">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-12 col-sm-6">

                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Pastikan data yang di inputkan benar sebelum mengklik simpan
            </div>
        </div>
        <!-- /.card -->


        <!-- /.row -->
</div>