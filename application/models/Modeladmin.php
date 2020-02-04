<?php

class Modeladmin extends CI_model {

    function tambah_data($data, $table) {
        $this->db->insert($table, $data);
    }

    function tampil_data() {
        return $this->db->get('data_mahasiswa')->result();
    }

    public function tambah_mahasiswa($data, $table) {
        $this->db->insert($table, $data);
    }

    public function edit_mahasiswa($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function hapus_mhs($kode_mhs) {
        $hasil = $this->db->query("DELETE FROM data_mahasiswa WHERE id='" . $id . "'")->result_array();
        return $hasil;
    }

    public function data_mhs_fetch($npm)    {
        return $this->db->query("SELECT * FROM data_mahasiswa WHERE int_npm = '" . $npm . "'")->result_array();
    }

}

?>