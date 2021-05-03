<?php

class Jabatan_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_jabatan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('
        tbl_jabatan.id_jabatan,
        tbl_jabatan.nama_jabatan,
        tbl_jabatan.keterangan_jabatan,
        tbl_jabatan.time_created,
        tbl_jabatan.time_updated,
        dibuat.nama as dibuat,
        diupdate.nama as diupdate
        ');
        $this->db->from('tbl_jabatan');
        $this->db->join('tbl_pegawai as dibuat', 'dibuat.id_pegawai=tbl_jabatan.created_by');
        $this->db->join('tbl_pegawai as diupdate', 'diupdate.id_pegawai=tbl_jabatan.updated_by');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_jabatan', $id);
        $this->db->update('tbl_jabatan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_jabatan', $id);
        $this->db->delete('tbl_jabatan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
