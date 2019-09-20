<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sumberdana extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Sumberdana_model');
				if ($this->session->userdata('logged_in')==TRUE) 
		{
			// redirect('Dc_Controller/index');
		}else{	
			redirect('User/login');
		}
	}

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sumberdana/index');		
	}

	public function getDataSumberdana()
	{
		echo json_encode( $this->Sumberdana_model->getData());
	}

	public function newSumberdana()
	{
		$nama_sumberdana = $this->input->post('nama_sumberdana');
		$result = $this->Sumberdana_model->newSumberdana($nama_sumberdana);

		echo json_encode($result);
	}

	public function updateSumberdana()
	{
		$id = $this->input->post('id');
		$nama_sumberdana = $this->input->post('nama_sumberdana');
		$result = $this->Sumberdana_model->updateSumberdana($id,$nama_sumberdana);

		echo json_encode($result);
	}

	public function deleteSumberdana()
	{
		$id = $this->input->post('id');
		$result = $this->Sumberdana_model->deleteSumberdana($id);
		echo json_encode($result);
	}

}

/* End of file Sumberdana.php */
/* Location: ./application/controllers/Sumberdana.php */