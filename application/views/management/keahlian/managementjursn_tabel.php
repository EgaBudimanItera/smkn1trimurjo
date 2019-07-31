<div class="row">
	<div class="col-sm-12">				    
		<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-book orange"></i>
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
					<div class="tabbable">
						<ul class="nav nav-tabs" id="myTab">
							<li class="active">
								<a data-toggle="tab" href="#jurusan_siswa">
									<i class="green ace-icon fa fa-cogs bigger-120"></i>
									Keahlian Siswa
								</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#jurusan_mapel">
									<i class="green ace-icon fa fa-cogs bigger-120"></i>
									Mapel Keahlian
								</a>
							</li>
						</ul>

						<div class="tab-content">
							<div id="jurusan_siswa" class="tab-pane fade in active">
								<?php include 'tabel_jursiswa.php'; ?>
							</div>

							<div id="jurusan_mapel" class="tab-pane fade">
								<?php include 'tabel_jurmapel.php'; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>