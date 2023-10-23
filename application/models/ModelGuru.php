<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelGuru extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('guru', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('guru', $where);
    }
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('guru', $where);
    }
    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
}
