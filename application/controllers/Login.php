<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login  extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function cekLogin(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username', 'trim|required');
		$this->form_validation->set_rules('password','password', 'trim|required|callback_cekDb');
        //$this->form_validation->set_rules('password','password', 'trim|required');

		if($this->form_validation->run()== false){
			$this->load->view('login');
		}else{
			$session_data=$this->session->userdata('logged_in');
			redirect('Ekraf','refresh');
		}
	}

	public function cekDb($password)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$username = $this->input->post('username');
		$password2=($this->input->post('password'));
		$result = $this->LoginModel->login($username, $password2);
		// print_r($result);
		// die();
		if($result){
			$sess_array = array();

			foreach ($result as $row){
				$sess_array = array(
					'username'=>$row->username,
					'password'=>$row->password,
					// 'nama'=>$row->nama,
					// 'role'=>$row->role,
				);
				$this->session->set_userdata('logged_in',$sess_array);
			}

			return true;
		}else{
			$this->session->set_flashdata('gglLogin','<div class="alert alert-danger" role="alert">LOGIN GAGAL <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

			return false;
		}
	}

}

/* End of file  .php */
/* Location: ./application/controllers/ .php */