<?php

class Kapal_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_kapal', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tbl_kapal');
        $this->db->join('tbl_tipe_kapal', 'tbl_tipe_kapal.id_tipe_kapal=tbl_kapal.id_tipe_kapal');
        $this->db->join('tbl_jenis_kapal', 'tbl_jenis_kapal.id_jenis_kapal=tbl_kapal.id_jenis_kapal');
        $this->db->join('tbl_bendera_kapal', 'tbl_bendera_kapal.id_bendera_kapal=tbl_kapal.id_bendera_kapal');
        $this->db->join('tbl_alat_tangkap_kapal', 'tbl_alat_tangkap_kapal.id_alat_tangkap_kapal=tbl_kapal.id_alat_tangkap_kapal');
        $this->db->join('tbl_perusahaan', 'tbl_perusahaan.id_perusahaan=tbl_kapal.id_perusahaan');
        $this->db->join('tbl_provinsi', 'tbl_provinsi.id_provinsi=tbl_kapal.id_provinsi');
        $this->db->join('tbl_wpp', 'tbl_wpp.id_wpp=tbl_kapal.id_wpp');
        $this->db->join('tbl_jenis_layanan', 'tbl_jenis_layanan.id_jenis_layanan=tbl_kapal.id_jenis_layanan');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_kapal');
        $this->db->join('tbl_tipe_kapal', 'tbl_tipe_kapal.id_tipe_kapal=tbl_kapal.id_tipe_kapal');
        $this->db->join('tbl_jenis_kapal', 'tbl_jenis_kapal.id_jenis_kapal=tbl_kapal.id_jenis_kapal');
        $this->db->join('tbl_bendera_kapal', 'tbl_bendera_kapal.id_bendera_kapal=tbl_kapal.id_bendera_kapal');
        $this->db->join('tbl_alat_tangkap_kapal', 'tbl_alat_tangkap_kapal.id_alat_tangkap_kapal=tbl_kapal.id_alat_tangkap_kapal');
        $this->db->join('tbl_perusahaan', 'tbl_perusahaan.id_perusahaan=tbl_kapal.id_perusahaan');
        $this->db->join('tbl_provinsi', 'tbl_provinsi.id_provinsi=tbl_kapal.id_provinsi');
        $this->db->join('tbl_wpp', 'tbl_wpp.id_wpp=tbl_kapal.id_wpp');
        $this->db->join('tbl_jenis_layanan', 'tbl_jenis_layanan.id_jenis_layanan=tbl_kapal.id_jenis_layanan');
        $this->db->where('tbl_kapal.id_kapal', $id);
        $result = $this->db->get();

        return $result->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_kapal', $id);
        $this->db->update('tbl_kapal', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_kapal', $id);
        $this->db->delete('tbl_kapal');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
