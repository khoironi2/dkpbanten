<?php

class Cuaca_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_cuaca', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_cuaca');
        $this->db->order_by('id_cuaca', 'desc');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_cuaca');
        $this->db->where('id_cuaca', $id);

        $result = $this->db->get();

        return $result->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_cuaca', $id);
        $this->db->update('tbl_cuaca', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_cuaca', $id);
        $this->db->delete('tbl_cuaca');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
