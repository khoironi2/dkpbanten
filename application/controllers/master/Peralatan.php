<?php

class Peralatan extends CI_Controller
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
            'title' => 'PERALATAN',
            'parent' => 'Master ',
            'child' => 'Peralatan',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'peralatan' => $this->Peralatan_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/peralatan/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data = [
            'title' => 'PERALATAN',
            'parent' => 'Master ',
            'child' => 'Peralatan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar');
            // $this->load->view('templates/topbar');
            $this->load->view('admin/dashboard/master/peralatan/add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'merk_tipe' => $this->input->post('merk_tipe'),
                'deskripsi' => $this->input->post('deskripsi'),
                'stok' => $this->input->post('stok'),
                'status' => $this->input->post('status'),
            ];

            $upload_image = $_FILES['file_peralatan']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx|csv';
                $config['upload_path'] = './assets/master/peralatan/upload/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_peralatan')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_peralatan', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->insert('tbl_peralatan', $data);
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
            redirect('master/peralatan');
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'PERALATAN',
            'parent' => 'Master ',
            'child' => 'Peralatan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'edit_peralatan' => $this->Peralatan_model->getid($id),
            'alat' => $this->db->get_where('tbl_peralatan', ['id_peralatan' => $id])->row_array(),
            'profil' => $this->Profil_model->getAll()
        ];

        $old_alat = $data['alat']['file_peralatan'];

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar');
            // $this->load->view('templates/topbar');
            $this->load->view('admin/dashboard/master/peralatan/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'merk_tipe' => $this->input->post('merk_tipe'),
                'deskripsi' => $this->input->post('deskripsi'),
                'stok' => $this->input->post('stok'),
                'status' => $this->input->post('status'),
            ];

            $upload_image = $_FILES['file_peralatan']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx|csv';
                $config['upload_path'] = './assets/master/peralatan/upload/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_peralatan')) {
                    if ($old_alat != 'default-user-image.jpg') {
                        unlink(FCPATH . 'assets/master/peralatan/upload/' . $old_alat);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_peralatan', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $insert = $this->Peralatan_model->update($id, $data);

            if ($insert) {

                $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil Diperbarui !</div>');
                redirect('master/peralatan');
            }
        }
    }

    public function delete($id)
    {
        $data = [
            'peralatan' => $this->db->get_where('tbl_peralatan', ['id_peralatan' => $id])->row_array(),
        ];

        $old_siup = $data["peralatan"]["file_peralatan"];
        if ($old_siup != 'default.jpg') {
            unlink(FCPATH . 'assets/master/peralatan/upload/' . $old_siup);
        }

        $this->db->delete('tbl_peralatan', ['id_peralatan' => $id]);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/peralatan');
    }
}
