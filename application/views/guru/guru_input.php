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
					<form class="form-horizontal"  action="<?php echo base_url(); ?>guru/save" method="post"/>
						<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> NIP </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-10" id="nip" name="nip" value="<?php echo $nip; ?>" placeholder="Ex: NIP141195" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Nama Guru </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-10" id="nama_guru" name="nama_guru" value="<?php echo $nama_guru; ?>" placeholder="Ex: Ridwan" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Tanggal Lahir </label>

								<div class="col-sm-9">
									<input type="date" class="col-xs-10 col-sm-10" name="tgl" value="<?php echo $tgl; ?>" placeholder="Date" required/>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Alamat </label>

								<div class="col-sm-9">
									<textarea class="col-xs-10 col-sm-10" id="alamat" name="alamat" placeholder="Ex: Trimurjo" required><?php echo $alamat; ?></textarea>
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
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Handphone </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-10 input-mask-phone" id="tlp" name="tlp" value="<?php echo $tlp; ?>" placeholder="<?php echo $tlp; ?>" required/>
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
								<a class="btn" href="<?php echo base_url(); ?>guru">
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