<?php

class Daerah_operasi_penangkapan extends CI_Controller
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
            'title' => 'DAERAH OPERASI PENANGKAPAN',
            'parent' => 'Master ',
            'child' => 'Daerah Operasi Penangkapan',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'dop' => $this->Daerah_operasi_penangkapan_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/daerah_operasi_penangkapan/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data = [
            'title' => 'DAERAH OPERASI PENANGKAPAN',
            'parent' => 'Master ',
            'child' => 'Daerah Operasi Penangkapan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'wpp' => $this->Wpp_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/daerah_operasi_penangkapan/add', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {

        $data = [
            'title' => 'DAERAH OPERASI PENANGKAPAN',
            'parent' => 'Master ',
            'child' => 'Daerah Operasi Penangkapan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'wpp' => $this->Wpp_model->getAll(),
            'edit_dop' => $this->Daerah_operasi_penangkapan_model->getid($id)
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/daerah_operasi_penangkapan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $id_wpp = $this->input->post('id_wpp');
        $dpi = $this->input->post('dpi');
        $status = $this->input->post('status');

        $data = [
            'id_wpp' => $id_wpp,
            'dpi' => $dpi,
            'status' => $status
        ];

        $insert = $this->Daerah_operasi_penangkapan_model->insert($data);

        if ($insert) {
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('master/daerah_operasi_penangkapan');
        }
    }

    public function update()
    {
        $id = $this->input->post('id_daerah_operasional_penangkapan_ikan');
        $id_wpp = $this->input->post('id_wpp');
        $dpi = $this->input->post('dpi');
        $status = $this->input->post('status');

        $data = [
            'id_wpp' => $id_wpp,
            'dpi' => $dpi,
            'status' => $status
        ];
        $update = $this->Daerah_operasi_penangkapan_model->update($id, $data);
        if ($update) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('master/daerah_operasi_penangkapan');
        }
    }

    public function delete($id)
    {
        $data['id_daerah_operasional_penangkapan_ikan'] = $this->Daerah_operasi_penangkapan_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/daerah_operasi_penangkapan');
    }
}
