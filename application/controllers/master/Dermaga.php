<?php

class Dermaga extends CI_Controller
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
            'title' => 'DERMAGA',
            'parent' => 'Master ',
            'child' => 'Dermaga',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'dermaga' => $this->Dermaga_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/dermaga/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data = [
            'title' => 'DERMAGA',
            'parent' => 'Master ',
            'child' => 'Dermaga',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/dermaga/add', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'DERMAGA',
            'parent' => 'Master ',
            'child' => 'Dermaga',
            'newchild' => 'Perbarui',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'edit_dermaga' => $this->Dermaga_model->getid($id),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/dermaga/edit', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $status = $this->input->post('status');

        $data = [
            'kode' => $kode,
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'status' => $status
        ];

        $insert = $this->Dermaga_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('master/dermaga');
        }
    }
    public function update()
    {
        $id = $this->input->post('id_dermaga');
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $status = $this->input->post('status');

        $data = [
            'kode' => $kode,
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'status' => $status
        ];

        $insert = $this->Dermaga_model->update($id, $data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('master/dermaga');
        }
    }


    public function delete($id)
    {
        $data['id_dermaga'] = $this->Dermaga_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/dermaga');
    }
}
