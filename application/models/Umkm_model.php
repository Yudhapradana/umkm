<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umkm_model extends CI_Model {

	public function getData()
	{
		$query=$this->db->get('tb_umkm');
		return $query->result();
	}

	public function newSumberdana($nama_sumberdana)
	{
			$data = array(
            'nama_sumberdana'               =>$nama_sumberdana,
        );

        return $this->db->insert('tb_umkm', $data);
	}	

	public function updateSumberdana($id,$nama_sumberdana)
	{
		
		$data = array(
            'nama_sumberdana'               =>$nama_sumberdana,
        );
		$this->db->where('id_sumberdana', $id);
        return $this->db->update('tb_umkm', $data);
	}

	public function deleteSumberdana($id)
	{
        $this->db->where('id_sumberdana', $id);
        $result = $this->db->delete('tb_umkm');
        return $result;
	}	

}

/* End of file Umkm_model.php */
/* Location: ./application/models/Umkm_model.php */