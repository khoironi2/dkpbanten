<?php

class Provinsi_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_provinsi', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_provinsi');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_provinsi');
        $this->db->where('id_provinsi', $id);

        $result = $this->db->get();

        return $result->result_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_provinsi', $id);
        $this->db->update('tbl_provinsi', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_provinsi', $id);
        $this->db->delete('tbl_provinsi');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
