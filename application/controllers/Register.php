<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('template/header');
		$this->load->view('registrasi');
		$this->load->view('template/footer');
	}

	function register(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username,
			'password' => sha1($password));
			// 'level' => '1');
		$this->m_login->tambah('data_login', $data);
		redirect('login');
	}


}
