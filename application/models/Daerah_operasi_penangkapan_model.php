<?php

class Daerah_operasi_penangkapan_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_daerah_operasional_penangkapan_ikan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*,tbl_daerah_operasional_penangkapan_ikan.status as status_di_dop');
        $this->db->from('tbl_daerah_operasional_penangkapan_ikan');
        $this->db->join('tbl_wpp a', 'a.id_wpp=tbl_daerah_operasional_penangkapan_ikan.id_wpp');
        $this->db->order_by('tbl_daerah_operasional_penangkapan_ikan.id_daerah_operasional_penangkapan_ikan', 'desc');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*,tbl_daerah_operasional_penangkapan_ikan.status as status_di_dop');
        $this->db->from('tbl_daerah_operasional_penangkapan_ikan');
        $this->db->join('tbl_wpp a', 'a.id_wpp=tbl_daerah_operasional_penangkapan_ikan.id_wpp');
        $this->db->where('id_daerah_operasional_penangkapan_ikan', $id);

        $result = $this->db->get();

        return $result->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_daerah_operasional_penangkapan_ikan', $id);
        $this->db->update('tbl_daerah_operasional_penangkapan_ikan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_daerah_operasional_penangkapan_ikan', $id);
        $this->db->delete('tbl_daerah_operasional_penangkapan_ikan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
