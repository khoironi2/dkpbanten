<?php

class Karyawan extends CI_Controller
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
            'title' => 'LAPORAN KARYAWAN',
            'parent' => 'Laporan ',
            'child' => 'Karyawan',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'karyawan' => $this->Karyawan_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/laporan/karyawan/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data = [
            'title' => 'KARYAWAN',
            'parent' => 'Master ',
            'child' => 'Karyawan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'jabatan_karyawan' => $this->Jabatan_karyawan_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/karyawan/add', $data);
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
            'edit_karyawan' => $this->Karyawan_model->getid($id),
            'jabatan_karyawan' => $this->Jabatan_karyawan_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/karyawan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $no_telpon = $this->input->post('no_telpon');
        $email = $this->input->post('email');
        $id_jabatan_karyawan = $this->input->post('id_jabatan_karyawan');
        $status = $this->input->post('status');

        $data = [
            'nama' => $nama,
            'nip' => $nip,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'no_telpon' => $no_telpon,
            'email' => $email,
            'id_jabatan_karyawan' => $id_jabatan_karyawan,
            'status' => $status
        ];

        $insert = $this->Karyawan_model->insert($data);

        if ($insert) {

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
            redirect('master/karyawan');
        }
    }

    public function update()
    {
        $id = $this->input->post('id_karyawan');
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $no_telpon = $this->input->post('no_telpon');
        $email = $this->input->post('email');
        $id_jabatan_karyawan = $this->input->post('id_jabatan_karyawan');
        $status = $this->input->post('status');

        $data = [
            'nama' => $nama,
            'nip' => $nip,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'no_telpon' => $no_telpon,
            'email' => $email,
            'id_jabatan_karyawan' => $id_jabatan_karyawan,
            'status' => $status
        ];
        $update = $this->Karyawan_model->update($id, $data);
        if ($update) {
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
            redirect('master/karyawan');
        }
    }


    public function delete($id)
    {
        $data['id_karyawan'] = $this->Karyawan_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/karyawan');
    }
}
