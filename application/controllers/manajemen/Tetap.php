<?php

class Tetap extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_status();
        $this->CI = &get_instance();
    }

    // |------------------------------------------------------
    // | Dashboard
    // |------------------------------------------------------

    public function index()
    {
        // if ($this->CI->router->fetch_class() != "login") {
        //     // session check logic here...change this accordingly
        //     if ($this->CI->session->userdata['id_jabatan'] == '1') {
        //         redirect('dosen/data_pribadi');
        //     } elseif ($this->CI->session->userdata['id_jabatan'] != '1') {
        //         redirect('');
        //     }
        // }
        $data = [
            'title' => 'Manajemen ',
            'parent' => 'Dashboard ',
            'child' => 'Tetap',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'tetap' => $this->Manajemen_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('manajemen/tetap/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $nama_jabatan = $this->input->post('nama_jabatan');
        $keterangan_jabatan = $this->input->post('keterangan_jabatan');

        $data = [
            'nama_jabatan' => $nama_jabatan,
            'keterangan_jabatan' => $keterangan_jabatan,
            'created_by' => $this->session->userdata('id_pegawai'),
            'updated_by' => $this->session->userdata('id_pegawai'),
            'time_created' => date('Y-m-d H:i:s'),
            'time_updated' => date('Y-m-d H:i:s')
        ];
        $insert = $this->Jabatan_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('jabatan/jabatan');
        }
    }
    public function edit()
    {
        $id = $this->input->post('id_jabatan');
        $nama_jabatan = $this->input->post('nama_jabatan');
        $keterangan_jabatan = $this->input->post('keterangan_jabatan');

        $data = [
            'id_jabatan' => $id,
            'nama_jabatan' => $nama_jabatan,
            'keterangan_jabatan' => $keterangan_jabatan,
            'updated_by' => $this->session->userdata('id_pegawai'),
            'time_updated' => date('Y-m-d H:i:s')
        ];
        $update = $this->Jabatan_model->update($id, $data);
        // redirect('jabatan/jabatan');
        if ($update) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('jabatan/jabatan');
        }
    }
    public function delete($id)
    {
        $data['id_jabatan'] = $this->Jabatan_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('jabatan/jabatan');
    }
}
