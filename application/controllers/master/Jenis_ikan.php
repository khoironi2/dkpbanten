<?php

class Jenis_ikan extends CI_Controller
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
            'title' => 'JENIS IKAN',
            'parent' => 'Master ',
            'child' => 'Jenis Ikan',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'jenis_ikan' => $this->Jenis_ikan_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/jenis_ikan/index', $data);
        $this->load->view('templates/footer');
    }


    public function add()
    {
        $data = [
            'title' => 'JENIS IKAN',
            'parent' => 'Master ',
            'child' => 'Jenis Ikan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'jenis_ikan' => $this->Jenis_ikan_model->getAll(),
        ];

        $this->form_validation->set_rules('nama_indonesia', 'nama_indonesia', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar');
            // $this->load->view('templates/topbar');
            $this->load->view('admin/dashboard/master/jenis_ikan/add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_indonesia' => $this->input->post('nama_indonesia'),
                'nama_latin' => $this->input->post('nama_latin'),
                'nama_daerah' => $this->input->post('nama_daerah'),
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => $this->input->post('status')
            ];

            $upload_image = $_FILES['gambar_ikan']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx|csv';
                $config['upload_path'] = './assets/master/jenis_ikan/upload/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar_ikan')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar_ikan', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->insert('tbl_jenis_ikan', $data);
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
            redirect('master/jenis_ikan');
        }
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
            'alat' => $this->db->get_where('tbl_jenis_ikan', ['id_jenis_ikan' => $id])->row_array()
        ];

        $old_alat = $data['alat']['gambar_ikan'];

        $this->form_validation->set_rules('nama_indonesia', 'nama_indonesia', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar');
            // $this->load->view('templates/topbar');
            $this->load->view('admin/dashboard/master/jenis_ikan/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_indonesia' => $this->input->post('nama_indonesia'),
                'nama_latin' => $this->input->post('nama_latin'),
                'nama_daerah' => $this->input->post('nama_daerah'),
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => $this->input->post('status')
            ];

            $upload_image = $_FILES['gambar_ikan']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx|csv';
                $config['upload_path'] = './assets/master/jenis_ikan/upload/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar_ikan')) {
                    if ($old_alat != 'default-user-image.jpg') {
                        unlink(FCPATH . 'assets/master/jenis_ikan/upload/' . $old_alat);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar_ikan', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $insert = $this->Jenis_ikan_model->update($id, $data);

            if ($insert) {

                $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil Diperbarui !</div>');
                redirect('master/jenis_ikan');
            }
        }
    }

    public function delete($id)
    {
        $data = [
            'jenis_ikan' => $this->db->get_where('tbl_jenis_ikan', ['id_jenis_ikan' => $id])->row_array(),
        ];

        $old_siup = $data["jenis_ikan"]["gambar_ikan"];
        if ($old_siup != 'default.jpg') {
            unlink(FCPATH . 'assets/master/jenis_ikan/upload/' . $old_siup);
        }

        $this->db->delete('tbl_jenis_ikan', ['id_jenis_ikan' => $id]);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/jenis_ikan');
    }
}
