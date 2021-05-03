<?php

class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->cek_status();
        // $this->CI = &get_instance();
    }

    // |------------------------------------------------------
    // | Dashboard
    // |------------------------------------------------------

    public function index()
    {
        // if ($this->CI->router->fetch_class() != "login") {
        //     // session check logic here...change this accordingly
        //     if ($this->CI->session->userdata['level'] == 'nasabah') {
        //         redirect('nasabah/penjualan');
        //     } elseif ($this->CI->session->userdata['level'] == 'ketua') {
        //         redirect('ketua/ketua');
        //     }
        // }
        $data = [
            'title' => 'Pengajuan ',
            'users' => $this->db->get_where('tbl_users', ['nik' => $this->session->userdata('nik')])->row_array(),
            'account' => $this->Users_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/user/index', $data);
        $this->load->view('templates/footer');
    }
    public function add()
    {
        // if ($this->CI->router->fetch_class() != "login") {
        //     // session check logic here...change this accordingly
        //     if ($this->CI->session->userdata['level'] == 'nasabah') {
        //         redirect('nasabah/penjualan');
        //     } elseif ($this->CI->session->userdata['level'] == 'ketua') {
        //         redirect('ketua/ketua');
        //     }
        // }
        $data = [
            'title' => 'Pengguna',
            'parent' => 'Pengguna',
            'child' => 'Tambah',
            'users' => $this->db->get_where('tbl_users', ['nik' => $this->session->userdata('nik')])->row_array(),
            'jabatan' => $this->Jabatan_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/user/add', $data);
        $this->load->view('templates/footer');
    }

    function cek_status_email()
    {

        $nik = $_POST['nik'];

        $hasil_nik = $this->Users_model->cek_nik($nik);

        if (count($hasil_nik) != 0) {
            echo "1";
        } else {
            echo "2";
        }
    }
}
