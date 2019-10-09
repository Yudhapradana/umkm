<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeknologiEcommerce extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('TeknologiEcommerce_model');
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
		$this->load->view('admin/teknologiecommerce/index');
	}

	public function getDataTeknologi()
	{
		echo json_encode( $this->TeknologiEcommerce_model->getData());
	}

	public function newTeknologi()
	{
		$nama = $this->input->post('nama');
		$result = $this->TeknologiEcommerce_model->newTeknologiEcommerce($nama);

		echo json_encode($result);
	}

	public function updateTeknologi()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$result = $this->TeknologiEcommerce_model->updateTeknologiEcommerce($id,$nama);

		echo json_encode($result);
	}

	public function deleteTeknologi()
	{
		$id = $this->input->post('id');
		$result = $this->TeknologiEcommerce_model->deleteTeknologiEcommerce($id);
		echo json_encode($result);
	}

}

/* End of file TeknologiEcommerce.php */
/* Location: ./application/controllers/TeknologiEcommerce.php */