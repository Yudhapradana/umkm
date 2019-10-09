<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatusPemilik extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('StatusPemilik_model');
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
		$this->load->view('admin/statuspemilik/index');
	}

	public function getDataStatusPemilik()
	{
		echo json_encode( $this->StatusPemilik_model->getData());
	}

	public function newStatusPemilik()
	{
		$nama = $this->input->post('nama');
		$result = $this->StatusPemilik_model->newStatusPemilik($nama);

		echo json_encode($result);
	}

	public function updateStatusPemilik()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$result = $this->StatusPemilik_model->updateStatusPemilik($id,$nama);

		echo json_encode($result);
	}

	public function deleteStatusPemilik()
	{
		$id = $this->input->post('id');
		$result = $this->StatusPemilik_model->deleteStatusPemilik($id);
		echo json_encode($result);
	}

}

/* End of file StatusPemilik.php */
/* Location: ./application/controllers/StatusPemilik.php */