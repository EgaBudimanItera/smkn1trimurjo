<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Man_mapel extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['detail_mapel'] = $this->App_model->detail_mapel();
			$d['judul'] = 'Data Management Mapel';		
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('management/mapel/man_mapel_tabel.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function add()
	{
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$d['keahlian'] = $this->App_model->get_keahlian();
			$d['mapel'] = $this->App_model->get_mapel();
			$d['jurmapel'] = $this->App_model->jurmapel();
			$d['judul'] = 'Data Management Mapel';
			$d['tipe'] = 'add';
			$d['nama_keahlian'] = '';
			$d['id_mapel_keahlian'] = '';
			$d['id_mapel'] = '';
			$d['id_detail_mapel'] = '';
			$d['kode_mapel'] = '';
			$d['mapel'] = '';
			$d['semester'] = '';
			$d['kelas_x'] = '';
			$d['kelas_xi'] = '';
			$d['kelas_xii'] = '';
			$d['sks'] = '';
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('management/mapel/man_mapel_input.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function edit($id=NULL)
	{
		if($this->session->userdata('hak_akses') != "" && $this->session->userdata('hak_akses') == "Admin") {
			$get_id = $this->db->query("SELECT a.*,b.*,c.*,d.* FROM
(SELECT * FROM tbl_detail_mapel)a,
(SELECT * FROM tbl_mapel_keahlian)b,
(SELECT * FROM tbl_keahlian)c,
(SELECT * FROM tbl_mapel)d
WHERE a.id_mapel_keahlian=b.id_mapel_keahlian AND b.id_keahlian=c.id_keahlian AND b.id_mapel=d.id_mapel AND a.id_detail_mapel='$id'")->row();
			$d['keahlian'] = $this->App_model->get_keahlian();
			$d['mapel'] = $this->App_model->get_mapel();
			$d['jurmapel'] = $this->App_model->jurmapel();
			$d['judul'] = 'Edit Management Mapel';
			$d['tipe'] = 'edit';
			$d['nama_keahlian'] = $get_id->nama_keahlian;
			$d['id_mapel_keahlian'] = $get_id->id_mapel_keahlian;
			$d['id_mapel'] = $get_id->id_mapel;
			$d['id_detail_mapel'] = $get_id->id_detail_mapel;
			$d['kode_mapel'] = $get_id->kode_mapel;
			$d['mapel'] = $get_id->nama_mapel;
			$d['semester'] = $get_id->semester;
			$d['kelas_x'] = $get_id->kelas_x;
			$d['kelas_xi'] = $get_id->kelas_xi;
			$d['kelas_xii'] = $get_id->kelas_xii;
			$d['sks'] = $get_id->sks;
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('management/mapel/man_mapel_input.php');
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
			$where['id_detail_mapel'] = $this->input->post('id_detail_mapel');

			$in['id_mapel_keahlian'] = $this->input->post('id_mapel_keahlian');
			$in['semester'] = $this->input->post('semester');
			$in['kelas_x'] = $this->input->post('kelas_x');
			$in['kelas_xi'] = $this->input->post('kelas_xi');
			$in['kelas_xii'] = $this->input->post('kelas_xii');
			$in['sks'] = $this->input->post('sks');
		
			if($tipe == "add") {				
				$this->db->insert("tbl_detail_mapel",$in);
				$this->session->set_flashdata("success","Berhasil");
				redirect("Man_mapel");
			} elseif($tipe = 'edit') {
				$this->db->update("tbl_detail_mapel",$in,$where);
				$this->session->set_flashdata("success","Berhasil");
				redirect("Man_mapel");		
			} else {
				redirect("Man_mapel");
			}
		} else {
			redirect("login");
		}
	}

	public function hapus($id)
	{
		if($this->session->userdata('hak_akses') != "" && $id != null) {
			$this->db->delete("tbl_detail_mapel",array('id_detail_mapel' => $id));				
			$this->session->set_flashdata("success","Hapus Data Berhasil");
			redirect("man_mapel");			
		} else {
			redirect("login");
		}
	}
}