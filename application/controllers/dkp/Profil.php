<?php

class Profil extends CI_Controller
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
            'title' => 'PROFIL',
            'parent' => 'Profil',
            'child' => 'Profil',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'tipe_kapal' => $this->Tipe_kapal_model->getAll(),
            'profil' => $this->Profil_model->getAll(),
            'pengguna' => $this->Pegawai_model->get()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/dkp/profil/index', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'JENIS IKAN',
            'parent' => 'Master ',
            'child' => 'Jenis Ikan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'edit_jenis_ikan' => $this->Jenis_ikan_model->getid($id),
            'alat' => $this->db->get_where('tbl_profil', ['id_profil' => $id])->row_array()
        ];

        $old_alat = $data['alat']['gambar_profil'];

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar');
            // $this->load->view('templates/topbar');
            $this->load->view('admin/dashboard/dkp/profil/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'content' => $this->input->post('content')
            ];

            $upload_image = $_FILES['gambar_profil']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx|csv';
                $config['upload_path'] = './assets/images/logo/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar_profil')) {
                    if ($old_alat != 'default-user-image.jpg') {
                        unlink(FCPATH . 'assets/images/logo/' . $old_alat);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar_profil', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $insert = $this->Profil_model->update($id, $data);

            if ($insert) {

                $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil Diperbarui !</div>');
                redirect('dkp/profil');
            }
        }
    }


    public function delete($id)
    {
        $data['id_pegawai'] = $this->Pegawai_model->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('pengaturan/user');
    }
}
