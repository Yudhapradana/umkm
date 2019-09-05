<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umkm_model extends CI_Model {

	public function getData()
	{
		$query=$this->db->get('tb_umkm');
		return $query->result();
	}

    public function get_provinsi()
    {
        $query = $this->db->query("SELECT nama,id_provinsi FROM tb_provinsi");
        return $query->result();
    }

    public function get_kota()
    {
        $query = $this->db->query("SELECT nama,id_provinsi FROM tb_kota");
        return $query->result();
    }

    public function get_provinsivalue($id)
    {
        $query = $this->db->query("SELECT nama FROM tb_provinsi where id_provinsi='".$id."'");
        return $query->result_array();   
    }

	public function newUmkm($nama_umkm,$nama_subsektor,$status_pemilik,$upah_tenaga_kerja,$nama_sumberdana,$teknologi,$distribusi,$permasalahan,$ekspor,$peluang_tantangan,$kelembagaan,$alamat,$provinsi,$kota,$kecamatan)
	{
			$data = array(
            'nama_umkm'             =>$nama_umkm,
            'nama_subsektor'        =>$nama_subsektor,
            'status_pemilik'        =>$status_pemilik,
            'upah_tenaga_kerja'     =>$upah_tenaga_kerja,
            'nama_sumberdana'       =>$nama_sumberdana,
            'teknologi'             =>$teknologi,
            'distribusi'            =>$distribusi,
            'permasalahan'          =>$permasalahan,
            'ekspor'                =>$ekspor,
            'peluang_tantangan'     =>$peluang_tantangan,
            'kelembagaan'           =>$kelembagaan,
            'alamat'                =>$alamat,
            'provinsi'              =>$provinsi,
            'kota'                  =>$kota,
            'kecamatan'             =>$kecamatan,

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