<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('id') == "") {
			$this->load->view('login');			
		} else {
			redirect('app');			
		}	
	}

	public function cobaLogin() {
		$in['username'] = $this->input->post("username");
		$in['password'] = $this->input->post("password");
		$this->App_model->cekLogin($in);
	}
}
