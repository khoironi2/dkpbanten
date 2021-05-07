<?php

class Harga_ikan extends CI_Controller
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
            'title' => 'HARGA IKAN',
            'parent' => 'Master ',
            'child' => 'Harga Ikan',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/harga_ikan/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data = [
            'title' => 'HARGA IKAN',
            'parent' => 'Master ',
            'child' => 'Harga Ikan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/harga_ikan/add', $data);
        $this->load->view('templates/footer');
    }

    public function adt()
    {

        $this->form_validation->set_rules('nik', 'Nik', 'required');
        // $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == FALSE) {

            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('manajemen/manajemen');
        } else {

            $nama = $this->input->post('nama');
            $nik = $this->input->post('nik');
            $id_jabatan = $this->input->post('id_jabatan');
            $password = '12345';
            $pass = password_hash($password, PASSWORD_DEFAULT);
            // $level = $this->input->post('level');
            date_default_timezone_set("ASIA/JAKARTA");
            $data = [
                'nama' => $nama,
                'nik' => $nik,
                'id_jabatan' => $id_jabatan,
                'password' => $pass,
                'time_create_pegawai' => date('Y-m-d H:i:s')
            ];

            $insert = $this->Manajemen_model->insert($data);

            if ($insert) {
                $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
                redirect('manajemen/manajemen');
            }
        }
    }

    public function edit()
    {
        $id = $this->input->post('id_pegawai');
        $nama = $this->input->post('nama');
        $id_jabatan = $this->input->post('id_jabatan');
        $nik = $this->input->post('nik');
        $nidn = $this->input->post('nidn');
        $nidk = $this->input->post('nidk');
        $nitk = $this->input->post('nitk');
        $tgl_masuk = $this->input->post('tgl_masuk');
        $tgl_keluar = $this->input->post('tgl_keluar');
        $sk_1 = $this->input->post('sk_1');
        $masa_kerja_sk_1 = $this->input->post('masa_kerja_sk_1');
        $sk_2 = $this->input->post('sk_2');
        $masa_kerja_sk_2 = $this->input->post('masa_kerja_sk_2');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
        $program_studi = $this->input->post('program_studi');
        $alamat = $this->input->post('alamat');
        $kegiatan_yang_diikuti = $this->input->post('kegiatan_yang_diikuti');

        $data = [
            'id_pegawai' => $id,
            'nama' => $nama,
            'id_jabatan' => $id_jabatan,
            'nik' => $nik,
            'nidn' => $nidn,
            'nidk' => $nidk,
            'nitk' => $nitk,
            'tgl_masuk' => $tgl_masuk,
            'tgl_keluar' => $tgl_keluar,
            'sk_1' => $sk_1,
            'masa_kerja_sk_1' => $masa_kerja_sk_1,
            'sk_2' => $sk_2,
            'masa_kerja_sk_2' => $masa_kerja_sk_2,
            'no_hp' => $no_hp,
            'email' => $email,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'program_studi' => $program_studi,
            'alamat' => $alamat,
            'kegiatan_yang_diikuti' => $kegiatan_yang_diikuti,
            'time_update_pegawai' => date('Y-m-d H:i:s')
        ];
        $update = $this->Manajemen_model->update($id, $data);
        if ($update) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('manajemen/manajemen');
        }
    }
    public function delete($id)
    {
        $data['id_pegawai'] = $this->Manajemen_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('manajemen/manajemen');
    }
}
