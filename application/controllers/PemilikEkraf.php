<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemilikEkraf extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('PemilikEkraf_Model');
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

	public function getData()
	{
		echo json_encode( $this->PemilikEkraf_Model->getData());
	}

	public function newPemilikEkraf()
	{
		$nama = $this->input->post('nama');
		$ekraf = $this->input->post('ekraf');
		$ekraf2 = $this->PemilikEkraf_Model->findIdekraf($ekraf);
		$ekraf3 = $ekraf2[0]['id_ekraf']; 
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->PemilikEkraf_Model->newPemilikEkraf($nama,$ekraf3,$email,$hp,$username,$password);

		echo json_encode($result);
	}

	public function updatePemilikEkraf()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$ekraf = $this->input->post('ekraf');
		$ekraf2 = $this->PemilikEkraf_Model->findIdekraf($ekraf);
		$ekraf3 = $ekraf2[0]['id_ekraf']; 
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->PemilikEkraf_Model->updatePemilikEkraf($id,$nama,$ekraf3,$email,$hp,$username,$password);

		echo json_encode($result);
	}

	public function deletePemilikEkraf()
	{
		$id = $this->input->post('id');
		$result = $this->PemilikEkraf_Model->deletePemilikEkraf($id);
		echo json_encode($result);
	}

}

/* End of file PemilikEkraf.php */
/* Location: ./application/controllers/PemilikEkraf.php */