<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Kelompok extends CI_Controller
{
	public function index() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['kelompok'] = $this->App_model->get_kelompok();
			$d['judul'] = 'Data Kelompok';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('kelompok/kelompok_tabel.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}
	public function add() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['judul'] = 'Tambah Data Kelompok';
			$d['tipe'] = 'add';
			$d['id_kelompok'] = '';
			$d['kelompok'] = '';
			$d['ket_kelompok'] = '';
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('kelompok/kelompok_input.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}
	public function edit($id=null) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$where['id_kelompok'] = $id;
			$get_id = $this->db->get_where("tbl_kelompok",$where)->row();		
			$d['judul'] = 'Edit Data Kelompok';			
			$d['tipe'] = 'edit';
			$d['id_kelompok'] = $get_id->id_kelompok;
			$d['kelompok'] = $get_id->kelompok;
			$d['ket_kelompok'] = $get_id->ket_kelompok;

			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('kelompok/kelompok_input');
			$this->load->view('bottom');			
		} else {
			redirect("login");
		}
	}


	public function save() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$tipe = $this->input->post("tipe");	
			$where['id_kelompok'] = $this->input->post('id_kelompok');

			$in['kelompok'] =  $this->input->post('kelompok');
			$in['ket_kelompok'] =  $this->input->post('ket_kelompok');
		
			if($tipe == "add") {				
				$this->db->insert("tbl_kelompok",$in);
				$this->session->set_flashdata("success","Input Data Kelompok Berhasil");
				redirect("siswa");
			} elseif($tipe = 'edit') {
				$this->db->update("tbl_kelompok",$in,$where);
				$this->session->set_flashdata("success","Edit Data Kelompok Berhasil");
				redirect("kelompok");		
			} else {
				redirect("kelompok");
			}
		} else {
			redirect("login");
		}
	}

	public function hapus($id) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$this->db->delete("tbl_kelompok",array('id_kelompok' => $id));				
			$this->session->set_flashdata("success","Hapus Data Kelompok Berhasil");
			redirect("kelompok");			
		} else {
			redirect("login");
		}
	}
}