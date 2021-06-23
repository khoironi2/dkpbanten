<?php

class Info_dpi extends CI_Controller
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
            'info_dpi' => $this->Info_dpi_model->getAll(),
            'jenis_uud' => $this->Jenis_undang_undang_model->getAll(),
            'pengguna' => $this->Pegawai_model->get()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/dkp/info_dpi/index', $data);
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
        $this->load->view('admin/dashboard/dkp/info_dpi/add', $data);
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
            'edit_dpi' => $this->Info_dpi_model->getid($id),
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/dkp/info_dpi/edit', $data);
        $this->load->view('templates/footer');
    }
    public function save()
    {
        $nama_info_dpi = $this->input->post('nama_info_dpi');
        $link_info_dpi = $this->input->post('link_info_dpi');

        $data = [
            'nama_info_dpi' => $nama_info_dpi,
            'link_info_dpi' => $link_info_dpi
        ];

        $insert = $this->Info_dpi_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('dkp/info_dpi');
        }
    }

    public function update()
    {
        $id = $this->input->post('id_info_dpi');
        $nama_info_dpi = $this->input->post('nama_info_dpi');
        $link_info_dpi = $this->input->post('link_info_dpi');

        $data = [
            'nama_info_dpi' => $nama_info_dpi,
            'link_info_dpi' => $link_info_dpi
        ];

        $insert = $this->Info_dpi_model->update($id, $data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('dkp/info_dpi');
        }
    }



    public function delete($id)
    {
        $data['id_info_dpi'] = $this->Info_dpi_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('dkp/info_dpi');
    }
}
