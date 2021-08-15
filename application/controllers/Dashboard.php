<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('dashboard_m');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data['calon'] = $this->dashboard_m->calon()->row();
        $data['pemilih'] = $this->dashboard_m->pemilih()->row();
        $data['memilih'] = $this->dashboard_m->memilih()->row();
        $data['belum'] = $this->dashboard_m->belum()->row();
        $this->template->load('template', 'dashboard', $data);
    }
}
