<div class="row">
	<div class="col-sm-12">				    
		<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-asterisk orange"></i>
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
					<form class="form-horizontal"  action="<?php echo base_url(); ?>keahlian/save" method="post"/>
						<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
						<input type="hidden" name="id_keahlian" value="<?php echo $id_keahlian; ?>">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Nama keahlian </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-10" id="nama_keahlian" name="nama_keahlian" value="<?php echo $nama_keahlian; ?>" placeholder="Ex: Teknik Kendaraan Ringan" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Wali Kelas </label>

								<div class="col-sm-9">
										<input type="text" class="col-xs-10 col-sm-7" id="guru_kompetensi" name="guru_kompetensi" value="<?php echo $guru_kompetensi; ?>" placeholder="Ex:1411" required readonly/>
											<button class="btn btn-sm btn-default" type="button" data-target=".modal_guru" data-toggle="modal">
												<i class="ace-icon fa fa-search bigger-110"></i>
											</button>
								</div><br><br>
								<div class="col-sm-3"></div>
								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-10" id="nama_guru" name="nama_guru" value="<?php echo $nama_guru; ?>" placeholder="Ex: Ridwan" required readonly/>
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
								<a class="btn" href="<?php echo base_url(); ?>keahlian">
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

<?php include 'form_modal.php'; ?>