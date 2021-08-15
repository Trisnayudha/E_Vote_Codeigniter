<?php

class Fungsi
{
    protected $CI;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('user_m');
        $idpengguna = $this->ci->session->userdata('idpengguna');
        $user_data = $this->ci->user_m->get($idpengguna)->row();
        return $user_data;
    }
}
