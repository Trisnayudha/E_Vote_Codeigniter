<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kandidat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('calon_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['row'] = $this->calon_m->get();
        $this->template->load('template', 'kandidat/data_kandidat', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('id_calon', 'Id_calon', 'required');
        $this->form_validation->set_rules('nama_calon', 'Nama_calon', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'kandidat/add_kandidat');
        } else {
            //Simpan data tb_pengguna Users
            $post = $this->input->post(null, TRUE);

            //Code Upload FOTO
            $config['upload_path']          = './foto/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = '2048';
            $config['file_name']            = 'paslon-' . date('ymd');
            $this->load->library('upload', $config);
            if ($_FILES['foto_calon']['name'] != null) {
                if ($this->upload->do_upload('foto_calon')) {
                    $post['foto_calon'] = $this->upload->data('file_name');
                    $this->calon_m->add($post);
                    if ($this->db->affected_rows() > 0) {
                        echo "<script> alert ('Data Berhasil disimpan');</script>";
                    }
                    redirect('kandidat');
                }
            }

            $this->calon_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script> alert ('Data Berhasil disimpan');</script>";
            }
            echo "<script> window.location='" . site_url('kandidat') . "'</script>";
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama_calon', 'Nama_Calon', 'required');
        if ($this->form_validation->run() == FALSE) {
            $query = $this->calon_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'kandidat/edit_kandidat', $data);
            } else {
                echo "<script> alert ('Data tidak ditemukan');";
                echo "window.location='" . site_url('kandidat') . "'</script>";
            }
        } else {
            //Simpan data tb_pengguna Users
            $post = $this->input->post(null, TRUE);
            $this->calon_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script> alert ('Data Berhasil disimpan');</script>";
            }
            echo "<script> window.location='" . site_url('kandidat') . "'</script>";
        }
    }

    public function del()
    {
        //                       name di data_kandidat.php
        $id = $this->input->post('delete');
        $this->calon_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil di hapus');</script>";
        }
        echo "<script>window.location='" . site_url('kandidat') . "';</script>";
    }
}
