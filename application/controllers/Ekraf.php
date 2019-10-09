<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekraf extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('StatusPemilik_Model');
		$this->load->model('Sumberdana_model');
		$this->load->model('Sentra_model');
		$this->load->model('Ekraf_Model');
		if ($this->session->userdata('logged_in')==TRUE) 
		{

		}else{	
			redirect('Login');
		}
	}

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/ekraf/index');
	}

	public function formInput()
	{
		$data['sentra'] = $this->Sentra_model->getList();
		$data['status'] = $this->StatusPemilik_Model->getData();
		$data['sumberdana'] = $this->Sumberdana_model->getData();
		$data['desa'] = $this->Ekraf_Model->getListDesa();
		$this->load->view('admin/header');
		$this->load->view('admin/ekraf/formInput',$data);
	}

	public function getData()
	{
		echo json_encode( $this->Ekraf_Model->getData());
	}

	public function newEkraf()
	{
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$desa = $this->input->post('desa');
			$desa2 = $this->Ekraf_Model->findIdDesa($desa);
			$desa3=$desa2[0]['id_desa_kelurahan']; 
			$sentra = $this->input->post('sentra');
			$status = $this->input->post('status');
			$jk = $this->input->post('jk');
			$upah = $this->input->post('upah');
			$sumberdana = $this->input->post('sumberdana');
			$distribusi = $this->input->post('distribusi');
			$permasalahan = $this->input->post('permasalahan');
			$ekspor = $this->input->post('ekspor');
			$peluang = $this->input->post('peluang');
			$perijinan = $this->input->post('perijinan');
			$merk = $this->input->post('merk');
			$no_merk = $this->input->post('no_merk');
			$tgl = $this->input->post('tgl');

			$this->Ekraf_Model->newEkraf($nama,$alamat,$desa3,$sentra,$status,$jk,$upah,$sumberdana,$distribusi,$permasalahan,$ekspor,$peluang,$perijinan,$merk,$no_merk,$tgl);
	}

}

/* End of file Ekraf.php */
/* Location: ./application/controllers/Ekraf.php */