<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>

	<div id="sidebar" class="sidebar responsive ace-save-state">
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
		</script>

		<ul class="nav nav-list">
			<li class="<?php if($this->uri->segment(1)==""){echo 'active';} ?>">
				<a href="<?php echo base_url(); ?>">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>

				<b class="arrow"></b>
			</li>
			<?php
				if ($this->session->userdata('hak_akses')=="Admin") {
					include 'menu/menu_admin.php';
				}
				if ($this->session->userdata('hak_akses')=="Guru") {
					include 'menu/menu_guru.php';
				}
				if ($this->session->userdata('hak_akses')=="Siswa") {
					include 'menu/menu_siswa.php';
				}
			?>
		</ul><!-- /.nav-list -->

		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>

	<div class="main-content">
		<div class="main-content-inner">
			<div style="display: none;" class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<?php echo "Selamat Datang <b>".$this->session->userdata('nama')."</b>, Anda masuk sebagai <b>".$this->session->userdata('hak_akses')."</b>"; ?>
					</li>
				</ul><!-- /.breadcrumb -->

				<div class="nav-search" id="nav-search">
					<form class="form-search">
						<span class="input-icon">
							<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
							<i class="ace-icon fa fa-search nav-search-icon"></i>
						</span>
					</form>
				</div><!-- /.nav-search -->
			</div>
			<div class="page-content">