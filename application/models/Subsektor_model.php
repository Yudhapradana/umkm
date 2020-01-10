<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subsektor_model extends CI_Model {

	public function getData()
	{
		$this->db->where('id_subsektor!=', 0);
		$query=$this->db->get('subsektor');
		return $query->result();
	}

	public function newSubsektor($nama_subsektor)
	{
			$data = array(
            'nama'               =>$nama_subsektor,
        );

        return $this->db->insert('subsektor', $data);
	}	

	public function updateSubsektor($id,$nama_subsektor)
	{
		
		$data = array(
            'nama'               =>$nama_subsektor,
        );
		$this->db->where('id_subsektor', $id);
        return $this->db->update('subsektor', $data);
	}

	public function deleteSubsektor($id)
	{
        $this->db->where('id_subsektor', $id);
        $result = $this->db->delete('subsektor');
        return $result;
	}

	public function countSubsektor()
    {
        $query=$this->db->query("SELECT count(*) from subsektor where id_subsektor!=0");
        return $query->result_array();
    }

}

/* End of file Subsektor_model.php */
/* Location: ./application/models/Subsektor_model.php */