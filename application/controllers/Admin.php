<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		$data['mahasiswa'] = $this->Modeladmin->tampil_data();
		$data ['title'] = "Yoga Afdilla Jamaluddin | Sekolah Tinggi Teknologi Bandung";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('dashboard', $data);
        // $this->load->view('datatabel');
		$this->load->view('template/footer');
	}

	function aksi_tambah_data() {
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$prodi = $this->input->post('prodi');
		$kelas = $this->input->post('kelas');
		$semester = $this->input->post('semester');
		$gambar = $_FILES['gambar']['name'];
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Data Berhasil Ditambahkan</div>');
		if ($gambar = '') {

		} else {
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar Gagal Di Upload!";
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array('int_npm' => $npm, 'str_nama' => $nama, 'str_prodi' => $prodi, 'str_kelas' => $kelas, 'int_semester' =>
			$semester, 'gambar' => $gambar);

		$this->Modeladmin->tambah_data($data, 'data_mahasiswa');
		redirect('Login/admin');
	}

	public function detail($id) {
		$where = array('id' => $id);
		$data['mahasiswa'] = $this->Modeladmin->tampil_data($where, 'data_mahasiswa');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('detail_mahasiswa', $data);
		$this->load->view('template/footer');
	}

	public function edit($id) {
		$where = array('id' => $id);
		$data['mahasiswa'] = $this->Modeladmin->edit_mahasiswa($where, 'data_mahasiswa')->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('edit_mahasiswa', $data);
		$this->load->view('template/footer');
	}

	public function update() {
		$id = $this->input->post('id');
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$prodi = $this->input->post('prodi');
		$kelas = $this->input->post('kelas');
		$semester = $this->input->post('semester');
		$this->session->set_flashdata('message','<div class="alert alert-primary" role="alert">
			Data Mahasiswa Berhasil Diubah</div>');
		$gambar = $_FILES['gambar']['name'];
		if ($gambar = '') {

		} else {
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar Gagal Di Upload!";
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array(
			'int_npm' => $npm,
			'str_nama' => $nama,
			'str_prodi' => $prodi,
			'str_kelas' => $kelas,
			'int_semester' => $semester,
			'gambar' => $gambar
		);

		$where = array(
			'id' => $id
		);

		$this->Modeladmin->update_data($where, $data, 'data_mahasiswa');
		redirect('Login/admin');
	}

	public function hapus($id) {
		$where = array('id' => $id);
		$this->session->set_flashdata('message_hapus','<div class="alert alert-danger" role="alert">
			Data Mahasiswa Berhasil Dihapus</div>');
		$this->Modeladmin->hapus_data($where, 'data_mahasiswa');

		redirect('Login/admin');
	}

	// function hapus_mhs($id) {
	// 	$kode_mhs = $this->input->post('kode_mhs');
	// 	$this->Modeladmin->hapus_mhs($kode_mhs);
	// 	redirect('Myadmin');
	// }
}
