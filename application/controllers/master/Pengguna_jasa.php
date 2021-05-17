<?php

class Pengguna_jasa extends CI_Controller
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
            'title' => 'PENGGUNA JASA',
            'parent' => 'Master ',
            'child' => 'Pengguna Jasa',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'jabatan_karyawan' => $this->Jabatan_karyawan_model->getAll(),
            'pengguna_jasa' => $this->Pengguna_jasa_model->getAll(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/master/pengguna_jasa/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data = [
            'title' => 'PENGGUNA JASA',
            'parent' => 'Master ',
            'child' => 'Pengguna Jasa',
            'newchild' => 'Tambah ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'jabatan_karyawan' => $this->Jabatan_karyawan_model->getAll(),
            'pengguna_jasa' => $this->Pengguna_jasa_model->getAll(),
        ];

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar');
            // $this->load->view('templates/topbar');
            $this->load->view('admin/dashboard/master/pengguna_jasa/add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nik_ktp' => $this->input->post('nik_ktp'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat' => $this->input->post('alamat'),
                'no_telpon' => $this->input->post('no_telpon'),
                'email' => $this->input->post('email'),
                'id_jabatan_karyawan' => $this->input->post('id_jabatan_karyawan'),
                'pas_masuk' => $this->input->post('pas_masuk'),
                'pas_keluar' => $this->input->post('pas_keluar'),
                'nomor_kartu' => $this->input->post('nomor_kartu'),
                'pin' => $this->input->post('pin'),
                'tgl_kartu' => $this->input->post('tgl_kartu'),
                'tgl_akhir_kartu' => $this->input->post('tgl_akhir_kartu'),
                'status' => $this->input->post('status'),
            ];

            $upload_image = $_FILES['file_ktp']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx|csv';
                $config['upload_path'] = './assets/master/pengguna_jasa/upload/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_ktp')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('file_ktp', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->insert('tbl_pengguna_jasa', $data);
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
            redirect('master/pengguna_jasa');
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'PENGGUNA JASA',
            'parent' => 'Master ',
            'child' => 'Pengguna Jasa',
            'newchild' => 'Perbarui',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            'jabatan_karyawan' => $this->Jabatan_karyawan_model->getAll(),
            'pengguna_jasa' => $this->Pengguna_jasa_model->getAll(),
            'edit_pengguna_jasa' => $this->Pengguna_jasa_model->getid($id),
            'ktp' => $this->db->get_where('tbl_pengguna_jasa', ['id_pengguna_jasa' => $id])->row_array()
        ];

        $old_ktp = $data['ktp']['file_ktp'];

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar');
            // $this->load->view('templates/topbar');
            $this->load->view('admin/dashboard/master/pengguna_jasa/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nik_ktp' => $this->input->post('nik_ktp'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat' => $this->input->post('alamat'),
                'no_telpon' => $this->input->post('no_telpon'),
                'email' => $this->input->post('email'),
                'id_jabatan_karyawan' => $this->input->post('id_jabatan_karyawan'),
                'pas_masuk' => $this->input->post('pas_masuk'),
                'pas_keluar' => $this->input->post('pas_keluar'),
                'nomor_kartu' => $this->input->post('nomor_kartu'),
                'pin' => $this->input->post('pin'),
                'tgl_kartu' => $this->input->post('tgl_kartu'),
                'tgl_akhir_kartu' => $this->input->post('tgl_akhir_kartu'),
                'status' => $this->input->post('status')
            ];

            $upload_image = $_FILES['file_ktp']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx|csv';
                $config['upload_path'] = './assets/master/pengguna_jasa/upload/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_ktp')) {
                    if ($old_ktp != 'default-user-image.jpg') {
                        unlink(FCPATH . 'assets/master/pengguna_jasa/upload/' . $old_ktp);
                    }
                    $new_siup = $this->upload->data('file_name');
                    $this->db->set('file_ktp', $new_siup);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $insert = $this->Pengguna_jasa_model->update($id, $data);

            if ($insert) {
                $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil diperbarui !</div>');
                redirect('master/pengguna_jasa');
            }
        }
    }


    public function delete($id)
    {
        $data = [
            'pengguna_jasa' => $this->db->get_where('tbl_pengguna_jasa', ['id_pengguna_jasa' => $id])->row_array(),
        ];

        $old_ktp = $data["pengguna_jasa"]["file_ktp"];
        if ($old_ktp != 'default.jpg') {
            unlink(FCPATH . 'assets/master/pengguna_jasa/upload/' . $old_ktp);
        }

        $this->db->delete('tbl_pengguna_jasa', ['id_pengguna_jasa' => $id]);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('master/pengguna_jasa');
    }
}
