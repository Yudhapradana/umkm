<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Operator_Model');
		$this->load->model('StatusPemilik_Model');
		$this->load->model('Sumberdana_model');
		$this->load->model('Sentra_Model');
		$this->load->model('Ekraf_Model');
		$this->load->model('TeknologiEcommerce_Model');
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
		$this->load->view('admin/operator/index');	
	}

	public function getData()
	{
		echo json_encode( $this->Operator_Model->getData());
	}

	public function newOperator()
	{
		$nama = $this->input->post('nama');
		$kota = $this->input->post('kota');
		$kota2 = $this->Operator_Model->findIdKota($kota);
		$kota3 = $kota2[0]['id_kab_kota']; 
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->Operator_Model->newOperator($nama,$kota3,$email,$hp,$username,$password);

		echo json_encode($result);
	}

	public function updateOperator()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$kota = $this->input->post('kota');
		$kota2 = $this->Operator_Model->findIdKota($kota);
		$kota3 = $kota2[0]['id_kab_kota']; 
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->Operator_Model->updateOperator($id,$nama,$kota3,$email,$hp,$username,$password);

		echo json_encode($result);
	}

	public function deleteOperator()
	{
		$id = $this->input->post('id');
		$result = $this->Operator_Model->deleteOperator($id);
		echo json_encode($result);
	}

	public function getPage()
	{
		$session=$this->session->userdata('logged_in');
		$data['sentra'] = $this->Sentra_Model->getList();
		$data['status'] = $this->StatusPemilik_Model->getData();
		$data['sumberdana'] = $this->Sumberdana_model->getData();
		$data['desa'] = $this->Operator_Model->getListDesa($session['id_kab_kota']);
		$this->load->view('operator/header');
		$this->load->view('operator/ekraf/index',$data);
	}

	public function getDataEkraf()
	{
		$session=$this->session->userdata('logged_in');
		// print_r($session['id_kab_kota']);
		echo json_encode( $this->Operator_Model->getDataEkraf($session['id_kab_kota']));
	}

	public function formInput()
	{
		$session=$this->session->userdata('logged_in');
		$data['sentra'] = $this->Sentra_Model->getList();
		$data['status'] = $this->StatusPemilik_Model->getData();
		$data['sumberdana'] = $this->Sumberdana_model->getData();
		$data['desa'] = $this->Operator_Model->getListDesa($session['id_kab_kota']);
		// print_r($session['id_kab_kota']);
		// die();
		$this->load->view('operator/header');
		$this->load->view('operator/ekraf/forminput',$data);
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

		$this->Operator_Model->newEkraf($nama,$alamat,$desa3,$sentra,$status,$jk,$upah,$sumberdana,$distribusi,$permasalahan,$ekspor,$peluang,$perijinan,$merk,$no_merk,$tgl);
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

		$this->Operator_Model->updateEkraf($id,$nama,$alamat,$desa3,$sentra,$status,$jk,$upah,$sumberdana,$distribusi,$permasalahan,$ekspor,$peluang,$perijinan,$merk,$no_merk,$tgl);
	}

	public function deleteEkraf()
	{
		$id = $this->input->post('id');
		$result = $this->Operator_Model->deleteEkraf($id);
		echo json_encode($result);
	}

	public function teknologi()
	{
		$session=$this->session->userdata('logged_in');
		$data['teknologi'] = $this->TeknologiEcommerce_Model->getData();
		$data['ekraf'] = $this->Operator_Model->getDataEkraf($session['id_kab_kota']);
		$this->load->view('operator/header');
		$this->load->view('operator/teknologi/index',$data);
	}

	public function getDataTeknologiEkraf()
	{
		$session=$this->session->userdata('logged_in');
		echo json_encode( $this->Operator_Model->getDataTeknologiEkraf($session['id_kab_kota']));
	}

	public function newTeknologiEkraf()
	{
		$ekraf = $this->Operator_Model->findIdEkraf($this->input->post('nama'));
		$nama = $ekraf[0]['id_ekraf'];
		$id_teknologi = $this->input->post('id_teknologi');
		$result = $this->Operator_Model->newTeknologiEkraf($nama,$id_teknologi);

		echo json_encode($result);
	}

	public function updateEkrafTeknologi()
	{
		$id = $this->input->post('id');
		$ekraf = $this->Operator_Model->findIdEkraf($this->input->post('nama'));
		$nama = $ekraf[0]['id_ekraf'];
		$id_teknologi = $this->input->post('id_teknologi');
		$result = $this->Operator_Model->updateTeknologiEkraf($id,$nama,$id_teknologi);

		echo json_encode($result);
	}

	public function deleteEkrafTeknologi()
	{
		$id = $this->input->post('id');
		$result = $this->Operator_Model->deleteEkrafTeknologi($id);
		echo json_encode($result);
	}

	public function galeri()
	{
		$this->load->view('operator/header');
		$this->load->view('operator/galeri/index');
	}

	public function listGaleri($id)
	{
		$this->load->view('operator/header');
		$this->load->view('operator/galeri/list');
	}

	public function getListGaleri($id)
	{
		// print_r($id);
		echo json_encode( $this->Operator_Model->getListGaleri($id));
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
			
            $this->Operator_Model->newGaleri($id,$judul,$source); //kirim value ke model m_upload
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
			
            $data=$this->Operator_Model->updateGaleri($id,$judul,$source); //kirim value ke model m_upload
            if ($data) {
            	unlink('./assets/'.$fotolama);
            	echo json_encode('sukses');
            }else{
            	echo json_encode('gagalupload');
            }
        }else{
        	$this->Operator_Model->updateGaleri($id,$judul,$fotolama);
        	echo json_encode('sukses');
        }
    }

    public function deleteGaleri()
    {
    	$id = $this->input->post('id');
    	$result = $this->Operator_Model->deleteGaleri($id);
    	echo json_encode($result);
    }

    public function getGekraf($id)
    {
    	$gekraf=$this->Operator_Model->getGekraf($id);
		// print_r($gekraf);
    	$gekraf2=$gekraf[0]['nama'];
    	echo $gekraf2;
    }

    public function pemilikEkraf()
    {
    	$session=$this->session->userdata('logged_in');
    	$data['ekraf']=$this->Operator_Model->getDataEkraf($session['id_kab_kota']);
    	$this->load->view('operator/header');
    	$this->load->view('operator/pemilikekraf/index',$data);	
    }

    public function getDataPemilikEkraf()
    {
    	$session=$this->session->userdata('logged_in');
    	echo json_encode( $this->Operator_Model->getDataPemilikEkraf($session['id_kab_kota']));
    }

    public function newPemilikEkraf()
    {
    	$session=$this->session->userdata('logged_in');
    	$nama = $this->input->post('nama');
    	$ekraf = $this->input->post('ekraf');
    	$ekraf2 = $this->Operator_Model->findIdekraf($ekraf);
    	$ekraf3 = $ekraf2[0]['id_ekraf']; 
    	$email = $this->input->post('email');
    	$hp = $this->input->post('hp');
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');
    	$id_kab_kota=$session['id_kab_kota'];
    	$result = $this->Operator_Model->newPemilikEkraf($nama,$ekraf3,$email,$hp,$username,$password,$id_kab_kota);

    	echo json_encode($result);
    }

    public function updatePemilikEkraf()
    {
    	$session=$this->session->userdata('logged_in');
    	$id_kab_kota=$session['id_kab_kota'];
    	$id = $this->input->post('id');
    	$nama = $this->input->post('nama');
    	$ekraf = $this->input->post('ekraf');
    	$ekraf2 = $this->Operator_Model->findIdekraf($ekraf);
    	$ekraf3 = $ekraf2[0]['id_ekraf']; 
    	$email = $this->input->post('email');
    	$hp = $this->input->post('hp');
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');
    	$result = $this->Operator_Model->updatePemilikEkraf($id,$nama,$ekraf3,$email,$hp,$username,$password,$id_kab_kota);

    	echo json_encode($result);
    }

    public function deletePemilikEkraf()
    {
    	$id = $this->input->post('id');
    	$result = $this->Operator_Model->deletePemilikEkraf($id);
    	echo json_encode($result);
    }

    public function getKab()
    {
    	$kab2=" ";
    	$session=$this->session->userdata('logged_in');
    	$kab = $this->Operator_Model->getKab($session['id_kab_kota']);
    	foreach ($kab as $key) {
    		$kab2= $key->nama;
    	}
    	echo $kab2;
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

/* End of file Operator.php */
/* Location: ./application/controllers/Operator.php */