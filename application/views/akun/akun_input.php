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
					<form class="form-horizontal"  action="<?php echo base_url(); ?>akun/save" method="post"/>
						<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
						<input type="hidden" name="username" value="<?php echo $username; ?>">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" >Username</label>

								<div class="col-sm-9">
									<input   type="text" id="username" name="username" value="<?php echo $username; ?>" required readonly data-toggle="tooltip" data-placement="top" title="Klik Tombol Search untuk mengisinya" style="cursor: no-drop;"/>
									<button data-target=".modal_akun" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" >Nama</label>

								<div class="col-sm-9">
									<input   type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required readonly data-toggle="tooltip" data-placement="top" title="Klik Tombol Search untuk mengisinya" style="cursor: no-drop;"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" >Level</label>

								<div class="col-sm-9">
									<select id="level" name="level" required>
										<option value>Pilih Level</option>
										<option <?php if($level=="Admin"){echo "selected";} ?> value="Admin">Admin</option>
										<option <?php if($level=="Guru"){echo "selected";} ?> value="Guru">Guru</option>
										<option <?php if($level=="Siswa"){echo "selected";} ?> value="Siswa">Siswa</option>		
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" >Password</label>
								<div class="col-sm-9">
									<input   type="password" name="password" value=""/>
								</div>
							</div>
							<div class="form-group">
								<label>
									<input onclick="akun_aktif()" id="aktif" name="aktif" value="" class="ace ace-switch ace-switch-6" type="checkbox" <?php if($aktif=="Y"){echo "checked";} ?> />
									<span class="lbl"></span>
								</label>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-actions">
								<button class="btn btn-info">
									<i class="icon-save bigger-110"></i>
									Simpan
								</button>

								&nbsp; &nbsp; &nbsp;
								<a class="btn" href="<?php echo base_url(); ?>akun">
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

<?php include 'akun_modal.php'; ?>