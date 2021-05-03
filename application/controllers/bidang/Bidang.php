<?php

class Bidang extends CI_Controller
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
            'title' => 'Bidang ',
            'parent' => 'Dashboard ',
            'child' => 'Bidang ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'bidang' => $this->Bidang_model->getAll(),
            'jabatan' => $this->Pegawai_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('bidang/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $nama_bidang = $this->input->post('nama_bidang');
        $keterangan_bidang = $this->input->post('keterangan_bidang');

        $data = [
            'nama_bidang' => $nama_bidang,
            'keterangan_bidang' => $keterangan_bidang,
            'created_by' => $this->session->userdata('id_pegawai'),
            'updated_by' => $this->session->userdata('id_pegawai'),
            'time_created' => date('Y-m-d H:i:s'),
            'time_updated' => date('Y-m-d H:i:s')
        ];
        $insert = $this->Bidang_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('bidang/bidang');
        }
    }
    public function edit()
    {
        $id = $this->input->post('id_bidang');
        $nama_bidang = $this->input->post('nama_bidang');
        $keterangan_bidang = $this->input->post('keterangan_bidang');

        $data = [
            'id_bidang' => $id,
            'nama_bidang' => $nama_bidang,
            'keterangan_bidang' => $keterangan_bidang,
            'updated_by' => $this->session->userdata('id_pegawai'),
            'time_updated' => date('Y-m-d H:i:s')
        ];
        $update = $this->Bidang_model->update($id, $data);
        // redirect('jabatan/jabatan');
        if ($update) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('bidang/bidang');
        }
    }
    public function delete($id)
    {
        $data['id_bidang'] = $this->Bidang_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('bidang/bidang');
    }
}
