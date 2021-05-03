<?php

class Auth_model extends CI_Model
{

    public function cek_login($nik)
    {

        $hasil = $this->db->where('nik', $nik)->limit(1)->get('tbl_pegawai');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }

    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_pegawai', $id);
        $this->db->update('tbl_pegawai', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function logout($data, $nik)
    {
        $this->db->where('nik', $nik);
        $this->db->update('tbl_pegawai', $data);
    }
}
