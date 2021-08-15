<?php


//fungsi untuk user jika sudah login jadi tidak bisa akses/login kembali sebelum klik logout
function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('idpengguna');
    if ($user_session) {
        redirect('dashboard');
    }
}

//fungsi untuk user agar dipaksa untuk login jika belum login.
function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('idpengguna');
    if (!$user_session) {
        redirect('auth');
    }
}


//Keamanan URL
function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->level != "Administrator") {
        redirect('dashboard');
    }
}

function check_admin_petugas()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->level == "Pemilih") {
        redirect('dashboard');
    }
}

function check_pemilih()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->level != "Pemilih") {
        redirect('dashboard');
    }
}
