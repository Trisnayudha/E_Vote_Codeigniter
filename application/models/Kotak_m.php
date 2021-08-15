<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kotak_m extends CI_Model
{
    public function kotak()
    {
        return $this->db->query('SELECT * FROM tb_calon a JOIN tb_vote b ON a.id_calon = b.id_calon JOIN tb_pengguna c ON b.id_pemilih = c.id_pengguna');
    }
}
