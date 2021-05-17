<?php

class Jabatan extends CI_Controller
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
            'title' => 'JABATAN',
            'parent' => 'Master ',
            'child' => 'Jabatan',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'jabatan_karyawan' => $this->Jabatan_karyawan_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/jabatan/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data = [
            'title' => 'JABATAN',
            'parent' => 'Master ',
            'child' => 'Jabatan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/jabatan/add', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {

        $data = [
            'title' => 'JABATAN',
            'parent' => 'Master ',
            'child' => 'Jabatan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'edit_jabatan' => $this->Jabatan_karyawan_model->getid($id),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/jabatan/edit', $data);
        $this->load->view('templates/footer');
    }
    public function save()
    {
        $kode = $this->input->post('kode');
        $status_pengguna_jasa = $this->input->post('status_pengguna_jasa');
        $status = $this->input->post('status');

        $data = [
            'kode' => $kode,
            'status_pengguna_jasa' => $status_pengguna_jasa,
            'status' => $status
        ];

        $insert = $this->Jabatan_karyawan_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('master/jabatan');
        }
    }

    public function update()
    {
        $id = $this->input->post('id_jabatan_karyawan');
        $kode = $this->input->post('kode');
        $status_pengguna_jasa = $this->input->post('status_pengguna_jasa');
        $status = $this->input->post('status');

        $data = [
            'kode' => $kode,
            'status_pengguna_jasa' => $status_pengguna_jasa,
            'status' => $status
        ];
        $update = $this->Jabatan_karyawan_model->update($id, $data);
        if ($update) {
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('master/jabatan');
        }
    }


    public function delete($id)
    {
        $data['id_jabatan_karyawan'] = $this->Jabatan_karyawan_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/jabatan');
    }
}
