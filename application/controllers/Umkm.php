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
		$provinsi = $this->input->post('slct_provinsi');
		$kota = $this->input->post('kota');
		$kecamatan = $this->input->post('kecamatan');
		$new_name = date("Y-m-d-H-i-s");
		$fotolama = $this->input->post('fotolama');

		// print_r($id);
		// die();
		$config['upload_path']="./assets/uploads"; //path folder file upload
		$config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
		$config['file_name'] = $new_name;  //set name

		$this->load->library('upload', $config); //call library upload
		if ($this->upload->do_upload("file")){ //upload file
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload

			// mendapatkan ekstensi file
            $path = $_FILES['file']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
			$gambar =  "uploads/".$new_name.".".$ext;  //set file name ke variable image 

			$data = $this->Umkm_model->updateUmkm($id,$nama_umkm,$nama_subsektor,$status_pemilik,$upah_tenaga_kerja,$nama_sumberdana,$teknologi,$distribusi,$permasalahan,$ekspor,$peluang_tantangan,$kelembagaan,$alamat,$provinsi,$kota,$kecamatan,$gambar); //kirim value ke model user_model	
			if ($data) {
				unlink('./assets/uploads/'.$fotolama);
				echo json_encode('sukses');
			}else{
				echo json_encode('gagalupload');
			}
		}else{
			$this->Umkm_model->updateUmkm($id,$nama_umkm,$nama_subsektor,$status_pemilik,$upah_tenaga_kerja,$nama_sumberdana,$teknologi,$distribusi,$permasalahan,$ekspor,$peluang_tantangan,$kelembagaan,$alamat,$provinsi,$kota,$kecamatan,$fotolama); //
			echo json_encode('sukses');
		}
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