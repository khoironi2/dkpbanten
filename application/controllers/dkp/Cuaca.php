<?php

class Cuaca extends CI_Controller
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
            'title' => 'Cuaca',
            'parent' => 'Cuaca',
            'child' => 'Cuaca',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'tipe_kapal' => $this->Tipe_kapal_model->getAll(),
            'profil' => $this->Profil_model->getAll(),
            'cuaca' => $this->Cuaca_model->getAll(),
            'jenis_uud' => $this->Jenis_undang_undang_model->getAll(),
            'pengguna' => $this->Pegawai_model->get()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/dkp/cuaca/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data = [
            'title' => 'Cuaca',
            'parent' => 'Cuaca',
            'child' => 'Cuaca',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'tipe_kapal' => $this->Tipe_kapal_model->getAll(),
            'profil' => $this->Profil_model->getAll(),
            'uud' => $this->Undang_undang_model->getAll(),
            'jenis_uud' => $this->Jenis_undang_undang_model->getAll(),
            'pengguna' => $this->Pegawai_model->get()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/dkp/cuaca/add', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Cuaca',
            'parent' => 'Cuaca',
            'child' => 'Cuaca',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'tipe_kapal' => $this->Tipe_kapal_model->getAll(),
            'profil' => $this->Profil_model->getAll(),
            'uud' => $this->Undang_undang_model->getAll(),
            'jenis_uud' => $this->Jenis_undang_undang_model->getAll(),
            'pengguna' => $this->Pegawai_model->get(),
            'edit_cuaca' => $this->Cuaca_model->getid($id),
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/dkp/cuaca/edit', $data);
        $this->load->view('templates/footer');
    }
    public function save()
    {
        $nama_cuaca = $this->input->post('nama_cuaca');
        $link_cuaca = $this->input->post('link_cuaca');

        $data = [
            'nama_cuaca' => $nama_cuaca,
            'link_cuaca' => $link_cuaca
        ];

        $insert = $this->Cuaca_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('dkp/cuaca');
        }
    }

    public function update()
    {
        $id = $this->input->post('id_cuaca');
        $nama_cuaca = $this->input->post('nama_cuaca');
        $link_cuaca = $this->input->post('link_cuaca');

        $data = [
            'nama_cuaca' => $nama_cuaca,
            'link_cuaca' => $link_cuaca
        ];

        $insert = $this->Cuaca_model->update($id, $data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('dkp/cuaca');
        }
    }



    public function delete($id)
    {
        $data['id_cuaca'] = $this->Cuaca_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('dkp/cuaca');
    }
}
