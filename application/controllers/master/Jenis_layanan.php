<?php

class Jenis_layanan extends CI_Controller
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
            'title' => 'JENIS LAYANAN',
            'parent' => 'Master ',
            'child' => 'Jenis Layanan',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'layanan' => $this->Layanan_model->getAll(),
            'satuan' => $this->Satuan_model->getAll(),
            'jenis_layanan' => $this->Jenis_layanan_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/jenis_layanan/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data = [
            'title' => 'JENIS LAYANAN',
            'parent' => 'Master ',
            'child' => 'Jenis Layanan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'layanan' => $this->Layanan_model->getAll(),
            'satuan' => $this->Satuan_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/jenis_layanan/add', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {

        $data = [
            'title' => 'JENIS LAYANAN',
            'parent' => 'Master ',
            'child' => 'Jenis Layanan',
            'newchild' => 'Perbarui ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'layanan' => $this->Layanan_model->getAll(),
            'satuan' => $this->Satuan_model->getAll(),
            'jenis_layanan' => $this->Jenis_layanan_model->getAll(),
            'edit_jenis_layanan' => $this->Jenis_layanan_model->getid($id),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/jenis_layanan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $id_layanan = $this->input->post('id_layanan');
        $nama_jenis_layanan = $this->input->post('nama_jenis_layanan');
        $id_satuan = $this->input->post('id_satuan');
        $deskripsi = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');

        $data = [
            'id_layanan' => $id_layanan,
            'nama_jenis_layanan' => $nama_jenis_layanan,
            'id_satuan' => $id_satuan,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
            'status' => $status
        ];

        $insert = $this->Jenis_layanan_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('master/jenis_layanan');
        }
    }

    public function update()
    {
        $id = $this->input->post('id_jenis_layanan');
        $id_layanan = $this->input->post('id_layanan');
        $nama_jenis_layanan = $this->input->post('nama_jenis_layanan');
        $id_satuan = $this->input->post('id_satuan');
        $deskripsi = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');

        $data = [
            'id_layanan' => $id_layanan,
            'nama_jenis_layanan' => $nama_jenis_layanan,
            'id_satuan' => $id_satuan,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
            'status' => $status
        ];
        $update = $this->Jenis_layanan_model->update($id, $data);
        if ($update) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('master/jenis_layanan');
        }
    }

    public function delete($id)
    {
        $data['id_jenis_layanan'] = $this->Jenis_layanan_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/jenis_layanan');
    }
}
