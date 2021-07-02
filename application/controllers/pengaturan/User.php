<?php

class User extends CI_Controller
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
            'title' => 'PENGGUNA',
            'parent' => 'Pengguna',
            'child' => 'Pengguna',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'tipe_kapal' => $this->Tipe_kapal_model->getAll(),
            'pengguna' => $this->Pegawai_model->get(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/pengaturan/user/index', $data);
        $this->load->view('templates/footer');
    }

    public function updatepwd()
    {

        $this->form_validation->set_rules('password', 'password', 'required');
        // $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == FALSE) {

            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('user/account/add');
        } else {

            $id = $this->input->post('id_pegawai');
            $password = $this->input->post('password');
            $pass = password_hash($password, PASSWORD_DEFAULT);
            // $level = $this->input->post('level');
            date_default_timezone_set("ASIA/JAKARTA");
            $data = [
                'password' => $pass,
                'time_update_pegawai' => date('Y-m-d H:i:s')
            ];

            $insert = $this->Auth_model->update($id, $data);

            if ($insert) {
                $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
                redirect('pengaturan/user');
            }
        }
    }

    public function add()
    {

        $data = [
            'title' => 'TIPE KAPAL ',
            'parent' => 'Master ',
            'child' => 'Tipe Kapal ',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'tipe_kapal' => $this->Tipe_kapal_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/pengaturan/user/add', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {

        $this->form_validation->set_rules('nik', 'Nik', 'required');
        // $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == FALSE) {

            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('user/account/add');
        } else {

            $nik = $this->input->post('nik');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $no_hp = $this->input->post('no_hp');
            $jabatan = $this->input->post('jabatan');
            $email = $this->input->post('email');
            $status = $this->input->post('status');
            $password = $this->input->post('password');
            $pass = password_hash($password, PASSWORD_DEFAULT);
            // $level = $this->input->post('level');
            date_default_timezone_set("ASIA/JAKARTA");
            $data = [
                'nik' => $nik,
                'nama' => $nama,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'jabatan' => $jabatan,
                'email' => $email,
                'status' => $status,
                'gambar_pegawai' => 'download1.png',
                'id_jabatan' => 7,
                'password' => $pass,
                'time_create_pegawai' => date('Y-m-d H:i:s')
            ];

            $insert = $this->Auth_model->register("tbl_pegawai", $data);

            if ($insert) {
                $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
                redirect('pengaturan/user');
            }
        }
    }

    public function edit($id)
    {

        $data = [
            'title' => 'TIPE KAPAL ',
            'parent' => 'Master ',
            'child' => 'Tipe Kapal ',
            'newchild' => 'Perbarui ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'jenis_kapal' => $this->Tipe_kapal_model->getAll(),
            'edit_pegawai' => $this->Pegawai_model->getID($id),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/pengaturan/user/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {

        $this->form_validation->set_rules('nik', 'Nik', 'required');
        // $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == FALSE) {

            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('user/account/add');
        } else {

            $id = $this->input->post('id_pegawai');
            $nik = $this->input->post('nik');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $no_hp = $this->input->post('no_hp');
            $jabatan = $this->input->post('jabatan');
            $email = $this->input->post('email');
            $status = $this->input->post('status');
            // $password = $this->input->post('password');
            // $pass = password_hash($password, PASSWORD_DEFAULT);
            // $level = $this->input->post('level');
            date_default_timezone_set("ASIA/JAKARTA");
            $data = [
                'nik' => $nik,
                'nama' => $nama,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'jabatan' => $jabatan,
                'email' => $email,
                'status' => $status,
                'id_jabatan' => 7,
                'time_update_pegawai' => date('Y-m-d H:i:s')
            ];

            $insert = $this->Auth_model->update($id, $data);

            if ($insert) {
                $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
                redirect('pengaturan/user');
            }
        }
    }



    public function delete($id)
    {
        $data['id_pegawai'] = $this->Pegawai_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('pengaturan/user');
    }
}
