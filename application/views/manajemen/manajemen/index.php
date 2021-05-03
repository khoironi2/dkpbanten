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
                                    <?php foreach ($manajemen as $data) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['nik'] ?></td>
                                            <td><?= $data['nidn'] ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['time_create_pegawai'] ?></td>
                                            <td>
                                                <span>
                                                    <a href="javascript:void()" class="mr-4" data-target="#edit<?= $data['id_pegawai'] ?>" data-toggle="modal" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                                    <a href="javascript:void()" class="mr-4" data-target="#delete<?= $data['id_pegawai'] ?>" data-toggle="modal" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a>
                                                    <a href="javascript:void()" data-target="#resetpwd<?= $data['id_pegawai'] ?>" data-toggle="modal" data-placement="top" title="reset password"><i class="fa fa-key color-muted"></i></a>
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
                            <h4 class="modal-title"><strong>Tambah Karyawan</strong></h4>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('manajemen/manajemen/add') ?>">
                                <div class="row">
                                    <div class="col-md">
                                        <label class="control-label">Nama dan Gelar</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" id="nama" name="nama" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <label class="control-label">NIK AKBARA</label>
                                        <input class="form-control form-white" placeholder="Enter NIK AKBARA" type="text" id="nik" name="nik" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <label>Jabatan</label>
                                        <select name="id_jabatan" class="form-control" id="id_jabatan" required>
                                            <option value="">None</option>
                                            <?php foreach ($datajabatan as $data) : ?>
                                                <option value="<?= $data['id_jabatan'] ?>"><?= $data['nama_jabatan'] ?></option>
                                            <?php endforeach ?>
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


            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg">Large modal</button> -->
            <!-- Modal edit jabatan -->
            <?php foreach ($manajemen as $data) : ?>
                <!-- Large modal -->

                <div class="modal fade" id="edit<?= $data['id_pegawai'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Perbarui</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="<?= base_url('manajemen/manajemen/edit') ?>">
                                    <div class="row">
                                        <div class="basic-form">

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Nama</label>
                                                    <input type="text" value="<?= $data['nama'] ?>" name="nama" class="form-control" placeholder="1234 Main St">
                                                    <input type="text" hidden value="<?= $data['id_pegawai'] ?>" name="id_pegawai" class="form-control" placeholder="1234 Main St">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Jabatan</label>
                                                    <select name="id_jabatan" class="form-control" id="id_jabatan" required>
                                                        <option value="<?= $data['id_jabatan'] ?>"><?= $data['nama_jabatan'] ?></option>
                                                        <option value=""> None </option>
                                                        <?php foreach ($jabatan as $ja) : ?>
                                                            <option value="<?= $ja['id_jabatan'] ?>"><?= $ja['nama_jabatan'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>NIK AKBARA</label>
                                                    <input type="text" value="<?= $data['nik'] ?>" name="nik" class="form-control" placeholder="NIK Akbara">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>NIDN</label>
                                                    <input type="text" value="<?= $data['nidn'] ?>" name="nidn" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>NIDK</label>
                                                    <input type="text" value="<?= $data['nidk'] ?>" name="nidk" class="form-control" placeholder="NIDK">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>NITK</label>
                                                    <input type="text" value="<?= $data['nitk'] ?>" name="nitk" class="form-control" placeholder="NITK">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Waktu Bergabung</label>
                                                    <input type="date" value="<?= $data['tgl_masuk'] ?>" name="tgl_masuk" class="form-control" placeholder="1234 Main St">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Waktu Resign</label>
                                                    <input type="date" value="<?= $data['tgl_keluar'] ?>" name="tgl_keluar" class="form-control" placeholder="1234 Main St">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>SK 1</label>
                                                    <input type="text" value="<?= $data['sk_1'] ?>" name="sk_1" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Masa Kerja SK 1</label>
                                                    <input type="text" value="<?= $data['masa_kerja_sk_1'] ?>" name="masa_kerja_sk_1" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>SK 2</label>
                                                    <input type="text" value="<?= $data['sk_2'] ?>" name="sk_2" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Masa Kerja SK 2</label>
                                                    <input type="text" value="<?= $data['masa_kerja_sk_2'] ?>" name="masa_kerja_sk_2" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>NOHP</label>
                                                    <input type="text" value="<?= $data['no_hp'] ?>" name="no_hp" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Email</label>
                                                    <input type="email" value="<?= $data['email'] ?>" name="email" class="form-control" placeholder="NIDK">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Tempat Lahir</label>
                                                    <input type="text" value="<?= $data['tempat_lahir'] ?>" name="tempat_lahir" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Tanggal Lahir</label>
                                                    <input type="date" value="<?= $data['tgl_lahir'] ?>" name="tgl_lahir" class="form-control" placeholder="NIDK">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Pendidikan Terakhir</label>
                                                    <input type="text" value="<?= $data['pendidikan_terakhir'] ?>" name="pendidikan_terakhir" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Program Studi</label>
                                                    <input type="text" value="<?= $data['program_studi'] ?>" name="program_studi" class="form-control" placeholder="program studi">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Alamat</label>
                                                    <textarea name="alamat" class="form-control"><?= $data['alamat'] ?></textarea>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>KEGIATAN YANG DIIKUTI</label>
                                                    <textarea name="kegiatan_yang_diikuti" class="form-control"><?= $data['kegiatan_yang_diikuti'] ?></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-light waves-effect waves-default ">Save</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <!-- Modal edit jabatan -->
            <?php foreach ($manajemen as $data) : ?>
                <div class="modal fade none-border" id="delete<?= $data['id_pegawai'] ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Hapus</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="<?= base_url('manajemen/manajemen/delete/' . $data['id_pegawai']) ?>">
                                    <div class="row">
                                        <div class="col-md">
                                            <label class="control-label">Nama jabatan</label>
                                            <input class="form-control form-white" disabled value="<?= $data['nama'] ?>" placeholder="Enter name" type="text" id="nama_bidang" name="nama_bidang" required>
                                            <input class="form-control form-white" hidden value="<?= $data['id_pegawai'] ?>" placeholder="Enter name" type="text" id="id_bidang" name="id_bidang" required>
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