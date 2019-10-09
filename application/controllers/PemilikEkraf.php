<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemilikEkraf extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('PemilikEkraf_model');
				if ($this->session->userdata('logged_in')==TRUE) 
		{
			// redirect('Dc_Controller/index');
		}else{	
			redirect('Login');
		}
	}

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/pemilikekraf/index');	
	}

}

/* End of file PemilikEkraf.php */
/* Location: ./application/controllers/PemilikEkraf.php */