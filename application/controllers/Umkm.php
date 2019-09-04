<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umkm extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Umkm_model');
	}

	public function index()
	{
		$this->load->view('admin/umkm/index');
	}

	public function getData()
	{
		echo json_encode( $this->Umkm_model->getData());
	}

	public function formInput()
	{
		$this->load->view('admin/umkm/forminput');
	}

}

/* End of file Umkm.php */
/* Location: ./application/controllers/Umkm.php */