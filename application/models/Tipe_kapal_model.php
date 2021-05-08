<?php

class Tipe_kapal_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_tipe_kapal', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_tipe_kapal');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_tipe_kapal');
        $this->db->where('id_tipe_kapal', $id);

        $result = $this->db->get();

        return $result->result_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_tipe_kapal', $id);
        $this->db->update('tbl_tipe_kapal', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_tipe_kapal', $id);
        $this->db->delete('tbl_tipe_kapal');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
