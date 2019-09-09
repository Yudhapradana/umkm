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
		$new_name = date("Y-m-d-H-i-s");
		$config['upload_path']="./assets/uploads"; //path folder file upload
		$config['allowed_types']='gif|jpg|png|jpeg'; //type file yang boleh di upload
		$config['file_name'] = $new_name;  //set name


		$this->load->library('upload', $config); //call library upload

		if ($this->upload->do_upload("file")){ //upload file
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload

			// $nama = $this->input->post('nama'); //get nama
			// $tag = $this->input->post('tag'); //get tag 
			$nama_umkm = $this->input->post('nama');
			$nama_subsektor = $this->input->post('subsektor');
			$status_pemilik = $this->input->post('status');
			$upah_tenaga_kerja = $this->input->post('upah');
			$nama_sumberdana = $this->input->post('sumberdana');
			$teknologi = $this->input->post('teknologi');
			$distribusi = $this->input->post('distribusi');
			$permasalahan = $this->input->post('permasalahan');
			$ekspor = $this->input->post('ekspor');
			$peluang_tantangan = $this->input->post('peluang');
			$kelembagaan = $this->input->post('kelembagaan');
			$alamat = $this->input->post('alamat');
			$provinsi = $this->input->post('provinsi');
			$kota = $this->input->post('kota');
			$kecamatan = $this->input->post('kecamatan');
			// mendapatkan ekstensi file
            $path = $_FILES['file']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
			$gambar =  "uploads/".$new_name.".".$ext;  //set file name ke variable image 

			$this->Umkm_model->newUmkm($nama_umkm,$nama_subsektor,$status_pemilik,$upah_tenaga_kerja,$nama_sumberdana,$teknologi,$distribusi,$permasalahan,$ekspor,$peluang_tantangan,$kelembagaan,$alamat,$provinsi,$kota,$kecamatan,$gambar); //kirim value ke model user_model	
		}
	}

}

/* End of file FormUmkm.php */
/* Location: ./application/controllers/FormUmkm.php */