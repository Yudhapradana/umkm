<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umkm extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Subsektor_model');
		$this->load->model('Sumberdana_model');
		$this->load->model('Umkm_model');
		if ($this->session->userdata('logged_in')==TRUE) 
		{
			// redirect('Dc_Controller/index');
		}else{	
			redirect('User/login');
		}
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


			$data = $this->Umkm_model->updateUmkm($id,$nama_umkm,$nama_subsektor,$status_pemilik,$upah_tenaga_kerja,$nama_sumberdana,$teknologi,$distribusi,$permasalahan,$ekspor,$peluang_tantangan,$kelembagaan,$alamat,$provinsi,$kota,$kecamatan); //kirim value ke model user_model
			echo json_encode($data);
		
	}

	public function deleteUmkm()
	{
		$id = $this->input->post('id');
		$result = $this->Umkm_model->deleteUmkm($id);
		echo json_encode($result);
	}

	public function logout()
	{
			$userdata = array('username','password');
			$this->session->unset_userdata($userdata);
			echo "<script>alert('Logout Success') </script>";
			redirect('User','refresh');
	}

	public function proses_upload($id)
	{
		$config['upload_path']   = FCPATH.'/assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
        	$nama=$this->upload->data('file_name');
        	$this->db->delete('tb_galeri',array('id_umkm'=>$id));
        	$this->db->insert('tb_galeri',array('galeri'=>$nama,'token'=>$token,'create_at'=>date('Y-m-d'),'id_umkm'=>$id));
        }
	}

	public function remove_foto()
	{
		//Ambil token foto
		$token=$this->input->post('token');
		$foto=$this->db->get_where('tb_galeri',array('token'=>$token));
		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->nama_foto;
			if(file_exists($file=FCPATH.'/assets/uploads/'.$nama_foto)){
				unlink($file);
			}
			$this->db->delete('tb_galeri',array('token'=>$token));
		}
		echo "{}";
	}

	public function formGaleri($id)
	{
		$this->load->view('admin/header');
		$this->load->view('admin/umkm/formgaleri');
	}
}

/* End of file Umkm.php */
/* Location: ./application/controllers/Umkm.php */