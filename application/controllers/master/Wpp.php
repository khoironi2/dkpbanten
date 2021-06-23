<?php

class Wpp extends CI_Controller
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
            'title' => 'WPP',
            'parent' => 'Master ',
            'child' => 'Wpp',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'wpp' => $this->Wpp_model->getAll(),
            'profil' => $this->Profil_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/wpp/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data = [
            'title' => 'WPP',
            'parent' => 'Master ',
            'child' => 'Wpp',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'wpp' => $this->Wpp_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/wpp/add', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {

        $data = [
            'title' => 'WPP',
            'parent' => 'Master ',
            'child' => 'Wpp',
            'newchild' => 'Perbarui ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'wpp' => $this->Wpp_model->getAll(),
            'edit_wpp' => $this->Wpp_model->getid($id),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/wpp/edit', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $nama_wpp = $this->input->post('nama_wpp');
        $status = $this->input->post('status');

        $data = [
            'nama_wpp' => $nama_wpp,
            'status' => $status
        ];

        $insert = $this->Wpp_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('master/wpp');
        }
    }

    public function update()
    {
        $id = $this->input->post('id_wpp');
        $nama_wpp = $this->input->post('nama_wpp');
        $status = $this->input->post('status');

        $data = [
            'nama_wpp' => $nama_wpp,
            'status' => $status
        ];
        $update = $this->Wpp_model->update($id, $data);
        if ($update) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('master/wpp');
        }
    }
    public function delete($id)
    {
        $data['id_wpp'] = $this->Wpp_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/wpp');
    }
}
