<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quick_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('tb_calon');
        if ($id != null) {
            $this->db->where('id_calon', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function hitung()
    {
        return $this->db->query('SELECT * FROM tb_vote a join tb_calon b ON a.id_calon = b.id_calon ');
    }

    public function hitunggroup()
    {
        return $this->db->query('SELECT * FROM tb_vote a join tb_calon b ON a.id_calon = b.id_calon  GROUP BY a.id_calon');
    }
}