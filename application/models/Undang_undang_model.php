<?php

class Undang_undang_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_undang_undang', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*,tbl_undang_undang.status as status_di_uud');
        $this->db->from('tbl_undang_undang');
        $this->db->join('tbl_jenis_undang_undang a', 'a.id_jenis_undang_undang=tbl_undang_undang.id_jenis_undang_undang');
        $this->db->order_by('tbl_undang_undang.id_undang_undang', 'desc');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*,tbl_undang_undang.status as status_di_uud');
        $this->db->from('tbl_undang_undang');
        $this->db->join('tbl_jenis_undang_undang a', 'a.id_jenis_undang_undang=tbl_undang_undang.id_jenis_undang_undang');
        $this->db->where('id_undang_undang', $id);

        $result = $this->db->get();

        return $result->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_undang_undang', $id);
        $this->db->update('tbl_undang_undang', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_undang_undang', $id);
        $this->db->delete('tbl_undang_undang');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
