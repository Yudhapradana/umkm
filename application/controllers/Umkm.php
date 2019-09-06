<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umkm extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Subsektor_model');
		$this->load->model('Sumberdana_model');
		$this->load->model('Umkm_model');
	}

	public function index()
	{
		$data['provinsi'] = $this->Umkm_model->get_provinsi();
		$data['kota'] = $this->Umkm_model->get_kota();
		$data['subsektor'] = $this->Subsektor_model->getData();
		$data['sumberdana'] = $this->Sumberdana_model->getData();

		// print_r($data['subsektor']);die();
		$this->load->view('admin/header');
		$this->load->view('admin/umkm/index',$data);
	}

	public function getData()
	{
		echo json_encode( $this->Umkm_model->getData());
	}

	public function getDataId($id)
	{
		$id = $this->input->post('id');
		echo json_encode( $this->Umkm_model->getData($id));
	}

	public function updateUmkm()
	{
		$id = $this->input->post('id');
		$nama_umkm = $this->input->post('nama_umkm');
		$nama_subsektor = $this->input->post('nama_subsektor');
		$status_pemilik = $this->input->post('status_pemilik');
		$upah_tenaga_kerja = $this->input->post('upah_tenaga_kerja');
		$nama_sumberdana = $this->input->post('nama_sumberdana');
		$teknologi = $this->input->post('teknologi');
		$distribusi = $this->input->post('distribusi');
		$permasalahan = $this->input->post('permasalahan');
		$ekspor = $this->input->post('ekspor');
		$peluang_tantangan = $this->input->post('peluang_tantangan');
		$kelembagaan = $this->input->post('kelembagaan');
		$alamat = $this->input->post('alamat');
		$provinsi = $this->input->post('provinsi');
		// $getnameprovinsi = $this->Umkm_model->get_provinsivalue($provinsi);
		// $getnameprovinsi2 = $getnameprovinsi[0]['nama'];
		$kota = $this->input->post('kota');
		$kecamatan = $this->input->post('kecamatan');
		$result = $this->Umkm_model->updateUmkm($id,$nama_umkm,$nama_subsektor,$status_pemilik,$upah_tenaga_kerja,$nama_sumberdana,$teknologi,$distribusi,$permasalahan,$ekspor,$peluang_tantangan,$kelembagaan,$alamat,$provinsi,$kota,$kecamatan);

		echo json_encode($result);
	}

	public function deleteUmkm()
	{
		$id = $this->input->post('id');
		$result = $this->Umkm_model->deleteUmkm($id);
		echo json_encode($result);
	}
}

/* End of file Umkm.php */
/* Location: ./application/controllers/Umkm.php */