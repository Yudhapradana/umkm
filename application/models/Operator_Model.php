<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator_Model extends CI_Model {

	public function getData()
	{
		$query=$this->db->query("SELECT *,o.nama as name,k.nama as kota from user as o inner join kab_kota as k on o.id_kab_kota=k.id_kab_kota where o.role='operator' order by o.nama ASC");
		return $query->result();	
	}	

	public function findIdKota($kota)
	{
		$this->db->select('id_kab_kota');
		$this->db->where('nama', $kota);
		$query=$this->db->get('kab_kota');
		return $query->result_array();
	}

	public function newOperator($nama,$kota3,$email,$hp,$username,$password)
	{
		$data = array(
            'nama'               	=>$nama,
            'id_kab_kota'           =>$kota3,
            'email'               	=>$email,
            'no_hp'               	=>$hp,
            'username'              =>$username,
            'password'              =>$password,
            'role'					=>"operator",
        );

        return $this->db->insert('user', $data);
	}

	public function updateOperator($id,$nama,$kota3,$email,$hp,$username,$password)
	{
		$data = array(
            'nama'               	=>$nama,
            'id_kab_kota'           =>$kota3,
            'email'               	=>$email,
            'no_hp'               	=>$hp,
            'username'              =>$username,
            'password'              =>$password,
            'role'					=>"operator",
        );
		$this->db->where('id_user', $id);
        return $this->db->update('user', $data);
	}

	public function deleteOperator($id)
	{
		$this->db->where('id_user', $id);
        $result = $this->db->delete('user');
        return $result;
	}

}

/* End of file Operator_Model.php */
/* Location: ./application/models/Operator_Model.php */