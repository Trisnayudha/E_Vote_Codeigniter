<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('tb_pengguna');
        if ($id != null) {
            $this->db->where('id_pengguna', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    //Input data Setting>Users
    public function add($post)
    {
        //          Sesuai Field        Sesuai name
        $params['nama_pengguna'] = $post['nama_pengguna'];
        $params['username'] = $post['username'];
        //Masukin SHA1/MD5 tapi fungsi dekripnya gabisa
        $params['password'] = md5($post['password']);
        $params['level'] = $post['level'];
        $params['status'] = $post['status'];
        $params['jenis'] = $post['jenis'];
        $params['email'] = $post['email'];
        $params['telepon'] = $post['phone'];

        //Menamahkan ke database
        $this->db->insert('tb_pengguna', $params);
    }

    public function edit($post)
    {
        //          Sesuai Field        Sesuai name
        $params['nama_pengguna'] = $post['nama_pengguna'];
        $params['username'] = $post['username'];
        //Masukin SHA1/MD5 tapi fungsi dekripnya gabisa
        $params['password'] = md5($post['password']);
        $params['telepon'] = $post['telepon'];
        $params['email'] = $post['email'];
        //                  nama field didatabase
        $this->db->where('id_pengguna', $post['id_pengguna']);
        //Menamahkan ke database
        $this->db->update('tb_pengguna', $params);
    }

    public function del($id)
    {
        //                  nama field didatabase
        $this->db->where('id_pengguna', $id);
        //                  tabel database
        $this->db->delete('tb_pengguna');
    }

    public function panitia()
    {
        $this->db->from('tb_pengguna');

        $this->db->where('jenis', 'PAN');

        $query = $this->db->get();
        return $query;
    }
}
