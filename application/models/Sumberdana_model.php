<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sumberdana_model extends CI_Model {

	public function getData()
	{
		$query=$this->db->get('tb_sumberdana');
		return $query->result();
	}

	public function newSumberdana($nama_sumberdana)
	{
			$data = array(
            'nama_sumberdana'               =>$nama_sumberdana,
        );

        return $this->db->insert('tb_sumberdana', $data);
	}	

	public function updateSumberdana($id,$nama_sumberdana)
	{
		
		$data = array(
            'nama_sumberdana'               =>$nama_sumberdana,
        );
		$this->db->where('id_sumberdana', $id);
        return $this->db->update('tb_sumberdana', $data);
	}

	public function deleteSumberdana($id)
	{
        $this->db->where('id_sumberdana', $id);
        $result = $this->db->delete('tb_sumberdana');
        return $result;
	}

}

/* End of file Sumberdana.php */
/* Location: ./application/models/Sumberdana.php */