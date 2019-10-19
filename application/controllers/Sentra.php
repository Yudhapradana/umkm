<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sentra extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Sentra_Model');
		$this->load->model('Subsektor_model');
		if ($this->session->userdata('logged_in')==TRUE) 
		{
			// redirect('Dc_Controller/index');
		}else{	
			redirect('Login');
		}
	}

	public function index()
	{
		$data['subsektor'] = $this->Subsektor_model->getData();
		$this->load->view('admin/header');
		$this->load->view('admin/sentra/index',$data);
	}

	public function getDataSentra()
	{
		echo json_encode( $this->Sentra_Model->getData());
	}

	public function newSentra()
	{
		$nama_sentra = $this->input->post('nama_sentra');
		$id_subsektor = $this->input->post('id_subsektor');
		$result = $this->Sentra_Model->newSentra($nama_sentra,$id_subsektor);

		echo json_encode($result);
	}

	public function updateSentra()
	{
		$id = $this->input->post('id');
		$id_subsektor = $this->input->post('id_subsektor');
		$nama_sentra = $this->input->post('nama_sentra');
		$result = $this->Sentra_Model->updateSentra($id,$id_subsektor,$nama_sentra);

		echo json_encode($result);
	}

	public function deleteSentra()
	{
		$id = $this->input->post('id');
		$result = $this->Sentra_Model->deleteSentra($id);
		echo json_encode($result);
	}

}

/* End of file Sentra.php */
/* Location: ./application/controllers/Sentra.php */