<?php

class Jenis_kapal extends CI_Controller
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
            'title' => 'JENIS KAPAL ',
            'parent' => 'Master ',
            'child' => 'Jenis Kapal ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'jenis_kapal' => $this->Jenis_kapal_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/jenis_kapal/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data = [
            'title' => 'JENIS KAPAL ',
            'parent' => 'Master ',
            'child' => 'Jenis Kapal ',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'jenis_kapal' => $this->Jenis_kapal_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/jenis_kapal/add', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {

        $data = [
            'title' => 'JENIS KAPAL ',
            'parent' => 'Master ',
            'child' => 'Jenis Kapal ',
            'newchild' => 'Perbarui ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'jenis_kapal' => $this->Jenis_kapal_model->getAll(),
            'edit_jenis_kapal' => $this->Jenis_kapal_model->getid($id),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/jenis_kapal/edit', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $nama_jenis_kapal = $this->input->post('nama_jenis_kapal');
        $status = $this->input->post('status');

        $data = [
            'nama_jenis_kapal' => $nama_jenis_kapal,
            'status' => $status
        ];

        $insert = $this->Jenis_kapal_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('master/jenis_kapal');
        }
    }

    public function update()
    {
        $id = $this->input->post('id_jenis_kapal');
        $nama_jenis_kapal = $this->input->post('nama_jenis_kapal');
        $status = $this->input->post('status');

        $data = [
            'nama_jenis_kapal' => $nama_jenis_kapal,
            'status' => $status
        ];
        $update = $this->Jenis_kapal_model->update($id, $data);
        if ($update) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('master/jenis_kapal');
        }
    }
    public function delete($id)
    {
        $data['id_jenis_kapal'] = $this->Jenis_kapal_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/jenis_kapal');
    }
}
