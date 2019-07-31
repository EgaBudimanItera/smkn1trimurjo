<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konfigurasi extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			redirect(base_url());
		}
		else {
			redirect("login");
		}
	}
	public function umum()
	{
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['ajaran'] = $this->App_model->get_ajaran();
			$d['judul'] = 'Konfigurasi Umum';
			$d['tipe'] = 'pilih';
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('konfigurasi/umum_tabel');
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
			$d['judul'] 	= 'Tambah Tahun Ajaran';	
			$d['tipe'] 		= 'add';
		
			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('konfigurasi/umum_input');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function save() {
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$tipe = $this->input->post("tipe");	
			$where['id_ajaran'] = $this->input->post('id_ajaran');
			$in['periode_aktif']= $this->input->post('ta');
			$in['smt'] 	= $this->input->post('smt'); 
			$in['status'] 	= 'N'; 
			$pilih['status'] = 'A';		

			if($tipe == "add") {
				$this->db->insert("tbl_ajaran",$in);
				$this->session->set_flashdata("success","Input Tahun Ajaran Berhasil");
			} elseif($tipe = 'pilih') {
					$this->db->update("tbl_ajaran", $pilih,$where);
					$this->db->query("update tbl_ajaran set status='N' where id_ajaran != '".$this->input->post('id_ajaran')."'");
					$this->session->set_flashdata("success","Pilih Tahun Ajaran Berhasil");
			}

				redirect("konfigurasi/umum");
		} else {
			redirect("login");
		}
	}  
}