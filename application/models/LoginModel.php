<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function login($username, $password){
		$query= $this->db->query("select *  from user where username='".$username."' and password = '".$password."'");
	    return $query->result();
	}

	public function addAkun(){
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$telepon=$this->input->post('telepon');
		$username=$this->input->post('username');
		$password=$this->input->post('password');


		$data = array(
            'nama'                  =>$nama,
            'email'                =>$email,
            'no_hp'     =>$telepon,
            'username'             =>$username,
            'password'     =>$password,
            
        );

        $this->db->insert('user', $data);
	}
	

}

/* End of file LoginModel.php */
/* Location: ./application/models/LoginModel.php */