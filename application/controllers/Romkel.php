<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Romkel extends CI_Controller
{
	
	public function index() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['romkel'] = $this->App_model->get_romkel();
			$d['judul'] = 'Data Rombongan Kelas';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('romkel/romkel_tabel.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}


	function get_kelas_bykeah($id_keahlian){
		$q = $this->db->query("SELECT * FROM tbl_kelas WHERE id_keahlian='$id_keahlian'");
		$data = "<option value=''>Pilih Kelas</option>";
		foreach ($q->result() as $value) {
			$data .="<option value='".$value->id_kelas."'> Kelas : ".$value->tingkat." || Kelas : ".$value->kode_kelas."</option>";
		}
		echo $data;
	}
	function get_siswa_bykeah($id_keahlian){
		$q = $this->db->query("SELECT siswa.id_siswa,siswa.nama_siswa FROM 
(SELECT * FROM tbl_keahlian_siswa)keahlian_siswa,
(SELECT * FROM tbl_siswa)siswa 
WHERE keahlian_siswa.id_siswa=siswa.id_siswa AND keahlian_siswa.id_keahlian='$id_keahlian' AND siswa.id_siswa NOT IN(SELECT id_siswa FROM tbl_romkel)");
		foreach ($q->result_array() as $value) {
			$data ="<option value='".$value['id_siswa']."'>".$value['nama_siswa']."</option>";
			echo $data;
		}
	}

	public function add() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['keahlian'] = $this->App_model->get_keahlian();
			$d['judul'] = 'Tambah Rombongan Kelas';	
			$d['tipe'] = 'add';

			$d['id_romkel'] = '';
			$d['tingkat'] = '';
			$d['id_siswa'] = '' ;
			$d['nis'] = '';
			$d['nama_siswa'] = '' ;
			$d['id_keahlian'] = '';
			$d['nama_keahlian'] = '';
			$d['wali_kelas'] = '';

			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('romkel/romkel_input');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function edit($id=null) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$d['keahlian'] = $this->App_model->get_keahlian();
			$where['id_romkel'] = $id;
			$get_id = $this->db->query("SELECT romkel.*,kelas.*,keahlian.*,wali_kelas.*,siswa.* FROM
(SELECT * FROM tbl_romkel)romkel,
(SELECT * FROM tbl_kelas)kelas,
(SELECT * FROM tbl_keahlian)keahlian,
(SELECT * FROM tbl_guru)wali_kelas,
(SELECT * FROM tbl_siswa)siswa
WHERE romkel.id_kelas=kelas.id_kelas AND romkel.id_siswa=siswa.id_siswa AND kelas.id_keahlian=keahlian.id_keahlian AND
kelas.wali_kelas=wali_kelas.nip AND romkel.id_romkel='$where[id_romkel]'")->row();		
			$d['judul'] = 'Edit Data Siswa';			
			$d['tipe'] = 'edit';

			$d['id_romkel'] = $get_id->id_romkel;
			$d['tingkat'] = $get_id->tingkat;
			$d['id_siswa'] = $get_id->id_siswa;
			$d['nis'] = $get_id->nis;
			$d['nama_siswa'] = $get_id->nama_siswa;
			$d['id_keahlian'] = $get_id->id_keahlian;
			$d['nama_keahlian'] = $get_id->nama_keahlian;
			$d['wali_kelas'] = $get_id->wali_kelas;

			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('romkel/romkel_input');
			$this->load->view('bottom');			
		} else {
			redirect("login");
		}
	}


	public function save() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$tipe = $this->input->post("tipe");	
			$where['id_romkel'] = $this->input->post('id_romkel');

			$id_kelas =  $this->input->post('kelas');
			$id_siswa =  $this->input->post('id_siswa');
		
			if($tipe == "add") {
				foreach ($id_siswa as $i => $value) {
					$data = array(
						'id_kelas' => $id_kelas,
						'id_siswa' => $value
					);
					$this->db->insert("tbl_romkel",$data);
				}
				$this->session->set_flashdata("success","Input Data Siswa Berhasil");
				redirect("romkel");
			} elseif($tipe = 'edit') {
				$this->db->update("tbl_romkel",$in,$where);
				$this->session->set_flashdata("success","Edit Data Siswa Berhasil");
				redirect("romkel");		
			} else {
				redirect("romkel");
			}
		} else {
			redirect("login");
		}
	}

	public function hapus($id) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$this->db->delete("tbl_siswa",array('id_siswa' => $id));				
			$this->session->set_flashdata("success","Hapus Data Siswa Berhasil");
			redirect("siswa");			
		} else {
			redirect("login");
		}
	}
}