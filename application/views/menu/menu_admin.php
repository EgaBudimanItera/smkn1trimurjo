<!--/data Profil-->
<li class="<?php if($this->uri->segment(1)=="sekolah"){echo 'active';} ?>">		
	<a href="<?php echo base_url(); ?>sekolah" class="">
		<i class="menu-icon fa fa-user"></i>
		<span class="menu-text">
			Profil Sekolah
		</span>
	</a>
	<b class="arrow"></b>
</li>
<!--/data Profil-->
<!--/data Konfigurasi-->
<li class="<?php if($this->uri->segment(1)=="konfigurasi" || $this->uri->segment(2)=="umum"){echo 'open';} ?>">		
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-wrench"></i>
		<span class="menu-text">
			Konfigurasi
		</span>

		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="<?php if($this->uri->segment(2)=="umum"){echo 'active';} ?>">
			<a href="<?php echo base_url(); ?>konfigurasi/umum" class="">
				<i class="menu-icon fa fa-caret-right"></i>
				Umum
			</a>
		</li>
	</ul>
</li>
<!--/data Konfigurasi-->

<!--/data master-->
<li class="<?php if($this->uri->segment(1)=="guru" || $this->uri->segment(1)=="siswa" || $this->uri->segment(1)=="petugas" || $this->uri->segment(1)=="akun" || $this->uri->segment(1)=="kelompok" || $this->uri->segment(1)=="keahlian" || $this->uri->segment(1)=="mapel" || $this->uri->segment(1)=="kelas" || $this->uri->segment(1)=="metode"){echo 'open';} ?>">		
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-book"></i>
		<span class="menu-text">
			Data Master
		</span>

		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="<?php if($this->uri->segment(1)=="guru" || $this->uri->segment(1)=="siswa" || $this->uri->segment(1)=="petugas"){echo 'open';} ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-caret-right"></i>
				Users
				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="<?php if($this->uri->segment(1)=="guru"){echo 'active';} ?>"><a href="<?php echo base_url();?>guru"><i class="menu-icon fa fa-caret-right"></i>Guru</a><b class="arrow"></b></li>
				<li class="<?php if($this->uri->segment(1)=="siswa"){echo 'active';} ?>"><a href="<?php echo base_url();?>siswa"><i class="menu-icon fa fa-caret-right"></i>Siswa</a><b class="arrow"></b></li>
				<li class="<?php if($this->uri->segment(1)=="petugas"){echo 'active';} ?>"><a href="<?php echo base_url();?>petugas"><i class="menu-icon fa fa-caret-right"></i>Petugas</a><b class="arrow"></b></li>
			</ul>
		</li>
		<li class="<?php if($this->uri->segment(1)=="kelompok"){echo 'active';} ?>">
			<a href="<?php echo base_url(); ?>kelompok" class="">
				<i class="menu-icon fa fa-caret-right"></i>
				Kelompok
			</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="keahlian"){echo 'active';} ?>">
			<a href="<?php echo base_url(); ?>keahlian" class="">
				<i class="menu-icon fa fa-caret-right"></i>
				Keahlian
			</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="kelas"){echo 'active';} ?>">
			<a href="<?php echo base_url(); ?>kelas" class="">
				<i class="menu-icon fa fa-caret-right"></i>
				Kelas
			</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="mapel"){echo 'active';} ?>">
			<a href="<?php echo base_url(); ?>mapel" class="">
				<i class="menu-icon fa fa-caret-right"></i>
				Mapel
			</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="metode"){echo 'active';} ?>">
			<a href="<?php echo base_url(); ?>metode" class="">
				<i class="menu-icon fa fa-caret-right"></i>
				Teknik Penilaian
			</a>
		</li>
	</ul>
</li>
<!--/data master-->
<li class="<?php if($this->uri->segment(1)=="Man_keahlian" || $this->uri->segment(1)=="Man_mapel" || $this->uri->segment(1)=="Romkel"){echo 'open';} ?>">		
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-cogs"></i>
		<span class="menu-text">
			Management
		</span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="<?php if($this->uri->segment(1)=="Man_keahlian"){echo 'active';} ?>">
			<a href="<?php echo base_url(); ?>Man_keahlian" class="">
				<i class="menu-icon fa fa-caret-right"></i>
				Keahlian
			</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="Man_mapel"){echo 'active';} ?>">
			<a href="<?php echo base_url(); ?>Man_mapel" class="">
				<i class="menu-icon fa fa-caret-right"></i>
				Mapel
			</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="Romkel"){echo 'active';} ?>">
			<a href="<?php echo base_url(); ?>Romkel" class="">
				<i class="menu-icon fa fa-caret-right"></i>
				Romkel
			</a>
		</li>
	</ul>
</li>
<!--/.tampilan-->
<li class="<?php if($this->uri->segment(1)=="laporan" || $this->uri->segment(2)=="raport"){echo 'open';} ?>">		
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-copy"></i>
		<span class="menu-text">
			Laporan
		</span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="<?php if($this->uri->segment(2)=="raport"){echo 'active';} ?>">
			<a href="<?php echo base_url(); ?>laporan/raport" class="">
				<i class="menu-icon fa fa-caret-right"></i>
				Cetak Raport
			</a>
		</li>
	</ul>
</li>