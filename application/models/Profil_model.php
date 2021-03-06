<?php

class Profil_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_profil', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_profil');
        $this->db->order_by('id_profil', 'desc');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_profil');
        $this->db->where('id_profil', $id);

        $result = $this->db->get();

        return $result->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_profil', $id);
        $this->db->update('tbl_profil', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_profil', $id);
        $this->db->delete('tbl_profil');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
