<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User  extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('StatusPemilik_Model');
		$this->load->model('Sumberdana_model');
		$this->load->model('Sentra_Model');
		$this->load->model('Ekraf_Model');
		$this->load->model('LoginModel');
		$this->load->model('TeknologiEcommerce_Model');

	}

	public function index()
	{
		$data['sentra'] = $this->Sentra_Model->getList();
		$data['status'] = $this->StatusPemilik_Model->getData();
		$data['sumberdana'] = $this->Sumberdana_model->getData();
		$data['desa'] = $this->Ekraf_Model->getListDesa();


		// $data['subsektor_grafik'] = $this->db->query('SELECT subsektor.nama as nama, COUNT(*) as jumlah FROM ekraf join sentra on ekraf.id_sentra= sentra.id_sentra join subsektor on subsektor.id_subsektor = sentra.id_subsektor GROUP by sentra.id_subsektor')->result();
		// $data['sentra_grafik'] = $this->db->query('SELECT sentra.nama as nama, COUNT(*) as jumlah FROM ekraf join sentra on ekraf.id_sentra= sentra.id_sentra GROUP by sentra.id_sentra')->result();

		$data['subsektor_grafik'] = $this->db->query('SELECT subsektor.nama as nama, COUNT(*) as jumlah FROM ekraf join sentra on ekraf.id_sentra= sentra.id_sentra join subsektor on subsektor.id_subsektor = sentra.id_subsektor where subsektor.id_subsektor!=0 GROUP by sentra.id_subsektor')->result();
		$data['sentra_grafik'] = $this->db->query('SELECT sentra.nama as nama, COUNT(*) as jumlah FROM ekraf join sentra on ekraf.id_sentra= sentra.id_sentra where sentra.id_sentra!=0 GROUP by sentra.id_sentra')->result();

		$data['kab_grafik']= $this->db->query('SELECT kab_kota.nama as nama, COUNT(*) as jumlah FROM ekraf join desa_kelurahan on ekraf.id_desa_kelurahan=desa_kelurahan.id_desa_kelurahan join kecamatan on kecamatan.id_kecamatan = desa_kelurahan.id_kecamatan join kab_kota on kab_kota.id_kab_kota= kecamatan.id_kab_kota GROUP BY kab_kota.id_kab_kota')->result();
		$data['tekno_grafik']= $this->db->query('SELECT teknologi_ecommerce.nama as nama , COUNT(*) as jumlah FROM ekraf_teknologi join ekraf on ekraf.id_ekraf= ekraf_teknologi.id_ekraf join teknologi_ecommerce on ekraf_teknologi.id_teknologi= teknologi_ecommerce.id_teknologi GROUP by ekraf_teknologi.id_teknologi')->result();
		$query =  $this->db->query('SELECT * FROM `ekraf` WHERE ekraf.wilayah_pemasaran != ""')->result();
		$wilayah['Lokal']=0;
		$wilayah['Nasional']=0;
		$wilayah['Internasional']=0;
		foreach ($query as $key ) {
			$x= explode(';',$key->wilayah_pemasaran);
			for ($i=0; $i < count($x); $i++) { 
				if($x[$i]=="Lokal"){
					$wilayah['Lokal']++;
				}else if($x[$i]=="Nasional"){
					$wilayah['Nasional']++;
				}else{
					$wilayah['Internasional']++;
				}
			}
		}
		$data['wilayah']=$wilayah;

		$query2 = $this->db->query('SELECT omzet from ekraf')->result();
		$omzet['satu']=0;$omzet['dua']=0;$omzet['tiga']=0;
		foreach ($query2 as $key ) {
			
				if($key->omzet>=0 && $key->omzet <= 10000000){
					$omzet['satu']++;
				}else if($key->omzet>10000000 && $key->omzet <= 50000000 ){
					$omzet['dua']++;
				}else{
					$omzet['tiga']++;
				}
			
		}
$data['omzet']=$omzet;
		$this->load->view('user/header');
		$this->load->view('user/index',$data);
	}

	public function getKota(){


		$this->load->database();
		if(!empty($this->input->get("q"))){
			$this->db->like('kab_kota.nama', $this->input->get("q"));
			$this->db->select('kab_kota.id_kab_kota as id,kab_kota.nama as text');
			$this->db->from('kab_kota');
			$this->db->join('provinsi', 'provinsi.id_provinsi = kab_kota.id_provinsi');
			$this->db->where('provinsi.nama', 'Jawa Timur');
			$this->db->order_by('kab_kota.nama', 'asc');
			$query=$this->db->get();
			// $query = $this->db->query("SELECT k.id_kab_kota as id,k.nama as 'text' from kab_kota as k inner join provinsi as p on k.id_provinsi=p.id_provinsi where p.nama='Jawa Timur' order by k.nama asc");
			$json = $query->result();
		}else{
			// $this->db->like('kab_kota.nama', $this->input->get("q"));
			$this->db->select('kab_kota.id_kab_kota as id,kab_kota.nama as text');
			$this->db->from('kab_kota');
			$this->db->join('provinsi', 'provinsi.id_provinsi = kab_kota.id_provinsi');
			$this->db->where('provinsi.nama', 'Jawa Timur');
			$this->db->order_by('kab_kota.nama', 'asc');
			$query=$this->db->get();
			// $query = $this->db->query("SELECT k.id_kab_kota as id,k.nama as 'text' from kab_kota as k inner join provinsi as p on k.id_provinsi=p.id_provinsi where p.nama='Jawa Timur' order by k.nama asc");
			$json = $query->result();
		}


		echo json_encode($json);

	}
	public function getDataByLoc()
	{
		echo json_encode( $this->Ekraf_Model->getDataByLoc());
	}
	public function getDataSearch()
	{
		echo json_encode( $this->Ekraf_Model->getDataSearch());
	}

	public function getDataEkraf()
	{
		echo json_encode( $this->Ekraf_Model->getData());
	}

	public function getlocation()
	{
		echo json_encode( $this->Ekraf_Model->getlocation());
	}
}