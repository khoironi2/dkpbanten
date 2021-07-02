<?php

class Jenis_ikan_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_jenis_ikan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*
        ');
        $this->db->from('tbl_jenis_ikan');
        $this->db->order_by('id_jenis_ikan', 'desc');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_jenis_ikan');
        $this->db->where('id_jenis_ikan', $id);

        $result = $this->db->get();

        return $result->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_jenis_ikan', $id);
        $this->db->update('tbl_jenis_ikan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_jenis_ikan', $id);
        $this->db->delete('tbl_jenis_ikan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
