<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatusPemilik_Model extends CI_Model {

	public function getData()
	{
		$query=$this->db->get('status_pemilik');
		return $query->result();
	}

	public function newStatusPemilik($nama)
	{
			$data = array(
            'nama'               =>$nama,
        );

        return $this->db->insert('status_pemilik', $data);
	}	

	public function updateStatusPemilik($id,$nama)
	{
		
		$data = array(
            'nama'               =>$nama,
        );
		$this->db->where('id_status_pemilik', $id);
        return $this->db->update('status_pemilik', $data);
	}

	public function deleteStatusPemilik($id)
	{
        $this->db->where('id_status_pemilik', $id);
        $result = $this->db->delete('status_pemilik');
        return $result;
	}
	

}

/* End of file StatusPemilik_Model.php */
/* Location: ./application/models/StatusPemilik_Model.php */