<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemilikEkraf extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('PemilikEkraf_Model');
		$this->load->model('StatusPemilik_Model');
		$this->load->model('Sumberdana_model');
		$this->load->model('Sentra_Model');
		$this->load->model('TeknologiEcommerce_Model');
		$this->load->model('Ekraf_Model');
		$this->load->model('LoginModel');
		if ($this->session->userdata('logged_in')==TRUE) 
		{
			// redirect('Dc_Controller/index');
		}else{	
			redirect('Login');
		}
	}

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/pemilikekraf/index');	
	}

	public function getData()
	{
		echo json_encode( $this->PemilikEkraf_Model->getData());
	}

	public function getDataWaiting()
	{
		echo json_encode( $this->PemilikEkraf_Model->getDataWaiting());
	}

	public function newPemilikEkraf()
	{
		$nama = $this->input->post('nama');
		$ekraf = $this->input->post('ekraf');
		$ekraf2 = $this->PemilikEkraf_Model->findIdekraf($ekraf);
		$ekraf3 = $ekraf2[0]['id_ekraf']; 
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->PemilikEkraf_Model->newPemilikEkraf($nama,$ekraf3,$email,$hp,$username,$password);

		echo json_encode($result);
	}

	public function updatePemilikEkraf()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$ekraf = $this->input->post('ekraf');
		$ekraf2 = $this->PemilikEkraf_Model->findIdekraf($ekraf);
		$ekraf3 = $ekraf2[0]['id_ekraf']; 
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->PemilikEkraf_Model->updatePemilikEkraf($id,$nama,$ekraf3,$email,$hp,$username,$password);

		echo json_encode($result);
	}

	public function deletePemilikEkraf()
	{
		$id = $this->input->post('id');
		$result = $this->PemilikEkraf_Model->deletePemilikEkraf($id);
		echo json_encode($result);
	}

	public function getPage()
	{
		$data['sentra'] = $this->Sentra_Model->getList();
		$data['status'] = $this->StatusPemilik_Model->getData();
		$data['sumberdana'] = $this->Sumberdana_model->getData();
		$data['desa'] = $this->Ekraf_Model->getListDesa();
		$session=$this->session->userdata('logged_in');
		$data['countekraf'] = $this->PemilikEkraf_Model->countEkraf($session['id_ekraf']);
		$this->load->view('pemilikekraf/header');
		$this->load->view('pemilikekraf/ekraf/index',$data);
	}

	public function getDataEkraf()
	{
		$session=$this->session->userdata('logged_in');
		// print_r($session['id_kab_kota']);
		echo json_encode( $this->PemilikEkraf_Model->getDataEkraf($session['id_ekraf']));
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

		$this->PemilikEkraf_Model->newEkraf($nama,$alamat,$desa3,$sentra,$status,$jk,$upah,$sumberdana,$distribusi,$permasalahan,$ekspor,$peluang,$perijinan,$merk,$no_merk,$tgl,$tahun,$omzet,$pencatatan_keuangan,$laporan_terpisah,$neraca,$laba_rugi,$buku_kas,$laporan_keuangan,$pameran_kab,$pameran_prov,$pameran_nasional,$pameran_internasional,$wilayah2,$legalitas2);

		$session=$this->session->userdata('logged_in');
		$ekraf2 = $this->PemilikEkraf_Model->findIdekraf($nama);
		$ekraf3 = $ekraf2[0]['id_ekraf'];
		$this->PemilikEkraf_Model->updateId($session['id_user'],$ekraf3);

		$username = $session['username'];
		$password = $session['password'];
		$this->session->unset_userdata('logged_in');
		$result = $this->LoginModel->login($username, $password);
		// print_r($result);
		// die();
		if($result){
			$sess_array = array();

			foreach ($result as $row){
				$sess_array = array(
					'username'=>$row->username,
					'password'=>$row->password,
					'nama'=>$row->nama,
					'role'=>$row->role,
					'id_kab_kota' => $row->id_kab_kota,
					'id_ekraf' => $row->id_ekraf,
					'id_user' => $row->id_user,
				);
				$this->session->set_userdata('logged_in',$sess_array);
			}
		}
	}

	public function updateEkraf()
	{
		$id = $this->input->post('uid');
		$nama = $this->input->post('unama');
		$alamat = $this->input->post('ualamat');
		$desa = explode('-', $this->input->post('udesa'));
		$de = $desa[0];
		$ke = $desa[1];
		$desa2 = $this->Ekraf_Model->findIdDesa($de,$ke);
		// print_r($desa2);
		// die();
		$desa3=$desa2[0]['id']; 
		$sentra = $this->input->post('usentra');
		$status = $this->input->post('ustatus');
		$jk = $this->input->post('ujk');
		$upah = $this->input->post('uupah');
		$upah = str_replace("Rp", "", $upah);
		$upah = str_replace(".", "", $upah);
		$upah = str_replace(" ", "", $upah);
		$sumberdana = $this->input->post('usumberdana');
		$distribusi = $this->input->post('udistribusi');
		$permasalahan = $this->input->post('upermasalahan');
		$ekspor = $this->input->post('uekspor');
		$peluang = $this->input->post('upeluang');
		$perijinan = $this->input->post('uperijinan');
		$merk = $this->input->post('umerk');
		$no_merk = $this->input->post('uno_merk');
		$tgl = $this->input->post('utgl');
		$tahun = $this->input->post('utahun');
		$omzet = $this->input->post('uomzet');
		$omzet = str_replace("Rp", "", $omzet);
		$omzet = str_replace(".", "", $omzet);
		$omzet = str_replace(" ", "", $omzet);
		$pencatatan_keuangan = $this->input->post('upencatatan_keuangan');
		$laporan_terpisah = $this->input->post('ulaporan_terpisah');
		$neraca = $this->input->post('uneraca');
		$laba_rugi = $this->input->post('ulaba_rugi');
		$buku_kas = $this->input->post('ubuku_kas');
		$laporan_keuangan = $this->input->post('ulaporan_keuangan');
		$pameran_kab = $this->input->post('upameran_kab');
		$pameran_prov = $this->input->post('upameran_prov');
		$pameran_nasional = $this->input->post('upameran_nasional');
		$pameran_internasional = $this->input->post('upameran_internasional');
		$wilayah = $this->input->post('uwilayah');
		$wilayah2 = implode(";", $wilayah);
		$legalitas = $this->input->post('ulegalitas');
		$legalitas2 = implode(";", $legalitas);

		$this->PemilikEkraf_Model->updateEkraf($id,$nama,$alamat,$desa3,$sentra,$status,$jk,$upah,$sumberdana,$distribusi,$permasalahan,$ekspor,$peluang,$perijinan,$merk,$no_merk,$tgl,$tahun,$omzet,$pencatatan_keuangan,$laporan_terpisah,$neraca,$laba_rugi,$buku_kas,$laporan_keuangan,$pameran_kab,$pameran_prov,$pameran_nasional,$pameran_internasional,$wilayah2,$legalitas2);
	}

	public function teknologi()
	{
		$session=$this->session->userdata('logged_in');
		$data['teknologi'] = $this->TeknologiEcommerce_Model->getData();
		$session=$this->session->userdata('logged_in');
		$data['countekraf'] = $this->PemilikEkraf_Model->countEkraf($session['id_ekraf']);
		// $data['ekraf'] = $this->PemilikEkraf_Model->getDataEkraf($session['id_kab_kota']);
		$this->load->view('pemilikekraf/header');
		$this->load->view('pemilikekraf/teknologi/index',$data);
	}

	public function getDataTeknologiEkraf()
	{
		$session=$this->session->userdata('logged_in');
		echo json_encode( $this->PemilikEkraf_Model->getDataTeknologiEkraf($session['id_ekraf']));
	}

	public function newTeknologiEkraf()
	{
		$session=$this->session->userdata('logged_in');
		$ekraf = $session['id_ekraf'];
		$id_teknologi = $this->input->post('id_teknologi');
		$result = $this->PemilikEkraf_Model->newTeknologiEkraf($ekraf,$id_teknologi);

		echo json_encode($result);
	}

	public function updateEkrafTeknologi()
	{
		$id = $this->input->post('id');
		$session=$this->session->userdata('logged_in');
		$ekraf = $session['id_ekraf'];
		$id_teknologi = $this->input->post('id_teknologi');
		$result = $this->PemilikEkraf_Model->updateTeknologiEkraf($id,$ekraf,$id_teknologi);

		echo json_encode($result);
	}

	public function deleteEkrafTeknologi()
	{
		$id = $this->input->post('id');
		$result = $this->PemilikEkraf_Model->deleteEkrafTeknologi($id);
		echo json_encode($result);
	}

	public function listGaleri($id)
	{
		$session=$this->session->userdata('logged_in');
		$data['countekraf'] = $this->PemilikEkraf_Model->countEkraf($session['id_ekraf']);
		$this->load->view('pemilikekraf/header');
		$this->load->view('pemilikekraf/galeri/list',$data);
	}

	public function getListGaleri($id)
	{
		// print_r($id);
		echo json_encode( $this->PemilikEkraf_Model->getListGaleri($id));
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

            $this->PemilikEkraf_Model->newGaleri($id,$judul,$source); //kirim value ke model m_upload
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

            $data=$this->PemilikEkraf_Model->updateGaleri($id,$judul,$source); //kirim value ke model m_upload
            if ($data) {
            	unlink('./assets/'.$fotolama);
            	echo json_encode('sukses');
            }else{
            	echo json_encode('gagalupload');
            }
        }else{
        	$this->PemilikEkraf_Model->updateGaleri($id,$judul,$fotolama);
        	echo json_encode('sukses');
        }
    }

    public function deleteGaleri()
    {
    	$id = $this->input->post('id');
    	$result = $this->PemilikEkraf_Model->deleteGaleri($id);
    	echo json_encode($result);
    }

    public function confirmation()
    {
    	$id = $this->input->post('id');
    	$result = $this->PemilikEkraf_Model->confirmation($id);
    	echo json_encode($result);	
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

}

/* End of file PemilikEkraf.php */
/* Location: ./application/controllers/PemilikEkraf.php */