<li class="<?php if($this->uri->segment(1)=="penilaian" || $this->uri->segment(2)=="add_pengetahuan" || $this->uri->segment(2)=="add_keterampilan"){echo 'open';} ?>">		
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-edit"></i>
		<span class="menu-text">
			Penilaian
		</span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="<?php if($this->uri->segment(2)=="add_pengetahuan"){echo 'active';} ?>">
			<a href="<?php echo base_url(); ?>penilaian/add_pengetahuan" class="">
				<i class="menu-icon fa fa-caret-right"></i>
				Penilaian Pengetahuan
			</a>
		</li>
		<li class="<?php if($this->uri->segment(2)=="add_keterampilan"){echo 'active';} ?>">
			<a href="<?php echo base_url(); ?>penilaian/add_keterampilan" class="">
				<i class="menu-icon fa fa-caret-right"></i>
				Penilaian Keterampilan
			</a>
		</li>
	</ul>
</li>
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