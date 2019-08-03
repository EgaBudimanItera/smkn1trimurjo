<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_model extends CI_Model {

	public function cekLogin($in) {
		$username = $in['username'];
		$password = md5($in['password']);

		$q_login = $this->db->query("SELECT * FROM tbl_login WHERE username='$username' AND password='$password' AND aktif='Y'");
		if ($q_login->num_rows() > 0) {
			foreach ($q_login->result() as $data) {
				$session['id'] = $data->id_login;
				$session['username'] = $data->username;
				$session['nama'] = $data->nama;
				$session['avatar'] = $data->avatar;
				$session['hak_akses'] = $data->hak_akses;
				$session['aktif'] = $data->aktif;
				$this->session->set_userdata($session);
			}
			redirect("login");
		}else{
			$this->session->set_flashdata("error","Gagal Login, Username dan Password Salah");
			redirect("login");
		}
	}

	public function akun()
	{
			$q = $this->db->query("SELECT * FROM tbl_login ORDER BY id_login DESC");
			return $q;
	}

	public function get_ajaran()
	{
		$q = $this->db->query("SELECT * FROM tbl_ajaran");
			return $q;
	}

	public function get_ajaran_aktif()
	{
			$q = $this->db->query("SELECT * FROM tbl_ajaran WHERE status='A'");
			return $q;
	}

	public function get_kelas() 
		{
			$q = $this->db->query("SELECT a.*,b.* FROM (SELECT * FROM tbl_kelas)a,(SELECT * FROM tbl_keahlian)b WHERE a.id_keahlian=b.id_keahlian ORDER BY a.id_kelas DESC");
			return $q;
		}

	public function get_kelompok()
	{
		$q = $this->db->query("SELECT * FROM tbl_kelompok ORDER BY id_kelompok ASC");
			return $q;
	}

	public function get_keahlian()
	{
		$q = $this->db->query("SELECT * FROM tbl_keahlian ORDER BY id_keahlian DESC");
			return $q;
	}

	public function get_guru() 
		{
			$q = $this->db->query("SELECT a.*, b.* FROM
(SELECT * FROM tbl_guru)a,
(SELECT * FROM tbl_login)b
WHERE b.username=a.nip ORDER BY a.nip DESC");
			return $q;
		}

	public function get_siswa() 
		{
			$q = $this->db->query("SELECT a.*, b.* FROM
(SELECT * FROM tbl_siswa)a,
(SELECT * FROM tbl_login)b
WHERE b.username=a.nis ORDER BY a.id_siswa DESC");
			return $q;
		}

	public function get_metode() 
		{
			$q = $this->db->query("SELECT metode.*,ajaran.* FROM
(SELECT * FROM tbl_metode)metode,
(SELECT * FROM tbl_ajaran)ajaran
WHERE metode.id_ajaran=ajaran.id_ajaran ORDER BY metode.id_metode DESC");
			return $q;
		}

		public function keahlian()
		{
			$q = $this->db->query("SELECT a.*,b.* FROM
(SELECT * FROM tbl_keahlian)a,
(SELECT * FROM tbl_guru)b
WHERE a.guru_kompetensi=b.nip ORDER BY id_keahlian DESC");
			return $q;
		}

	public function get_mapel() 
		{
			$q = $this->db->query("SELECT a.*,b.* FROM
(SELECT * FROM tbl_mapel)a,
(SELECT * FROM tbl_kelompok)b
WHERE a.id_kelompok=b.id_kelompok ORDER BY id_mapel DESC");
			return $q;
		}
	public function get_petugas() 
		{
			$q = $this->db->query("SELECT a.*, b.* FROM
(SELECT * FROM tbl_petugas)a,
(SELECT * FROM tbl_login)b
WHERE b.username=a.nik ORDER BY a.id_petugas DESC");
			return $q;
		}

		public function jursiswa()
		{
			$q = $this->db->query("SELECT a.*,b.*,c.* FROM
(SELECT * FROM tbl_keahlian_siswa)a,
(SELECT * FROM tbl_siswa)b,
(SELECT * FROM tbl_keahlian)c
WHERE a.id_siswa=b.id_siswa AND a.id_keahlian=c.id_keahlian ORDER BY a.id_keahlian_siswa DESC");
			return $q;
		}
		public function jurmapel()
		{
			$q = $this->db->query("SELECT a.*,b.*,c.* FROM
(SELECT * FROM tbl_mapel_keahlian)a,
(SELECT * FROM tbl_mapel)b,
(SELECT * FROM tbl_keahlian)c
WHERE a.id_mapel=b.id_mapel AND a.id_keahlian=c.id_keahlian ORDER BY a.id_mapel_keahlian DESC");
			return $q;
		}

		public function detail_mapel()
		{
			$q = $this->db->query("SELECT a.*,b.*,c.*,d.* FROM
(SELECT * FROM tbl_detail_mapel)a,
(SELECT * FROM tbl_mapel_keahlian)b,
(SELECT * FROM tbl_keahlian)c,
(SELECT * FROM tbl_mapel)d
WHERE a.id_mapel_keahlian=b.id_mapel_keahlian AND b.id_keahlian=c.id_keahlian AND b.id_mapel=d.id_mapel ORDER BY a.id_detail_mapel DESC");
			return $q;
		}

		public function get_romkel()
		{
			$q = $this->db->query("SELECT romkel.*,kelas.*,keahlian.*,wali_kelas.*,siswa.* FROM
(SELECT * FROM tbl_romkel)romkel,
(SELECT * FROM tbl_kelas)kelas,
(SELECT * FROM tbl_keahlian)keahlian,
(SELECT * FROM tbl_guru)wali_kelas,
(SELECT * FROM tbl_siswa)siswa
WHERE romkel.id_kelas=kelas.id_kelas AND romkel.id_siswa=siswa.id_siswa AND kelas.id_keahlian=keahlian.id_keahlian AND
kelas.wali_kelas=wali_kelas.nip");
			return $q;
		}
	public function get_olah() 
	{
			$q = $this->db->query("SELECT a.*,b.*,c.*,d.*,e.* FROM 
				(SELECT * FROM tbl_olah)a, (SELECT * FROM tbl_kelas)b, 
				(SELECT * FROM tbl_mapel)c, (SELECT * FROM tbl_guru)d,
				(SELECT * FROM tbl_keahlian)e 
				WHERE a.nip=d.nip AND a.id_mapel=c.id_mapel AND a.id_kelas=b.id_kelas AND b.id_keahlian=e.id_keahlian");
			return $q;
	}
	public function get_detail_nilai()
	{
			$q = $this->db->query("SELECT a.*,b.*,c.* FROM (SELECT * FROM tbl_detail_nilai)a, (SELECT * FROM tbl_kelas)b, (SELECT * FROM tbl_mapel)c WHERE a.id_mapel=c.id_mapel AND a.id_kelas=b.id_kelas");
			return $q;
	}

	public function nilai_pengetahuan()
	{
		$q = $this->db->query("SELECT a.*,c.*,b.*,b.*,g.*,h.*,i.*,j.* FROM
(SELECT * FROM tbl_romkel)a,
(SELECT * FROM tbl_siswa)b,
(SELECT * FROM tbl_nilai)c,
(SELECT * FROM tbl_ajaran)g,
(SELECT * FROM tbl_detail_mapel)h,
(SELECT * FROM tbl_mapel_keahlian)i,
(SELECT * FROM tbl_mapel)j
WHERE a.id_siswa=b.id_siswa AND c.id_siswa=b.id_siswa AND c.id_ajaran=g.id_ajaran AND c.id_detail_mapel=h.id_detail_mapel AND h.id_mapel_keahlian=i.id_mapel_keahlian AND i.id_mapel=j.id_mapel AND c.id_metode='1'");
			return $q;
	}
	public function nilai_keterampilan()
	{
		$q = $this->db->query("SELECT a.*,c.*,b.*,b.*,g.*,h.*,i.*,j.* FROM
(SELECT * FROM tbl_romkel)a,
(SELECT * FROM tbl_siswa)b,
(SELECT * FROM tbl_nilai)c,
(SELECT * FROM tbl_ajaran)g,
(SELECT * FROM tbl_detail_mapel)h,
(SELECT * FROM tbl_mapel_keahlian)i,
(SELECT * FROM tbl_mapel)j
WHERE a.id_siswa=b.id_siswa AND c.id_siswa=b.id_siswa AND c.id_ajaran=g.id_ajaran AND c.id_detail_mapel=h.id_detail_mapel AND h.id_mapel_keahlian=i.id_mapel_keahlian AND i.id_mapel=j.id_mapel AND c.id_metode='2'");
			return $q;
	}


	//Laporan
	public function pencarian_raport($id_ajaran,$id_kelas)
	{
		$q = $this->db->query("SELECT DISTINCT c.id_ajaran,b.id_siswa,b.nis,b.nama_siswa,g.periode_aktif,g.smt FROM
(SELECT * FROM tbl_romkel)a,
(SELECT * FROM tbl_siswa)b,
(SELECT * FROM nilai)c,
(SELECT * FROM tbl_ajaran)g
WHERE a.id_siswa=b.id_siswa AND c.id_siswa=b.id_siswa AND c.id_ajaran=g.id_ajaran AND c.id_ajaran='$id_ajaran' AND a.id_kelas='$id_kelas'");
		return $q;
	}


	public function data_grafik(){
		$q="SELECT AVG(akhir) as nilai,nama_keahlian as nama from tbl_nilai 
join tbl_ajaran on(tbl_nilai.id_ajaran=tbl_ajaran.id_ajaran)
join tbl_detail_mapel on(tbl_nilai.id_detail_mapel=tbl_detail_mapel.id_detail_mapel)
join tbl_mapel_keahlian on(tbl_detail_mapel.id_mapel_keahlian=tbl_mapel_keahlian.id_mapel_keahlian)
join tbl_keahlian on(tbl_mapel_keahlian.id_keahlian=tbl_keahlian.id_keahlian)
group by nama_keahlian
order by id_nilai asc";
		return $this->db->query($q);
	}
}