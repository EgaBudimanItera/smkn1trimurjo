<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class password extends CI_Controller {

public function index() {
		if($this->session->userdata('id') != "") {
			$d['judul'] = 'Ganti Password';		
			$d['id'] = $this->session->userdata('id');
			$d['password'] = '';
			$d['lama'] = '';
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('password/password_input.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}



	public function save() {
		if($this->session->userdata('hak_akses') != "") {
			$required = array('password');
			$error = false;
			foreach($required as $field) {
				if(empty($_POST[$field])) {
					$error = true;
				}
			}
			$where['id_login'] 	= $this->session->userdata('id');
			$in['password'] = $this->input->post('password');
			$in['lama'] = $this->input->post('lama');
			if($error) {
				$this->session->set_flashdata("error","Inputan ('password') tidak boleh kosong");
				redirect("password");	
			} else {
				$this->db->update("tbl_login",$in,$where);
				$this->session->set_flashdata("success","Update Password Berhasil");
				redirect("password");
			}			
		} elseif($this->session->userdata('hak_akses') != "") { 
			$required = array('password');
			$error = false;
			foreach($required as $field) {
				if(empty($_POST[$field])) {
					$error = true;
				}
			}
			$where['id_user'] 	= $this->session->userdata('id');
			$in['password'] = $this->input->post('password');
			$in['lama'] = $this->input->post('lama');
			if($error) {
				$this->session->set_flashdata("error","Inputan ('password') tidak boleh kosong");
				redirect("password");	
			} else {
				$this->db->update("tbl_user",$in,$where);
				$this->session->set_flashdata("success","Update Password Berhasil");
				redirect("password");
			}			
		} else {
			redirect("login");
		}
	}
}
