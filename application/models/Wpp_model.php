<?php

class Wpp_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_wpp', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_wpp');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_wpp');
        $this->db->where('id_wpp', $id);

        $result = $this->db->get();

        return $result->result_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_wpp', $id);
        $this->db->update('tbl_wpp', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_wpp', $id);
        $this->db->delete('tbl_wpp');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
