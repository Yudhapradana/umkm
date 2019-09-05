<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormUmkm extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Umkm_model');
		$this->load->model('Subsektor_model');
		$this->load->model('Sumberdana_model');
	}

	public function index()
	{
		$data['provinsi'] = $this->Umkm_model->get_provinsi();
		$data['kota'] = $this->Umkm_model->get_kota();
		$data['subsektor'] = $this->Subsektor_model->getData();
		$data['sumberdana'] = $this->Sumberdana_model->getData();
			$this->load->view('admin/header');
		$this->load->view('admin/umkm/forminput',$data);
	}

	public function select_kota()
	{
		$data['kota'] = $this->Umkm_model->get_kota();

		$this->load->view('admin/umkm/select_kota',$data);
	}

	public function select_provinsi()
	{
		$data['provinsi'] = $this->Umkm_model->get_provinsi();

		$this->load->view('admin/umkm/select_provinsi',$data);
	}

	public function newUmkm()
	{
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
		$getnameprovinsi = $this->Umkm_model->get_provinsivalue($provinsi);
		$getnameprovinsi2 = $getnameprovinsi[0]['nama'];
		$kota = $this->input->post('kota');
		$kecamatan = $this->input->post('kecamatan');
		$result = $this->Umkm_model->newUmkm($nama_umkm,$nama_subsektor,$status_pemilik,$upah_tenaga_kerja,$nama_sumberdana,$teknologi,$distribusi,$permasalahan,$ekspor,$peluang_tantangan,$kelembagaan,$alamat,$getnameprovinsi2,$kota,$kecamatan);

		echo json_encode($result);
	}

}

/* End of file FormUmkm.php */
/* Location: ./application/controllers/FormUmkm.php */