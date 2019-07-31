<div class="row">
	<div class="col-sm-12">				    
		<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-bed orange"></i>
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
					<form class="form-horizontal"  action="<?php echo base_url(); ?>kelas/save" method="post"/>
						<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
						<input type="hidden" name="id_kelas" value="<?php echo $id_kelas; ?>">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Keahlian </label>

								<div class="col-sm-9">
									<select name="id_keahlian" required>
										<option value>Pilih Jurusan</option>
										<?php foreach ($get_keahlian->result_array() as $data) { ?>
										<option <?php if($id_keahlian==$data['id_keahlian']){echo "selected";} ?>  value="<?php echo $data['id_keahlian']; ?>"><?php echo $data['nama_keahlian']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Kode Kelas </label>

								<div class="col-sm-9">
									<input class="form-control" name="kode_kelas" value="<?php echo $kode_kelas; ?>" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Tingkat </label>

								<div class="col-sm-9">
									<select class="form-control" name="tingkat">
										<option value="">Pilih Tingkat</option>
										<option <?php if($tingkat=="10"){echo "selected";} ?> value="10">10</option>
										<option <?php if($tingkat=="11"){echo "selected";} ?> value="11">11</option>
										<option <?php if($tingkat=="12"){echo "selected";} ?> value="12">12</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Wali Kelas </label>

								<div class="col-sm-9">
									<select class="form-control" name="wali_kelas">
										<option value="">Pilih Wali Kelas</option>
										<?php foreach ($get_guru->result_array() as $d) { ?>
										<option <?php if($wali_kelas==$d['nip']){echo "selected";} ?> value="<?php echo $d['nip']; ?>"><?php echo $d['nama_guru']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-actions">
								<button class="btn btn-info">
									<i class="icon-save bigger-110"></i>
									Simpan
								</button>

								&nbsp; &nbsp; &nbsp;
								<a class="btn" href="<?php echo base_url(); ?>kelas">
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