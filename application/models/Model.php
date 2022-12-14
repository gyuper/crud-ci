<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model extends CI_Model{
    public function simpan($tabel, $data){
        return $this->db->insert($tabel, $data);
    }
    public function hapus($tabel, $where){
        return $this->db->delete($tabel, $where);
    }
    public function update($tabel, $data, $where){
        return $this->db->iupdate($tabel, $data, $where);
    }
    public function getuser($where = ''){
        return $this->db->query('SELECT * FROM user');
    }
}