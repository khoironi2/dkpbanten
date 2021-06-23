<?php

class Alat_tangkap extends CI_Controller
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
            'title' => 'ALAT TANGKAP',
            'parent' => 'Master ',
            'child' => 'Alat Tangkap',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'alat_tangkap' => $this->Alat_tangkap_kapal_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/alat_tangkap/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data = [
            'title' => 'ALAT TANGKAP',
            'parent' => 'Master ',
            'child' => 'Alat Tangkap',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/alat_tangkap/add', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {

        $data = [
            'title' => 'ALAT TANGKAP',
            'parent' => 'Master ',
            'child' => 'Alat Tangkap',
            'newchild' => 'Perbarui',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'alat_tangkap' => $this->Alat_tangkap_kapal_model->getAll(),
            'edit_alat_tangkap' => $this->Alat_tangkap_kapal_model->getid($id),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/alat_tangkap/edit', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $nama_alat_tangkap_kapal = $this->input->post('nama_alat_tangkap_kapal');
        $status = $this->input->post('status');

        $data = [
            'nama_alat_tangkap_kapal' => $nama_alat_tangkap_kapal,
            'status' => $status
        ];

        $insert = $this->Alat_tangkap_kapal_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('master/alat_tangkap');
        }
    }

    public function update()
    {
        $id = $this->input->post('id_alat_tangkap_kapal');
        $nama_alat_tangkap_kapal = $this->input->post('nama_alat_tangkap_kapal');
        $status = $this->input->post('status');

        $data = [
            'nama_alat_tangkap_kapal' => $nama_alat_tangkap_kapal,
            'status' => $status
        ];
        $update = $this->Alat_tangkap_kapal_model->update($id, $data);
        if ($update) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('master/alat_tangkap');
        }
    }



    public function delete($id)
    {
        $data['id_alat_tangkap_kapal'] = $this->Alat_tangkap_kapal_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/alat_tangkap');
    }
}
