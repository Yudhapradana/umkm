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
		$this->load->model('TeknologiEcommerce_Model');
		if ($this->session->userdata('logged_in')==TRUE) 
		{

		}else{	
			redirect('Login');
		}
	}

	public function index()
	{
		$data['sentra'] = $this->Sentra_model->getList();
		$data['status'] = $this->StatusPemilik_Model->getData();
		$data['sumberdana'] = $this->Sumberdana_model->getData();
		$data['desa'] = $this->Ekraf_Model->getListDesa();
		$this->load->view('admin/header');
		$this->load->view('admin/ekraf/index',$data);
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
			$upah = str_replace("Rp", "", $upah);
			$upah = str_replace(".", "", $upah);
			$upah = str_replace(" ", "", $upah);
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

	public function updateEkraf()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$desa = $this->input->post('desa');
			$desa2 = $this->Ekraf_Model->findIdDesa($desa);
			$desa3 = $desa2[0]['id_desa_kelurahan']; 
			$sentra = $this->input->post('sentra');
			$status = $this->input->post('status');
			$jk = $this->input->post('jk');
			$upah = $this->input->post('upah');
			$upah = str_replace("Rp", "", $upah);
			$upah = str_replace(".", "", $upah);
			$upah = str_replace(" ", "", $upah);
			$sumberdana = $this->input->post('sumberdana');
			$distribusi = $this->input->post('distribusi');
			$permasalahan = $this->input->post('permasalahan');
			$ekspor = $this->input->post('ekspor');
			$peluang = $this->input->post('peluang');
			$perijinan = $this->input->post('perijinan');
			$merk = $this->input->post('merk');
			$no_merk = $this->input->post('no_merk');
			$tgl = $this->input->post('tgl');

			$this->Ekraf_Model->updateEkraf($id,$nama,$alamat,$desa3,$sentra,$status,$jk,$upah,$sumberdana,$distribusi,$permasalahan,$ekspor,$peluang,$perijinan,$merk,$no_merk,$tgl);
	}

	public function deleteEkraf()
	{
		$id = $this->input->post('id');
		$result = $this->Ekraf_Model->deleteEkraf($id);
		echo json_encode($result);
	}

	public function teknologi()
	{
		$data['teknologi'] = $this->TeknologiEcommerce_Model->getData();
		$data['ekraf'] = $this->Ekraf_Model->getData();
		$this->load->view('admin/header');
		$this->load->view('admin/teknologi/index',$data);
	}

	public function getDataTeknologiEkraf()
	{
		echo json_encode( $this->Ekraf_Model->getDataTeknologiEkraf());
	}

	public function newTeknologiEkraf()
	{
		$ekraf = $this->Ekraf_Model->findIdEkraf($this->input->post('nama'));
		$nama = $ekraf[0]['id_ekraf'];
		$id_teknologi = $this->input->post('id_teknologi');
		$result = $this->Ekraf_Model->newTeknologiEkraf($nama,$id_teknologi);

		echo json_encode($result);
	}

	public function updateEkrafTeknologi()
	{
		$id = $this->input->post('id');
		$ekraf = $this->Ekraf_Model->findIdEkraf($this->input->post('nama'));
		$nama = $ekraf[0]['id_ekraf'];
		$id_teknologi = $this->input->post('id_teknologi');
		$result = $this->Ekraf_Model->updateTeknologiEkraf($id,$nama,$id_teknologi);

		echo json_encode($result);
	}

	public function deleteEkrafTeknologi()
	{
		$id = $this->input->post('id');
		$result = $this->Ekraf_Model->deleteEkrafTeknologi($id);
		echo json_encode($result);
	}

	public function galeri()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/galeri/index');
	}

	public function getEkraf()
	{
		echo json_encode( $this->Ekraf_Model->getEkraf());
	}

	public function listGaleri($id)
	{
		$this->load->view('admin/header');
		$this->load->view('admin/galeri/list');
	}

	public function getListGaleri($id)
	{
		echo json_encode( $this->Ekraf_Model->getListGaleri($id));
	}

	public function newGaleri($id)
	{
		$new_name = date("Y-m-d-H-i-s");	
		$config['upload_path']="./assets/uploads"; //path folder file upload
        $config['allowed_types']='gif|jpg|png|jpeg'; //type file yang boleh di upload
        $config['file_name'] = $new_name;  //set name
         
        $this->load->library('upload',$config); //call library upload 
        
        if($this->upload->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            
            $judul= $this->input->post('judul'); //get judul image
            // $image= $data['upload_data']['file_name']; //set file name ke variable image
            $path = $_FILES['file']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
			$source =  "uploads/".$new_name.".".$ext;  //set file name ke variable image 
            
            $this->Ekraf_Model->newGaleri($id,$judul,$source); //kirim value ke model m_upload
        }
	}

	public function updateGaleri()
	{
		$id = $this->input->post('id_u');
		$judul = $this->input->post('upjudul');
		$fotolama = $this->input->post('fotolama');
		$new_name = date("Y-m-d-H-i-s");	
		$config['upload_path']="./assets/uploads"; //path folder file upload
        $config['allowed_types']='gif|jpg|png|jpeg'; //type file yang boleh di upload
        $config['file_name'] = $new_name;  //set name
         
        $this->load->library('upload',$config); //call library upload 
        
        if($this->upload->do_upload("file2")){ //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            
            $path = $_FILES['file2']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
			$source =  "uploads/".$new_name.".".$ext;  //set file name ke variable image 
            
            $data=$this->Ekraf_Model->updateGaleri($id,$judul,$source); //kirim value ke model m_upload
            if ($data) {
				unlink('./assets/'.$fotolama);
				echo json_encode('sukses');
			}else{
				echo json_encode('gagalupload');
			}
        }else{
			$this->Ekraf_Model->updateGaleri($id,$judul,$fotolama);
			echo json_encode('sukses');
		}
	}

	public function deleteGaleri()
	{
		$id = $this->input->post('id');
		$result = $this->Ekraf_Model->deleteGaleri($id);
		echo json_encode($result);
	}

	public function getGekraf($id)
	{
		$gekraf=$this->Ekraf_Model->getGekraf($id);
		$gekraf2=$gekraf[0]['nama'];
		echo $gekraf2;
	}

}

/* End of file Ekraf.php */
/* Location: ./application/controllers/Ekraf.php */