<?php

class Penelitian_model extends CI_model
{
    public function getAll()
    {
        $this->db->select('
        tbl_penelitian.judul_penelitian,
        tbl_penelitian.id_penelitian,
        tbl_penelitian.reputasi_penelitian,
        tbl_penelitian.link_penelitian,
        tbl_penelitian.file_penelitian,
        a.nama_panggilan as nama_peneliti,
        b.nama_panggilan as nama_admin,
        aa.nama_jabatan as nama_jabatan_peneliti,
        bb.nama_jabatan as nama_jabatan_admin        
        ');
        $this->db->from('tbl_penelitian');
        $this->db->join('tbl_users a', 'a.id_users=tbl_penelitian.id_users');
        $this->db->join('tbl_users b', 'b.id_users=tbl_penelitian.created_by');
        $this->db->join('tbl_jabatan aa', 'aa.id_jabatan=a.id_jabatan');
        $this->db->join('tbl_jabatan bb', 'bb.id_jabatan=b.id_jabatan');
        $this->db->where('a.id_users', $this->session->userdata('id_users'));
        $this->db->order_by('tbl_penelitian.id_penelitian', 'desc');
        $result = $this->db->get();

        return $result->result();
    }
    public function getAllUsersNasabah()
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('level', 'nasabah');
        $result = $this->db->get();

        return $result->result();
    }

    public function getID($id)
    {
        $this->db->select('tbl_pengajuan.id_pengajuan,
        tbl_pengajuan.judul_pengajuan,
        tbl_pengajuan.latar_belakang_pengajuan,
        tbl_pengajuan.tujuan_pengajuan,
        tbl_pengajuan.manfaat_pengajuan,
        tbl_pengajuan.jenis_pengajuan,
        tbl_pengajuan.biaya_pengajuan,
        tbl_pengajuan.waktu_pengajuan_awal,
        tbl_pengajuan.waktu_pengajuan_akhir,
        tbl_pengajuan.peserta_pengajuan,
        tbl_pengajuan.penutup_pengajuan,
        a.nama_lengkap as nama_pembuat,
        b.nama_lengkap as nama_perumus,
        c.nama_lengkap as nama_pemeriksa,
        d.nama_lengkap as nama_penetap,
        e.nama_lengkap as nama_pengendali,
        aa.nama_jabatan,
        bb.nama_jabatan as nama_jabatan_perumus,
        cc.nama_jabatan as nama_jabatan_pemeriksa,
        dd.nama_jabatan as nama_jabatan_penetap,
        ee.nama_jabatan as nama_jabatan_pengendali
        ');
        $this->db->from('tbl_pengajuan');
        $this->db->join('tbl_users a', 'a.id_users=tbl_pengajuan.id_users');
        $this->db->join('tbl_users b', 'b.id_users=tbl_pengajuan.dirumuskan_pengajuan');
        $this->db->join('tbl_users c', 'c.id_users=tbl_pengajuan.diperiksa_pengajuan');
        $this->db->join('tbl_users d', 'd.id_users=tbl_pengajuan.ditetapkan_pengajuan');
        $this->db->join('tbl_users e', 'e.id_users=tbl_pengajuan.dikendalikan_pengajuan');
        $this->db->join('tbl_jabatan aa', 'aa.id_jabatan=a.id_jabatan');
        $this->db->join('tbl_jabatan bb', 'bb.id_jabatan=b.id_jabatan');
        $this->db->join('tbl_jabatan cc', 'cc.id_jabatan=c.id_jabatan');
        $this->db->join('tbl_jabatan dd', 'dd.id_jabatan=d.id_jabatan');
        $this->db->join('tbl_jabatan ee', 'ee.id_jabatan=e.id_jabatan');
        $this->db->where('id_pengajuan', $id);

        $result = $this->db->get();

        return $result->row();
    }
    public function getJenisTerapiById($id_jenisterapi)
    {
        $this->db->select('*');
        $this->db->from('tbl_jenisterapi');
        $this->db->where('id_jenisterapi', $id_jenisterapi);

        $result = $this->db->get();

        return $result->row();
    }
    public function Insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }


    function tampil_data()
    {
        return $this->db->get('santri');
    }

    function cari($ids)
    {
        $query = $this->db->get_where('santri', array('ids' => $ids));
        return $query;
    }

    public function update($id, $data)
    {
        $this->db->where('id_users', $id);
        $this->db->update('tbl_users', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
    public function update1($id, $data1)
    {
        $this->db->where('id', $id);
        $this->db->update('santri', $data1);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function updateAva($id, $data)
    {
        $update = $this->db->get('santri');
        $row = $update->row_array();
        if ($update->num_rows() > 0) {
            if (isset($data['gambar_santri'])) {
                #lets delete the image                
                unlink("./assets/img/users/" . $row['gambar_santri']);
            }
        }
        $this->db->where('id', $id);
        $this->db->update('santri', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function Cetak()
    {
        $this->db->select('*');
        $this->db->from('santri');
        $this->db->join('users', 'users.id=santri.id');
        $this->db->where('santri.id', $this->session->userdata('id'));

        $result = $this->db->get();

        return $result->result();
    }

    public function delete($id)
    {
        $this->db->where('id_users', $id);
        $this->db->delete('tbl_users');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
