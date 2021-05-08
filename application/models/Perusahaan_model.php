<?php

class Perusahaan_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_perusahaan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_perusahaan');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_perusahaan');
        $this->db->where('id_perusahaan', $id);

        $result = $this->db->get();

        return $result->result_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_perusahaan', $id);
        $this->db->update('tbl_perusahaan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_perusahaan', $id);
        $this->db->delete('tbl_perusahaan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
