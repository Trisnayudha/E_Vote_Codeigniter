<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Calon_m extends CI_Model
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

    public function add($post)
    {
        $params['id_calon'] = $post['id_calon'];
        $params['nama_calon'] = $post['nama_calon'];
        $params['foto_calon'] = $post['foto_calon'];
        $params['keterangan'] = $post['keterangan'];
        $this->db->insert('tb_calon', $params);
    }

    public function edit($post)
    {
        $parms['id_calon'] = $post['id_calon'];
        $params['nama_calon'] = $post['nama_calon'];
        $params['keterangan'] = $post['keterangan'];
        //                  nama field didatabase
        $this->db->where('id_calon', $post['id_calon']);
        //Menamahkan ke database
        $this->db->update('tb_calon', $params);
    }


    public function del($id)
    {
        //                  nama field didatabase
        $this->db->where('id_calon', $id);
        //                  tabel database
        $this->db->delete('tb_calon');
    }
}
