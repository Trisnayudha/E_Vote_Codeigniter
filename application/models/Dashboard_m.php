<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_m extends CI_Model
{

    public function calon()
    {
        return $this->db->query('SELECT COUNT(ID_CALON) as tot_calon  from tb_calon');
    }

    public function pemilih()
    {
        return $this->db->query("SELECT COUNT(id_pengguna) as tot_pemilih  from tb_pengguna where level='Pemilih'");
    }

    public function memilih()
    {
        return $this->db->query("SELECT COUNT(id_pengguna) as sudah  from tb_pengguna where level='Pemilih' and status='0'");
    }

    public function belum()
    {
        return $this->db->query("SELECT COUNT(id_pengguna) as belum  from tb_pengguna where level='Pemilih' and status='1'");
    }
}
