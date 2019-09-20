<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subsektor extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Subsektor_model');
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
		$this->load->view('admin/subsektor/index');		
	}

	public function getDataSubsektor()
	{
		echo json_encode( $this->Subsektor_model->getData());
	}

	public function newSubsektor()
	{
		$nama_subsektor = $this->input->post('nama_subsektor');
		$result = $this->Subsektor_model->newSubsektor($nama_subsektor);

		echo json_encode($result);
	}

	public function updateSubsektor()
	{
		$id = $this->input->post('id');
		$nama_subsektor = $this->input->post('nama_subsektor');
		$result = $this->Subsektor_model->updateSubsektor($id,$nama_subsektor);

		echo json_encode($result);
	}

	public function deleteSubsektor()
	{
		$id = $this->input->post('id');
		$result = $this->Subsektor_model->deleteSubsektor($id);
		echo json_encode($result);
	}

}

/* End of file Subsektor.php */
/* Location: ./application/controllers/Subsektor.php */