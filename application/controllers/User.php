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
            $this->db->like('nama', $this->input->get("q"));
            $query = $this->db->select('id_kab_kota as id,nama as text')->get("kab_kota");
            $json = $query->result();
        }else{
              $query = $this->db->select('id_kab_kota as id,nama as text')->get("kab_kota");
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

	

}