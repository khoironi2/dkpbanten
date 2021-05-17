<?php

class Kapal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_status();
        $this->CI = &get_instance();
        if ($this->CI->router->fetch_class() != "login") {
            // session check logic here...change this accordingly
            if ($this->CI->session->userdata['id_jabatan'] != '7') {
                redirect();
            }
        }
    }

    // |------------------------------------------------------
    // | Dashboard
    // |------------------------------------------------------

    public function index()
    {

        $data = [
            'title' => 'KAPAL ',
            'parent' => 'Master ',
            'child' => 'Kapal ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'kapal' => $this->Kapal_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/kapal/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data = [
            'title' => 'KAPAL ',
            'parent' => 'Master ',
            'child' => 'Kapal ',
            'newchild' => 'Perbarui ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'tipe_kapal' => $this->Tipe_kapal_model->getAll(),
            'jenis_kapal' => $this->Jenis_kapal_model->getAll(),
            'bendera_kapal' => $this->Bendera_kapal_model->getAll(),
            'alat_tangkap' => $this->Alat_tangkap_kapal_model->getAll(),
            'perusahaan' => $this->Perusahaan_model->getAll(),
            'provinsi' => $this->Provinsi_model->getAll(),
            'wpp' => $this->Wpp_model->getAll(),
            'jenis_layanan' => $this->Jenis_layanan_model->getAll(),
        ];

        $this->form_validation->set_rules('nama_kapal', 'nama_kapal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar');
            // $this->load->view('templates/topbar');
            $this->load->view('admin/dashboard/master/kapal/add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_kapal' => $this->input->post('nama_kapal'),
                'id_tipe_kapal' => $this->input->post('id_tipe_kapal'),
                'id_jenis_kapal' => $this->input->post('id_jenis_kapal'),
                'id_bendera_kapal' => $this->input->post('id_bendera_kapal'),
                'pemilik' => $this->input->post('pemilik'),
                'nahkoda' => $this->input->post('nahkoda'),
                'jumlah_abk' => $this->input->post('jumlah_abk'),
                'merk_mesin_utama' => $this->input->post('merk_mesin_utama'),
                'merk_mesin_tambahan' => $this->input->post('merk_mesin_tambahan'),
                'pk_ps_hp' => $this->input->post('pk_ps_hp'),
                'gt' => $this->input->post('gt'),
                'panjang_kapal' => $this->input->post('panjang_kapal'),
                'lebar_kapal' => $this->input->post('lebar_kapal'),
                'draft_kapal' => $this->input->post('draft_kapal'),
                'tanda_selar' => $this->input->post('tanda_selar'),
                'id_alat_tangkap_kapal' => $this->input->post('id_alat_tangkap_kapal'),
                'id_perusahaan' => $this->input->post('id_perusahaan'),
                'alamat' => $this->input->post('alamat'),
                'siup' => $this->input->post('siup'),
                'sikpi' => $this->input->post('sikpi'),
                'sipi' => $this->input->post('sipi'),
                'sipi_andon' => $this->input->post('sipi_andon'),
                'surat_kelayakan' => $this->input->post('surat_kelayakan'),
                'pas_kecil_pas_besar_surat_laut' => $this->input->post('pas_kecil_pas_besar_surat_laut'),
                'surat_ukur_kapal' => $this->input->post('surat_ukur_kapal'),
                'gross_akte_kapal' => $this->input->post('gross_akte_kapal'),
                'id_provinsi' => $this->input->post('id_provinsi'),
                'id_wpp' => $this->input->post('id_wpp'),
                'dpi' => $this->input->post('dpi'),
                'pelabuhan_pangkalan' => $this->input->post('pelabuhan_pangkalan'),
                'tanggal_sipi' => $this->input->post('tanggal_sipi'),
                'tanggal_akhir_sipi' => $this->input->post('tanggal_akhir_sipi'),
                'pengguna_buat' => $this->input->post('pengguna_buat'),
                'status_sipi' => $this->input->post('status_sipi'),
                'id_jenis_layanan' => $this->input->post('id_jenis_layanan'),
            ];

            $upload_image = $_FILES['file_siup']['name'];
            $upload_image = $_FILES['file_sikpi']['name'];
            $upload_image = $_FILES['file_sipi']['name'];
            $upload_image = $_FILES['file_sipi_andon']['name'];
            $upload_image = $_FILES['file_surat_kelayakan']['name'];
            $upload_image = $_FILES['file_pas_kecil_pas_besar_surat_laut']['name'];
            $upload_image = $_FILES['file_surat_ukur_kapal']['name'];
            $upload_image = $_FILES['file_gross_akte_kapal']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx|csv';
                $config['upload_path'] = './assets/master/kapal/upload/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_siup')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_siup', $new_image);
                }
                if ($this->upload->do_upload('file_sikpi')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_sikpi', $new_image);
                }
                if ($this->upload->do_upload('file_sipi')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_sipi', $new_image);
                }
                if ($this->upload->do_upload('file_sipi_andon')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_sipi_andon', $new_image);
                }
                if ($this->upload->do_upload('file_surat_kelayakan')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_surat_kelayakan', $new_image);
                }
                if ($this->upload->do_upload('file_pas_kecil_pas_besar_surat_laut')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_pas_kecil_pas_besar_surat_laut', $new_image);
                }
                if ($this->upload->do_upload('file_surat_ukur_kapal')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_surat_ukur_kapal', $new_image);
                }
                if ($this->upload->do_upload('file_gross_akte_kapal')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_gross_akte_kapal', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->insert('tbl_kapal', $data);
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Dokumentasi Berhasil Ditambahkan</div>');
            redirect('master/kapal');
        }
    }

    public function edit($id)
    {
        // $data = $this->Kapal_model->getAll($id);
        $data = [
            'title' => 'KAPAL ',
            'parent' => 'Master ',
            'child' => 'Kapal ',
            'newchild' => 'Perbarui ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'tipe_kapal' => $this->Tipe_kapal_model->getAll(),
            'jenis_kapal' => $this->Jenis_kapal_model->getAll(),
            'bendera_kapal' => $this->Bendera_kapal_model->getAll(),
            'alat_tangkap' => $this->Alat_tangkap_kapal_model->getAll(),
            'perusahaan' => $this->Perusahaan_model->getAll(),
            'provinsi' => $this->Provinsi_model->getAll(),
            'wpp' => $this->Wpp_model->getAll(),
            'jenis_layanan' => $this->Jenis_layanan_model->getAll(),
            'kapal' => $this->Kapal_model->getAll(),
            'edit_kapal' => $this->Kapal_model->getid($id),
            'siup' => $this->db->get_where('tbl_kapal', ['id_kapal' => $id])->row_array(),
        ];
        $old_siup = $data['siup']['file_siup'];
        // $old_sikpi = $data['siup']['file_sikpi'];
        // $old_sipi = $data['siup']['file_sipi'];
        // $old_sipi_andon = $data['siup']['file_sipi_andon'];
        // $old_surat_kelayakan = $data['siup']['file_surat_kelayakan'];
        // $old_pas_kecil_pas_besar_surat_laut = $data['siup']['file_pas_kecil_pas_besar_surat_laut'];
        // $old_surat_ukur_kapal = $data['siup']['file_surat_ukur_kapal'];
        $old_gross_akte_kapal = $data['siup']['file_gross_akte_kapal'];

        $this->form_validation->set_rules('nama_kapal', 'nama_kapal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar');
            // $this->load->view('templates/topbar');
            $this->load->view('admin/dashboard/master/kapal/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_kapal' => $this->input->post('nama_kapal'),
                'id_tipe_kapal' => $this->input->post('id_tipe_kapal'),
                'id_jenis_kapal' => $this->input->post('id_jenis_kapal'),
                'id_bendera_kapal' => $this->input->post('id_bendera_kapal'),
                'pemilik' => $this->input->post('pemilik'),
                'nahkoda' => $this->input->post('nahkoda'),
                'jumlah_abk' => $this->input->post('jumlah_abk'),
                'merk_mesin_utama' => $this->input->post('merk_mesin_utama'),
                'merk_mesin_tambahan' => $this->input->post('merk_mesin_tambahan'),
                'pk_ps_hp' => $this->input->post('pk_ps_hp'),
                'gt' => $this->input->post('gt'),
                'panjang_kapal' => $this->input->post('panjang_kapal'),
                'lebar_kapal' => $this->input->post('lebar_kapal'),
                'draft_kapal' => $this->input->post('draft_kapal'),
                'tanda_selar' => $this->input->post('tanda_selar'),
                'id_alat_tangkap_kapal' => $this->input->post('id_alat_tangkap_kapal'),
                'id_perusahaan' => $this->input->post('id_perusahaan'),
                'alamat' => $this->input->post('alamat'),
                'siup' => $this->input->post('siup'),
                'sikpi' => $this->input->post('sikpi'),
                'sipi' => $this->input->post('sipi'),
                'sipi_andon' => $this->input->post('sipi_andon'),
                'surat_kelayakan' => $this->input->post('surat_kelayakan'),
                'pas_kecil_pas_besar_surat_laut' => $this->input->post('pas_kecil_pas_besar_surat_laut'),
                'surat_ukur_kapal' => $this->input->post('surat_ukur_kapal'),
                'gross_akte_kapal' => $this->input->post('gross_akte_kapal'),
                'id_provinsi' => $this->input->post('id_provinsi'),
                'id_wpp' => $this->input->post('id_wpp'),
                'dpi' => $this->input->post('dpi'),
                'pelabuhan_pangkalan' => $this->input->post('pelabuhan_pangkalan'),
                'tanggal_sipi' => $this->input->post('tanggal_sipi'),
                'tanggal_akhir_sipi' => $this->input->post('tanggal_akhir_sipi'),
                'pengguna_buat' => $this->input->post('pengguna_buat'),
                'status_sipi' => $this->input->post('status_sipi'),
                'id_jenis_layanan' => $this->input->post('id_jenis_layanan'),
            ];

            $upload_image = $_FILES['file_siup']['name'];
            // $upload_image = $_FILES['file_sikpi']['name'];
            // $upload_image = $_FILES['file_sipi']['name'];
            // $upload_image = $_FILES['file_sipi_andon']['name'];
            // $upload_image = $_FILES['file_surat_kelayakan']['name'];
            // $upload_image = $_FILES['file_pas_kecil_pas_besar_surat_laut']['name'];
            // $upload_image = $_FILES['file_surat_ukur_kapal']['name'];
            $upload_image = $_FILES['file_gross_akte_kapal']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx|csv';
                $config['upload_path'] = './assets/master/kapal/upload/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_siup')) {
                    if ($old_siup != 'default-user-image.jpg') {
                        unlink(FCPATH . 'assets/master/kapal/upload/' . $old_siup);
                    }
                    $new_siup = $this->upload->data('file_name');
                    $this->db->set('file_siup', $new_siup);
                }
                // if ($this->upload->do_upload('file_sikpi')) {
                //     if ($old_sikpi != 'default-user-image.jpg') {
                //         unlink(FCPATH . 'assets/master/kapal/upload/' . $old_sikpi);
                //     }
                //     $new_sikpi = $this->upload->data('file_name');
                //     $this->db->set('file_sikpi', $new_sikpi);
                // }
                // if ($this->upload->do_upload('file_sipi')) {
                //     if ($old_sipi != 'default-user-image.jpg') {
                //         unlink(FCPATH . 'assets/master/kapal/upload/' . $old_sipi);
                //     }
                //     $new_sipi = $this->upload->data('file_name');
                //     $this->db->set('file_sipi', $new_sipi);
                // }
                // if ($this->upload->do_upload('file_sipi_andon')) {
                //     if ($old_sipi_andon != 'default-user-image.jpg') {
                //         unlink(FCPATH . 'assets/master/kapal/upload/' . $old_sipi_andon);
                //     }
                //     $new_andon = $this->upload->data('file_name');
                //     $this->db->set('file_sipi_andon', $new_andon);
                // }
                // if ($this->upload->do_upload('file_surat_kelayakan')) {
                //     if ($old_surat_kelayakan != 'default-user-image.jpg') {
                //         unlink(FCPATH . 'assets/master/kapal/upload/' . $old_surat_kelayakan);
                //     }
                //     $new_kelayakan = $this->upload->data('file_name');
                //     $this->db->set('file_surat_kelayakan', $new_kelayakan);
                // }
                // if ($this->upload->do_upload('file_pas_kecil_pas_besar_surat_laut')) {
                //     if ($old_pas_kecil_pas_besar_surat_laut != 'default-user-image.jpg') {
                //         unlink(FCPATH . 'assets/master/kapal/upload/' . $old_pas_kecil_pas_besar_surat_laut);
                //     }
                //     $new_pas = $this->upload->data('file_name');
                //     $this->db->set('file_pas_kecil_pas_besar_surat_laut', $new_pas);
                // }
                // if ($this->upload->do_upload('file_surat_ukur_kapal')) {
                //     if ($old_surat_ukur_kapal != 'default-user-image.jpg') {
                //         unlink(FCPATH . 'assets/master/kapal/upload/' . $old_surat_ukur_kapal);
                //     }
                //     $new_ukur = $this->upload->data('file_name');
                //     $this->db->set('file_surat_ukur_kapal', $new_ukur);
                // }
                if ($this->upload->do_upload('file_gross_akte_kapal')) {
                    if ($old_gross_akte_kapal != 'default-user-image.jpg') {
                        unlink(FCPATH . 'assets/master/kapal/upload/' . $old_gross_akte_kapal);
                    }
                    $new_akte = $this->upload->data('file_name');
                    $this->db->set('file_gross_akte_kapal', $new_akte);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $insert = $this->Kapal_model->update($id, $data);
            if ($insert) {
                $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
                redirect('master/kapal');
            }
        }
    }

    public function delete($id)
    {
        $data = [
            'kapal' => $this->db->get_where('tbl_kapal', ['id_kapal' => $id])->row_array(),
        ];

        $old_siup = $data["kapal"]["file_siup"];
        $old_sikpi = $data["kapal"]["file_sikpi"];
        $old_sipi = $data["kapal"]["file_sipi"];
        $old_andon = $data["kapal"]["file_sipi_andon"];
        $old_kelayakan = $data["kapal"]["file_surat_kelayakan"];
        $old_pas = $data["kapal"]["file_pas_kecil_pas_besar_surat_laut"];
        $old_ukur = $data["kapal"]["file_surat_ukur_kapal"];
        $old_gross = $data["kapal"]["file_gross_akte_kapal"];
        if ($old_siup != 'default.jpg') {
            unlink(FCPATH . 'assets/master/kapal/upload/' . $old_siup);
        }
        if ($old_sikpi != 'default.jpg') {
            unlink(FCPATH . 'assets/master/kapal/upload/' . $old_sikpi);
        }
        if ($old_sipi != 'default.jpg') {
            unlink(FCPATH . 'assets/master/kapal/upload/' . $old_sipi);
        }
        if ($old_andon != 'default.jpg') {
            unlink(FCPATH . 'assets/master/kapal/upload/' . $old_andon);
        }
        if ($old_kelayakan != 'default.jpg') {
            unlink(FCPATH . 'assets/master/kapal/upload/' . $old_kelayakan);
        }
        if ($old_pas != 'default.jpg') {
            unlink(FCPATH . 'assets/master/kapal/upload/' . $old_pas);
        }
        if ($old_ukur != 'default.jpg') {
            unlink(FCPATH . 'assets/master/kapal/upload/' . $old_ukur);
        }
        if ($old_gross != 'default.jpg') {
            unlink(FCPATH . 'assets/master/kapal/upload/' . $old_gross);
        }

        $this->db->delete('tbl_kapal', ['id_kapal' => $id]);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/kapal');
    }
}
