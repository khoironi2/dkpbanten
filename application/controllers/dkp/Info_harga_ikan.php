<?php

class Info_harga_ikan extends CI_Controller
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
            'title' => 'Info Harga Ikan',
            'parent' => 'Info Harga Ikan',
            'child' => 'Info Harga Ikan',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'tipe_kapal' => $this->Tipe_kapal_model->getAll(),
            'profil' => $this->Profil_model->getAll(),
            'info_hi' => $this->Info_harga_ikan_model->getAll(),
            'jenis_uud' => $this->Jenis_undang_undang_model->getAll(),
            'pengguna' => $this->Pegawai_model->get()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/dkp/info_harga_ikan/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data = [
            'title' => 'Info Harga Ikan',
            'parent' => 'Info Harga Ikan',
            'child' => 'Info Harga Ikan',
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
        $this->load->view('admin/dashboard/dkp/info_harga_ikan/add', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Info Harga Ikan',
            'parent' => 'Info Harga Ikan',
            'child' => 'Info Harga Ikan',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'tipe_kapal' => $this->Tipe_kapal_model->getAll(),
            'profil' => $this->Profil_model->getAll(),
            'uud' => $this->Undang_undang_model->getAll(),
            'jenis_uud' => $this->Jenis_undang_undang_model->getAll(),
            'pengguna' => $this->Pegawai_model->get(),
            'edit_hi' => $this->Info_harga_ikan_model->getid($id),
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/dkp/info_harga_ikan/edit', $data);
        $this->load->view('templates/footer');
    }
    public function save()
    {
        $nama_harga_ikan = $this->input->post('nama_harga_ikan');
        $link_harga_ikan = $this->input->post('link_harga_ikan');

        $data = [
            'nama_harga_ikan' => $nama_harga_ikan,
            'link_harga_ikan' => $link_harga_ikan
        ];

        $insert = $this->Info_harga_ikan_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('dkp/info_harga_ikan');
        }
    }

    public function update()
    {
        $id = $this->input->post('id_info_harga_ikan');
        $nama_harga_ikan = $this->input->post('nama_harga_ikan');
        $link_harga_ikan = $this->input->post('link_harga_ikan');

        $data = [
            'nama_harga_ikan' => $nama_harga_ikan,
            'link_harga_ikan' => $link_harga_ikan
        ];

        $insert = $this->Info_harga_ikan_model->update($id, $data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('dkp/info_harga_ikan');
        }
    }



    public function delete($id)
    {
        $data['id_info_harga_ikan'] = $this->Info_harga_ikan_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('dkp/info_harga_ikan');
    }
}
