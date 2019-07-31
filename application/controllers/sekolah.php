<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class sekolah extends CI_Controller
{
	public function index($id=NULL)
	{
		$id = 1;
		if($this->session->userdata('hak_akses') != "") {
			$d['guru'] = $this->App_model->get_guru();
			$get_id = $this->db->query("SELECT * FROM tbl_profil_sekolah WHERE id='$id'")->row();
			$d['judul'] = 'Profil Sekolah';
			$d['tipe'] = 'edit';
			$d['id'] = $get_id->id;
			$d['nama_sekolah'] = $get_id->nama_sekolah;
			$d['npsn'] = $get_id->npsn;
			$d['alamat'] = $get_id->alamat;
			$d['desa'] = $get_id->desa;
			$d['kecamatan'] = $get_id->kecamatan;
			$d['kabupaten'] = $get_id->kabupaten;
			$d['provinsi'] = $get_id->provinsi;
			$d['kode_pos'] = $get_id->kode_pos;
			$d['no_telp'] = $get_id->no_telp;
			$d['fax'] = $get_id->fax;
			$d['email'] = $get_id->email;
			$d['website'] = $get_id->website;
			$d['kepsek'] = $get_id->kepsek;
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('sekolah/sekolah.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function save()
	{
		if($this->session->userdata('hak_akses') != "") {
			$tipe = $this->input->post("tipe");	
			$where['id'] = $this->input->post('id');
			$in['nama_sekolah'] = $this->input->post('nama_sekolah');
			$in['npsn'] = $this->input->post('npsn');
			$in['alamat'] = $this->input->post('alamat');
			$in['desa'] = $this->input->post('desa');
			$in['kecamatan'] = $this->input->post('kecamatan');
			$in['kabupaten'] = $this->input->post('kabupaten');
			$in['provinsi'] = $this->input->post('provinsi');
			$in['kode_pos'] = $this->input->post('kode_pos');
			$in['no_telp'] = $this->input->post('no_telp');
			$in['fax'] = $this->input->post('fax');
			$in['email'] = $this->input->post('email');
			$in['website'] = $this->input->post('website');
			$in['kepsek'] = $this->input->post('kepsek');

			
			if($tipe == "add") {
				redirect("sekolah");
			} 
			elseif($tipe = 'edit') {
				$this->db->update("tbl_profil_sekolah",$in,$where);
				$this->session->set_flashdata("success","Edit Profil Sekolah Berhasil");
				redirect("sekolah");
			} else {
				redirect("sekolah");
			}
		} else {
			redirect("login");
		}
	}
}