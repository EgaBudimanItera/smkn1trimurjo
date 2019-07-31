<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mapel extends CI_Controller {

	public function index() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['mapel'] = $this->App_model->get_mapel();
			$d['judul'] = 'Data Mata Pelajaran';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('mapel/mapel_tabel.php');
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
			$d['judul'] = 'Tambah Data Mata Pelajaran';	
			$d['tipe'] = 'add';
			$d['id_mapel'] = '' ;
			$d['kode_mapel'] = '';
			$d['nama_mapel'] = '' ;
			$d['kb'] = '' ;
			$d['kelompok'] = '';
			$d['get_kelompok'] = $this->App_model->get_kelompok();
			$d['keahlian'] = $this->App_model->get_keahlian();
			
			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('mapel/mapel_input');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function edit($id=null) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$where['id_mapel'] = $id;
			$get_id = $this->db->query("SELECT a.*,b.* FROM
(SELECT * FROM tbl_mapel)a,
(SELECT * FROM tbl_kelompok)b
WHERE a.id_kelompok=b.id_kelompok AND a.id_mapel='$where[id_mapel]'")->row();		
			$d['judul'] = 'Edit Data Mata Pelajaran';			
			$d['tipe'] = 'edit';
			$d['id_mapel'] = $get_id->id_mapel;
			$d['kode_mapel'] = $get_id->kode_mapel;
			$d['nama_mapel'] = $get_id->nama_mapel;
			$d['kb'] = $get_id->kb;
			$d['kelompok'] = $get_id->id_kelompok;
			$d['get_kelompok'] = $this->App_model->get_kelompok();
			$d['keahlian'] = $this->App_model->get_keahlian();

			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('mapel/mapel_input');
			$this->load->view('bottom');			
		} else {
			redirect("login");
		}
	}


	public function save() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$tipe = $this->input->post("tipe");	
			$where['id_mapel'] = $this->input->post('id_mapel');
			$in['kode_mapel'] = $this->input->post('kode_mapel');
			$in['nama_mapel'] = $this->input->post('nama_mapel');
			$in['kb'] = $this->input->post('kb');
			$in['id_kelompok'] = $this->input->post('kelompok');	
			
			if($tipe == "add") {		
				$this->db->insert("tbl_mapel",$in);
				$id_keahlian = $this->input->post('id_keahlian');
				$q = $this->db->query("SELECT id_mapel FROM tbl_mapel WHERE kode_mapel='$in[kode_mapel]'")->row();
				$id_mapel = $q->id_mapel;

				foreach ($id_keahlian as $i => $value) {
					$data = array(
								'id_keahlian' => $value,
								'id_mapel' => $id_mapel
					);
					$this->db->insert("tbl_mapel_keahlian",$data);
				}				
				$this->session->set_flashdata("success","Input Mata Pelajaran Berhasil");
				redirect("mapel");
			} elseif($tipe = 'edit') {
				$this->db->update("tbl_mapel",$in,$where);
				
				$this->session->set_flashdata("success","Edit Mata Pelajaran Berhasil");
				redirect("mapel");
			} else {
				redirect("mapel");
			}
		} else {
			redirect("login");
		}
	}

	public function hapus($id) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$this->db->delete("tbl_mapel",array('id_mapel' => $id));				
			$this->session->set_flashdata("success","Hapus Mata Pelajaran Berhasil");
			redirect("mapel");			
		} else {
			redirect("login");
		}
	} 


}
