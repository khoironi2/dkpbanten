<?php

class Manajemen_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_pegawai', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_pegawai');
        $this->db->join('tbl_jabatan', 'tbl_jabatan.id_jabatan=tbl_pegawai.id_jabatan');
        // $this->db->join('tbl_bidang', 'tbl_bidang.id_bidang=tbl_pegawai.id_bidang');
        $result = $this->db->get();

        return $result->result_array();
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

    public function delete($id)
    {
        $this->db->where('id_pegawai', $id);
        $this->db->delete('tbl_pegawai');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
