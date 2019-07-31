<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class metode extends CI_Controller {

	public function index() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['metode'] = $this->App_model->get_metode();
			$d['judul'] = 'Data Teknik Penilaian';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('metode/metode_tabel.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function add() 
	{
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") 
		{
			$d['judul'] = 'Tambah Data Teknik Penilaian';	
			$d['tipe'] = 'add';
			$d['id_metode'] = '' ;
			$d['kompetensi_penilaian'] = '';
			$d['nama_metode_penilaian'] = '' ;
			$d['id_ajaran'] = '' ;
			$d['ajaran'] = $this->App_model->get_ajaran_aktif();
			
			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('metode/metode_input');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function edit($id=null) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$where['id_metode'] = $id;
			$get_id = $this->db->query("SELECT metode.*,ajaran.* FROM
(SELECT * FROM tbl_metode)metode,
(SELECT * FROM tbl_ajaran)ajaran
WHERE metode.id_ajaran=ajaran.id_ajaran AND metode.id_metode='$where[id_metode]'")->row();		
			$d['judul'] = 'Edit Data Teknik Penilaian';			
			$d['tipe'] = 'edit';
			$d['id_metode'] = $get_id->id_metode;
			$d['kompetensi_penilaian'] = $get_id->kompetensi_penilaian;
			$d['nama_metode_penilaian'] = $get_id->nama_metode_penilaian;
			$d['id_ajaran'] = $get_id->id_ajaran ;
			$d['get_ajaran'] = $this->App_model->get_ajaran_aktif();

			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('metode/metode_input');
			$this->load->view('bottom');			
		} else {
			redirect("login");
		}
	}


	public function save() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$tipe = $this->input->post("tipe");	
			$where['id_metode'] = $this->input->post('id_metode');
			$in['kompetensi_penilaian'] = $this->input->post('kompetensi_penilaian');
			$in['nama_metode_penilaian'] = $this->input->post('nama_metode_penilaian');
			$in['id_ajaran'] = $this->input->post('id_ajaran');			
			
			if($tipe == "add") {				
				$this->db->insert("tbl_metode",$in);
				$this->session->set_flashdata("success","Input Metode Penilaian Berhasil");
				redirect("metode");
			} elseif($tipe = 'edit') {
				$this->db->update("tbl_metode",$in,$where);
				$this->session->set_flashdata("success","Edit Metode Penilaian Berhasil");
				redirect("metode");
			} else {
				redirect("metode");
			}
		} else {
			redirect("login");
		}
	}

	public function hapus($id) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$this->db->delete("tbl_metode",array('id_metode' => $id));				
			$this->session->set_flashdata("success","Hapus Metode Penilaian Berhasil");
			redirect("metode");			
		} else {
			redirect("login");
		}
	} 


}