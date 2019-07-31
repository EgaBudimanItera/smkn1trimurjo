<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelas extends CI_Controller {

	public function index() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['kelas'] = $this->App_model->get_kelas();
			$d['judul'] = 'Data Kelas';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('kelas/kelas_tabel.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function add() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['get_keahlian']	= $this->App_model->get_keahlian();
			$d['get_guru']	= $this->App_model->get_guru();
			$d['judul'] = 'Tambah Data Kelas';	
			$d['tipe'] = 'add';
			$d['id_kelas'] = '' ;
			$d['kode_kelas'] = '';
			$d['tingkat'] = '';
			$d['id_keahlian'] = '';
			$d['wali_kelas'] = '';
			
			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('kelas/kelas_input');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function edit($id=null) {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$where['id_kelas'] = $id;
			$get_id = $this->db->query("SELECT a.*,b.* FROM (SELECT * FROM tbl_kelas)a,(SELECT * FROM tbl_keahlian)b WHERE a.id_keahlian=b.id_keahlian AND a.id_kelas='$where[id_kelas]'")->row();		
			$d['judul'] = 'Edit Data Kelas';			
			$d['tipe'] = 'edit';
			$d['get_keahlian']	= $this->App_model->get_keahlian();
			$d['get_guru']	= $this->App_model->get_guru();
			
			$d['id_kelas'] = $get_id->id_kelas;
			$d['kode_kelas'] = $get_id->kode_kelas;
			$d['tingkat'] = $get_id->tingkat;
			$d['id_keahlian'] = $get_id->id_keahlian;
			$d['wali_kelas'] = $get_id->wali_kelas;
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('kelas/kelas_input');
			$this->load->view('bottom');			
		} else {
			redirect("login");
		}
	}


	public function save() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$tipe = $this->input->post("tipe");	
			$where['id_kelas'] = $this->input->post('id_kelas');
			$in['kode_kelas'] = $this->input->post('kode_kelas');
			$in['tingkat'] = $this->input->post('tingkat');
			$in['id_keahlian'] = $this->input->post('id_keahlian');
			$in['wali_kelas'] = $this->input->post('wali_kelas');
			
			if($tipe == "add") {				
				$this->db->insert("tbl_kelas",$in);
				$this->session->set_flashdata("success","Input Data Kelas Berhasil");
				redirect("kelas");
			} 
			elseif($tipe = 'edit') {
				$this->db->update("tbl_kelas",$in,$where);
				$this->session->set_flashdata("success","Edit Data Kelas Berhasil");
				redirect("kelas");		
			} else {
				redirect("kelas");
			}
		} else {
			redirect("login");
		}
	}

	public function hapus($id) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$this->db->delete("tbl_kelas",array('id_kelas' => $id));				
			$this->session->set_flashdata("success","Hapus Data Kelas Berhasil");
			redirect("kelas");			
		} else {
			redirect("login");
		}
	}
}
