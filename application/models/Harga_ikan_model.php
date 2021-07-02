<?php

class Harga_ikan_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_harga_ikan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*,tbl_harga_ikan.status as status_di_dop');
        $this->db->from('tbl_harga_ikan');
        $this->db->join('tbl_jenis_ikan a', 'a.id_jenis_ikan=tbl_harga_ikan.id_jenis_ikan', 'left');
        $this->db->order_by('tbl_harga_ikan.id_harga_ikan', 'desc');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*,tbl_harga_ikan.status as status_di_dop');
        $this->db->from('tbl_harga_ikan');
        $this->db->join('tbl_jenis_ikan a', 'a.id_jenis_ikan=tbl_harga_ikan.id_jenis_ikan');
        $this->db->where('id_harga_ikan', $id);

        $result = $this->db->get();

        return $result->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_harga_ikan', $id);
        $this->db->update('tbl_harga_ikan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_harga_ikan', $id);
        $this->db->delete('tbl_harga_ikan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
