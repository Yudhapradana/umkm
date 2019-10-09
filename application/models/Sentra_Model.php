<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sentra_Model extends CI_Model {

	public function getData()
	{
		$query=$this->db->query("SELECT *,e.nama as ns from sentra as e inner join subsektor as s on e.id_subsektor=s.id_subsektor");
		return $query->result();
	}

	public function getList()
	{
		$query=$this->db->query("SELECT * from sentra");
		return $query->result();
	}

	public function newsentra($nama_sentra,$id_subsektor)
	{
		$data = array(
            'nama'               =>$nama_sentra,
            'id_subsektor'       =>$id_subsektor,
        );

        return $this->db->insert('sentra', $data);
	}	

	public function updatesentra($id,$id_subsektor,$nama_sentra)
	{
		
		$data = array(
            'nama'               =>$nama_sentra,
            'id_subsektor'       =>$id_subsektor,
        );
		$this->db->where('id_sentra', $id);
        return $this->db->update('sentra', $data);
	}

	public function deletesentra($id)
	{
        $this->db->where('id_sentra', $id);
        $result = $this->db->delete('sentra');
        return $result;
	}

}

/* End of file Sentra_Model.php */
/* Location: ./application/models/Sentra_Model.php */