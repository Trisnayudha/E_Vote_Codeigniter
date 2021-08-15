<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KotakSuara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin_petugas();
        $this->load->model('kotak_m');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['row'] = $this->kotak_m->kotak();
        $this->template->load('template', 'kotak/kotak_suara', $data);
    }
}
