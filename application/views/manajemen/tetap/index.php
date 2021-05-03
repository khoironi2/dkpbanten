<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, selamat datang kembali!</h4>
                    <span><?= $users['nama'] ?></span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $parent ?></a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $child ?></a></li>
                </ol>
            </div>
        </div>
        <p><?php echo $this->session->flashdata('success'); ?></p>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Karyawan <?= $child; ?></h4>
                        <a href="javascript:void()" data-toggle="modal" data-target="#add-bidang" class="btn btn-primary btn-event w-10">
                            <span class="align-middle"><i class="ti-plus"></i></span> Tambah Baru
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK AKBARA</th>
                                        <th>NIDN / NIDK/NITK</th>
                                        <th>Nama</th>
                                        <th>Waktu dibuat</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($tetap as $data) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['nik'] ?></td>
                                            <td><?= $data['nidn'] ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['time_create_pegawai'] ?></td>
                                            <td>
                                                <span>
                                                    <a href="javascript:void()" class="mr-4" data-target="#edit<?= $data['id_bidang'] ?>" data-toggle="modal" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                                    <a href="javascript:void()" data-target="#delete<?= $data['id_bidang'] ?>" data-toggle="modal" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a>
                                                </span>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK AKBARA</th>
                                        <th>NIDN / NIDK/NITK</th>
                                        <th>Nama</th>
                                        <th>Waktu dibuat</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- Modal Add jabatan -->
            <div class="modal fade none-border" id="add-bidang">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Tambah Karyawan Tetap</strong></h4>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('bidang/bidang/add') ?>">
                                <div class="row">
                                    <div class="col-md">
                                        <label class="control-label">Nama dan Gelar</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" id="nama_bidang" name="nama_bidang" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <label class="control-label">NIK AKBARA</label>
                                        <input class="form-control form-white" placeholder="Enter NIK AKBARA" type="text" id="nama_bidang" name="nama_bidang" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <label>Jabatan</label>
                                        <select class="form-control" id="sel1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <label>Bidang</label>
                                        <select class="form-control" id="sel1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger waves-effect waves-light save-category">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal add jabatan -->


            <!-- Modal edit jabatan -->
            <?php foreach ($tetap as $data) : ?>
                <div class="modal fade none-border" id="edit<?= $data['id_bidang'] ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Edit data bidang</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="<?= base_url('bidang/bidang/edit') ?>">
                                    <div class="row">
                                        <div class="col-md">
                                            <label class="control-label">Nama jabatan</label>
                                            <input class="form-control form-white" value="<?= $data['nama_bidang'] ?>" placeholder="Enter name" type="text" id="nama_bidang" name="nama_bidang" required>
                                            <input class="form-control form-white" hidden value="<?= $data['id_bidang'] ?>" placeholder="Enter name" type="text" id="id_bidang" name="id_bidang" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label class="control-label">Keterangan</label>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="4" id="keterangan_bidang" name="keterangan_bidang"><?= $data['keterangan_bidang'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light save-category">Save</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <!-- end modal edit jabatan -->

            <!-- Modal edit jabatan -->
            <?php foreach ($tetap as $data) : ?>
                <div class="modal fade none-border" id="delete<?= $data['id_bidang'] ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Hapus data bidang</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="<?= base_url('bidang/bidang/delete/' . $data['id_bidang']) ?>">
                                    <div class="row">
                                        <div class="col-md">
                                            <label class="control-label">Nama jabatan</label>
                                            <input class="form-control form-white" disabled value="<?= $data['nama_bidang'] ?>" placeholder="Enter name" type="text" id="nama_bidang" name="nama_bidang" required>
                                            <input class="form-control form-white" hidden value="<?= $data['id_bidang'] ?>" placeholder="Enter name" type="text" id="id_bidang" name="id_bidang" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-light waves-effect waves-default ">Hapus</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <!-- end modal edit jabatan -->

        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->