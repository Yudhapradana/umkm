<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemilikEkraf_Model extends CI_Model {

	public function getData()
	{
		$query=$this->db->query("SELECT *,o.nama as name, e.nama as ne from user as o inner join ekraf as e on o.id_ekraf=e.id_ekraf where o.role='ekraf' order by o.nama ASC");
		return $query->result();	
	}	

	public function findIdEkraf($ekraf)
	{
		$this->db->select('id_ekraf');
		$this->db->where('nama', $ekraf);
		$query=$this->db->get('ekraf');
		return $query->result_array();
	}

	public function newPemilikEkraf($nama,$ekraf3,$email,$hp,$username,$password)
	{
		$data = array(
            'nama'               	=>$nama,
            'id_ekraf'           =>$ekraf3,
            'email'               	=>$email,
            'no_hp'               	=>$hp,
            'username'              =>$username,
            'password'              =>$password,
            'role'					=>"ekraf",
        );

        return $this->db->insert('user', $data);
	}

	public function updatePemilikEkraf($id,$nama,$ekraf3,$email,$hp,$username,$password)
	{
		$data = array(
            'nama'               	=>$nama,
            'id_ekraf'           =>$ekraf3,
            'email'               	=>$email,
            'no_hp'               	=>$hp,
            'username'              =>$username,
            'password'              =>$password,
            'role'					=>"ekraf",
        );
		$this->db->where('id_user', $id);
        return $this->db->update('user', $data);
	}

	public function deletePemilikEkraf($id)
	{
		$this->db->where('id_user', $id);
        $result = $this->db->delete('user');
        return $result;
	}
	

}

/* End of file PemilikEkraf_Model.php */
/* Location: ./application/models/PemilikEkraf_Model.php */