<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilih extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('pemilih_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['pemilih'] = $this->pemilih_m->pemilih();
        $this->template->load('template', 'pemilih/data_pemilih', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[tb_pengguna.email]');
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'pemilih/add_pemilih');
        } else {
            //Simpan data tb_pengguna Users
            $post = $this->input->post(null, TRUE);
            $this->pemilih_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script> alert ('Data Berhasil disimpan');</script>";
            }
            echo "<script> window.location='" . site_url('pemilih') . "'</script>";
        }
    }

    public function edit($id)
    {

        // $this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');
        // if ($this->input->post('password')) {
        $this->form_validation->set_rules('password', 'Password', 'required[tb_pengguna.password]');
        // }
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[tb_pengguna.email]');
        if ($this->form_validation->run() == FALSE) {
            $query = $this->pemilih_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'pemilih/edit_pemilih', $data);
            } else {
                echo "<script> alert ('Data tidak ditemukan');";
                echo "window.location='" . site_url('pemilih') . "'</script>";
            }
        } else {
            //Simpan data tb_pengguna Users
            $post = $this->input->post(null, TRUE);
            $this->pemilih_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script> alert ('Data Berhasil disimpan');</script>";
            }
            echo "<script> window.location='" . site_url('pemilih') . "'</script>";
        }
    }
    public function del()
    {
        //                       name di data_pengguna.php
        $id = $this->input->post('delete');
        $this->pemilih_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil di hapus');</script>";
        }
        echo "<script>window.location='" . site_url('pemilih') . "';</script>";
    }

    public function username_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM tb_pengguna WHERE username = '$post[username]' AND id_pengguna != '$post[id_pengguna]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti');
            return false;
        }
        return true;
    }
}
