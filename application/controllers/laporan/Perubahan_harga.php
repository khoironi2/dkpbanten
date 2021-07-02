<?php

class Perubahan_harga extends CI_Controller
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
            'title' => 'LAPORAN PERUBAHAN HARGA',
            'parent' => 'Laporan',
            'child' => 'Perubahan Harga',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'perusahaan' => $this->Perusahaan_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('templates/coming_soon', $data);
        $this->load->view('templates/footer');
    }
    public function add()
    {
        $data = [
            'title' => 'PERUSAHAAN',
            'parent' => 'Master ',
            'child' => 'Perusahaan',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'profil' => $this->Profil_model->getAll()
        ];

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            // $this->load->view('templates/topbar');
            $this->load->view('admin/dashboard/master/perusahaan/add');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'no_siup' => $this->input->post('no_siup'),
                'no_npwp' => $this->input->post('no_npwp'),
                'alamat' => $this->input->post('alamat'),
                'no_telpon' => $this->input->post('no_telpon'),
                'email' => $this->input->post('email'),
                'nama_pic' => $this->input->post('nama_pic'),
                'no_telpon_pic' => $this->input->post('no_telpon_pic'),
                'email_pic' => $this->input->post('email_pic'),
                'status' => $this->input->post('status'),
            ];

            $upload_image = $_FILES['file_siup']['name'];
            $upload_image = $_FILES['file_npwp']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx|csv';
                $config['upload_path'] = './assets/master/perusahaan/upload/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_siup')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_siup', $new_image);
                }
                if ($this->upload->do_upload('file_npwp')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_npwp', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->insert('tbl_perusahaan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dokumentasi Berhasil Ditambahkan</div>');
            redirect('master/perusahaan');
        }
    }
    public function edit($id)
    {
        $data = [
            'title' => 'PERUSAHAAN',
            'parent' => 'Master ',
            'child' => 'Perusahaan',
            'newchild' => 'Perbarui ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'perusahaan' => $this->Perusahaan_model->getAll(),
            'kapal' => $this->Perusahaan_model->getAll(),
            'edit_perusahaan' => $this->Perusahaan_model->getid($id),
            'siup' => $this->db->get_where('tbl_perusahaan', ['id_perusahaan' => $id])->row_array(),
            'npwp' => $this->db->get_where('tbl_perusahaan', ['id_perusahaan' => $id])->row_array(),
            'profil' => $this->Profil_model->getAll()
        ];

        $old_siup = $data['siup']['file_siup'];
        $old_npwp = $data['npwp']['file_npwp'];

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            // $this->load->view('templates/topbar');
            $this->load->view('admin/dashboard/master/perusahaan/edit');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'no_siup' => $this->input->post('no_siup'),
                'no_npwp' => $this->input->post('no_npwp'),
                'alamat' => $this->input->post('alamat'),
                'no_telpon' => $this->input->post('no_telpon'),
                'email' => $this->input->post('email'),
                'nama_pic' => $this->input->post('nama_pic'),
                'no_telpon_pic' => $this->input->post('no_telpon_pic'),
                'email_pic' => $this->input->post('email_pic'),
                'status' => $this->input->post('status'),
            ];

            $upload_image = $_FILES['file_siup']['name'];
            $upload_image = $_FILES['file_npwp']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx|csv';
                $config['upload_path'] = './assets/master/perusahaan/upload/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_siup')) {
                    if ($old_siup != 'default-user-image.jpg') {
                        unlink(FCPATH . 'assets/master/perusahaan/upload/' . $old_siup);
                    }
                    $new_siup = $this->upload->data('file_name');
                    $this->db->set('file_siup', $new_siup);
                }
                if ($this->upload->do_upload('file_npwp')) {
                    if ($old_npwp != 'default-user-image.jpg') {
                        unlink(FCPATH . 'assets/master/perusahaan/upload/' . $old_npwp);
                    }
                    $new_npwp = $this->upload->data('file_name');
                    $this->db->set('file_npwp', $new_npwp);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $insert = $this->Perusahaan_model->update($id, $data);

            if ($insert) {

                $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil ditambahkan !</div>');
                redirect('master/perusahaan');
            }
        }
    }


    public function delete($id)
    {
        $data = [
            'perusahaan' => $this->db->get_where('tbl_perusahaan', ['id_perusahaan' => $id])->row_array(),
        ];

        $old_siup = $data["perusahaan"]["file_siup"];
        $old_npwp = $data["perusahaan"]["file_npwp"];
        if ($old_siup != 'default.jpg') {
            unlink(FCPATH . 'assets/master/perusahaan/upload/' . $old_siup);
        }
        if ($old_npwp != 'default.jpg') {
            unlink(FCPATH . 'assets/master/perusahaan/upload/' . $old_npwp);
        }

        $this->db->delete('tbl_perusahaan', ['id_perusahaan' => $id]);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/perusahaan');
    }
}
