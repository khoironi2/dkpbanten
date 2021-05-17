<?php

class Jabatan_karyawan_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_jabatan_karyawan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_jabatan_karyawan');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_jabatan_karyawan');
        $this->db->where('id_jabatan_karyawan', $id);

        $result = $this->db->get();

        return $result->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_jabatan_karyawan', $id);
        $this->db->update('tbl_jabatan_karyawan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_jabatan_karyawan', $id);
        $this->db->delete('tbl_jabatan_karyawan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
