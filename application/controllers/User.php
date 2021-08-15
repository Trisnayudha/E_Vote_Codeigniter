<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['panitia'] = $this->user_m->panitia();
        $this->template->load('template', 'users/data_pengguna', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[tb_pengguna.email]');
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'users/add_pengguna');
        } else {
            //Simpan data tb_pengguna Users
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script> alert ('Data Berhasil disimpan');</script>";
            }
            echo "<script> window.location='" . site_url('user') . "'</script>";
        }
    }

    public function del()
    {
        //                       name di data_pengguna.php
        $id = $this->input->post('delete');
        $this->user_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil di hapus');</script>";
        }
        echo "<script>window.location='" . site_url('user') . "';</script>";
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama_pengguna', 'Nama_pengguna', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[tb_pengguna.email]');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        if ($this->form_validation->run() == FALSE) {
            $query = $this->user_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'users/edit_pengguna', $data);
            } else {
                echo "<script> alert ('Data tidak ditemukan');";
                echo "window.location='" . site_url('user') . "'</script>";
            }
        } else {
            //Simpan data tb_pengguna Users
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script> alert ('Data Berhasil disimpan');</script>";
            }
            echo "<script> window.location='" . site_url('user') . "'</script>";
        }
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
