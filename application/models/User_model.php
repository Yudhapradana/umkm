<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function search($kalimat,$limit,$start)
	{
		 $query=$this->db->query("SELECT * FROM tb_umkm inner join tb_provinsi on id_provinsi=provinsi  where nama_umkm like '%".$kalimat."%'  or alamat like '%".$kalimat."%' or nama like '%".$kalimat."%' or kota like '%".$kalimat."%' or kecamatan like '%".$kalimat."%' limit ".$start.", ".$limit);
        return $query->result();
		
	}

}