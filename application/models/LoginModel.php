<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function login($username, $password){
		$query= $this->db->query("select *  from user where username='".$username."' and password = '".$password."'");
	    return $query->result();
	}
	

}

/* End of file LoginModel.php */
/* Location: ./application/models/LoginModel.php */