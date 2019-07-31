<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class laporanpdf extends CI_Controller
{
	//fungsi cetak pdf
	public function cetaknilai($id_ajaran,$id_siswa)
	{
		if($this->session->userdata('hak_akses') != "") {
			$d['judul'] 		= 'Laporan Nilai';
			$d['id_ajaran'] = $id_ajaran;
			$d['id_siswa'] = $id_siswa;
			$this->load->view('laporan/laporanpdf.php',$d);

			$paper_size  = 'A4'; //paper size
	        $orientation = 'landscape'; //tipe format kertas
	        $html = $this->output->get_output();
	 
	        $this->dompdf->set_paper($paper_size, $orientation);
	        //Convert to PDF
	        $this->dompdf->load_html($html);
	        $this->dompdf->render();
	        $this->dompdf->stream("laporan.pdf", array('Attachment'=>0));
		}
		else {
			redirect("login");
		}
	}
}