<?php

class Layanan extends CI_Controller
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
            'title' => 'LAYANAN',
            'parent' => 'Master ',
            'child' => 'Layanan',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'layanan' => $this->Layanan_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/layanan/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data = [
            'title' => 'LAYANAN',
            'parent' => 'Master ',
            'child' => 'Layanan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Layanan_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/layanan/add', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {

        $data = [
            'title' => 'LAYANAN',
            'parent' => 'Master ',
            'child' => 'Layanan',
            'newchild' => 'Perbarui ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'layanan' => $this->Layanan_model->getAll(),
            'edit_layanan' => $this->Layanan_model->getid($id),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/layanan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $status = $this->input->post('status');

        $data = [
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'status' => $status
        ];

        $insert = $this->Layanan_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('master/layanan');
        }
    }
    public function update()
    {
        $id = $this->input->post('id_layanan');
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $status = $this->input->post('status');

        $data = [
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'status' => $status
        ];
        $update = $this->Layanan_model->update($id, $data);
        if ($update) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('master/layanan');
        }
    }


    public function delete($id)
    {
        $data['id_layanan'] = $this->Layanan_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/layanan');
    }
}
