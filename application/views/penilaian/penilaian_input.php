<?php
	if ($this->uri->segment(2)=="add_pengetahuan") {
		include 'pengetahuan/pengetahuan_tabel.php';
	}
	if ($this->uri->segment(2)=="add_keterampilan") {
		include 'keterampilan/keterampilan_tabel.php';
	}
?>
<div class="row">
	<div class="col-sm-12">				    
		<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-edit orange"></i>
					<?php echo $judul; ?>
				</h4>

				<div class="widget-toolbar">
					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>
				</div>
			</div>
			<div class="widget-body">
				<div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>
					<strong>Catatan!</strong>

					Nilai yang sudah tersimpan tidak bisa diedit. Jadi jika terjadi kesalahan, maka yang harus dilakukan adalah menghapus data nilai yang salah tersebut.
					<br>
				</div>
				<div class="widget-main">
					<form class="form-horizontal"  action="<?php echo base_url(); ?>penilaian/save" method="post"/>
						<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
						<input type="hidden" name="kat_nilai" value="<?php echo $kat_nilai; ?>">
						<input type="hidden" name="kode_uh" value="<?php echo $kode_uh; ?>">
						<input type="hidden" name="id_nilai" value="<?php echo $kode_nilai; ?>">

						<div class="col-sm-12">
							<?php if($this->session->flashdata('success')) { ?>
			                    <div class="alert alert-success alert-dismissible fade in" role="alert">
			                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                        <span aria-hidden="true">&times;</span>
			                      </button>
			                      <?php echo $this->session->flashdata('success'); ?>
			                    </div> 
							 <?php } if($this->session->flashdata('error')) { ?>
			                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
			                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                        <span aria-hidden="true">&times;</span>
			                      </button>
			                      <?php echo $this->session->flashdata('error'); ?>
			                    </div> 
							 <?php } ?>
							<div class="form-group">
								<label class="col-sm-2 no-padding-right" for="form-field-1"> Tahun Ajaran </label>

								<div class="col-sm-3">
									<?php foreach ($ajaran->result_array() as $data) { ?>
									<input class="col-xs-10 col-sm-10" type="hidden" id="id_ajaran" name="id_ajaran" value="<?php echo $data['id_ajaran']; ?>" readonly="" required>
									<input class="col-xs-10 col-sm-10" type="hidden" id="smt" name="smt" value="<?php echo $data['smt']; ?>" readonly="" required>
									<input class="col-xs-10 col-sm-10" type="text" id="" name="" value="<?php echo $data['periode_aktif'].' (SMT '.$data['smt'].')'; ?>" readonly="" required>
									<?php } ?>
									<br>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 no-padding-right" for="form-field-1"> Romkel </label>

								<div class="col-sm-4">
									<label>Keahlian</label>
									<div class="row">
										<div class="col-xs-3 col-sm-12">
											<div class="input-group">
												<input type="hidden" id="id_romkel" name="id_romkel" required="">
												<input class="form-control" id="nama_keahlian" type="text" readonly="">
												<span class="input-group-addon">
													<a href="" class="" type="button" data-target=".modal_romkel" data-toggle="modal">
													<i class="ace-icon fa fa-search bigger-110"></i>
													</a>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<label>Kelas</label>
									<div class="row">
										<div class="col-xs-3 col-sm-12">
											<div class="input-group">
												<input class="form-control" id="kelas" name="kelas" type="text" readonly="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-1">
									<label>Tingkat</label>
									<div class="row">
										<div class="col-xs-3 col-sm-12">
											<div class="input-group">
												<input class="form-control" id="tingkat" name="tingkat" type="text" readonly="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<label>Siswa</label>
									<div class="row">
										<div class="col-xs-3 col-sm-12">
											<input class="form-control" id="id_siswa" name="id_siswa" type="hidden" readonly="">
											<input class="form-control" id="nama_siswa" name="nama_siswa" type="text" readonly="">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 no-padding-right" for="form-field-1"> Mapel </label>

								<div class="col-sm-10">
									<select size="5" class="chosen-select form-control" id="id_detail_mapel" name="id_detail_mapel">
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<h5 class="header smaller lighter blue">
									Harian
								</h5>
								<?php include 'form_harian.php'; ?>
							</div>
							<div class="col-sm-4">
								<h5 class="header smaller lighter red">
									Akhir
								</h5>
								<?php include 'form_akhir.php'; ?>
							</div>
							<div class="col-sm-4">
								<h5 class="header smaller lighter green">
									Predikat
								</h5>
								<?php include 'form_predikat.php'; ?>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								Deskripsi
								<textarea class="form-control" name="deskripsi"></textarea>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-actions">
								<button class="btn btn-info">
									<i class="icon-save bigger-110"></i>
									Simpan
								</button>

								&nbsp; &nbsp; &nbsp;
								<a class="btn" href="<?php echo base_url(); ?>penilaian/pengetahuan">
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