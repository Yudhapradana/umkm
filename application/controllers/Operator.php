<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Operator_Model');
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
		$this->load->view('admin/Operator/index');	
	}

	public function getData()
	{
		echo json_encode( $this->Operator_Model->getData());
	}

	public function newOperator()
	{
		$nama = $this->input->post('nama');
		$kota = $this->input->post('kota');
		$kota2 = $this->Operator_Model->findIdKota($kota);
		$kota3 = $kota2[0]['id_kab_kota']; 
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->Operator_Model->newOperator($nama,$kota3,$email,$hp,$username,$password);

		echo json_encode($result);
	}

	public function updateOperator()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$kota = $this->input->post('kota');
		$kota2 = $this->Operator_Model->findIdKota($kota);
		$kota3 = $kota2[0]['id_kab_kota']; 
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->Operator_Model->updateOperator($id,$nama,$kota3,$email,$hp,$username,$password);

		echo json_encode($result);
	}

	public function deleteOperator()
	{
		$id = $this->input->post('id');
		$result = $this->Operator_Model->deleteOperator($id);
		echo json_encode($result);
	}

}

/* End of file Operator.php */
/* Location: ./application/controllers/Operator.php */