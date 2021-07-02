<?php

class Layanan_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_layanan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_layanan');
        $this->db->order_by('id_layanan', 'desc');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_layanan');
        $this->db->where('id_layanan', $id);

        $result = $this->db->get();

        return $result->result_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_layanan', $id);
        $this->db->update('tbl_layanan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_layanan', $id);
        $this->db->delete('tbl_layanan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
