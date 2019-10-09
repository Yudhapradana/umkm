<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sumberdana_model extends CI_Model {

	public function getData()
	{
		$query=$this->db->get('sumber_dana');
		return $query->result();
	}

	public function newSumberdana($nama_sumber_dana)
	{
			$data = array(
            'nama'               =>$nama_sumber_dana,
        );

        return $this->db->insert('sumber_dana', $data);
	}	

	public function updateSumberdana($id,$nama_sumber_dana)
	{
		
		$data = array(
            'nama'               =>$nama_sumber_dana,
        );
		$this->db->where('id_sumber_dana', $id);
        return $this->db->update('sumber_dana', $data);
	}

	public function deleteSumberdana($id)
	{
        $this->db->where('id_sumber_dana', $id);
        $result = $this->db->delete('sumber_dana');
        return $result;
	}

}

/* End of file sumber_dana.php */
/* Location: ./application/models/sumber_dana.php */