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
					<form class="form-horizontal"  action="<?php echo base_url(); ?>mapel/save" method="post"/>
						<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
						<input type="hidden" name="id_mapel" value="<?php echo $id_mapel; ?>">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Kode Mapel </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-10" id="kode_mapel" name="kode_mapel" value="<?php echo $kode_mapel; ?>" placeholder="Ex: M-PKN" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Nama Mapel </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-10" id="nama_mapel" name="nama_mapel" value="<?php echo $nama_mapel; ?>" placeholder="Ex: Pendidikan Kewarganegaraan" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> KB </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-10" id="kb" name="kb" value="<?php echo $kb; ?>" placeholder="Ex: 80" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Tanggal Lahir </label>

								<div class="col-sm-9">
									<select name="kelompok">
										<option value="">Pilih Kelompok</option>
										<?php foreach ($get_kelompok->result_array() as $data) { ?>
										<option <?php if($kelompok==$data['id_kelompok']){ echo "selected";} ?> value="<?php echo $data['id_kelompok']; ?>"><?php echo $data['kelompok']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-3 no-padding-right" for="form-field-1"> Keahlian </label>

								<div class="col-sm-9">
									<select id="id_keahlian" name="id_keahlian[]" multiple="" class="col-sm-12" data-toggle="tooltip" title="Gunakan tombol Shift/Ctrl untuk memilih lebih dari satu">
										<?php if($tipe=="add"){ foreach ($keahlian->result_array() as $d) { ?>
										<option value="<?php echo $d['id_keahlian']; ?>"><?php echo $d['nama_keahlian']; ?></option>
										<?php } } if($tipe=="edit"){
											$keahlian_1 = $this->db->query("SELECT id_keahlian,nama_keahlian FROM tbl_keahlian WHERE id_keahlian NOT IN(
SELECT DISTINCT a.id_keahlian FROM
											(SELECT * FROM tbl_mapel_keahlian)a,
											(SELECT * FROM tbl_mapel)b,
											(SELECT * FROM tbl_keahlian)c
											WHERE a.id_mapel=b.id_mapel AND a.id_keahlian=c.id_keahlian AND a.id_mapel='$id_mapel')");
											$keahlian_2 = $this->db->query("SELECT id_keahlian,nama_keahlian FROM tbl_keahlian WHERE id_keahlian IN(
SELECT DISTINCT a.id_keahlian FROM
											(SELECT * FROM tbl_mapel_keahlian)a,
											(SELECT * FROM tbl_mapel)b,
											(SELECT * FROM tbl_keahlian)c
											WHERE a.id_mapel=b.id_mapel AND a.id_keahlian=c.id_keahlian AND a.id_mapel='$id_mapel')");
											foreach ($keahlian_1->result_array() as $dx) { ?>
											<option value="<?php echo $dx['id_keahlian']; ?>"><?php echo $dx['nama_keahlian']; ?></option>
										<?php } foreach ($keahlian_2->result_array() as $dy) { ?>
											<option selected value="<?php echo $dy['id_keahlian']; ?>"><?php echo $dy['nama_keahlian']; ?></option>
										<?php } } ?>
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
								<a class="btn" href="<?php echo base_url(); ?>mapel">
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