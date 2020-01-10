<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeknologiEcommerce_Model extends CI_Model {

	public function getData()
	{
		$query=$this->db->get('teknologi_ecommerce');
		return $query->result();
	}

	public function newTeknologiEcommerce($nama)
	{
		$data = array(
            'nama'               =>$nama,
        );

        return $this->db->insert('teknologi_ecommerce', $data);
	}	

	public function updateTeknologiEcommerce($id,$nama)
	{
		
		$data = array(
            'nama'               =>$nama,
        );
		$this->db->where('id_teknologi', $id);
        return $this->db->update('teknologi_ecommerce', $data);
	}

	public function deleteTeknologiEcommerce($id)
	{
        $this->db->where('id_teknologi', $id);
        $result = $this->db->delete('teknologi_ecommerce');
        return $result;
	}

	public function countTeknologi()
    {
        $query=$this->db->query("SELECT count(*) from teknologi_ecommerce");
        return $query->result_array();
    }

}

/* End of file TeknologiEcommerce_Model.php */
/* Location: ./application/models/TeknologiEcommerce_Model.php */