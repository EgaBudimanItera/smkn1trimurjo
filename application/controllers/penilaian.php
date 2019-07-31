<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class penilaian extends CI_Controller
{
	public function index() {
		redirect(base_url());
	}

	public function pengetahuan()
	{
		if($this->session->userdata('hak_akses') != "") {
			/*$d['pengetahuan'] = $this->App_model->get_nilai_pengetahuan();
			$d['judul'] = 'Data Nilai Pengetahuan';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('penilaian/pengetahuan/pengetahuan_tabel.php');
			$this->load->view('bottom');*/
			redirect(base_url());
		}
		else {
			redirect("login");
		}
	}

	public function add_pengetahuan()
	{
		if($this->session->userdata('hak_akses') != "") {
			$d['judul'] = 'Input Nilai Pengetahuan';
			$d['kat_nilai'] = 'pengetahuan';
			$d['tipe'] = 'add_pengetahuan';
			$d['kode_uh'] = $this->kode_otomatis->kode_uh();
			$d['kode_nilai'] = $this->kode_otomatis->kode_nilai();
			$d['ajaran'] = $this->App_model->get_ajaran_aktif();
			$d['romkel'] = $this->App_model->get_romkel();
			$d['nilai_pengetahuan'] = $this->App_model->nilai_pengetahuan();
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('penilaian/penilaian_input.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function keterampilan()
	{
		if($this->session->userdata('hak_akses') != "") {
			/*$d['judul'] = 'Data Nilai Keterampilan';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('penilaian/keterampilan/keterampilan_tabel.php');
			$this->load->view('bottom');*/
			redirect(base_url());
		}
		else {
			redirect("login");
		}
	}
	public function add_keterampilan()
	{
		if($this->session->userdata('hak_akses') != "") {
			$d['judul'] = 'Input Nilai Keterampilan';
			$d['kat_nilai'] = 'keterampilan';
			$d['tipe'] = 'add_keterampilan';
			$d['kode_uh'] = $this->kode_otomatis->kode_uh();
			$d['kode_nilai'] = $this->kode_otomatis->kode_nilai();
			$d['ajaran'] = $this->App_model->get_ajaran_aktif();
			$d['romkel'] = $this->App_model->get_romkel();
			$d['nilai_keterampilan'] = $this->App_model->nilai_keterampilan();
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('penilaian/penilaian_input.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}


	function get_mapel_by10($id_keahlian,$smt)
	{
		$id_keahlian = $id_keahlian;
		$smt = $smt;
		$q = $this->db->query("SELECT a.id_detail_mapel,d.nama_mapel FROM
(SELECT * FROM tbl_detail_mapel)a,
(SELECT * FROM tbl_mapel_keahlian)b,
(SELECT * FROM tbl_keahlian)c,
(SELECT * FROM tbl_mapel)d
WHERE a.id_mapel_keahlian=b.id_mapel_keahlian AND b.id_keahlian=c.id_keahlian AND b.id_mapel=d.id_mapel AND a.kelas_x='1' AND a.semester='$smt' AND b.id_keahlian='$id_keahlian'");
		foreach ($q->result() as $value) {
			echo $data ="<option value='".$value->id_detail_mapel."'>".$value->nama_mapel."</option>";
		}
	}
	function get_mapel_by11($id_keahlian,$smt)
	{
		$id_keahlian = $id_keahlian;
		$smt = $smt;
		$q = $this->db->query("SELECT a.id_detail_mapel,d.nama_mapel FROM
(SELECT * FROM tbl_detail_mapel)a,
(SELECT * FROM tbl_mapel_keahlian)b,
(SELECT * FROM tbl_keahlian)c,
(SELECT * FROM tbl_mapel)d
WHERE a.id_mapel_keahlian=b.id_mapel_keahlian AND b.id_keahlian=c.id_keahlian AND b.id_mapel=d.id_mapel AND a.kelas_xi='1' AND a.semester='$smt' AND b.id_keahlian='$id_keahlian'");
		foreach ($q->result() as $value) {
			echo $data ="<option value='".$value->id_detail_mapel."'>".$value->nama_mapel."</option>";
		}
	}
	function get_mapel_by12($id_keahlian,$smt)
	{
		$id_keahlian = $id_keahlian;
		$smt = $smt;
		$q = $this->db->query("SELECT a.id_detail_mapel,d.nama_mapel FROM
(SELECT * FROM tbl_detail_mapel)a,
(SELECT * FROM tbl_mapel_keahlian)b,
(SELECT * FROM tbl_keahlian)c,
(SELECT * FROM tbl_mapel)d
WHERE a.id_mapel_keahlian=b.id_mapel_keahlian AND b.id_keahlian=c.id_keahlian AND b.id_mapel=d.id_mapel AND a.kelas_xii='1' AND a.semester='$smt' AND b.id_keahlian='$id_keahlian'");
		foreach ($q->result() as $value) {
			echo $data ="<option value='".$value->id_detail_mapel."'>".$value->nama_mapel."</option>";
		}
	}


	public function save()
	{
		if($this->session->userdata('hak_akses') != "") {
			$kat_nilai = $this->input->post("kat_nilai");

			$in['id_nilai'] = $this->input->post('id_nilai');
			$in['id_ajaran'] = $this->input->post('id_ajaran');
			$in['semester'] = $this->input->post('smt');
			$in['id_detail_mapel'] = $this->input->post('id_detail_mapel');
			$in['id_siswa'] = $this->input->post('id_siswa');
			$in['kode_uh'] = $this->input->post('kode_uh');
			
			$uh['kode_uh'] = $this->input->post('kode_uh');
			$uh['uh1'] = $this->input->post('uh_1');
			$uh['uh2'] = $this->input->post('uh_2');
			$uh['uh3'] = $this->input->post('uh_3');
			$uh['uh4'] = $this->input->post('uh_4');
			$uh['uh5'] = $this->input->post('uh_5');

			$in['harian'] = $this->input->post('harian');
			$in['proyek'] = $this->input->post('proyek');
			$in['portofolio'] = $this->input->post('portofolio');
			$in['uts'] = $this->input->post('uts');
			$in['uas'] = $this->input->post('uas');
			$in['akhir'] = $this->input->post('akhir');
			$in['predikat'] = $this->input->post('predikat');
			$in['deskripsi'] = $this->input->post('deskripsi');

			$dn['id_nilai'] = $this->input->post('id_nilai');
			$dn['akhir'] = $this->input->post('akhir');
			$dn['predikat'] = $this->input->post('predikat');

			if ($kat_nilai == "pengetahuan") {
				$tipe = $this->input->post("tipe");				
				$in['id_metode'] = '1';
				$dn['id_metode'] = '1';
				
					$cek = $this->db->query("SELECT id_metode,id_detail_mapel,id_siswa FROM tbl_nilai WHERE id_metode='$in[id_metode]' AND semester='$in[semester]' AND id_detail_mapel='$in[id_detail_mapel]' AND id_siswa='$in[id_siswa]'");
				if ($tipe == "add_pengetahuan") {
					if ($cek->num_rows() >= 1) {
					 	$this->session->set_flashdata("error","Input Nilai Pengetahuan Gagal");
					}else{
						//tbl_nilai
						$this->db->insert("tbl_nilai",$in);
						//tbl_uh
						$this->db->insert("tbl_uh",$uh);
						$this->session->set_flashdata("success","Input Nilai Pengetahuan Berhasil");
						//tbl_detail_nilai
						$this->db->insert("tbl_detail_nilai",$dn);
					}
					redirect("penilaian/add_pengetahuan");
				}
			}
			if ($kat_nilai == "keterampilan") {
				$tipe = $this->input->post("tipe");				
				$in['id_metode'] = '2';
				
					$cek = $this->db->query("SELECT id_metode,id_detail_mapel,id_siswa FROM tbl_nilai WHERE id_metode='$in[id_metode]' AND semester='$in[semester]' AND id_detail_mapel='$in[id_detail_mapel]' AND id_siswa='$in[id_siswa]'");
				if ($tipe == "add_keterampilan") {
					if ($cek->num_rows() >= 1) {
					 	$this->session->set_flashdata("error","Input Nilai Keterampilan Gagal");
					}else{
						//tbl_nilai
						$this->db->insert("tbl_nilai",$in);
						//tbl_uh
						$this->db->insert("tbl_uh",$uh);
						$this->session->set_flashdata("success","Input Nilai Keterampilan Berhasil");
					}
					redirect("penilaian/add_keterampilan");
				}
			}
		}
		else {
			redirect("login");
		}
	}

	public function hapus_pengetahuan($id_nilai)
	{
		if($this->session->userdata('hak_akses') != "" && $id_nilai != null) {
			echo $id_nilai;
			$q = $this->db->query("SELECT kode_uh FROM tbl_nilai WHERE id_nilai='$id_nilai'")->row();
			//tbl_uh
			$kode_uh['kode_uh'] = $q->kode_uh;
			$del_uh = $this->db->delete("tbl_uh",$kode_uh);
			if ($del_uh) {
				$this->db->delete("tbl_nilai",array('id_nilai' => $id_nilai));
			}				
			$this->session->set_flashdata("success","Hapus Data Berhasil");
			redirect("penilaian/add_pengetahuan");
		}
		else {
			redirect("login");
		}
	}
	public function hapus_keterampilan($id_nilai)
	{
		if($this->session->userdata('hak_akses') != "" && $id_nilai != null) {
			echo $id_nilai;
			$q = $this->db->query("SELECT kode_uh FROM tbl_nilai WHERE id_nilai='$id_nilai'")->row();
			//tbl_uh
			$kode_uh['kode_uh'] = $q->kode_uh;
			$del_uh = $this->db->delete("tbl_uh",$kode_uh);
			if ($del_uh) {
				$this->db->delete("tbl_nilai",array('id_nilai' => $id_nilai));
			}				
			$this->session->set_flashdata("success","Hapus Data Berhasil");
			redirect("penilaian/add_keterampilan");
		}
		else {
			redirect("login");
		}
	}
}