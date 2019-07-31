<div class="row">
	<div class="col-sm-12">				    
		<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-university orange"></i>
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
					
					<?php if($this->session->flashdata('success')) { ?>
					                    <div class="alert alert-success alert-dismissible fade in" role="alert">
					                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					                        <span aria-hidden="true">&times;</span>
					                      </button>
					                      <?php echo $this->session->flashdata('success'); ?>
					                    </div> 
					 <?php } ?>
					<form class="form-horizontal"  action="<?php echo base_url(); ?>sekolah/save" method="post"/>
						<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Nama Sekolah </label>

								<div class="col-sm-9">
									<input class="form-control" type="text" id="nama_sekolah" name="nama_sekolah" value="<?php echo $nama_sekolah; ?>">
									<br>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> NSPN </label>

								<div class="col-sm-9">
									<input class="form-control" type="text" id="npsn" name="npsn" value="<?php echo $npsn; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Alamat </label>

								<div class="col-sm-9">
									<textarea class="form-control" style="margin: 0px 0.625px 0px 0px; width: 387px; height: 63px;" class="form-control" name="alamat"><?php echo $alamat; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Desa </label>

								<div class="col-sm-9">
									<input class="form-control" type="text" id="desa" name="desa" value="<?php echo $desa; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Kecamatan </label>

								<div class="col-sm-9">
									<input class="form-control" type="text" id="kecamatan" name="kecamatan" value="<?php echo $kecamatan; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Kabupaten </label>

								<div class="col-sm-9">
									<input class="form-control" type="text" id="kabupaten" name="kabupaten" value="<?php echo $kabupaten; ?>">
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Provinsi </label>

								<div class="col-sm-9">
									<input class="form-control" type="text" id="provinsi" name="provinsi" value="<?php echo $provinsi; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Kode Pos </label>

								<div class="col-sm-9">
									<input class="form-control" type="text" id="kode_pos" name="kode_pos" value="<?php echo $kode_pos; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> No. Telp. </label>

								<div class="col-sm-9">
									<input class="form-control" type="text" id="no_telp" name="no_telp" value="<?php echo $no_telp; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Fax </label>

								<div class="col-sm-9">
									<input class="form-control" type="text" id="fax" name="fax" value="<?php echo $fax; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Email </label>

								<div class="col-sm-9">
									<input class="form-control" type="text" id="email" name="email" value="<?php echo $email; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Website </label>

								<div class="col-sm-9">
									<input class="form-control" type="text" id="website" name="website" value="<?php echo $website; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Kepsek </label>

								<div class="col-sm-9">
									<select class="form-control" id="kepsek" name="kepsek">
										<?php foreach ($guru->result_array() as $d) { ?>
										<option <?php if($d['nip']==$kepsek){echo "selected";} ?> value="<?php echo $d['nip']; ?>"><?php echo $d['nama_guru']; ?></option>
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