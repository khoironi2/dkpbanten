<?php

class Bidang_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_bidang', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('
        tbl_bidang.id_bidang,
        tbl_bidang.nama_bidang,
        tbl_bidang.keterangan_bidang,
        tbl_bidang.time_created,
        tbl_bidang.time_updated,
        dibuat.nama as dibuat,
        diupdate.nama as diupdate
        ');
        $this->db->from('tbl_bidang');
        $this->db->join('tbl_pegawai as dibuat', 'dibuat.id_pegawai=tbl_bidang.created_by');
        $this->db->join('tbl_pegawai as diupdate', 'diupdate.id_pegawai=tbl_bidang.updated_by');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_bidang', $id);
        $this->db->update('tbl_bidang', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_bidang', $id);
        $this->db->delete('tbl_bidang');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
