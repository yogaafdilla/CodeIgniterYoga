<?php


class Modeladmin extends CI_model{

	function tambah_data($data,$table){
		$this->db->insert($table,$data);
			
	}
	function tampil_data(){
		return $this->db->get('data_mahasiswa')->result();
		// $this->db->query("SELECT * FROM data_mahasiswa");
		// return;
	}
}

?>