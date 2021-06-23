<?php

class Undang_undang extends CI_Controller
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
            'title' => 'Undang Undang',
            'parent' => 'Undang Undang',
            'child' => 'Undang Undang',
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
        $this->load->view('admin/dashboard/dkp/undang_undang/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data = [
            'title' => 'Undang Undang',
            'parent' => 'Undang Undang',
            'child' => 'Undang Undang',
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
        $this->load->view('admin/dashboard/dkp/undang_undang/add', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Undang Undang',
            'parent' => 'Undang Undang',
            'child' => 'Undang Undang',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'tipe_kapal' => $this->Tipe_kapal_model->getAll(),
            'profil' => $this->Profil_model->getAll(),
            'uud' => $this->Undang_undang_model->getAll(),
            'jenis_uud' => $this->Jenis_undang_undang_model->getAll(),
            'pengguna' => $this->Pegawai_model->get(),
            'edit_uud' => $this->Undang_undang_model->getid($id),
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/dkp/undang_undang/edit', $data);
        $this->load->view('templates/footer');
    }
    public function save()
    {
        $id_jenis_undang_undang = $this->input->post('id_jenis_undang_undang');
        $nomor = $this->input->post('nomor');
        $tahun = $this->input->post('tahun');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $status = $this->input->post('status');

        $data = [
            'id_jenis_undang_undang' => $id_jenis_undang_undang,
            'nomor' => $nomor,
            'tahun' => $tahun,
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'status' => $status
        ];

        $insert = $this->Undang_undang_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('dkp/undang_undang');
        }
    }

    public function update()
    {
        $id = $this->input->post('id_undang_undang');
        $id_jenis_undang_undang = $this->input->post('id_jenis_undang_undang');
        $nomor = $this->input->post('nomor');
        $tahun = $this->input->post('tahun');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $status = $this->input->post('status');

        $data = [
            'id_jenis_undang_undang' => $id_jenis_undang_undang,
            'nomor' => $nomor,
            'tahun' => $tahun,
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'status' => $status
        ];

        $insert = $this->Undang_undang_model->update($id, $data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('dkp/undang_undang');
        }
    }



    public function delete($id)
    {
        $data['id_undang_undang'] = $this->Undang_undang_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('dkp/undang_undang');
    }
}
