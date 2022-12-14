<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller{
    public function index(){
        $this->load->view('auth/login');
    }
    public function register(){
        $this->load->view('auth/register');
    }
    public function reg_action(){
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $repassword = $this->input->post('repassword');
        
        if ($password != $repassword) {
            echo "Password Tidak Sama";
        }
        else{
            $data = array(
                'nama_lengkap' => $nama_lengkap,
                'username' => $username,
                'password' => $password,
            );
            $result = $this->model->simpan('user, $data');
            if($result>0){
                echo "Data User Berhasil Disimpan";
            }
            else{
                echo "Data User Gagal Disimpan";
            }
        }
    }
}