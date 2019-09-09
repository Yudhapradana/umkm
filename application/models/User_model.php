<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function search($kalimat,$limit,$start)
	{
		 $query=$this->db->query("SELECT * FROM tb_umkm inner join tb_provinsi on id_provinsi=provinsi  where nama_umkm like '%".$kalimat."%'  or alamat like '%".$kalimat."%' or nama like '%".$kalimat."%' or kota like '%".$kalimat."%' or kecamatan like '%".$kalimat."%' limit ".$start.", ".$limit);
        return $query->result();
		
	}
	public function detail($id){
		$query= $this->db->query("select * , tb_umkm.nama_subsektor as sektor from tb_umkm inner join tb_provinsi on id_provinsi=provinsi  inner join tb_subsektor on tb_umkm.nama_subsektor=id_subsektor inner join tb_sumberdana on id_sumberdana=tb_umkm.nama_sumberdana  inner join tb_kota on id_kota=kota where id_umkm = ".$id);

	   return $query->result();
	}

}