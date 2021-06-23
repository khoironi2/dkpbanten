<?php

class Jenis_undang_undang_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_jenis_undang_undang', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_jenis_undang_undang');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_jenis_undang_undang');
        $this->db->where('id_jenis_undang_undang', $id);

        $result = $this->db->get();

        return $result->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_jenis_undang_undang', $id);
        $this->db->update('tbl_jenis_undang_undang', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_jenis_undang_undang', $id);
        $this->db->delete('tbl_jenis_undang_undang');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}