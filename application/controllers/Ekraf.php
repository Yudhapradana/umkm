<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekraf extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('StatusPemilik_Model');
		$this->load->model('Sumberdana_model');
		$this->load->model('Sentra_Model');
		$this->load->model('Ekraf_Model');
		$this->load->model('LoginModel');
		       $this->load->library('Excel','upload');
		$this->load->model('TeknologiEcommerce_Model');
		if ($this->session->userdata('logged_in')==TRUE) 
		{

		}else{	
			redirect('Login');
		}
	}

	public function index()
	{
		$data['sentra'] = $this->Sentra_Model->getList();
		$data['status'] = $this->StatusPemilik_Model->getData();
		$data['sumberdana'] = $this->Sumberdana_model->getData();
		$data['desa'] = $this->Ekraf_Model->getListDesa();
		$this->load->view('admin/header');
		$this->load->view('admin/ekraf/index',$data);
	}

	public function formInput()
	{
		$data['sentra'] = $this->Sentra_Model->getList();
		$data['status'] = $this->StatusPemilik_Model->getData();
		$data['sumberdana'] = $this->Sumberdana_model->getData();
		$data['desa'] = $this->Ekraf_Model->getListDesa();
		$this->load->view('admin/header');
		$this->load->view('admin/ekraf/forminput',$data);
	}

	public function getData()
	{
		echo json_encode( $this->Ekraf_Model->getData());
	}

	public function newEkraf()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$desa = explode('-', $this->input->post('desa'));
		$de = $desa[0];
		$ke = $desa[1];
		$desa2 = $this->Ekraf_Model->findIdDesa($de,$ke);
		// print_r($desa2);
		// die();
		$desa3=$desa2[0]['id'];
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
		$tahun = $this->input->post('tahun');
		$omzet = $this->input->post('omzet');
		$omzet = str_replace("Rp", "", $omzet);
		$omzet = str_replace(".", "", $omzet);
		$omzet = str_replace(" ", "", $omzet);
		$pencatatan_keuangan = $this->input->post('pencatatan_keuangan');
		$laporan_terpisah = $this->input->post('laporan_terpisah');
		$neraca = $this->input->post('neraca');
		$laba_rugi = $this->input->post('laba_rugi');
		$buku_kas = $this->input->post('buku_kas');
		$laporan_keuangan = $this->input->post('laporan_keuangan');
		$pameran_kab = $this->input->post('pameran_kab');
		$pameran_prov = $this->input->post('pameran_prov');
		$pameran_nasional = $this->input->post('pameran_nasional');
		$pameran_internasional = $this->input->post('pameran_internasional');
		$wilayah = $this->input->post('wilayah');
		$wilayah2 = implode(";", $wilayah);
		$legalitas = $this->input->post('legalitas');
		$legalitas2 = implode(";", $legalitas);

		$this->Ekraf_Model->newEkraf($nama,$alamat,$desa3,$sentra,$status,$jk,$upah,$sumberdana,$distribusi,$permasalahan,$ekspor,$peluang,$perijinan,$merk,$no_merk,$tgl,$tahun,$omzet,$pencatatan_keuangan,$laporan_terpisah,$neraca,$laba_rugi,$buku_kas,$laporan_keuangan,$pameran_kab,$pameran_prov,$pameran_nasional,$pameran_internasional,$wilayah2,$legalitas2);
	}

	public function updateEkraf()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$desa = explode('-', $this->input->post('desa'));
		$de = $desa[0];
		$ke = $desa[1];
		$desa2 = $this->Ekraf_Model->findIdDesa($de,$ke);
		// print_r($desa2);
		// die();
		$desa3=$desa2[0]['id']; 
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
		$tahun = $this->input->post('tahun');
		$omzet = $this->input->post('omzet');
		$omzet = str_replace("Rp", "", $omzet);
		$omzet = str_replace(".", "", $omzet);
		$omzet = str_replace(" ", "", $omzet);
		$pencatatan_keuangan = $this->input->post('pencatatan_keuangan');
		$laporan_terpisah = $this->input->post('laporan_terpisah');
		$neraca = $this->input->post('neraca');
		$laba_rugi = $this->input->post('laba_rugi');
		$buku_kas = $this->input->post('buku_kas');
		$laporan_keuangan = $this->input->post('laporan_keuangan');
		$pameran_kab = $this->input->post('pameran_kab');
		$pameran_prov = $this->input->post('pameran_prov');
		$pameran_nasional = $this->input->post('pameran_nasional');
		$pameran_internasional = $this->input->post('pameran_internasional');
		$wilayah = $this->input->post('wilayah');
		$wilayah2 = implode(";", $wilayah);
		$legalitas = $this->input->post('legalitas');
		$legalitas2 = implode(";", $legalitas);


		$this->Ekraf_Model->updateEkraf($id,$nama,$alamat,$desa3,$sentra,$status,$jk,$upah,$sumberdana,$distribusi,$permasalahan,$ekspor,$peluang,$perijinan,$merk,$no_merk,$tgl,$tahun,$omzet,$pencatatan_keuangan,$laporan_terpisah,$neraca,$laba_rugi,$buku_kas,$laporan_keuangan,$pameran_kab,$pameran_prov,$pameran_nasional,$pameran_internasional,$wilayah2,$legalitas2);
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

    public function updateProfile()
    {
    	$session=$this->session->userdata('logged_in');
    	$id = $session['id_user'];
    	$nama = $this->input->post('nama');
    	$username = $this->input->post('username');
    	$email = $this->input->post('email');
    	$hp = $this->input->post('hp');
    	$result = $this->Ekraf_Model->updateProfile($id,$nama,$username,$email,$hp);
    	$result2=$this->LoginModel->login($username, $session['password']);
		// print_r($result);
		// die();
    	if($result2){
    		$sess_array = array();

    		foreach ($result2 as $row){
    			$sess_array = array(
    				'username'=>$row->username,
    				'password'=>$row->password,
    				'nama'=>$row->nama,
    				'email'=>$row->email,
    				'no_hp'=>$row->no_hp,
    				'role'=>$row->role,
    				'id_kab_kota' => $row->id_kab_kota,
    				'id_ekraf' => $row->id_ekraf,
    				'id_user' => $row->id_user,
    			);
    			$this->session->set_userdata('logged_in',$sess_array);
    		}
    	}
    	echo json_encode($result);
    }

    public function changePassword()
    {
    	$result="";
    	$data = [];
    	$session=$this->session->userdata('logged_in');
    	$id = $session['id_user'];
    	$passold = $this->input->post('passold');
    	$passnew = $this->input->post('passnew');
    	$passnew2 = $this->input->post('passnew2');
    	$getpass = $this->Ekraf_Model->getPass($id);
    	$getpass2=$getpass[0]['password'];

    	if ($passold != $getpass2) {
    		$data =['code' => 1];
    	}else if ($passnew != $passnew2) {
    		$data =['code' => 2];
    	}else{
    		$data =['code' => 3, 'result' => $this->Ekraf_Model->changePass($id,$passold,$passnew)];
    		$result2=$this->LoginModel->login($session['username'], $session['password']);
		// print_r($result);
		// die();
    		if($result2){
    			$sess_array = array();

    			foreach ($result2 as $row){
    				$sess_array = array(
    					'username'=>$row->username,
    					'password'=>$row->password,
    					'nama'=>$row->nama,
    					'email'=>$row->email,
    					'no_hp'=>$row->no_hp,
    					'role'=>$row->role,
    					'id_kab_kota' => $row->id_kab_kota,
    					'id_ekraf' => $row->id_ekraf,
    					'id_user' => $row->id_user,
    				);
    				$this->session->set_userdata('logged_in',$sess_array);
    			}
    		}
    	}

    	echo json_encode($data);
    }
    public function import()
    {
    	if(isset($_FILES["fileku"]["name"])){
    		$path = $_FILES["fileku"]["tmp_name"];
    			echo "<pre>";
		var_dump($path);
		echo "</pre>";
		
    		$object = PHPExcel_IsOFactory::load($path);
    		$objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
    		$objWriter->save('uploads/DataImport.xlsx');
    		foreach($object->getWorksheetIterator() as $worksheet){
    			$highestRow = $worksheet->getHighestRow();
    			$highestColumn = $worksheet->getHighestColumn();
    			for($row=2; $row<=$highestRow; $row++){
    				$nama = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
    				$alamat = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
    				$desa = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
    				$kecamatan = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
    				$sentra = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
    				$status = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
    				$jk = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
    				$upah = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
    				$sumberdana = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
    				$distribusi = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
    				$permasalahan = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
    				$ekspor = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
    				$peluang = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
    				$perijinan = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
    				$merk = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
    				$no_merk = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
    				$tgl = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
    				$tahun = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
    				$omzet = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
					//desa,sentra,status,sumberdana
    				$desa2 = $this->Ekraf_Model->findIdDesa($desa,$kecamatan);
    				
    				 if (empty($desa3)) {
    				 	$desa3=0;
    				 }else{
    				 	$desa3=$desa2[0]['id'];
    				 }

    				$sentra2 = $this->Ekraf_Model->findIdSentra($sentra);
    				 if (empty($desa3)) {
    				 	$sentra3=0;
    				 }else{
    				 	$sentra3=$sentra2[0]['id_sentra'];
    				 }
    				

    				$status2 = $this->Ekraf_Model->findIdStatus($status);
    				if (empty($desa3)) {
    				 	$status3=0;
    				 }else{
    				 	$status3=$status2[0]['id_status_pemilik'];
    				 }
    				
    				$sumberdana2 = $this->Ekraf_Model->findIdSumberdana($sumberdana);
    				if (empty($desa3)) {
    				 	$sumberdana3=0;
    				 }else{
    				 	$sumberdana3=$sumberdana2[0]['id_sumber_dana'];
    				 }
    			

    				$data[] = array(
    					'nama' => $nama,
    					'alamat' => $alamat,
    					'id_desa_kelurahan' => $desa3,
    					'id_sentra' => $sentra3,
    					'id_status_pemilik' => $status3,
    					'jumlah_karyawan' => $jk,
    					'upah_tenaga_kerja' => $upah,
    					'id_sumber_dana' => $sumberdana3,
    					'distribusi' => $distribusi,
    					'permasalahan' => $permasalahan,
    					'ekspor' => $ekspor,
    					'peluang_tantangan' => $peluang,
    					'perijinan' => $perijinan,
    					'merk' => $merk,
    					'no_merk' => $no_merk,
    					'tgl_merk' => $tgl,
    					'omzet' => $omzet,
    					'tahun' => $tahun,
    					'pencatatan_keuangan' => 0,
    					'laporan_terpisah' => 0,
    					'neraca' => 0,
    					'laba_rugi' => 0,
    					'buku_kas' => 0,
    					'laporan_keuangan' => 0,
    					'pameran_kab' => 0,
    					'pameran_prov' => 0,
    					'pameran_nasional' => 0,
    					'pameran_internasional' => 0,
    					'wilayah_pemasaran' => ' ',
    					'legalitas_usaha' => ' ',

    				);

    			}
    		}
    		$result=$this->Ekraf_Model->import($data);
    		echo json_encode($result);

    	}else{
    		die();
    	}
    }
     public function downloadFormat(){
        force_download('assets/format/formatimport.xlsx',null);
    }
}

/* End of file Ekraf.php */
/* Location: ./application/controllers/Ekraf.php */