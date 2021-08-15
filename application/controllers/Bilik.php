<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bilik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('bilik_m');
        $data['row'] = $this->bilik_m->get();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['row'] = $this->bilik_m->get();
        $idpengguna = $this->session->userdata('idpengguna');
        $data['validation'] = $this->bilik_m->checkpemilih($idpengguna);
        $check = count($data['validation']->result());
        $status = false;
        if ($check > 0) {
            $status = true;
        } else {
            $status = false;
        }
        $data['statuspilih'] = $status;
        $this->template->load('template', 'bilik/data_bilik', $data);
    }

    public function view($idcalon)
    {
        $data['row'] = $this->bilik_m->getspecial($idcalon);

        $this->template->load('template', 'bilik/view_bilik', $data);
    }

    public function buka($idcalon)
    {
        $data['row'] = $this->bilik_m->getspecial($idcalon)->row();
        $this->template->load('template', 'bilik/buka_bilik', $data);
    }

    public function pilihcalon()
    {
        $id_calon = $this->input->post('idcal');
        $id_pemilih = $this->input->post('idpem');
        $date = date('Y-m-d H:i:s');

        $checkvote = $this->bilik_m->checkpilih($id_pemilih);
        if ($checkvote->num_rows() > 0) {
            $data = array(
                'status' => 'Anda telah memilih sebelumnya',
                'code' => 2
            );
            echo json_encode($data);
        } else {
            $simpanvote = $this->bilik_m->pilih($id_calon, $id_pemilih, $date);
            $updatepengguna = $this->bilik_m->updatepengguna($id_pemilih);

            if ($simpanvote) {
                $data = array(
                    'status' => 'berhasil',
                    'code' => 1
                );
                echo json_encode($data);
            } else {
                $data = array(
                    'status' => 'gagal',
                    'code' => 0
                );
                echo json_encode($data);
            }
        }
    }
}
