<div class="row">

	<div class="col-sm-12" style="text-align: center;background: #ccc;">
		<img src="<?php echo base_url(); ?>asset/images/logo-banner.png">
	</div>
</div>
<div class="row">
	<div class="col-sm-12">				    
		<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					Selamat Datang <?php echo $this->session->userdata("nama"); ?>
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
						<?php $wali_kelas = $this->session->userdata("username"); $q = $this->db->query("SELECT * FROM tbl_kelas WHERE wali_kelas='$wali_kelas'"); ?>
						 <?php foreach ($q->result_array() as $data) {
							echo "<a style='margin-right:5px;' href='#' class='btn btn-danger btn-white btn-bold btn-round'>".$data['kode_kelas']."</a>";
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>