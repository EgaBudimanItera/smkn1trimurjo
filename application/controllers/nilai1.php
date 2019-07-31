<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nilai1 extends CI_Controller {

	public function index() {
		if($this->session->userdata('hak_akses') != "") {
			$d['nilai1'] = $this->App_model->get_nilai1();
			$d['judul'] = 'Data Nilai Pengetahuan';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('nilai1/tabel_nilai1.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function add() {
		if($this->session->userdata('hak_akses') != "") {
			$d['judul'] 		= 'Tambah Nilai Siswa';	
			$d['tipe'] 			= 'add';

			$d['id_nilai1']		= '';
			$d['nis'] 			= '';
			$d['nama_siswa'] 	= '';
			$d['kode_guru'] 	= '';
			$d['kode_mapel'] 	= '';

			$d['uh1'] 		= '';
			$d['uh2'] 		= '';
			$d['uh3'] 		= '';
			$d['uh4'] 		= '';
			$d['uh5'] 		= '';

			$d['harian'] 		= '';
			$d['proyek'] 		= '';
			$d['portofolio'] 	= '';
			$d['uts'] 	= '';
			$d['uas'] 	= '';
			$d['akhir'] 		= '';
			$d['predikat'] 		= '';

			
			$d['get_siswa'] 	= $this->App_model->get_siswa();
			$d['get_guru'] 		= $this->App_model->get_guru();
			$d['get_mapel']		= $this->App_model->get_mapel();
			
			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('nilai1/input_nilai1');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function edit($id=null) {
		if($this->session->userdata('hak_akses') != "")  {
			$where['id_nilai1'] = $id;
			$get_id = $this->db->get_where("tbl_nilai1",$where)->row();		
			$d['judul'] = 'Edit Nilai Siswa';			
			$d['tipe'] = 'edit';

			$d['id_nilai1'] = $get_id->id_nilai1;
			$d['nis'] = $get_id->nis;
			$d['nama_siswa'] = $get_id->nama_siswa;
			$d['kode_guru'] = $get_id->kode_guru;
			$d['kode_mapel'] = $get_id->kode_mapel;

			$d['uh1'] = $get_id->uh1;
			$d['uh2'] = $get_id->uh2;
			$d['uh3'] = $get_id->uh3;
			$d['uh4'] = $get_id->uh4;
			$d['uh5'] = $get_id->uh5;
			
			$d['harian'] = $get_id->harian;
			$d['proyek'] = $get_id->proyek;
			$d['portofolio'] = $get_id->portofolio;
			$d['uts'] = $get_id->uts;
			$d['uas'] = $get_id->uas;

			$d['akhir'] = $get_id->akhir;
			$d['predikat'] = $get_id->predikat;
			$d['get_siswa'] 	= $this->App_model->get_siswa();
			$d['get_guru'] 		= $this->App_model->get_guru();
			$d['get_mapel']		= $this->App_model->get_mapel();

			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('nilai1/input_nilai1');
			$this->load->view('bottom');			
		} else {
			redirect("login");
		}
	}


	public function save() {
		if($this->session->userdata('hak_akses') != "") {
			$tipe = $this->input->post("tipe");	
			$where['id_nilai1'] = $this->input->post('id_nilai1');
			$in['nis'] = $this->input->post('nis');
			$in['nama_siswa'] = $this->input->post('nama_siswa');
			$in['kode_guru'] = $this->input->post('kode_guru');
			$in['kode_mapel'] = $this->input->post('kode_mapel');

			$in['uh1'] = $this->input->post('uh1');
			$in['uh2'] = $this->input->post('uh2');
			$in['uh3'] = $this->input->post('uh3');
			$in['uh4'] = $this->input->post('uh4');
			$in['uh5'] = $this->input->post('uh5');

			$in['harian'] = $this->input->post('harian');
			$in['proyek'] = $this->input->post('proyek');			
			$in['portofolio'] = $this->input->post('portofolio');
			$in['uts'] = $this->input->post('uts');
			$in['uas'] = $this->input->post('uas');

			$in['akhir'] = $this->input->post('akhir');
			$in['predikat'] = $this->input->post('predikat');		
			
			if($tipe == "add") {				
				$this->db->insert("tbl_nilai1",$in);
				$this->session->set_flashdata("success","Input Nilai Berhasil");
				redirect("nilai1");
			} 
			elseif($tipe = 'edit') {
				$this->db->update("tbl_nilai1",$in,$where);
				$this->session->set_flashdata("success","Edit Nilai Berhasil");
				redirect("nilai1");		
			} else {
				redirect("nilai1");
			}
		} else {
			redirect("login");
		}
	}

	public function hapus($id) {
		if($this->session->userdata('hak_akses') != "" || $id != null) {
			$this->db->delete("tbl_nilai1",array('id_nilai1' => $id));				
			$this->session->set_flashdata("success","Hapus Nilai Berhasil");
			redirect("nilai1");			
		} else {
			redirect("login");
		}
	} 
}
