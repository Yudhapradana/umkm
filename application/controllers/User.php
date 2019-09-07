<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Umkm_model');
	}

	public function index()
	{
		$data['barang']=$this->Umkm_model->getData();
		$this->load->view('user/index',$data);
	}

}