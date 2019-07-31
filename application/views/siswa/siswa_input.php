<div class="row">
	<div class="col-sm-12">				    
		<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-users orange"></i>
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
					<form class="form-horizontal"  action="<?php echo base_url(); ?>siswa/save" method="post"/>
						<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
						<input type="hidden" name="id_siswa" value="<?php echo $id_siswa; ?>">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> NIS/NISN </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-10" id="nis" name="nis" value="<?php echo $nis; ?>" placeholder="Ex: 10292388" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Nama Siswa </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-10" id="nama_siswa" name="nama_siswa" value="<?php echo $nama_siswa; ?>" placeholder="Ex: Ridwan" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Tahun Ajaran </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-10" name="tahun_ajaran" value="<?php echo $tahun_ajaran; ?>" placeholder="2017/2018" required/>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Tanggal Lahir </label>

								<div class="col-sm-9">
									<input type="date" class="col-xs-10 col-sm-10" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" placeholder="Date" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Jenis Kelamin </label>

								<div class="col-sm-9">
									<select class="col-xs-10 col-sm-10" id="jk" name="jk" required>
										<option value>Pilih Jenis Kelamin</option>
										<option value="Laki-Laki" <?php if($jk == 'Laki-Laki') { echo 'selected'; } ?>>Laki-Laki</option>
										<option value="Perempuan" <?php if($jk == 'Perempuan') { echo 'selected'; } ?>>Perempuan</option>
									</select>
								</div>
							</div>
							<?php if($tipe=='edit'){ ?>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" >Password</label>
								<div class="col-sm-9">
									<input   type="password" name="password" value=""/>
								</div>
							</div>
							<?php } ?>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" >Status</label>
								<div class="col-sm-9">
									<label>
										<input onclick="akun_aktif()" id="aktif" name="aktif" value="" class="ace ace-switch ace-switch-6" type="checkbox" <?php if($aktif=="Y"){echo "checked";} ?> />
										<span class="lbl"></span>
									</label>
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
								<a class="btn" href="<?php echo base_url(); ?>siswa">
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