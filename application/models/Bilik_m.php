<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bilik_m extends CI_Model
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

    public function checkpemilih($idpengguna)
    {
        return $this->db->query("SELECT * FROM tb_vote a where a.id_pemilih = '$idpengguna'");
    }
    public function getspecial($idcalon)
    {
        return $this->db->query("SELECT * FROM tb_calon a where a.id_calon = '$idcalon'");
    }
    public function pilih($id_calon, $id_pemilih, $date)
    {
        return $this->db->query("Insert into tb_vote (id_calon,id_pemilih,date) values ('$id_calon','$id_pemilih','$date')");
    }

    public function checkpilih($id_pemilih)
    {
        return $this->db->query("Select * from tb_vote a where a.id_pemilih = '$id_pemilih'");
    }
    public function updatepengguna($id_pemilih)
    {
        return $this->db->query("Update tb_pengguna a set a.status = '0' where a.id_pengguna = '$id_pemilih'");
    }
}
