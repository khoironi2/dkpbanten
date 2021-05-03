<?php

class Profile extends CI_Controller
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
            'title' => 'Profile ',
            'parent' => 'Profil ',
            'child' => 'Data Pribadi ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            // 'penelitian' => $this->Penelitian_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/profile/index', $data);
        $this->load->view('templates/footer');
    }
    public function updateAva()
    {
        $old = $this->session->userdata('gambar_pegawai');
        //CONFIGURASI UPLOAD IMAGE
        $config['upload_path']         = './assets/images/profile';
        $config['allowed_types']     = 'jpg|png|svg';
        $config['max_size']         = '12000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        //PROSES UPLOAD IMAGE
        if (!$this->upload->do_upload('gambar_pegawai')) {
            $data['errors']     = $this->upload->display_errors();
            print_r($data);
        } else {
            unlink(FCPATH . 'assets/images/profile/' . $old);

            $upload_data = array('uploads' => $this->upload->data());

            $data = array('gambar_pegawai' => $upload_data['uploads']['file_name']);

            $id = $this->session->userdata('id_pegawai');

            $this->Manajemen_model->update($id, $data);

            redirect(site_url('admin/profile'));
        }
    }



    public function UpdateGambar()
    {
        $datas = [
            'title' => 'Profile ',
            'parent' => 'Profil ',
            'child' => 'Data Pribadi ',
            'users' => $this->db->get_where('tbl_pegawai', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'jabatan' => $this->Pegawai_model->getAll(),
            // 'penelitian' => $this->Penelitian_model->getAll()
        ];
        $id = $this->session->userdata('id_pegawai');
        $old_image = $datas["users"]["gambar_pegawai"];

        //CONFIGURASI UPLOAD IMAGE
        $config['upload_path']         = './assets/images/profile';
        $config['allowed_types']     = 'jpg|png|svg|jpeg';
        $config['max_size']         = '12000';

        $this->load->library('upload', $config);

        //PROSES UPLOAD IMAGE
        if (!$this->upload->do_upload('gambar_pegawai')) {
            $data['errors']     = $this->upload->display_errors();
            print_r($data);
        } else {
            //PROSES UNTUK MEMBUAT THUMBNAIL DARI FOTO YANG TELAH DIUPLOAD
            $upload_data                = array('uploads' => $this->upload->data());
            // Image Editor
            $config['image_library']    = 'gd2';
            $config['source_image']     = './assets/images/profile/' . $upload_data['uploads']['file_name'];
            $config['new_image']         = './assets/images/profile/thumbs/';
            $config['create_thumb']     = TRUE;
            $config['quality']             = "100%";
            $config['max_size'] = '100M';
            $config['maintain_ratio']     = FALSE;
            $config['width']             = 5028; // Pixel
            $config['height']             = 3364; // Pixel
            $config['x_axis']             = 0;
            $config['y_axis']             = 0;
            $config['thumb_marker']     = '';
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            //PROSES MASUK KEDATABASE
            //$slug = url_title($this->input->post('judul_post'), 'dash', TRUE);
            //date_default_timezone_set("ASIA/JAKARTA");
            $data = array(
                // 'id_koleksi'    => $this->input->post('id_koleksi'),
                // 'kondisi_kerusakan'    => $this->input->post('kondisi_kerusakan'),
                // 'status_pemeriksaan'    => '1',
                // 'id_users'    => $this->session->userdata('id_users'),
                // 'time_pemeriksaan'    => date('Y-m-d H:i:s'),
                'gambar_pegawai'        => $upload_data['uploads']['file_name']
            );

            $update = $this->Manajemen_model->update($id, $data);

            if ($update) {
                $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Bukti kerusakan berhasil di update !</div>');

                redirect('admin/profile');
            }
        }
    }
}
