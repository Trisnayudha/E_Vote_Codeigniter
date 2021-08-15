<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        check_already_login();
        $this->load->view('login');
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['btnLogin'])) {
            $this->load->model('auth_m');
            $query = $this->auth_m->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'idpengguna' => $row->id_pengguna,
                    'namapengguna' => $row->nama_pengguna,
                    'username' => $row->username,
                    'status' => $row->status,
                    'jenis' => $row->jenis,
                    'email' => $row->email,
                    'telepon' => $row->telepon,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                echo "<script>
                alert('Selamat anda berhasil login');
                window.location='" . site_url('dashboard') . "';
                </script>";
            } else {
                echo "<script>
                alert('Username atau Password salah');
                window.location='" . site_url('auth') . "';
                </script>";
            }
        }
    }
    public function logout()
    {
        $params = array('idpengguna', 'level');
        $this->session->unset_userdata($params);
        redirect('auth');
    }
}
