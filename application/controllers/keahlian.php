<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keahlian extends CI_Controller {

	public function index() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['keahlian'] = $this->App_model->keahlian();
			$d['judul'] = 'Data keahlian';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('keahlian/keahlian_tabel');
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
			$d['judul'] 		= 'Tambah Data keahlian / Paket Keahlian';	
			$d['tipe'] 			= 'add';
			$d['id_keahlian'] 	= '' ;
			$d['nama_keahlian'] 	= '' ;
			$d['guru_kompetensi'] 	= '' ;
			$d['nama_guru'] 	= '' ;
			$d['get_guru'] = $this->App_model->get_guru();
			
			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('keahlian/keahlian_input');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function edit($id=null) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$where['id_keahlian'] = $id;
			$get_id = $this->db->query("SELECT a.*,b.* FROM (SELECT * FROM tbl_keahlian)a, (SELECT * FROM tbl_guru)b WHERE a.guru_kompetensi=b.nip AND a.id_keahlian='$where[id_keahlian]'")->row();		
			$d['judul'] = 'Edit Data keahlian';			
			$d['tipe'] = 'edit';
			$d['id_keahlian'] 	= $get_id->id_keahlian;
			$d['nama_keahlian'] 	= $get_id->nama_keahlian;
			$d['guru_kompetensi'] 	= $get_id->guru_kompetensi;
			$d['nama_guru'] 	= $get_id->nama_guru;
			$d['get_guru'] = $this->App_model->get_guru();

			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('keahlian/keahlian_input');
			$this->load->view('bottom');			
		} else {
			redirect("login");
		}
	}


	public function save() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$tipe = $this->input->post("tipe");	
			$where['id_keahlian'] = $this->input->post('id_keahlian');
			$in['guru_kompetensi'] = $this->input->post('guru_kompetensi');
			$in['nama_keahlian'] = $this->input->post('nama_keahlian');
			
			if($tipe == "add") {
				$this->db->insert("tbl_keahlian",$in);
				$this->session->set_flashdata("success","Input keahlian Berhasil");
				redirect("keahlian");
			} elseif($tipe = 'edit') {
				$this->db->update("tbl_keahlian",$in,$where);
				$this->session->set_flashdata("success","Edit keahlian Berhasil");
				redirect("keahlian");		
			} else {
				redirect("keahlian");
			}
		} else {
			redirect("login");
		}
	}

	public function hapus($id) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$this->db->delete("tbl_keahlian",array('id_keahlian' => $id));				
			$this->session->set_flashdata("success","Berhasil");
			redirect("keahlian");			
		} else {
			redirect("login");
		}
	} 


}
