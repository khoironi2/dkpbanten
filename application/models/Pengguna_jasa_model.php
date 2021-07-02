<?php

class Pengguna_jasa_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_pengguna_jasa', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*,tbl_pengguna_jasa.status as status_di_pengguna_jasa ');
        $this->db->from('tbl_pengguna_jasa');
        $this->db->join('tbl_jabatan_karyawan a', 'a.id_jabatan_karyawan=tbl_pengguna_jasa.id_jabatan_karyawan', 'left');
        $this->db->order_by('tbl_pengguna_jasa.id_pengguna_jasa', 'desc');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*,tbl_pengguna_jasa.status as status_di_pengguna_jasa ');
        $this->db->from('tbl_pengguna_jasa');
        $this->db->join('tbl_jabatan_karyawan a', 'a.id_jabatan_karyawan=tbl_pengguna_jasa.id_jabatan_karyawan');
        $this->db->where('id_pengguna_jasa', $id);

        $result = $this->db->get();

        return $result->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_pengguna_jasa', $id);
        $this->db->update('tbl_pengguna_jasa', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_pengguna_jasa', $id);
        $this->db->delete('tbl_pengguna_jasa');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
