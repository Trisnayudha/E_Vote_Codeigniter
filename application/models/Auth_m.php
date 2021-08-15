<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{
    public function login($post)
    {
        $this->db->select("*");
        $this->db->from("tb_pengguna");
        $this->db->where('username', $post['username']);
        //Masukin SHA1/MD5 seharusnya tapi fungsi dekripnya ga bisa
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
    }
}
