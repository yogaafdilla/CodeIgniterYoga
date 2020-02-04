<?php

class M_Login extends CI_Model {

    function cek_login($table, $where) {
        return $this->db->get_where($table, $where);
    }

    function tambah($table, $data) {
        $this->db->insert($table, $data);
    }

    // public function getDataAdmin($username) {
    //     return $this->db->query('SELECT nama FROM admin WHERE username = ' . $username)->result();
    // }

}
