<?php

class Karyawan_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_karyawan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*,tbl_karyawan.status as status_di_karyawan');
        $this->db->from('tbl_karyawan');
        $this->db->join('tbl_jabatan_karyawan a', 'a.id_jabatan_karyawan=tbl_karyawan.id_jabatan_karyawan');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*,tbl_karyawan.status as status_di_karyawan');
        $this->db->from('tbl_karyawan');
        $this->db->join('tbl_jabatan_karyawan a', 'a.id_jabatan_karyawan=tbl_karyawan.id_jabatan_karyawan');
        $this->db->where('id_karyawan', $id);

        $result = $this->db->get();

        return $result->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_karyawan', $id);
        $this->db->update('tbl_karyawan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_karyawan', $id);
        $this->db->delete('tbl_karyawan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
