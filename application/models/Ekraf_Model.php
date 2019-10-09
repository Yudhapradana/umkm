<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekraf_Model extends CI_Model {

	public function getData()
	{
		$query=$this->db->query("SELECT *, e.nama as ne, d.nama as nd, s.nama as ns, t.nama as nt, u.nama as nu from ekraf as e inner join desa_kelurahan as d on e.id_desa_kelurahan=d.id_desa_kelurahan inner join sentra as s on e.id_sentra=s.id_sentra inner join sumber_dana as u on e.id_sumber_dana=u.id_sumber_dana inner join status_pemilik as t on e.id_status_pemilik=t.id_status_pemilik order by e.nama ASC");
		return $query->result();
	}

    public function getListDesa()
    {
        $query = $this->db->query("SELECT *,d.nama as nd,k.nama as nk FROM `desa_kelurahan` as d inner join kecamatan as k on d.id_kecamatan=k.id_kecamatan inner join kab_kota as a on k.id_kab_kota=a.id_kab_kota inner join provinsi as p on a.id_provinsi=p.id_provinsi WHERE p.nama='Jawa Timur' order by d.nama asc");
        return $query->result();
    }

    public function findIdDesa($desa)
    {
        $this->db->select('id_desa_kelurahan');
        $this->db->where('nama', $desa);
        $query=$this->db->get('desa_kelurahan');
        return $query->result_array();
    }

	public function newEkraf($nama,$alamat,$desa2,$sentra,$status,$jk,$upah,$sumberdana,$distribusi,$permasalahan,$ekspor,$peluang,$perijinan,$merk,$no_merk,$tgl)
	{
			$data = array(
            'nama'                  =>$nama,
            'alamat'                =>$alamat,
            'id_desa_kelurahan'     =>$desa2,
            'id_sentra'             =>$sentra,
            'id_status_pemilik'     =>$status,
            'jumlah_karyawan'       =>$jk,
            'upah_tenaga_kerja'            =>$upah,
            'id_sumber_dana'            =>$sumberdana,
            'distribusi'            =>$distribusi,
            'permasalahan'          =>$permasalahan,
            'ekspor'                =>$ekspor,
            'peluang_tantangan'     =>$peluang,
            'perijinan'                  =>$perijinan,
            'merk'                  =>$merk,
            'no_merk'                  =>$no_merk,
            'tgl_merk'                  =>$tgl,
        );

        return $this->db->insert('ekraf', $data);
	}	

	public function updateUmkm($id,$nama_umkm,$nama_subsektor,$status_pemilik,$upah_tenaga_kerja,$nama_sumberdana,$teknologi,$distribusi,$permasalahan,$ekspor,$peluang_tantangan,$kelembagaan,$alamat,$provinsi,$kota,$kecamatan)
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
            // 'gambar'                =>$gambar,
        );
		$this->db->where('id_umkm', $id);
        return $this->db->update('tb_umkm', $data);
	}

	public function deleteUmkm($id)
	{
        $this->db->where('id_umkm', $id);
        $result = $this->db->delete('tb_umkm');
        return $result;
	}	

    public function getPicture($id)
    {
        $query = $this->db->query("SELECT id_galeri,galeri,id_umkm FROM tb_galeri");
        return $query->result();
    }

    public function deleteGaleri($id)
    {
        $this->db->where('id_galeri', $id);
        $result = $this->db->delete('tb_galeri');
        return $result;
    }

}

/* End of file Ekraf_Model.php */
/* Location: ./application/models/Ekraf_Model.php */