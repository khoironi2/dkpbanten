<?php

class Alat_tangkap_kapal_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_alat_tangkap_kapal', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_alat_tangkap_kapal');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_alat_tangkap_kapal');
        $this->db->where('id_alat_tangkap_kapal', $id);

        $result = $this->db->get();

        return $result->result_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_alat_tangkap_kapal', $id);
        $this->db->update('tbl_alat_tangkap_kapal', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_alat_tangkap_kapal', $id);
        $this->db->delete('tbl_alat_tangkap_kapal');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
