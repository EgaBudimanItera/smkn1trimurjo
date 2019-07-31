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
					<form class="form-horizontal"  action="<?php echo base_url(); ?>metode/save" method="post"/>
						<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
						<input type="hidden" name="id_metode" value="<?php echo $id_metode; ?>">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Tahun Ajaran </label>

								<div class="col-sm-9">
									<?php foreach ($ajaran->result_array() as $data) { ?>
									<input class="col-xs-10 col-sm-10" type="hidden" id="id_ajaran" name="id_ajaran" value="<?php echo $data['id_ajaran']; ?>" readonly="" required>
									<input class="col-xs-10 col-sm-10" type="text" id="" name="" value="<?php echo $data['periode_aktif'].' (SMT '.$data['smt'].')'; ?>" readonly="" required>
									<?php } ?>
									<br>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Kompetensi Penilaian </label>

								<div class="col-sm-9">
									<select class="col-xs-10 col-sm-10" id="kompetensi_penilaian" name="kompetensi_penilaian">
										<option <?php if($kompetensi_penilaian=="Pengetahuan"){echo "selected";} ?> value="Pengetahuan">Pengetahuan</option>
										<option <?php if($kompetensi_penilaian=="Keterampilan"){echo "selected";} ?> value="Keterampilan">Keterampilan</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Metode Penilaian </label>

								<div class="col-sm-9">
									<input class="col-xs-10 col-sm-10" type="text" id="nama_metode_penilaian" name="nama_metode_penilaian" value="<?php echo $nama_metode_penilaian; ?>" required="">
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
								<a class="btn" href="<?php echo base_url(); ?>romkel">
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