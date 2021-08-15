<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QuickCount extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin_petugas();
        $this->load->model('quick_m');
    }
    public function index()
    {
        $data['row'] = $this->quick_m->get();
        $data['hasil'] = $this->quick_m->hitung();
        $data['hasilgroup'] = $this->quick_m->hitunggroup();
        $hasil_calon = array();
        foreach ($data['hasilgroup']->result() as $grp) {
            $valcln = 0;

            foreach ($data['hasil']->result() as $hitung) {
                if ($grp->id_calon == $hitung->id_calon) {
                    $valcln++;
                }
            }
            $dataqc = array(
                $grp->id_calon => $grp->id_calon,
                'hasil' => $valcln
            );
            array_push($hasil_calon, $dataqc);
        }
        $data['hsl'] = $hasil_calon;
        $this->template->load('template', 'quickcount/hasil_suara', $data);
    }
}
