<?php $ajaran_aktif = $this->db->query("SELECT * FROM tbl_ajaran WHERE status='A'")->row();
$id_siswa = $this->db->query("SELECT * FROM tbl_siswa WHERE nis='".$this->session->userdata('username')."'")->row(); ?>
<!--/.tampilan-->
<li class="<?php if($this->uri->segment(1)=="laporan" || $this->uri->segment(2)=="pratinjau_nilai"){echo 'open';} ?>">		
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-copy"></i>
		<span class="menu-text">
			Laporan
		</span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="<?php if($this->uri->segment(2)=="pratinjau_nilai"){echo 'active';} ?>">
			<a href="<?php echo base_url(); ?>laporan/pratinjau_nilai/<?php echo $ajaran_aktif->id_ajaran.'/'.$id_siswa->id_siswa; ?>" class="">
				<i class="menu-icon fa fa-caret-right"></i>
				Cetak Raport
			</a>
		</li>
	</ul>
</li>