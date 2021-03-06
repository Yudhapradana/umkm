<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemilikEkraf_Model extends CI_Model {

	public function getData()
	{
		$query=$this->db->query("SELECT *,o.nama as name, e.nama as ne from user as o inner join ekraf as e on o.id_ekraf=e.id_ekraf where o.role='ekraf' or o.role='null' order by o.nama ASC");
		return $query->result();	
	}

    public function getDataWaiting()
    {
        $query=$this->db->query("SELECT * from user where role='ekraf' and id_ekraf is null or role is null and id_ekraf is null order by nama asc");
        return $query->result();     
    }	

	public function findIdEkraf($ekraf)
	{
		$this->db->select('id_ekraf');
		$this->db->where('nama', $ekraf);
		$query=$this->db->get('ekraf');
		return $query->result_array();
	}

	public function newPemilikEkraf($nama,$ekraf3,$email,$hp,$username,$password)
	{
		$data = array(
            'nama'               	=>$nama,
            'id_ekraf'              =>$ekraf3,
            'email'               	=>$email,
            'no_hp'               	=>$hp,
            'username'              =>$username,
            'password'              =>$password,
            'role'					=>"ekraf",
        );

        return $this->db->insert('user', $data);
	}

	public function updatePemilikEkraf($id,$nama,$ekraf3,$email,$hp,$username,$password)
	{
		$data = array(
            'nama'               	=>$nama,
            'id_ekraf'              =>$ekraf3,
            'email'               	=>$email,
            'no_hp'               	=>$hp,
            'username'              =>$username,
            'password'              =>$password,
            'role'					=>"ekraf",
        );
		$this->db->where('id_user', $id);
        return $this->db->update('user', $data);
	}

	public function deletePemilikEkraf($id)
	{
		$this->db->where('id_user', $id);
        $result = $this->db->delete('user');
        return $result;
	}
	
	public function getDataEkraf($id)
	{
		$query=$this->db->query("SELECT *, e.nama as ne, d.nama as nd, s.nama as ns, t.nama as nt, u.nama as nu, k.nama as kec, o.nama as kota, p.nama as provinsi from ekraf as e inner join desa_kelurahan as d on e.id_desa_kelurahan=d.id_desa_kelurahan inner join kecamatan as k on d.id_kecamatan=k.id_kecamatan inner join kab_kota as o on k.id_kab_kota=o.id_kab_kota inner join provinsi as p on o.id_provinsi=p.id_provinsi inner join sentra as s on e.id_sentra=s.id_sentra inner join sumber_dana as u on e.id_sumber_dana=u.id_sumber_dana inner join status_pemilik as t on e.id_status_pemilik=t.id_status_pemilik where e.id_ekraf='$id' order by e.nama ASC");
		return $query->result();
	}

	public function countEkraf($id)
	{
		$query = $this->db->query("SELECT count(*) from ekraf where id_ekraf='id'");
		return $query->result();
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

	public function findIdDesa($desa,$kecamatan)
    {
        $query = $this->db->query("SELECT d.id_desa_kelurahan as id from desa_kelurahan as d inner join kecamatan as k on d.id_kecamatan=k.id_kecamatan where d.nama='$desa' and k.nama='$kecamatan'");
        return $query->result_array();
    }

	public function getDataTeknologiEkraf($id)
    {
        $query=$this->db->query("SELECT * ,te.nama as nte from ekraf_teknologi as et inner join ekraf as e on et.id_ekraf=e.id_ekraf inner join teknologi_ecommerce as te on et.id_teknologi=te.id_teknologi where et.id_ekraf='$id' ");
        return $query->result();
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

    public function updateId($id1,$id2)
    {
    	$data = array(
            'id_ekraf'           =>$id2,
        );
        $this->db->where('id_user', $id1);
       return $this->db->update('user', $data);
    }

    public function confirmation($id)
    {
        $data = array(
            'role'           =>"ekraf",
        );
        $this->db->where('id_user', $id);
       return $this->db->update('user', $data);
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

/* End of file PemilikEkraf_Model.php */
/* Location: ./application/models/PemilikEkraf_Model.php */