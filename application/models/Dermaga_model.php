<?php

class Dermaga_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_dermaga', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_dermaga');
        $this->db->order_by('id_dermaga', 'desc');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_dermaga');
        $this->db->where('id_dermaga', $id);

        $result = $this->db->get();

        return $result->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_dermaga', $id);
        $this->db->update('tbl_dermaga', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_dermaga', $id);
        $this->db->delete('tbl_dermaga');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
