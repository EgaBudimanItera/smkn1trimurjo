<div class="row">
	<div class="col-sm-12">				    
		<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-book"></i>
					<?php echo $judul; ?>
				</h4>

				<div class="widget-toolbar">
					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>
				</div>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<div class="col-sm-12">
						<?php
						if ($this->session->userdata("hak_akses")=="Admin") {
							include 'l_raport_admin.php';
						}
						if ($this->session->userdata("hak_akses")=="Guru") {
							include 'l_raport_guru.php';
						}
						if ($this->session->userdata("hak_akses")=="Siswa") {
							include 'l_raport_siswa.php';
						}
						 ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>