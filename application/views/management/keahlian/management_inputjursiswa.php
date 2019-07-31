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
					<?php if($this->session->flashdata('error')) { ?>
	                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
	                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                      </button>
	                      <?php echo $this->session->flashdata('error'); ?>
	                    </div> 
					<?php } ?>
					<form class="form-horizontal"  action="<?php echo base_url(); ?>Man_keahlian/save" method="post"/>
						<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
						<input type="hidden" name="id_keahlian_siswa" value="<?php echo $id_keahlian_siswa; ?>">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> keahlian </label>

								<div class="col-sm-9">
									<select class="col-xs-10 col-sm-10" id="id_keahlian" name="id_keahlian" required>
										<option value>Pilih keahlian</option>
										<?php foreach ($keahlian->result_array() as $data) { ?>
										<option <?php if($id_keahlian == $data['id_keahlian']) { echo 'selected'; } ?> value="<?php echo $data['id_keahlian']; ?>"><?php echo $data['nama_keahlian']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Siswa </label>

								<div class="col-sm-9">
									<select class="col-xs-10 col-sm-10 chosen-select form-control" id="id_siswa" name="id_siswa" data-show-subtext="true" required>
										<option value>Pilih Siswa</option>
										<?php if ($tipe=="add_jursiswa") {
										$q_siswa = $this->db->query("SELECT * FROM tbl_siswa WHERE id_siswa NOT IN(SELECT id_siswa FROM tbl_keahlian_siswa)"); 
										foreach ($q_siswa->result_array() as $data) {
										?>
										<option value="<?php echo $data['id_siswa']; ?>" <?php if($id_siswa == $data['id_siswa']) { echo 'selected'; } ?>><?php echo $data['nama_siswa']. '||' .$data['nis']; ?></option>
										<?php } } ?>
										<?php if ($tipe=="edit_jursiswa") { 
										foreach ($siswa->result_array() as $data) {
										?>
										<option value="<?php echo $data['id_siswa']; ?>" <?php if($id_siswa == $data['id_siswa']) { echo 'selected'; } ?>><?php echo $data['nama_siswa']. '||' .$data['nis']; ?></option>
										<?php } } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
						</div>
						<div class="col-sm-12">
							<div class="form-actions">
								<button class="btn btn-info">
									<i class="icon-save bigger-110"></i>
									Simpan
								</button>

								&nbsp; &nbsp; &nbsp;
								<a class="btn" href="<?php echo base_url(); ?>Man_keahlian">
									<i class="icon-undo bigger-110"></i>
									Batal
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>