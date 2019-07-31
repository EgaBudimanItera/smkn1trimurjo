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
					<form class="form-horizontal"  action="<?php echo base_url(); ?>Man_mapel/save" method="post"/>
						<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
						<input type="hidden" name="id_detail_mapel" value="<?php echo $id_detail_mapel; ?>">
						<input type="hidden" id="id_mapel_keahlian" name="id_mapel_keahlian" value="<?php echo $id_mapel_keahlian; ?>">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Keahlian </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-7" id="nama_keahlian" name="nama_keahlian" value="<?php echo $nama_keahlian; ?>" placeholder="Ex: Teknik Komputer Jaringan" required readonly/>
									<button class="btn btn-sm btn-default" type="button" data-target=".modal_detail_mapel" data-toggle="modal">
										<i class="ace-icon fa fa-search bigger-110"></i>
									</button>
									<br><br>
									<input type="text" class="col-xs-5 col-sm-3" id="kode_mapel" placeholder="Ex : M-BI" readonly value="<?php echo $kode_mapel; ?>">
									<input type="text" class="col-xs-5 col-sm-9" id="nama_mapel" name="nama_mapel" value="<?php echo $mapel; ?>" placeholder="Ex: Bahasa Indonesia" required readonly/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Semester </label>

								<div class="col-sm-9">
									<select class="col-xs-10 col-sm-10 chosen-select form-control" id="semester" name="semester" data-show-subtext="true" required>
										<option value>Pilih Semester</option>
										<option <?php if($semester=='1'){echo "selected";} ?> value="1">Ganjil / 1</option>
										<option <?php if($semester=='2'){echo "selected";} ?> value="2">Genap / 2</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Kelas </label>

								<div class="col-sm-3">
									<div class="checkbox">
										<label>
											<input <?php if($kelas_x=='1'){echo "checked";} ?> name="kelas_x" type="checkbox" class="ace" value="1" />
											<span class="lbl"> Kelas X</span>
										</label>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="checkbox">
										<label>
											<input <?php if($kelas_xi=='1'){echo "checked";} ?> name="kelas_xi" type="checkbox" class="ace" value="1" />
											<span class="lbl"> Kelas XI</span>
										</label>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="checkbox">
										<label>
											<input <?php if($kelas_xii=='1'){echo "checked";} ?> name="kelas_xii" type="checkbox" class="ace" value="1" />
											<span class="lbl"> Kelas XII</span>
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> SKS </label>

								<div class="col-sm-9">
									<input class="col-sm-3" type="text" name="sks" value="<?php echo $sks; ?>">
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
								<a class="btn" href="<?php echo base_url(); ?>Man_mapel">
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