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

}