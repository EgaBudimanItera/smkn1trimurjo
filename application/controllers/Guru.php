<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guru extends CI_Controller {

	public function index() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['guru'] 			= $this->App_model->get_guru();
			$d['judul'] 		= 'Data Guru SMKN 1 Trimurjo ';
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('guru/guru_tabel');
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
			$d['judul'] 	= 'Tambah Data guru';	
			$d['tipe'] 		= 'add';

			$d['nip'] 		= '';
			$d['nama_guru'] = '';
			$d['jk'] 		= '';
			$d['tgl'] 		= '';
			$d['alamat'] 	= '';
			$d['tlp'] 		= '';

			$d['password']	= "";
			$d['aktif']		= "Y";
		
			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('guru/guru_input');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function edit($id=null) {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin")
		{
			$where['nip'] = $id;
			$get_id = $this->db->query("SELECT a.*, b.* FROM
(SELECT * FROM tbl_guru)a,
(SELECT * FROM tbl_login)b
WHERE b.username=a.nip AND a.nip='$where[nip]'")->row();		
			$d['judul'] 	= 'Edit Data guru';			
			$d['tipe'] 		= 'edit';

			$d['nip'] 		= $get_id->nip;
			$d['nama_guru'] = $get_id->nama_guru;
			$d['jk'] 		= $get_id->jk;
			$d['tgl'] 		= $get_id->tgl;
			$d['alamat']	= $get_id->alamat;
			$d['tlp'] 		= $get_id->tlp;
			$d['aktif']		= $get_id->aktif;

			
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('guru/guru_input');
			$this->load->view('bottom');			
		} else {
			redirect("login");
		}
	}

	public function save() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$tipe = $this->input->post("tipe");	
			$where['nip'] 	= $this->input->post('nip');
			$in['nip'] 			= $this->input->post('nip');
			$in['nama_guru'] 	= $this->input->post('nama_guru');
			$in['jk']			= $this->input->post('jk');
			$in['tgl'] 			= $this->input->post('tgl');
			$in['alamat']		= $this->input->post('alamat');
			$in['tlp'] 			= $this->input->post('tlp');

			// Akun
			$where_akun['username'] = $this->input->post('nip');

			if ($this->input->post('aktif')!="") {
				$akun['aktif']	= $this->input->post('aktif');
			}else{
				$akun['aktif']	= "N";
			}

			$akun['username']		= $this->input->post('nip');
			$akun['nama']			= $this->input->post('nama_guru');
			$akun['hak_akses']		= 'Guru';
			$akun['avatar']			= substr($in['jk'], 0,1);
			
			if($tipe == "add") {
				$akun['password']		= md5($akun['username']);
				$this->db->insert("tbl_guru",$in);
				$this->db->insert("tbl_login",$akun);
				$this->session->set_flashdata("success","Input Data Guru Berhasil");
				redirect("guru");
			} elseif($tipe = 'edit') {
				if ($this->input->post('password')!="") {
					$akun['password']		= md5($this->input->post('password'));
					$this->db->update("tbl_guru",$in,$where);
					$this->db->update("tbl_login",$akun,$where_akun);
					$this->session->set_flashdata("success","Edit Data Guru Berhasil");
					redirect("guru");
				}else{
					$this->db->update("tbl_guru",$in,$where);
					$this->db->update("tbl_login",$akun,$where_akun);
					$this->session->set_flashdata("success","Berhasil");
					redirect("guru");
				}		
			} else {
				redirect("guru");
			}
		} else {
			redirect("login");
		}
	}  

	public function hapus($id) {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$this->db->delete("tbl_guru",array('nip' => $id));
			$this->db->delete("tbl_login",array('username' => $id));
			$this->session->set_flashdata("success","Hapus Data guru Berhasil");
			redirect("guru");			
		} else {
			redirect("login");
		}
	}
}

