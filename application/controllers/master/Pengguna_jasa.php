<?php

class Pengguna_jasa extends CI_Controller
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
            'title' => 'PENGGUNA JASA',
            'parent' => 'Master ',
            'child' => 'Pengguna Jasa',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/pengguna_jasa/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data = [
            'title' => 'PENGGUNA JASA',
            'parent' => 'Master ',
            'child' => 'Pengguna Jasa',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
        ];

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar');
            // $this->load->view('templates/topbar');
            $this->load->view('admin/dashboard/master/pengguna_jasa/add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'no_siup' => $this->input->post('no_siup'),
                'no_npwp' => $this->input->post('no_npwp'),
                'alamat' => $this->input->post('alamat'),
                'no_telpon' => $this->input->post('no_telpon'),
                'email' => $this->input->post('email'),
                'nama_pic' => $this->input->post('nama_pic'),
                'no_telpon_pic' => $this->input->post('no_telpon_pic'),
                'email_pic' => $this->input->post('email_pic'),
                'status' => $this->input->post('status'),
            ];

            $upload_image = $_FILES['file_siup']['name'];
            $upload_image = $_FILES['file_npwp']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx|csv';
                $config['upload_path'] = './assets/master/pengguna_jasa/upload/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_siup')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_siup', $new_image);
                }
                if ($this->upload->do_upload('file_npwp')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_npwp', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->insert('tbl_perusahaan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dokumentasi Berhasil Ditambahkan</div>');
            redirect('master/perusahaan');
        }
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
