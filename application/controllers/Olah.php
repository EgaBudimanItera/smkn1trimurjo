<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olah extends CI_Controller {

	public function index() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['Olah'] = $this->App_model->get_olah();
			$d['judul'] = 'Data Olah Kelas';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('Olah/olah_tabel.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function add() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['judul'] = 'Tambah Olah Kelas';	
			$d['tipe'] = 'add';

			$d['id_olah'] = '' ;
			$d['nip'] = '';
			$d['nama_guru'] = '';
			$d['id_kelas'] = '';
			$d['kode_kelas'] = '';
			$d['nama_kelas'] = '';
			$d['id_mapel'] = '';
			$d['kode_mapel'] = '';
			$d['nama_mapel'] = '';
			$d['get_guru'] = $this->App_model->get_guru();
			$d['get_mapel'] = $this->App_model->get_mapel();
			$d['get_kelas'] = $this->App_model->get_kelas();
						

			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('Olah/Olah_input');
			$this->load->view('bottom');


		}
		else {
			redirect("login");
		}
	}

	public function edit($id=null) {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$where['id_olah'] = $id;
			$get_id = $this->db->query("SELECT a.*,b.*,c.*,d.*,e.* FROM (SELECT * FROM tbl_olah)a, (SELECT * FROM tbl_kelas)b, (SELECT * FROM tbl_mapel)c, (SELECT * FROM tbl_guru)d,(SELECT * FROM tbl_paket_keahlian)e WHERE a.nip=d.nip AND a.id_mapel=c.id_mapel AND a.id_kelas=b.id_kelas AND b.id_paket_keahlian=e.id_paket_keahlian AND a.id_olah='$where[id_olah]'")->row();		
			$d['judul'] = 'Edit Olah Kelas';			
			$d['tipe'] = 'edit';
			
			$d['id_olah'] = $get_id->id_olah;
			$d['nip'] = $get_id->nip;
			$d['nama_guru'] = $get_id->nama_guru;
			$d['id_kelas'] = $get_id->id_kelas;
			$d['kode_kelas'] = $get_id->kode_kelas;
			$d['nama_kelas'] = $get_id->nama_paket_keahlian;
			$d['id_mapel'] = $get_id->id_mapel;
			$d['kode_mapel'] = $get_id->kode_mapel;
			$d['nama_mapel'] = $get_id->nama_mapel;
			
			$d['get_guru'] 		= $this->App_model->get_guru();
			$d['get_mapel']		= $this->App_model->get_mapel();
			$d['get_kelas'] = $this->App_model->get_kelas();

			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('Olah/Olah_input');
			$this->load->view('bottom');			
		} else {
			redirect("login");
		}
	}


	public function save() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$tipe = $this->input->post("tipe");	
			$where['id_olah'] = $this->input->post('id_olah');
			$in['nip'] = $this->input->post('nip');
			$in['id_mapel'] = $this->input->post('id_mapel');
			$in['id_kelas'] = $this->input->post('id_kelas');

			
			if($tipe == "add") {
				$this->db->insert("tbl_olah",$in);
				$this->session->set_flashdata("success","Olah Kelas Berhasil");
				redirect("Olah");
			} 
			elseif($tipe = 'edit') {
				$this->db->update("tbl_olah",$in,$where);
				$this->session->set_flashdata("success","Edit Olah Kelas Berhasil");
				redirect("Olah");
			} else {
				redirect("Olah");
			}
		} else {
			redirect("login");
		}
	}

	public function hapus($id) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$this->db->delete("tbl_olah",array('id_olah' => $id));				
			$this->session->set_flashdata("success","Hapus Data Olah Kelas Berhasil");
			redirect("Olah");			
		} else {
			redirect("login");
		}
	}
}
