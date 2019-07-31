<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas extends CI_Controller {

	public function index() {
		if($this->session->userdata('hak_akses') != "") {
			$d['petugas'] = $this->App_model->get_petugas();
			$d['judul'] = 'Data Petugas SMKN 1 Trimurjo';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('petugas/petugas_tabel.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function add() {
		if($this->session->userdata('hak_akses') != "") {
			$d['judul'] = 'Tambah Petugas';	
			$d['tipe'] = 'add';

			$d['id_petugas'] = '' ;
			$d['nik'] = '';
			$d['nama_lengkap'] = '' ;
			$d['jk'] ='';
			$d['alamat'] = '' ;
			$d['tlp'] = '' ;

			$d['password']	= "";
			$d['aktif']		= "Y";	
			
			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('petugas/petugas_input');
			$this->load->view('bottom');
		}
		else
		{
			redirect("login");
		}
	}

	public function edit($id=null) {
		if($this->session->userdata('hak_akses') != "" )
		{
			$where['id_petugas'] = $id;
			$get_id = $this->db->query("SELECT a.*, b.* FROM
(SELECT * FROM tbl_petugas)a,
(SELECT * FROM tbl_login)b
WHERE b.username=a.nik AND a.id_petugas='$where[id_petugas]'")->row();		
			$d['judul'] = 'Edit Data Petugas';			
			$d['tipe'] = 'edit';

			$d['id_petugas'] = $get_id->id_petugas;
			$d['nik'] = $get_id->nik;
			$d['nama_lengkap'] = $get_id->nama_lengkap;
			$d['jk'] = $get_id->jk;
			$d['alamat'] = $get_id->alamat;
			$d['tlp'] = $get_id->tlp;
			$d['aktif']		= $get_id->aktif;

			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('petugas/petugas_input');
			$this->load->view('bottom');			
		} else {
			redirect("login");
		}
	}


	public function save() {
		if($this->session->userdata('hak_akses') != "") {
			$tipe = $this->input->post("tipe");	
			$where['id_petugas'] = $this->input->post('id_petugas');
			$in['nik'] = $this->input->post('nik');
			$in['nama_lengkap'] = $this->input->post('nama_lengkap');
			$in['jk'] =  $this->input->post('jk');
			$in['alamat'] = $this->input->post('alamat');
			$in['tlp'] = $this->input->post('tlp');
			
			// Akun
			$where_akun['username'] = $this->input->post('nik');

			if ($this->input->post('aktif')!="") {
				$akun['aktif']	= $this->input->post('aktif');
			}else{
				$akun['aktif']	= "N";
			}

			$akun['username']		= $this->input->post('nik');
			$akun['nama']			= $this->input->post('nama_lengkap');
			$akun['hak_akses']		= 'Admin';
			$akun['avatar']			= substr($in['jk'], 0,1);
			
			if($tipe == "add") {
				$akun['password']		= md5($akun['username']);
				$this->db->insert("tbl_login",$akun);		
				$this->db->insert("tbl_petugas",$in);
				$this->session->set_flashdata("success","Input Data Petugas Berhasil");
				redirect("petugas");
			} elseif($tipe = 'edit') {
				if ($this->input->post('password')!="") {
					$akun['password']		= md5($this->input->post('password'));
					$this->db->update("tbl_petugas",$in,$where);
					$this->db->update("tbl_login",$akun,$where_akun);
					$this->session->set_flashdata("success","Edit Data Petugas Berhasil");
					redirect("petugas");
				}else{
					$this->db->update("tbl_petugas",$in,$where);
					$this->db->update("tbl_login",$akun,$where_akun);
					$this->session->set_flashdata("success","Berhasil");
					redirect("petugas");
				}		
			} else {
				redirect("petugas");
			}
		} else {
			redirect("login");
		}
	}

	public function hapus($id) {
		if($this->session->userdata('hak_akses') != "" || $id != null) {
			$q = $this->db->query("SELECT nik FROM tbl_petugas WHERE id_petugas='$id'")->row();
			$username = $q->nik;
			$this->db->delete("tbl_login",array('username' => $username));
			$this->db->delete("tbl_petugas",array('id_petugas' => $id));				
			$this->session->set_flashdata("success","Hapus Data Petugas Berhasil");
			redirect("petugas");			
		} else {
			redirect("login");
		}
	} 


}
