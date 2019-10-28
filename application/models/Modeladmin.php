<?php


class Modeladmin extends CI_model{

	function tambah_data($data,$table){
		$this->db->insert($data,$table);
			
	}
}

?>