<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                    <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><?= $parent; ?></a></li>
                        <li class="breadcrumb-item active"><?= $child; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form action="<?= base_url('pengajuan/form/create'); ?>" method="POST" enctype="multipart/form-data">
        <section class="content ml-4">
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Disahkan
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <label for="exampleInputEmail1">Dirumuskan</label>
                                    <div class="select2-purple">
                                        <select class="select2" name="dirumuskan_pengajuan" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-danger" required style="width: 100%;">
                                            <?php foreach ($user as $data) : ?>
                                                <option value="<?= $data->id_users ?>"><?= $data->nama_lengkap ?></option>
                                            <?php endforeach ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="exampleInputEmail1">Diperiksa</label>
                                    <div class="select2-purple">
                                        <select class="select2" name="diperiksa_pengajuan" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-danger" required style="width: 100%;">
                                            <?php foreach ($user as $data) : ?>
                                                <option value="<?= $data->id_users ?>"><?= $data->nama_lengkap ?></option>
                                            <?php endforeach ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="exampleInputEmail1">Ditetapkan</label>
                                    <div class="select2-purple">
                                        <select class="select2" name="ditetapkan_pengajuan" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-danger" required style="width: 100%;">
                                            <?php foreach ($user as $data) : ?>
                                                <option value="<?= $data->id_users ?>"><?= $data->nama_lengkap ?></option>
                                            <?php endforeach ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="exampleInputEmail1">Dikendalikan</label>
                                    <div class="select2-purple">
                                        <select class="select2" name="dikendalikan_pengajuan" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-danger" required style="width: 100%;">
                                            <?php foreach ($user as $data) : ?>
                                                <option value="<?= $data->id_users ?>"><?= $data->nama_lengkap ?></option>
                                            <?php endforeach ?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Judul
                            </h3>
                        </div>
                        <div class="card-body">
                            <input type="text" name="judul_pengajuan" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                A. Latar Belakang
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea name="latar_belakang_pengajuan" id="summernote1" required>

                         </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                B. Tujuan
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea name="tujuan_pengajuan" id="summernote2" required>

                         </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                C. Manfaat
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea name="manfaat_pengajuan" id="summernote3" required>
                         </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                D. Jenis Pengajuan
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea style="font-size:25px;" name="jenis_pengajuan" id="summernote4" required>
                         </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                E. Biaya Anggaran
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea style="font-size:25px;" name="biaya_pengajuan" id="summernote5" required>
                         </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                F. Waktu Pelaksanaan
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="dari">Dari</label>
                                <input type="datetime-local" class="form-control" id="dari" name="waktu_pengajuan_awal" required>
                            </div>
                            <div class="form-group">
                                <label for="sampai">Sampai</label>
                                <input type="datetime-local" class="form-control" id="sampai" name="waktu_pengajuan_akhir" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                G. Peserta
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea name="peserta_pengajuan" required id="summernote6" required>
                         </textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                H. Penutup
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea name="penutup_pengajuan" required id="summernote7">
                         </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                File Proposal
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="file_pengajuan">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="file_pengajuan" class="custom-file-input" id="file_pengajuan">
                                        <label class="custom-file-label" for="file_pengajuan">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>

        </section>

    </form>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->