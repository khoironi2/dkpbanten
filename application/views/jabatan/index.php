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
                        <h4 class="card-title">Data Jabatan</h4>
                        <a href="javascript:void()" data-toggle="modal" data-target="#add-jabatan" class="btn btn-primary btn-event w-10">
                            <span class="align-middle"><i class="ti-plus"></i></span> Tambah Baru
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Jabatan</th>
                                        <th>Dibuat oleh</th>
                                        <th>Diperbarui oleh</th>
                                        <th>Waktu dibuat</th>
                                        <th>Waktu diperbarui</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($datajabatan as $data) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['nama_jabatan'] ?></td>
                                            <td><?= $data['dibuat'] ?></td>
                                            <td><?= $data['diupdate'] ?></td>
                                            <td><?= $data['time_created'] ?></td>
                                            <td><?= $data['time_updated'] ?></td>
                                            <td>
                                                <span>
                                                    <a href="javascript:void()" class="mr-4" data-target="#edit<?= $data['id_jabatan'] ?>" data-toggle="modal" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                                    <a href="javascript:void()" data-target="#delete<?= $data['id_jabatan'] ?>" data-toggle="modal" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a>
                                                </span>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Jabatan</th>
                                        <th>Dibuat oleh</th>
                                        <th>Diperbarui oleh</th>
                                        <th>Waktu dibuat</th>
                                        <th>Waktu diperbarui</th>
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
            <div class="modal fade none-border" id="add-jabatan">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Tambah jabatan baru</strong></h4>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('jabatan/jabatan/add') ?>">
                                <div class="row">
                                    <div class="col-md">
                                        <label class="control-label">Nama jabatan</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" id="nama_jabatan" name="nama_jabatan" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <label class="control-label">Keterangan</label>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="4" id="keterangan_jabatan" name="keterangan_jabatan"></textarea>
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
            <!-- end modal add jabatan -->


            <!-- Modal edit jabatan -->
            <?php foreach ($datajabatan as $data) : ?>
                <div class="modal fade none-border" id="edit<?= $data['id_jabatan'] ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Edit data jabatan</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="<?= base_url('jabatan/jabatan/edit') ?>">
                                    <div class="row">
                                        <div class="col-md">
                                            <label class="control-label">Nama jabatan</label>
                                            <input class="form-control form-white" value="<?= $data['nama_jabatan'] ?>" placeholder="Enter name" type="text" id="nama_jabatan" name="nama_jabatan" required>
                                            <input class="form-control form-white" hidden value="<?= $data['id_jabatan'] ?>" placeholder="Enter name" type="text" id="id_jabatan" name="id_jabatan" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label class="control-label">Keterangan</label>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="4" id="keterangan_jabatan" name="keterangan_jabatan"><?= $data['keterangan_jabatan'] ?></textarea>
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
            <?php foreach ($datajabatan as $data) : ?>
                <div class="modal fade none-border" id="delete<?= $data['id_jabatan'] ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Hapus data jabatan</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="<?= base_url('jabatan/jabatan/delete/' . $data['id_jabatan']) ?>">
                                    <div class="row">
                                        <div class="col-md">
                                            <label class="control-label">Nama jabatan</label>
                                            <input class="form-control form-white" disabled value="<?= $data['nama_jabatan'] ?>" placeholder="Enter name" type="text" id="nama_jabatan" name="nama_jabatan" required>
                                            <input class="form-control form-white" hidden value="<?= $data['id_jabatan'] ?>" placeholder="Enter name" type="text" id="id_jabatan" name="id_jabatan" required>
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