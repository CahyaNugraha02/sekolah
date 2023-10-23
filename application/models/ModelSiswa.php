<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelSiswa extends CI_Model
{
    //manajemen buku
    public function getSiswa()
    {
        return $this->db->get('siswa');
    }
    public function siswaWhere($where)
    {
        return $this->db->get_where('siswa', $where);
    }
    public function simpanSiswa($data = null)
    {
        $this->db->insert('siswa', $data);
    }
    public function updateSiswa($data = null, $where = null)
    {
        $this->db->update('siswa', $data, $where);
    }
    public function hapusSiswa($where = null)
    {
        $this->db->delete('siswa', $where);
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('siswa');
        return $this->db->get()->row($field);
    }

    //manajemen kategori
    public function getKelas()
    {
        return $this->db->get('kelas');
    }
    public function kelasWhere($where)
    {
        return $this->db->get_where('kelas', $where);
    }
    public function simpanKategori($data = null)
    {
        $this->db->insert('kelas', $data);
    }
    public function hapusKelas($where = null)
    {
        $this->db->delete('kelas', $where);
    }
    public function updateKategori($where = null, $data = null)
    {
        $this->db->update('kelas', $data, $where);
    }
    //join
    public function joinKelasSiswa($where)
    {
        $this->db->select('kelas.NIS_siswa,siswa.NIS');
        $this->db->from('siswa');
        $this->db->join('kelas', 'siswa.NIS = kelas.NIS_siswa');
        $this->db->where($where);
        return $this->db->get();
    }
}