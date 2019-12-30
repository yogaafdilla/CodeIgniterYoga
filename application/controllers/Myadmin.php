<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myadmin extends CI_Controller {

	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->database();
		$this->load->model('Modeladmin');
	}

	public function index()
	{
		$data['mahasiswa'] = $this->Modeladmin->tampil_data();
		$data['mahasiswa1'] = $this->Modeladmin->tampil_data();
		$data ['title'] = "Yoga Afdilla Jamaluddin | Sekolah Tinggi Teknologi Bandung";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');
	}

	public function tambahdata(){
		$data['title'] = "Tambah Data | Sekolah Tinggi Teknologi Bandung";
		$data['mahasiswa'] = $this->Modeladmin->tampil_data();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('dashboard');
		$this->load->view('template/footer');
	}

	function aksi_tambah_data(){
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$semester = $this->input->post('semester');
		$gambar = $_FILES['gambar']['name'];
		if ($gambar =''){
		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal Di Upload!";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array ( 'int_npm' => $npm , 'str_nama'=> $nama , 'int_semester' =>
		$semester, 'gambar' => $gambar );

		$this->Modeladmin->tambah_data($data,'data_mahasiswa');
		redirect('Myadmin/index');
	}

	public function detail($id){
		$where = array('id'=>$id);
		$data['mahasiswa'] = $this->Modeladmin->tampil_data($where,'data_mahasiswa');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('detail_mahasiswa', $data);
		$this->load->view('template/footer');
	}

	public function edit($id)
	{
		$where = array('id'=>$id);
		$data['mahasiswa'] = $this->Modeladmin->edit_mahasiswa($where,'data_mahasiswa')->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('edit_mahasiswa', $data);
		$this->load->view('template/footer');

	}

	public function update(){ 
		$id = $this->input->post('id');
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$semester = $this->input->post('semester');
		$gambar = $_FILES['gambar']['name'];
		if ($gambar =''){
		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal Di Upload!";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array(
			'int_npm' => $npm,
			'str_nama' => $nama,
			'int_semester' => $semester,
			'gambar' => $gambar
		);

		$where = array(
			'id' => $id
		);

		$this->Modeladmin->update_data($where,$data,'data_mahasiswa');
		redirect('Myadmin/index');
	}

	public function hapus($id){
		$where = array('id' => $id);
		$this->Modeladmin->hapus_data($where, 'data_mahasiswa');

		redirect('Myadmin/index');
	}

	function hapus_mhs($id){
		$kode_mhs=$this->input->post('kode_mhs');
		$this->Modeladmin->hapus_mhs($kode_mhs);
		redirect('Myadmin');
	}

}
