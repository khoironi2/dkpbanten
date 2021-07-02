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
                                    <form method="post" action="<?= base_url('master/kapal/add') ?>" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Nama Kapal <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="nama_kapal" id="nama_kapal" maxlength="255" required />
                                                </div>
                                                <div class="form-group">
                                                    <label for="tipekapal">Tipe Kapal <span class="mandatory">*</span></label><br />
                                                    <select class="form-control select2" name="id_tipe_kapal" id="id_tipe_kapal" style="width: 100%;">
                                                        <?php foreach ($tipe_kapal as $data) : ?>
                                                            <option value="<?= $data['id_tipe_kapal'] ?>"><?= $data['nama_tipe_kapal'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jeniskapal">Jenis Kapal <span class="mandatory">*</span></label><br />
                                                    <select class="form-control select2" name="id_jenis_kapal" id="id_jenis_kapal" style="width: 100%;">
                                                        <?php foreach ($jenis_kapal as $data) : ?>
                                                            <option value="<?= $data['id_jenis_kapal'] ?>"><?= $data['nama_jenis_kapal'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nationality">Bendera Kebangsaan <span class="mandatory">*</span></label>
                                                    <select class="form-control select2" name="id_bendera_kapal" id="id_bendera_kapal" style="width: 100%;">
                                                        <?php foreach ($bendera_kapal as $data) : ?>
                                                            <option value="<?= $data['id_bendera_kapal'] ?>"><?= $data['nama_bendera_kapal'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pemilik">Pemilik <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="pemilik" id="pemilik" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="nahkoda">Nahkoda <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="nahkoda" id="nahkoda" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="jumlahabk">Jumlah ABK <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control dotseparator" name="jumlah_abk" id="jumlah_abk" maxlength="15" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="merk">Merk Mesin Utama / No. Mesin <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="merk_mesin_utama" id="merk_mesin_utama" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="merktambahan">Merk Mesin Tambahan / No. Mesin <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="merk_mesin_tambahan" id="merk_mesin_tambahan" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="pshp">PK / PS / HP <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control dotseparator" name="pk_ps_hp" id="pk_ps_hp" maxlength="15" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="gt">GT <span class="mandatory">*</span></label>
                                                            <input type="text" class="form-control dotseparatorwithcomma" name="gt" id="gt" value="" maxlength="15" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="panjang">Panjang Kapal <span class="mandatory">*</span></label>
                                                            <input type="text" class="form-control dotseparatorwithcomma" name="panjang_kapal" id="panjang_kapal" maxlength="15" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lebar">Lebar Kapal <span class="mandatory">*</span></label>
                                                            <input type="text" class="form-control dotseparatorwithcomma" name="lebar_kapal" id="lebar_kapal" maxlength="15" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="draft">Draft Kapal <span class="mandatory">*</span></label>
                                                            <input type="text" class="form-control dotseparatorwithcomma" name="draft_kapal" id="draft_kapal" maxlength="15" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tandaselar">Tanda Selar <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="tanda_selar" id="tanda_selar" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="alattangkap">Alat Tangkap <span class="mandatory">*</span></label><br />
                                                    <select class="form-control select-with-select2" name="id_alat_tangkap_kapal" id="id_alat_tangkap_kapal">
                                                        <?php foreach ($alat_tangkap as $data) : ?>
                                                            <option value="<?= $data['id_alat_tangkap_kapal'] ?>"><?= $data['nama_alat_tangkap_kapal'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="perusahaan">Perusahaan <span class="mandatory">*</span></label><br />
                                                    <select class="form-control select-with-select2" name="id_perusahaan" id="id_perusahaan">
                                                        <?php foreach ($perusahaan as $data) : ?>
                                                            <option value="<?= $data['id_perusahaan'] ?>"><?= $data['nama'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="alamat" id="alamat" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="siup">SIUP <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="siup" id="siup" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="siupurl">File SIUP</label>
                                                    <input type="file" class="form-control" name="file_siup" id="file_siup" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="sikpi">SIKPI <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="sikpi" id="sikpi" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="sikpiurl">File SIKPI</label>
                                                    <input type="file" class="form-control" name="file_sikpi" id="file_sikpi" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="sipi">SIPI <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="sipi" id="sipi" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="sipiurl">File SIPI</label>
                                                    <input type="file" class="form-control" name="file_sipi" id="file_sipi" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="sipiandon">SIPI Andon <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="sipi_andon" id="sipi_andon" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="sipiandonurl">File SIPI Andon</label>
                                                    <input type="file" class="form-control" name="file_sipi_andon" id="file_sipi_andon" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="suratkelaikan">Surat Kelayakan <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="surat_kelayakan" id="surat_kelayakan" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="suratkelaikanurl">File Surat Kelayakan</label>
                                                    <input type="file" class="form-control" name="file_surat_kelayakan" id="file_surat_kelayakan" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="pasbesar">Pas Kecil / Pas Besar / Surat Laut <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="pas_kecil_pas_besar_surat_laut" id="pas_kecil_pas_besar_surat_laut" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="pasbesarurl">File Pas Kecil / Pas Besar / Surat Laut</label>
                                                    <input type="file" class="form-control" name="file_pas_kecil_pas_besar_surat_laut" id="file_pas_kecil_pas_besar_surat_laut" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="suratukurkapal">Surat Ukur Kapal <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="surat_ukur_kapal" id="surat_ukur_kapal" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="suratukurkapalurl">File Surat Ukur Kapal</label>
                                                    <input type="file" class="form-control" name="file_surat_ukur_kapal" id="file_surat_ukur_kapal" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="grossaktekapal">Gross Akte Kapal <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="gross_akte_kapal" id="gross_akte_kapal" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="grossaktekapalurl">File Gross Akte Kapal</label>
                                                    <input type="file" class="form-control" name="file_gross_akte_kapal" id="file_gross_akte_kapal" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="provinsi">Provinsi <span class="mandatory">*</span></label><br />
                                                    <select class="form-control select2" name="id_provinsi" id="id_provinsi">
                                                        <?php foreach ($provinsi as $data) : ?>
                                                            <option value="<?= $data['id_provinsi'] ?>"><?= $data['nama_provinsi'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="wpp">WPP <span class="mandatory">*</span></label>
                                                    <select name="id_wpp" id="id_wpp" class="form-control select2">
                                                        <?php foreach ($wpp as $data) : ?>
                                                            <option value="<?= $data['id_wpp'] ?>"><?= $data['nama_wpp'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="wpp">DPI <span class="mandatory">*</span></label>
                                                    <select name="id_dopi" id="id_dopi" class="form-control select2">
                                                        <?php foreach ($dop as $data) : ?>
                                                            <option value="<?= $data['id_daerah_operasional_penangkapan_ikan'] ?>"><?= $data['dpi'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pelabuhanpangkalan">Pelabuhan Pangkalan <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="pelabuhan_pangkalan" id="pelabuhan_pangkalan" maxlength="255" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tanggalsipi">Tanggal SIPI <span class="mandatory">*</span></label>
                                                            <input type="date" class="form-control" name="tanggal_sipi" id="tanggal_sipi" maxlength="10" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tanggalakhirsipi">Tanggal Akhir SIPI</label>
                                                            <input type="date" class="form-control" name="tanggal_akhir_sipi" id="tanggal_akhir_sipi" maxlength="10" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="penggunabuat">Pengguna Buat <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="pengguna_buat" id="pengguna_buat" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="status_sipi">Status SIPI <span class="mandatory">*</span></label>
                                                    <br />
                                                    <label class="radio-inline">
                                                        <input type="radio" name="status_sipi" value="2" checked> Semua
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="status_sipi" value="1"> Not Expired
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="status_sipi" value="0"> Expired
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="layanan">Jenis Layanan</label>
                                                    <select name="id_jenis_layanan" id="id_jenis_layanan" class="form-control select2">
                                                        <?php foreach ($jenis_layanan as $data) : ?>
                                                            <option value="<?= $data['id_jenis_layanan'] ?>"><?= $data['nama_jenis_layanan'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
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
        </form>
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