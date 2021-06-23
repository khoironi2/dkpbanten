<?php

class Info_dpi_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_info_dpi', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_info_dpi');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_info_dpi');
        $this->db->where('id_info_dpi', $id);

        $result = $this->db->get();

        return $result->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_info_dpi', $id);
        $this->db->update('tbl_info_dpi', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_info_dpi', $id);
        $this->db->delete('tbl_info_dpi');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
