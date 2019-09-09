<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->helper(array('url'));
		     $this->load->library('pagination');
		$this->load->model('Umkm_model');
        $this->load->model('User_model');
	}

	public function index()
	{

       
        $config['base_url'] = site_url('User/index'); //site url
      $config['anchor_class'] = 'class="row myclass" ';
        $config['total_rows'] = $this->db->count_all('tb_umkm'); //total row
        $config['per_page'] = 4;  //show record per halaman
        $config["uri_segment"] = 3 ;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Umkm_model->get_umkm_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();

		$data['barang']=$this->Umkm_model->getData();
      
		$this->load->view('user/index',$data);
	}


    public function search(){
               $cari = $this->input->post('search');
    {$config['base_url'] = site_url('User/search'); //site url
      $config['anchor_class'] = 'class="row myclass" ';
        $config['total_rows'] = $this->totalsearch($cari); //total row
        $config['per_page'] = 4;  //show record per halaman
        $config["uri_segment"] = 3 ;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

 $data['data'] = $this->User_model->search($cari,$config["per_page"], $data['page'] );
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
         
 
        $data['pagination'] = $this->pagination->create_links();

        $data['barang']=$this->Umkm_model->getData();
    
     
        
        $this->load->view('user/index',$data);

    }}

    public function totalsearch($kalimat){
         $query=$this->db->query("SELECT * FROM tb_umkm where nama_umkm like '%".$kalimat."%'  or alamat like '%".$kalimat."%' or provinsi like '%".$kalimat."%' or kota like '%".$kalimat."%' or kecamatan like '%".$kalimat."%'");
        return $query->num_rows();
    }

    public function detail($id){
        $data['detail'] = $this->User_model->detail($id);
              $this->load->view('user/car-single',$data);
    }


   

}