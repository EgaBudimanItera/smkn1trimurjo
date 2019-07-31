<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Man_keahlian extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['jursiswa'] = $this->App_model->jursiswa();
			$d['jurmapel'] = $this->App_model->jurmapel();
			$d['judul'] = 'Data Management keahlian';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('management/keahlian/managementjursn_tabel.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}
	public function Add_keahlian_siswa()
	{
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['siswa'] = $this->App_model->get_siswa();
			$d['keahlian'] = $this->App_model->get_keahlian();
			$d['judul'] = 'Tambah Data keahlian Siswa';	
			$d['tipe'] = 'add_jursiswa';
			$d['id_keahlian_siswa'] = '';
			$d['id_keahlian'] = '';
			$d['id_siswa'] = '';
			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('management/keahlian/management_inputjursiswa');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}
	public function Add_keahlian_mapel()
	{
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['mapel'] = $this->App_model->get_mapel();
			$d['keahlian'] = $this->App_model->get_keahlian();
			$d['judul'] = 'Tambah Data keahlian Mapel';	
			$d['tipe'] = 'add_jurmapel';
			$d['id_mapel_keahlian'] = '';
			$d['id_keahlian'] = '';
			$d['id_mapel'] = '';
			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('management/keahlian/management_inputjurmapel');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}
	public function Edit_keahlian_siswa($id=null)
	{
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$where['id_keahlian_siswa'] = $id;
			$get_id = $this->db->get_where("tbl_keahlian_siswa",$where)->row();
			$d['siswa'] = $this->App_model->get_siswa();
			$d['keahlian'] = $this->App_model->get_keahlian();
			$d['judul'] = 'Edit Data keahlian Siswa';	
			$d['tipe'] = 'edit_jursiswa';
			$d['id_keahlian_siswa'] = $get_id->id_keahlian_siswa;
			$d['id_keahlian'] = $get_id->id_keahlian;
			$d['id_siswa'] = $get_id->id_siswa;
			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('management/keahlian/management_inputjursiswa');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}
	public function Edit_keahlian_mapel($id=null)
	{
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$where['id_mapel_keahlian'] = $id;
			$get_id = $this->db->get_where("tbl_mapel_keahlian",$where)->row();
			$d['mapel'] = $this->App_model->get_mapel();
			$d['keahlian'] = $this->App_model->get_keahlian();
			$d['judul'] = 'Edit Data keahlian Mapel';	
			$d['tipe'] = 'edit_jurmapel';
			$d['id_mapel_keahlian'] = $get_id->id_mapel_keahlian;
			$d['id_keahlian'] = $get_id->id_keahlian;
			$d['id_mapel'] = $get_id->id_mapel;
			$this->load->view('top',$d);	
			$this->load->view('menu');
			$this->load->view('management/keahlian/management_inputjurmapel');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}
	public function save()
	{
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$tipe = $this->input->post("tipe");	
			if ($tipe=="add_jursiswa") {
				$where['id_keahlian_siswa'] = $this->input->post('id_keahlian_siswa');
				$in['id_keahlian'] = $this->input->post('id_keahlian');
				$in['id_siswa'] = $this->input->post('id_siswa');
				$this->db->insert("tbl_keahlian_siswa",$in);
				$this->session->set_flashdata("success","Input Data keahlian Siswa Berhasil");
				redirect("Man_keahlian");
			}
			elseif ($tipe=="add_jurmapel") {
				$where['id_mapel_keahlian'] = $this->input->post('id_mapel_keahlian');
				$in['id_keahlian'] = $this->input->post('id_keahlian');
				$in['id_mapel'] = $this->input->post('id_mapel');
				$this->db->insert("tbl_mapel_keahlian",$in);
				$this->session->set_flashdata("success","Input Data keahlian Mapel Berhasil");
				redirect("Man_keahlian");
			}elseif ($tipe=="edit_jursiswa") {
				$where['id_keahlian_siswa'] = $this->input->post('id_keahlian_siswa');
				$in['id_keahlian'] = $this->input->post('id_keahlian');
				$in['id_siswa'] = $this->input->post('id_siswa');
				$this->db->update("tbl_keahlian_siswa",$in,$where);
				$this->session->set_flashdata("success","Edit Data keahlian Siswa Berhasil");
				redirect("Man_keahlian");
			}elseif ($tipe=="edit_jurmapel") {
				$where['id_mapel_keahlian'] = $this->input->post('id_mapel_keahlian');
				$in['id_keahlian'] = $this->input->post('id_keahlian');
				$in['id_mapel'] = $this->input->post('id_mapel');
				$this->db->update("tbl_mapel_keahlian",$in,$where);
				$this->session->set_flashdata("success","Edit Data keahlian Mapel Berhasil");
				redirect("Man_keahlian");
			}else{
				redirect("Man_keahlian");
			}
		}
		else {
			redirect("login");
		}
	}
	public function hapus_keahsiswa($id) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$this->db->delete("tbl_keahlian_siswa",array('id_keahlian_siswa' => $id));				
			$this->session->set_flashdata("success","Hapus Data keahlian Siswa Berhasil");
			redirect("Man_keahlian");			
		} else {
			redirect("login");
		}
	}
	public function hapus_keahmapel($id) {
		if($this->session->userdata('hak_akses') != "" && $id != null && $this->session->userdata('hak_akses') == "Admin") {
			$this->db->delete("tbl_mapel_keahlian",array('id_mapel_keahlian' => $id));				
			$this->session->set_flashdata("success","Hapus Data keahlian Mapel Berhasil");
			redirect("Man_keahlian");			
		} else {
			redirect("login");
		}
	}
}