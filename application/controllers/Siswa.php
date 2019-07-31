<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {

	public function index() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['siswa'] = $this->App_model->get_siswa();
			$d['judul'] = 'Data Siswa SMKN 1 Trimurjo';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('siswa/siswa_tabel.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function add() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['judul'] = 'Tambah Data siswa SMKN 1 Trimurjo';	
			$d['tipe'] = 'add';

			$d['id_siswa'] = '' ;
			$d['nis'] = '';
			$d['nama_siswa'] = '' ;
			$d['tgl_lahir'] ='';
			$d['jk'] ='';
			$d['tahun_ajaran'] = '';

			$d['password']	= "";
			$d['aktif']		= "Y";	

			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('siswa/siswa_input');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function edit($id=null) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$where['id_siswa'] = $id;
			$get_id = $this->db->query("SELECT a.*, b.* FROM
(SELECT * FROM tbl_siswa)a,
(SELECT * FROM tbl_login)b
WHERE b.username=a.nis AND a.id_siswa='$where[id_siswa]'")->row();		
			$d['judul'] = 'Edit Data Siswa';			
			$d['tipe'] = 'edit';

			$d['id_siswa'] = $get_id->id_siswa;
			$d['nis'] = $get_id->nis;
			$d['nama_siswa'] = $get_id->nama_siswa;
			$d['tgl_lahir'] = $get_id->tgl_lahir;
			$d['jk'] = $get_id->jk;
			$d['tahun_ajaran'] = $get_id->tahun_ajaran;			
			$d['aktif']		= $get_id->aktif;

			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('siswa/siswa_input');
			$this->load->view('bottom');			
		} else {
			redirect("login");
		}
	}


	public function save() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$tipe = $this->input->post("tipe");	
			$where['id_siswa'] = $this->input->post('id_siswa');

			$in['nis'] =  $this->input->post('nis');
			$in['nama_siswa'] =  $this->input->post('nama_siswa');
			$in['tgl_lahir'] =  $this->input->post('tgl_lahir');
			$in['jk'] =  $this->input->post('jk');
			$in['tahun_ajaran'] =  $this->input->post('tahun_ajaran');
			// Akun
			$where_akun['username'] = $this->input->post('nis');

			if ($this->input->post('aktif')!="") {
				$akun['aktif']	= $this->input->post('aktif');
			}else{
				$akun['aktif']	= "N";
			}

			$akun['username']		= $this->input->post('nis');
			$akun['nama']			= $this->input->post('nama_siswa');
			$akun['hak_akses']		= 'Siswa';
			$akun['avatar']			= substr($in['jk'], 0,1);
		
			if($tipe == "add") {
				$akun['password']		= md5($akun['username']);				
				$this->db->insert("tbl_siswa",$in);
				$this->db->insert("tbl_login",$akun);
				$this->session->set_flashdata("success","Input Data Siswa Berhasil");
				redirect("siswa");
			} elseif($tipe = 'edit') {
				if ($this->input->post('password')!="") {
					$akun['password']		= md5($this->input->post('password'));
					$this->db->update("tbl_siswa",$in,$where);
					$this->db->update("tbl_login",$akun,$where_akun);
					$this->session->set_flashdata("success","Edit Data Siswa Berhasil");
					redirect("siswa");
				}else{
					$this->db->update("tbl_siswa",$in,$where);
					$this->db->update("tbl_login",$akun,$where_akun);
					$this->session->set_flashdata("success","Berhasil");
					redirect("siswa");
				}
			} else {
				redirect("siswa");
			}
		} else {
			redirect("login");
		}
	}

	public function hapus($id) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$q = $this->db->query("SELECT nis FROM tbl_siswa WHERE id_siswa='$id'")->row();
			$username = $q->nis;
			$this->db->delete("tbl_login",array('username' => $username));
			$this->db->delete("tbl_siswa",array('id_siswa' => $id));				
			$this->session->set_flashdata("success","Hapus Data Siswa Berhasil");
			redirect("siswa");			
		} else {
			redirect("login");
		}
	}
}
