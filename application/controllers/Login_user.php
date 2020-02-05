<?php

class Login_user extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('m_login');
    }

    function index() {
        $this->load->view('template/header');
        $this->load->view('login_user');
        $this->load->view('template/footer');
    }

    function aksi_login() {
        $npm = $this->input->post('npm');
        $password = $this->input->post('password');
        $where = array(
            'int_npm' => $npm,
            'password' => sha1($password)
        );
        $cek = $this->m_login->cek_login("data_login_user", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'npm' => $npm,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("login_user/user"));
        } else {
            $this->session->set_flashdata('message_user','<div class="alert alert-danger" role="alert">
              NPM atau Password Salah</div>');
            redirect ('login_user');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('home'));
    }

    function user(){
        $data['mahasiswa'] = $this->Modeladmin->tampil_data();
        $data['datamhs'] = $this->Modeladmin->data_mhs_fetch($this->session->userdata('npm'));
        $this->load->view('template/header');
        $this->load->view('template/sidebar_user');
        $this->load->view('dashboard_user',$data);
        $this->load->view('template/footer');
    }


}
