<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('m_login');
    }

    function index() {
        $this->load->view('template/header');
        $this->load->view('registrasi');
        $this->load->view('template/footer');
    }

    // function register() {
    //     $username = $this->input->post('username');
    //     $password = $this->input->post('password');
    //     $data = array(
    //         'username' => $username,
    //         'password' => sha1($password));
    //     // 'level' => '1');
    //     $this->m_login->tambah('data_login', $data);
    //     redirect('login');
    // }

    function daftar() { 
        $npm = $this->input->post("npm");
        $pass1 = $this->input->post("password1");
        $pass2 = $this->input->post("password2");

        $data = array(
            'int_npm' => $npm,
            'password' => sha1($pass2)
        );
        $where = array('int_npm' => $npm);
        $cek = $this->m_login->cek_login('data_mahasiswa', $where)->num_rows();
        if ($pass1 == $pass2) {
            if ($cek > 0) {
                $this->m_login->tambah('data_login_user', $data);
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
                  Akun Berhasil Dibuat</div>');
                redirect("Register");
            } else {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                    Daftar Gagal karena NPM tidak ditemukan</div>');
                redirect('Register');
            }
        } else {
            $this->session->set_flashdata('message','<div class="alert alert-warning" role="alert">
              Password Tidak Sama</div>');
            redirect('Register');
        }
    }

}