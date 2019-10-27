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

	public function newEkraf($nama,$alamat,$desa3,$sentra,$status,$jk,$upah,$sumberdana,$distribusi,$permasalahan,$ekspor,$peluang,$perijinan,$merk,$no_merk,$tgl,$tahun,$omzet,$pencatatan_keuangan,$laporan_terpisah,$neraca,$laba_rugi,$buku_kas,$laporan_keuangan,$pameran_kab,$pameran_prov,$pameran_nasional,$pameran_internasional,$wilayah2,$legalitas2)
	{
			$data = array(
                'nama'                  =>$nama,
                'alamat'                =>$alamat,
                'id_desa_kelurahan'     =>$desa3,
                'id_sentra'             =>$sentra,
                'id_status_pemilik'     =>$status,
                'jumlah_karyawan'       =>$jk,
                'upah_tenaga_kerja'     =>$upah,
                'id_sumber_dana'        =>$sumberdana,
                'distribusi'            =>$distribusi,
                'permasalahan'          =>$permasalahan,
                'ekspor'                =>$ekspor,
                'peluang_tantangan'     =>$peluang,
                'perijinan'             =>$perijinan,
                'merk'                  =>$merk,
                'no_merk'               =>$no_merk,
                'tgl_merk'              =>$tgl,
                'tahun'                 =>$tahun,
                'pencatatan_keuangan'   =>$pencatatan_keuangan,
                'laporan_terpisah'      =>$laporan_terpisah,
                'neraca'                =>$neraca,
                'laba_rugi'             =>$laba_rugi,
                'buku_kas'              =>$buku_kas,
                'laporan_terpisah'      =>$laporan_terpisah,
                'pameran_kab'           =>$pameran_kab,
                'pameran_prov'          =>$pameran_prov,
                'pameran_nasional'      =>$pameran_nasional,
                'pameran_internasional' =>$pameran_internasional,
                'wilayah_pemasaran'     =>$wilayah2,
                'legalitas_usaha'       =>$legalitas2,
            );

        return $this->db->insert('ekraf', $data);
	}	

	public function updateEkraf($id,$nama,$alamat,$desa3,$sentra,$status,$jk,$upah,$sumberdana,$distribusi,$permasalahan,$ekspor,$peluang,$perijinan,$merk,$no_merk,$tgl,$tahun,$omzet,$pencatatan_keuangan,$laporan_terpisah,$neraca,$laba_rugi,$buku_kas,$laporan_keuangan,$pameran_kab,$pameran_prov,$pameran_nasional,$pameran_internasional,$wilayah2,$legalitas2)
	{
		
		$data = array(
                'nama'                  =>$nama,
                'alamat'                =>$alamat,
                'id_desa_kelurahan'     =>$desa3,
                'id_sentra'             =>$sentra,
                'id_status_pemilik'     =>$status,
                'jumlah_karyawan'       =>$jk,
                'upah_tenaga_kerja'     =>$upah,
                'id_sumber_dana'        =>$sumberdana,
                'distribusi'            =>$distribusi,
                'permasalahan'          =>$permasalahan,
                'ekspor'                =>$ekspor,
                'peluang_tantangan'     =>$peluang,
                'perijinan'             =>$perijinan,
                'merk'                  =>$merk,
                'no_merk'               =>$no_merk,
                'tgl_merk'              =>$tgl,
                'tahun'                 =>$tahun,
                'pencatatan_keuangan'   =>$pencatatan_keuangan,
                'laporan_terpisah'      =>$laporan_terpisah,
                'neraca'                =>$neraca,
                'laba_rugi'             =>$laba_rugi,
                'buku_kas'              =>$buku_kas,
                'laporan_terpisah'      =>$laporan_terpisah,
                'pameran_kab'           =>$pameran_kab,
                'pameran_prov'          =>$pameran_prov,
                'pameran_nasional'      =>$pameran_nasional,
                'pameran_internasional' =>$pameran_internasional,
                'wilayah_pemasaran'     =>$wilayah2,
                'legalitas_usaha'       =>$legalitas2,
            );
        $this->db->where('id_ekraf', $id);
        return $this->db->update('ekraf', $data);
	}

	public function deleteEkraf($id)
	{
        $this->db->where('id_ekraf', $id);
        $result = $this->db->delete('ekraf');
        return $result;
	}	

    public function getDataTeknologiEkraf()
    {
        $query=$this->db->query("SELECT *,e.nama as ne,te.nama as nte from ekraf_teknologi as et inner join ekraf as e on et.id_ekraf=e.id_ekraf inner join teknologi_ecommerce as te on et.id_teknologi=te.id_teknologi order by e.id_ekraf ASC");
        return $query->result();
    }

    public function findIdEkraf($nama)
    {
        $this->db->select('id_ekraf');
        $this->db->where('nama', $nama);
        $query=$this->db->get('ekraf');
        return $query->result_array();
    }

    public function newTeknologiEkraf($nama,$id_teknologi)
    {
        $data = array(
            'id_ekraf'           =>$nama,
            'id_teknologi'       =>$id_teknologi,
        );

        return $this->db->insert('ekraf_teknologi', $data);
    }

    public function updateTeknologiEkraf($id,$nama,$id_teknologi)
    {
        $data = array(
            'id_ekraf'           =>$nama,
            'id_teknologi'       =>$id_teknologi,
        );
        $this->db->where('id_ekraf_teknologi', $id);
        return $this->db->update('ekraf_teknologi', $data);
    }

    public function deleteEkrafTeknologi($id)
    {
        $this->db->where('id_ekraf_teknologi', $id);
        $result = $this->db->delete('ekraf_teknologi');
        return $result;
    }

    public function getEkraf()
    {
        $query=$this->db->get('ekraf');
        return $query->result();
    }

    public function newGaleri($id,$judul,$source)
    {
        $data = array(
            'id_ekraf'        =>$id,
            'judul'           =>$judul,
            'url'             =>$source,
        );
       return $this->db->insert('galeri_produk', $data);
    }

    public function getListGaleri($id)
    {
        $this->db->where('id_ekraf', $id);
        $query=$this->db->get('galeri_produk');
        return $query->result();
    }

    public function updateGaleri($id,$judul,$source)
    {
        $data = array(
            'judul'           =>$judul,
            'url'             =>$source,
        );
        $this->db->where('id', $id);
       return $this->db->update('galeri_produk', $data);
    }
    public function deleteGaleri($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->delete('galeri_produk');
        return $result;
    }

    public function getGekraf($id)
    {
        $query = $this->db->query("SELECT * from ekraf where id_ekraf='$id'");
        return $query->result_array();
    }

    public function updateProfile($id,$nama,$username,$email,$hp)
    {
        $data = array(
                'nama'                   =>$nama,
                'username'                   =>$username,
                'email'                   =>$email,
                'no_hp'                   =>$hp,
            );
        $this->db->where('id_user', $id);
        $result = $this->db->update('user', $data);
        return $result;
    }

    public function getPass($id)
    {
        $this->db->select('password');
        $this->db->where('id_user', $id);
        $query=$this->db->get('user');
        return $query->result_array();
    }

    public function changePass($id,$passold,$passnew)
    {
         $data = array( 'password'=>$passnew );

        $this->db->where('id_user', $id);
        $this->db->where('password', $passold);
        $result = $this->db->update('user', $data);
        return $result;
    }
}

/* End of file Ekraf_Model.php */
/* Location: ./application/models/Ekraf_Model.php */