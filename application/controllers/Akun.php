<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Akun extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('hak_akses') !="") {
			$d['akun']  = $this->App_model->akun();
			$d['judul'] = 'Data Akun Pengguna Sistem';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('akun/akun_tabel');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function add()
	{
		if($this->session->userdata('hak_akses') !="") {
			$d['judul'] 	= 'Tambah Akun Pengguna Sistem';	
			$d['tipe'] 		= 'add';
			$d['nama']		= "";
			$d['username']	= "";
			$d['password']	= "";
			$d['level']		= "";
			$d['aktif']		= "1";	
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('akun/akun_input');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function edit($username=null)
	{
		if($this->session->userdata('hak_akses') !="") {
			$where['username'] = $username;
			$get_id = $this->db->get_where("tbl_login",$where)->row();
			$d['judul'] 	= 'Edit Akun Pengguna Sistem';	
			$d['tipe'] 		= 'edit';
			$d['nama']		= $get_id->nama;
			$d['username']	= $get_id->username;
			$d['password']	= $get_id->password;
			$d['level']		= $get_id->hak_akses;	
			$d['aktif']		= $get_id->aktif;	
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('akun/akun_input');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function save($value='')
	{
		if($this->session->userdata('hak_akses') !="") {
			$tipe = $this->input->post("tipe");	
			$where['username'] = $this->input->post('username');

			$in['username']		= $this->input->post('username');
			$in['nama']			= $this->input->post('nama');
			$in['hak_akses']	= $this->input->post('level');
			
			if ($this->input->post('aktif')!="") {
				$in['aktif']	= $this->input->post('aktif');
			}else{
				$in['aktif']	= "N";
			}
		
			if($tipe == "add") {
				$in['password']		= md5($akun['username']);
				$this->db->insert("tbl_login",$in);
				$this->session->set_flashdata("success","Berhasil");
				redirect("akun");
			} elseif($tipe = 'edit') {
				if ($this->input->post('password')!="") {
					$in['password']		= md5($this->input->post('password'));
					$this->db->update("tbl_login",$in,$where);
					$this->session->set_flashdata("success","Berhasil");
				redirect("akun");
				}else{
					$this->db->update("tbl_login",$in,$where);
					$this->session->set_flashdata("success","Berhasil");
					redirect("akun");
				}	
			} else {
				redirect("akun");
			}
		}
		else {
			redirect("login");
		}
	}

	public function hapus($username)
	{
		if($this->session->userdata('hak_akses') !="" && $username !=null) {
			$where['username'] = $username;
			$this->db->delete("tbl_login",$where);				
			$this->session->set_flashdata("success","Berhasil");
			redirect("akun");			
		}
		else {
			redirect("login");
		}
	}
}