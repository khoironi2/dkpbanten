<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Create By : Aryo
 * Youtube : Aryo Coding
 */
class Tahun extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->model(array('Mod_tahun'));
	}

	public function index()
	{
		$this->load->helper('url');
        $this->template->load('layoutbackend','tahun');
	}

	 public function ajax_list()
    {
        ini_set('memory_limit','512M');
        set_time_limit(3600);
        $list = $this->Mod_tahun->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $pel) {
            $no++;
            $row = array();
            $row[] = $pel->id_tahun;//array 0
            $row[] = $pel->nama_thn;//array 1
            $row[] = $pel->id_tahun;//array 2
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Mod_tahun->count_all(),
                        "recordsFiltered" => $this->Mod_tahun->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function insert()
    {
        $this->_validate();
        $kode= date('ymsi');
		$save  = array(
            'nama_thn'			=> $this->input->post('nama_thn')
        );
            $this->Mod_tahun->insert_kat("tahun", $save);
            echo json_encode(array("status" => TRUE));
    }

    public function update()
    {
        $this->_validate();
        $id      = $this->input->post('id');
        $save  = array(
            'nama_thn' => $this->input->post('nama_thn')
        );
        $this->Mod_tahun->update_kat($id, $save);
        echo json_encode(array("status" => TRUE));
    }

    public function edit_kat($id)
    {
            $data = $this->Mod_tahun->get_kat($id);
            echo json_encode($data);
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->Mod_tahun->delete_kat($id, 'tahun');
        echo json_encode(array("status" => TRUE));
    }
    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('nama_thn') == '')
        {
            $data['inputerror'][] = 'nama_thn';
            $data['error_string'][] = 'Tahun Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
}