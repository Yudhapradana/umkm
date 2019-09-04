<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subsektor_model extends CI_Model {

	public function getData()
	{
		$query=$this->db->get('tb_subsektor');
		return $query->result();
	}

	public function newSubsektor($nama_subsektor)
	{
			$data = array(
            'nama_subsektor'               =>$nama_subsektor,
        );

        return $this->db->insert('tb_subsektor', $data);
	}	

	public function updateSubsektor($id,$nama_subsektor)
	{
		
		$data = array(
            'nama_subsektor'               =>$nama_subsektor,
        );
		$this->db->where('id_subsektor', $id);
        return $this->db->update('tb_subsektor', $data);
	}

	public function deleteSubsektor($id)
	{
        $this->db->where('id_subsektor', $id);
        $result = $this->db->delete('tb_subsektor');
        return $result;
	}

}

/* End of file Subsektor_model.php */
/* Location: ./application/models/Subsektor_model.php */