<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	/*public function index() 
	{
		if ($this->session->userdata('hak_akses') != "") {
			if ($this->session->userdata('bagian') == "Admin") {
				redirect(base..url().'Admin');
			}
			if ($this->session->userdata('bagian') == "Guru") {
				redirect(base..url().'Guru');
			}
			if ($this->session->userdata('bagian') == "Siswa") {
				redirect(base..url().'Siswa');
			}
		}else {
			$this->load->view('login');

			}
	}

	public function cek_login(){
		$data = array ('username' => $this->input->post('username', true),
	}					'password' => $this->input->post('password', true));

		$this->load->model('app_model'); // load app_model
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1 ) {
			foreach ($hasil->result() as $sess => $value) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id_login'] = $sess->id_login;
				$sess_data['username'] = $sess->username;
				$sess_data['hak_akses'] = $sess->hak_akses;

				$this->session->set_userdata($sess_data);
				
			}

			if ($this->session->userdata('hak_akses')=='Admin') {
				redirect('admin/c_admin');
			}
			if ($this->session->userdata('hak_akses')=='Guru') {
				redirect('guru/c_guru');
			}
			if ($this->session->userdata('hak_akses')=='Siswa') {
				redirect('siswa/c_siswa');
			}
		}
		else {
			echo "<script>alert('Gagal login : Cek username, password!');history.go(-1);</script>";
		}
	}*/

	public function user_profil($username)
	{
		if($this->session->userdata('hak_akses') != "" && $username!=NULL) {
			$q = $this->db->query("SELECT * FROM tbl_login WHERE username='$username'")->row();
			$d['tipe'] = 'edit_user_profile';
			$d['username'] = $q->username;
			$d['nama'] = $q->nama;
			$this->load->view('top',$d);
			$this->load->view('menu');
			$this->load->view('user/user_profile.php');
			$this->load->view('bottom');
		}
		else {
			redirect("login");
		}
	}

	public function save()
	{
		if($this->session->userdata('hak_akses') != "") {
			if ($this->input->post('tipe')=='edit_user_profile') {
				$where['username'] = $this->input->post('username');
				if (!empty($this->input->post('password'))) {
					$d['nama'] = $this->input->post('nama');
					$d['password'] = md5($this->input->post('password'));
					$this->db->update("tbl_login",$d,$where);
					$q = $this->db->query("SELECT * FROM tbl_login WHERE username='$where[username]' AND password='$d[password]'");
					foreach($q->result() as $data) {
						$session['id'] = $data->id_login;
						$session['username'] = $data->username;
						$session['nama'] = $data->nama;
						$session['avatar'] = $data->avatar;
						$session['hak_akses'] = $data->hak_akses;
						$session['aktif'] = $data->aktif;
						$this->session->set_userdata($session);
					}
					$this->session->set_flashdata("success","Berhasil");
					redirect("user/user_profil/".$where['username']);
				}
				else{
					$d['nama'] = $this->input->post('nama');
					$this->db->update("tbl_login",$d,$where);
					$this->session->set_flashdata("success","Berhasil");
					redirect("user/user_profil/".$where['username']);
				}
			}
		}
		else {
			redirect("login");
		}
	}
}

?>