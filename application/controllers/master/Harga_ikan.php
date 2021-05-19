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
            'jenis_ikan' => $this->Jenis_ikan_model->getAll(),
            'harga_ikan' => $this->Harga_ikan_model->getAll(),
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
            'jenis_ikan' => $this->Jenis_ikan_model->getAll(),
            'harga_ikan' => $this->Harga_ikan_model->getAll(),
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/harga_ikan/add', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'HARGA IKAN',
            'parent' => 'Master ',
            'child' => 'Harga Ikan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'jenis_ikan' => $this->Jenis_ikan_model->getAll(),
            'harga_ikan' => $this->Harga_ikan_model->getAll(),
            'edit_harga_ikan' => $this->Harga_ikan_model->getid($id),
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/harga_ikan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $id_jenis_ikan = $this->input->post('id_jenis_ikan');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');

        $data = [
            'id_jenis_ikan' => $id_jenis_ikan,
            'harga' => $harga,
            'status' => $status
        ];

        $insert = $this->Harga_ikan_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('master/harga_ikan');
        }
    }
    public function update()
    {
        $id = $this->input->post('id_harga_ikan');
        $id_jenis_ikan = $this->input->post('id_jenis_ikan');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');

        $data = [
            'id_jenis_ikan' => $id_jenis_ikan,
            'harga' => $harga,
            'status' => $status
        ];

        $update = $this->Harga_ikan_model->update($id, $data);
        if ($update) {
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('master/harga_ikan');
        }
    }
    public function delete($id)
    {
        $data['id_harga_ikan'] = $this->Harga_ikan_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/harga_ikan');
    }
}
