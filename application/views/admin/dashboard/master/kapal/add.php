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
                                    <form method="post" action="http://103.41.205.125/kalbusmarttrial/kapal/add" enctype="multipart/form-data">
                                        <input type="hidden" name="id" id="id" value="" />
                                        <input type="hidden" name="main_siup" id="main_siup" value="" />
                                        <input type="hidden" name="main_sikpi" id="main_sikpi" value="" />
                                        <input type="hidden" name="main_sipi" id="main_sipi" value="" />
                                        <input type="hidden" name="main_suratkelaikan" id="main_suratkelaikan" value="" />
                                        <input type="hidden" name="main_sipiandon" id="main_sipiandon" value="" />
                                        <input type="hidden" name="main_pasbesar" id="main_pasbesar" value="" />
                                        <input type="hidden" name="main_suratukurkapal" id="main_suratukurkapal" value="" />
                                        <input type="hidden" name="main_grossaktekapal" id="main_grossaktekapal" value="" />

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Nama Kapal <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="name" id="name" value="" maxlength="255" autofocus />
                                                </div>
                                                <div class="form-group">
                                                    <label for="tipekapal">Tipe Kapal <span class="mandatory">*</span></label><br />
                                                    <select class="form-control select2" name="tipekapal" id="tipekapal" style="width: 100%;">
                                                        <option value="Kapal">Kapal</option>
                                                        <option value="Kapal Andon">Kapal Andon</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jeniskapal">Jenis Kapal <span class="mandatory">*</span></label><br />
                                                    <select class="form-control select2" style="width: 100%;">
                                                        <option value="6">Perahu Tanpa Motor</option>
                                                        <option value="7">Kapal Motor Tempel</option>
                                                        <option value="8">Kapal Motor</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nationality">Bendera Kebangsaan <span class="mandatory">*</span></label>
                                                    <select class="form-control select2" style="width: 100%;">
                                                        <option value=""></option>
                                                        <option value="NON RESIDENT">NON RESIDENT</option>
                                                        <option value="*ALL">*ALL</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="United Arab Emirat">United Arab Emirat</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Azarbaijan">Azarbaijan</option>
                                                        <option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Swiss/Switzerland">Swiss/Switzerland</option>
                                                        <option value="Cook Island">Cook Island</option>
                                                        <option value="Chili">Chili</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="China">China</option>
                                                        <option value="Columbia">Columbia</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Algeria/Aljazair">Algeria/Aljazair</option>
                                                        <option value="Equador">Equador</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="Spanyol">Spanyol</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Finlandia">Finlandia</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                        <option value="Perancis">Perancis</option>
                                                        <option value="United Kingdom (Inggris)">United Kingdom (Inggris)</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea Bissau">Guinea Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Hongkong">Hongkong</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="India">India</option>
                                                        <option value="Irak">Irak</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="Italia">Italia</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Korea Utara">Korea Utara</option>
                                                        <option value="Korea Selatan">Korea Selatan</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Lao People's Democ. Rep.">Lao People's Democ. Rep.</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Srilangka/Ceylon">Srilangka/Ceylon</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Macau">Macau</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Rumania">Rumania</option>
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Swedia/Sweden">Swedia/Sweden</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="St. Helena">St. Helena</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Siera Leone">Siera Leone</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="TIMOR LESTE">TIMOR LESTE</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                        <option value="Taiwan/Rep. Of China">Taiwan/Rep. Of China</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="United State Of America">United State Of America</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Yugoslavia">Yugoslavia</option>
                                                        <option value="SOUTH AFRICA">SOUTH AFRICA</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zaire">Zaire</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pemilik">Pemilik <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="pemilik" id="pemilik" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="nahkoda">Nahkoda <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="nahkoda" id="nahkoda" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="jumlahabk">Jumlah ABK <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control dotseparator" name="jumlahabk" id="jumlahabk" value="" maxlength="15" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="merk">Merk Mesin Utama / No. Mesin <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="merk" id="merk" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="merktambahan">Merk Mesin Tambahan / No. Mesin <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="merktambahan" id="merktambahan" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="pshp">PK / PS / HP <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control dotseparator" name="pshp" id="pshp" value="" maxlength="15" />
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
                                                            <input type="text" class="form-control dotseparatorwithcomma" name="panjang" id="panjang" value="" maxlength="15" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lebar">Lebar Kapal <span class="mandatory">*</span></label>
                                                            <input type="text" class="form-control dotseparatorwithcomma" name="lebar" id="lebar" value="" maxlength="15" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="draft">Draft Kapal <span class="mandatory">*</span></label>
                                                            <input type="text" class="form-control dotseparatorwithcomma" name="draft" id="draft" value="" maxlength="15" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tandaselar">Tanda Selar <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="tandaselar" id="tandaselar" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="alattangkap">Alat Tangkap <span class="mandatory">*</span></label><br />
                                                    <select class="form-control select-with-select2" name="alattangkap" id="alattangkap">
                                                        <option value=""></option>
                                                        <option value="1">Pancing Tonda</option>
                                                        <option value="2">Jaring</option>
                                                        <option value="3">Cantrang</option>
                                                        <option value="4">cantrang / pukat harimau</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="perusahaan">Perusahaan <span class="mandatory">*</span></label><br />
                                                    <select class="form-control select-with-select2" name="perusahaan" id="perusahaan">
                                                        <option value=""></option>
                                                        <option value="3">Ferizal</option>
                                                        <option value="5">H. Iraghi Lutfi</option>
                                                        <option value="6">Ratu Ajeng Citra Ayu</option>
                                                        <option value="7">Supono</option>
                                                        <option value="8">Bagus</option>
                                                        <option value="9">Jodi Setyo Hermawan</option>
                                                        <option value="10">Sri Wahyuni</option>
                                                        <option value="11">MAKMUR</option>
                                                        <option value="12">Haeruddin</option>
                                                        <option value="13">Asri</option>
                                                        <option value="14">Usri</option>
                                                        <option value="15">Abd. Razak</option>
                                                        <option value="16">Ervina</option>
                                                        <option value="17">ROKHANI</option>
                                                        <option value="18">H. Soleh</option>
                                                        <option value="19">Ari Yudi Prasetyo</option>
                                                        <option value="20">Suyanto</option>
                                                        <option value="21">Deni</option>
                                                        <option value="22">Malinda Semedi</option>
                                                        <option value="23">-</option>
                                                        <option value="24">anugra jaya</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="alamat" id="alamat" value="" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="siup">SIUP <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="siup" id="siup" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="siupurl">File SIUP</label>
                                                    <input type="file" class="form-control" name="siupurl" id="siupurl" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="sikpi">SIKPI <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="sikpi" id="sikpi" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="sikpiurl">File SIKPI</label>
                                                    <input type="file" class="form-control" name="sikpiurl" id="sikpiurl" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="sipi">SIPI <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="sipi" id="sipi" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="sipiurl">File SIPI</label>
                                                    <input type="file" class="form-control" name="sipiurl" id="sipiurl" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="sipiandon">SIPI Andon <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="sipiandon" id="sipiandon" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="sipiandonurl">File SIPI Andon</label>
                                                    <input type="file" class="form-control" name="sipiandonurl" id="sipiandonurl" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="suratkelaikan">Surat Kelaikan <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="suratkelaikan" id="suratkelaikan" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="suratkelaikanurl">File Surat Kelaikan</label>
                                                    <input type="file" class="form-control" name="suratkelaikanurl" id="suratkelaikanurl" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="pasbesar">Pas Kecil / Pas Besar / Surat Laut <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="pasbesar" id="pasbesar" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="pasbesarurl">File Pas Kecil / Pas Besar / Surat Laut</label>
                                                    <input type="file" class="form-control" name="pasbesarurl" id="pasbesarurl" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="suratukurkapal">Surat Ukur Kapal <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="suratukurkapal" id="suratukurkapal" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="suratukurkapalurl">File Surat Ukur Kapal</label>
                                                    <input type="file" class="form-control" name="suratukurkapalurl" id="suratukurkapalurl" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="grossaktekapal">Gross Akte Kapal <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="grossaktekapal" id="grossaktekapal" value="" maxlength="255" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="grossaktekapalurl">File Gross Akte Kapal</label>
                                                    <input type="file" class="form-control" name="grossaktekapalurl" id="grossaktekapalurl" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="provinsi">Provinsi <span class="mandatory">*</span></label><br />
                                                    <select class="form-control select2" name="provinsi" id="provinsi">
                                                        <option value=""></option>
                                                        <option value="1">Aceh</option>
                                                        <option value="2">Sumatera Utara</option>
                                                        <option value="3">Sumatera Barat</option>
                                                        <option value="4">Riau</option>
                                                        <option value="5">Kepulauan Riau</option>
                                                        <option value="6">Jambi</option>
                                                        <option value="7">Bengkulu</option>
                                                        <option value="8">Sumatera Selatan</option>
                                                        <option value="9">Kepulauan Bangka Belitung</option>
                                                        <option value="10">Lampung</option>
                                                        <option value="11">Banten</option>
                                                        <option value="12">Jawa Barat</option>
                                                        <option value="13">DKI Jakarta</option>
                                                        <option value="14">Jawa Tengah</option>
                                                        <option value="15">DI Yogyakarta</option>
                                                        <option value="16">Jawa Timur</option>
                                                        <option value="17">Bali</option>
                                                        <option value="18">Nusa Tenggara Barat</option>
                                                        <option value="19">Nusa Tenggara Timur</option>
                                                        <option value="20">Kalimantan Utara</option>
                                                        <option value="21">Kalimantan Barat</option>
                                                        <option value="22">Kalimantan Tengah</option>
                                                        <option value="23">Kalimantan Selatan</option>
                                                        <option value="24">Kalimantan Timur</option>
                                                        <option value="25">Gorontalo</option>
                                                        <option value="26">Sulawesi Utara</option>
                                                        <option value="27">Sulawesi Barat</option>
                                                        <option value="28">Sulawesi Tengah</option>
                                                        <option value="29">Sulawesi Selatan</option>
                                                        <option value="30">Sulawesi Tenggara</option>
                                                        <option value="31">Maluku Utara</option>
                                                        <option value="32">Maluku</option>
                                                        <option value="33">Papua Barat</option>
                                                        <option value="34">Papua</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="wpp">WPP <span class="mandatory">*</span></label>
                                                    <select name="wpp" id="wpp" class="form-control select2">
                                                        <option value=""></option>
                                                        <option value="1">WPP 573</option>
                                                        <option value="2">1234</option>
                                                        <option value="3">765</option>
                                                        <option value="4">tes123</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="dpi">DPI <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="dpi" id="dpi" value="" maxlength="255" readonly />
                                                </div>
                                                <div class="form-group">
                                                    <label for="pelabuhanpangkalan">Pelabuhan Pangkalan <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="pelabuhanpangkalan" id="pelabuhanpangkalan" maxlength="255" value="" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tanggalsipi">Tanggal SIPI <span class="mandatory">*</span></label>
                                                            <input type="text" class="form-control" name="tanggalsipi" id="tanggalsipi" value="" maxlength="10" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tanggalakhirsipi">Tanggal Akhir SIPI</label>
                                                            <input type="text" class="form-control" name="tanggalakhirsipi" id="tanggalakhirsipi" value="" maxlength="10" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="penggunabuat">Pengguna Buat <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="penggunabuat" id="penggunabuat" maxlength="255" value="" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="statussipi">Status SIPI <span class="mandatory">*</span></label>
                                                    <br />
                                                    <label class="radio-inline">
                                                        <input type="radio" name="statussipi" value="Semua" checked> Semua
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="statussipi" value="Not Expired"> Not Expired
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="statussipi" value="Expired"> Expired
                                                    </label>
                                                </div>
                                                <input type='hidden' name="layanandata" id="layanandata" value="" />
                                                <div class="form-group">
                                                    <label for="layanan">Jenis Layanan</label>
                                                    <select name="layanan[]" id="layanans" class="form-control select2">
                                                        <option value=""></option>
                                                        <option value="1">Jasa Tambat Labuh Kapal perikanan 0-10 GT</option>
                                                        <option value="2">Pemakaian Kapal</option>
                                                        <option value="5">Pemakaian Peralatan Selam</option>
                                                        <option value="6">Pemakaian HT</option>
                                                        <option value="7">Pemakaian Mesin Fotocopy</option>
                                                        <option value="8">Pemakaian Tabung Selam</option>
                                                        <option value="9">Pemakaian Takel</option>
                                                        <option value="10">Pemakaian Jack Hammer</option>
                                                        <option value="11">Pemakaian Penghancur Es</option>
                                                        <option value="12">Coolbox Fiber 125 L</option>
                                                        <option value="13">Coolbox Saeplast 1000 L</option>
                                                        <option value="14">Coolbox Saeplast 500 L</option>
                                                        <option value="15">Coolbox Saeplast 300 L</option>
                                                        <option value="16">Coolbox Saeplast 100 L</option>
                                                        <option value="17">Keranjang Plastik</option>
                                                        <option value="18">Kendaraan Truck/Tangki Air</option>
                                                        <option value="19">Handtruck Pallet</option>
                                                        <option value="20">Kendaraan Roda 3 Dump</option>
                                                        <option value="21">Hand Forklift</option>
                                                        <option value="22">Pemakaian Andon non AC bagi PNS</option>
                                                        <option value="23">Pemakaian Andon AC bagi PNS</option>
                                                        <option value="24">Pemakaian Guest House Standar bagi PNS</option>
                                                        <option value="25">Pemakaian Guest House Superior bagi PNS</option>
                                                        <option value="26">Pemakaian Andon Non AC bagi Mahasiswa</option>
                                                        <option value="27">Pemakaian Andon AC bagi Mahasiswa</option>
                                                        <option value="28">Pemakaian Guest House Standar bagi Mahasiswa</option>
                                                        <option value="29">Pemakaian Guest House Superior bagi Mahasiswa</option>
                                                        <option value="30">Rumah Inap Nelayan Andon non AC</option>
                                                        <option value="31">Rumah Inap Nelayan Andon ber AC</option>
                                                        <option value="32">Ruangan Gedung Pertemuan untuk Kenelayanan/Perikanan</option>
                                                        <option value="33">Ruangan Gedung Pertemuan untuk Umum/Instansi</option>
                                                        <option value="34">Ruangan Gedung Pertemuan untuk Pernikahan</option>
                                                        <option value="35">Pemakaian Guest House Standar</option>
                                                        <option value="36">Pemakaian Guest House Superior</option>
                                                        <option value="37">Pemakaian Halaman untuk Pameran</option>
                                                        <option value="38">Pemakaian Lahan untuk Parkir</option>
                                                        <option value="39">Pemakaian Lahan untuk Panggung</option>
                                                        <option value="40">Pemakaian Halaman</option>
                                                        <option value="41">Penumpukan Barang pada Lahan</option>
                                                        <option value="42">Sewa Lahan > 100 m2</option>
                                                        <option value="43">Sewa Lahan 50-100 m2</option>
                                                        <option value="44">Sewa Lahan < 50 m2</option>
                                                        <option value="45">Sewa Lokasi Reklame > 100 m2</option>
                                                        <option value="46">Sewa Lokasi Reklame 75,00-99,99 m2</option>
                                                        <option value="47">Sewa Lokasi Reklame 50,00-74,99 m2</option>
                                                        <option value="48">Sewa Lokasi Reklame 32,00-49,99 m2</option>
                                                        <option value="49">Sewa Lokasi Reklame 18,00-31,99 m2</option>
                                                        <option value="50">Sewa Lokasi Reklame 8,01-17,99 m2</option>
                                                        <option value="51">Sewa Lokasi Reklame 4,00-8,00 m2</option>
                                                        <option value="52">Sewa Lokasi Reklame < 4,00 m2</option>
                                                        <option value="53">Penumpukan Barang pada Gudang</option>
                                                        <option value="54">Gerai ATM</option>
                                                        <option value="55">Pemakaian Tempat Penyimpanan</option>
                                                        <option value="56">Los Perbaikan Jaring</option>
                                                        <option value="57">Pemakaian Bangunan Permanen > 100 m2</option>
                                                        <option value="58">Pemakaian Bangunan Permanen 50-100 m2</option>
                                                        <option value="59">Pemakaian Bangunan Permanen < 50 m2</option>
                                                        <option value="60">Pelayanan Bengkel Perbaikan Berat</option>
                                                        <option value="61">Pelayanan Bengkel Perbaikan Sedang</option>
                                                        <option value="62">Pelayanan Bengkel Perbaikan Ringan</option>
                                                        <option value="63">Pemakaian Air</option>
                                                        <option value="64">Jasa Tambat Labuh Kapal Perikanan 11-15 GT</option>
                                                        <option value="65">Jasa Tambat Labuh Kapal Perikanan 16-20 GT</option>
                                                        <option value="66">Jasa Tambat Labuh Kapal Perikanan 21-25 GT</option>
                                                        <option value="67">Jasa Tambat Labuh Kapal Perikanan 26-30 GT</option>
                                                        <option value="68">Jasa Tambat Labuh Kapal Perikanan > 30 GT</option>
                                                        <option value="69">Jasa Tambat Labuh Kapal Non Perikanan</option>
                                                        <option value="70">Kebersihan Kolam Labuh Kapal Perikanan 11 - 20 GT</option>
                                                        <option value="71">Kebersihan Kolam Labuh Kapal Perikanan 21 - 30 GT</option>
                                                        <option value="72">Kebersihan Kolam Labuh Kapal Perikanan > 30 GT</option>
                                                        <option value="73">Kebersihan Kolam Labuh Kapal Non Perikanan</option>
                                                        <option value="74">Mandi</option>
                                                        <option value="75">Buang air kecil/besar</option>
                                                        <option value="76">Kebersihan Bongkar Muat Truk/Tangki</option>
                                                        <option value="77">Kebersihan Bongkar Muat Pick Up</option>
                                                        <option value="78">Kebersihan Bongkar Muat Roda 3</option>
                                                        <option value="79">Kebersihan Bangunan Ikan</option>
                                                        <option value="80">Kebersihan Bangunan Permanen</option>
                                                        <option value="81">Air Bersih melalui Perahu</option>
                                                        <option value="82">Air Bersih melalui Tangki</option>
                                                        <option value="83">Pengadaan Air Bersih</option>
                                                        <option value="84">Perbaikan Kapal untuk Rusak Berat</option>
                                                        <option value="85">Perbaikan Kapal untuk Rusak Sedang</option>
                                                        <option value="86">Perbaikan Kapal untuk Rusak Ringan</option>
                                                        <option value="87">Tempat Perbaikan Kapal untuk Rusak Berat</option>
                                                        <option value="88">Tempat Perbaikan Kapal untuk Rusak Sedang</option>
                                                        <option value="89">Tempat Perbaikan Kapal untuk Rusak Ringan</option>
                                                        <option value="90">Naik/Turun Kapal Non Perikanan</option>
                                                        <option value="91">Naik/Turun Kapal Perikanan</option>
                                                        <option value="92">Truk Roda Belakang Double/ Container/ Bis</option>
                                                        <option value="93">Truk Roda Belakang Engkel</option>
                                                        <option value="94">Kendaraan Roda 3</option>
                                                        <option value="95">Mobil</option>
                                                        <option value="96">Becak/ Gerobak/ Cikar/ Dokar/ Sepeda</option>
                                                        <option value="97">Orang/Umum</option>
                                                        <option value="98">Kendaraan Roda 3</option>
                                                        <option value="99">Pengangkutan Es Batu</option>
                                                        <option value="100">Truk Roda Belakang Double/ Container/ Bis</option>
                                                        <option value="101">Truk Roda Belakang Engkel</option>
                                                        <option value="102">Mobil</option>
                                                        <option value="103">Motor</option>
                                                        <option value="104">Motor</option>
                                                        <option value="105">Becak/ Gerobak/ Cikar/ Dokar/ Sepeda</option>
                                                        <option value="106">Orang/Umum</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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