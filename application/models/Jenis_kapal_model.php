<?php

class Jenis_kapal_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_jenis_kapal', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_jenis_kapal');
        $this->db->order_by('id_jenis_kapal', 'desc');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_jenis_kapal');
        $this->db->where('id_jenis_kapal', $id);

        $result = $this->db->get();

        return $result->result_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_jenis_kapal', $id);
        $this->db->update('tbl_jenis_kapal', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_jenis_kapal', $id);
        $this->db->delete('tbl_jenis_kapal');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
