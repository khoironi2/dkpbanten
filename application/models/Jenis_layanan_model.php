<?php

class Jenis_layanan_model extends CI_model
{
    public function insert($data)
    {
        $this->db->insert('tbl_jenis_layanan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getAll()
    {
        $this->db->select('
        tbl_layanan.nama as nama_layanan,
        tbl_jenis_layanan.id_jenis_layanan,
        tbl_jenis_layanan.nama_jenis_layanan,
        tbl_satuan.nama_satuan,
        tbl_jenis_layanan.harga,
        tbl_jenis_layanan.status
        ');
        $this->db->from('tbl_jenis_layanan');
        $this->db->join('tbl_layanan', 'tbl_layanan.id_layanan = tbl_jenis_layanan.id_layanan');
        $this->db->join('tbl_satuan', 'tbl_satuan.id_satuan = tbl_jenis_layanan.id_satuan');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getid($id)
    {
        $this->db->select('
        tbl_layanan.id_layanan,
        tbl_layanan.nama as nama_layanan,
        tbl_jenis_layanan.id_jenis_layanan,
        tbl_jenis_layanan.nama_jenis_layanan,
        tbl_jenis_layanan.id_satuan,
        tbl_satuan.nama_satuan,
        tbl_jenis_layanan.harga,
        tbl_jenis_layanan.status,
        tbl_jenis_layanan.deskripsi
        ');
        $this->db->from('tbl_jenis_layanan');
        $this->db->join('tbl_layanan', 'tbl_layanan.id_layanan = tbl_jenis_layanan.id_layanan');
        $this->db->join('tbl_satuan', 'tbl_satuan.id_satuan = tbl_jenis_layanan.id_satuan');
        $this->db->where('tbl_jenis_layanan.id_jenis_layanan', $id);

        $result = $this->db->get();

        return $result->result_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_jenis_layanan', $id);
        $this->db->update('tbl_jenis_layanan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        $this->db->where('id_jenis_layanan', $id);
        $this->db->delete('tbl_jenis_layanan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
