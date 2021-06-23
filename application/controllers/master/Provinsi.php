<?php

class Provinsi extends CI_Controller
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
            'title' => 'PROVINSI',
            'parent' => 'Master ',
            'child' => 'Provinsi',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'provinsi' => $this->Provinsi_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/provinsi/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data = [
            'title' => 'PROVINSI',
            'parent' => 'Master ',
            'child' => 'Provinsi',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'provinsi' => $this->Provinsi_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/provinsi/add', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {

        $data = [
            'title' => 'PROVINSI',
            'parent' => 'Master ',
            'child' => 'Provinsi',
            'newchild' => 'Perbarui ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'provinsi' => $this->Provinsi_model->getAll(),
            'edit_provinsi' => $this->Provinsi_model->getid($id),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/provinsi/edit', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $nama_provinsi = $this->input->post('nama_provinsi');
        $status = $this->input->post('status');

        $data = [
            'nama_provinsi' => $nama_provinsi,
            'status' => $status
        ];

        $insert = $this->Provinsi_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('master/provinsi');
        }
    }

    public function update()
    {
        $id = $this->input->post('id_provinsi');
        $nama_provinsi = $this->input->post('nama_provinsi');
        $status = $this->input->post('status');

        $data = [
            'nama_provinsi' => $nama_provinsi,
            'status' => $status
        ];
        $update = $this->Provinsi_model->update($id, $data);
        if ($update) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('master/provinsi');
        }
    }
    public function delete($id)
    {
        $data['id_provinsi'] = $this->Provinsi_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/provinsi');
    }
}
