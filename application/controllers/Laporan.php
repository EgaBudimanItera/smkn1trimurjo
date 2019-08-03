<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

	public function index() {
		redirect(base_url());
	}

	public function raport()
	{
		if($this->session->userdata('hak_akses') != "") {
			$d['judul'] = 'Raport';
			$d['ajaran'] = $this->App_model->get_ajaran();
			$d['ajaran_aktif'] = $this->App_model->get_ajaran_aktif();
			$d['kelas'] = $this->App_model->get_kelas();
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('laporan/l_raport.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}
	function pencarian_raport()
	{
		if($this->session->userdata('hak_akses') != "") {
			$d['judul'] = 'Raport';
			$id_ajaran = $this->input->get('id_ajaran');
			$id_kelas = $this->input->get('id_kelas');
			$d['hasil_pencarian_raport'] = $this->App_model->pencarian_raport($id_ajaran,$id_kelas);
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('laporan/l_pencarian_raport.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function pratinjau_nilai($id_ajaran,$id_siswa)
	{
		if($this->session->userdata('hak_akses') != "") {
			$d['judul'] = 'Pratinjau Nilai';
			$d['id_ajaran'] = $id_ajaran;
			$d['id_siswa'] = $id_siswa;
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('laporan/pratinjau_nilai.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function grafik() 
	{		
		// var_dump($this->session->userdata());
		if($this->session->userdata('id') != "") {
			$id_ajaran = $this->input->get('id_ajaran');
			$id_kelas = $this->input->get('id_kelas');
					
			$data=array(
				'jancuk'=>$this->App_model->data_grafik($id_ajaran,$id_kelas)->result(),
				'ajaran'=>$this->App_model->get_ajaran(),
				'kelas' => $this->App_model->get_kelas(),
			);
			 
			 $this->load->view('top',$data);
			 $this->load->view('menu');
			 $this->load->view('laporan/grafik');
			 $this->load->view('bottom');
		} else {
			redirect("login");
		}	
	}
}
