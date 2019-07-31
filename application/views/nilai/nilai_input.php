<div class="span12">					    
	<div class="widget-box">
		<div class="widget-header header-color-blue">
			<h5 class="bigger lighter">
				<i class="icon-table"></i>
				<?php echo $judul; ?>
			</h5>
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
				<form class="form-horizontal"  action="<?php echo base_url(); ?>nilai/save" method="post"/>
					<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
					<input type="hidden"
					 name="kategori_nilai" value="<?php echo $kategori_nilai; ?>">
					<input type="hidden" name="id_nilai" value="<?php echo $id_nilai; ?>">

					<div class="control-group">
						<label class="control-label" >NIS/NISN</label>
						<div class="controls">
							<input name="nis" id="nis" value="<?php echo $nis; ?>" required readonly data-toggle="tooltip" data-placement="top" title="Klik Tombol Search untuk mengisinya" style="cursor: no-drop;" />
							<button data-target=".modal_siswa" data-toggle="modal" class="btn-primary"><i class="icon-search"></i></button>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >Nama Siswa</label>
						<div class="controls">
							<input name="nama_siswa" id="nama_siswa" value="<?php echo $nama_siswa; ?>" required readonly data-toggle="tooltip" data-placement="top" title="Klik Tombol Search untuk mengisinya" style="cursor: no-drop;" />
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" >Olah</label>
						<div class="controls">
							<input type="hidden" name="id_olah" id="id_olah" value="<?php echo $id_olah; ?>" readonly>
							<input name="kode_kelas" id="kode_kelas" value="<?php echo $kode_kelas; ?>" required readonly data-toggle="tooltip" data-placement="top" title="Klik Tombol Search untuk mengisinya" style="cursor: no-drop;" />
							<button data-target=".modal_olah" data-toggle="modal" class="btn-primary"><i class="icon-search"></i></button>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >Mata Pelajaran</label>
						<div class="controls">
							<input name="kode_mapel" id="kode_mapel" value="<?php echo $kode_mapel; ?>" required readonly/>
						</div>
					</div>


					<div class="control-group">
						<label class="control-label" >UH1</label>
						<div class="controls">
							<input class="just_number" name="uh1" id="uh1" onkeyup="hit_otomatis();" value="<?php echo $uh1; ?>" required/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >UH2</label>
						<div class="controls">
							<input class="just_number" name="uh2" id="uh2" onkeyup="hit_otomatis();" value="<?php echo $uh2; ?>" required/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >UH3</label>
						<div class="controls">
							<input class="just_number" name="uh3" id="uh3" onkeyup="hit_otomatis();" value="<?php echo $uh3; ?>" required/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >UH4</label>
						<div class="controls">
							<input class="just_number" name="uh4" id="uh4" onkeyup="hit_otomatis();" value="<?php echo $uh4; ?>" required/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >UH5</label>
						<div class="controls">
							<input class="just_number" name="uh5" id="uh5" onkeyup="hit_otomatis();" value="<?php echo $uh5; ?>" required/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >Harian</label>
						<div class="controls">
							<input name="harian" id="harian" value="<?php echo $harian; ?>" required readonly data-toggle="tooltip" data-placement="top" title="Nilai Otomatis" style="cursor: no-drop;" />
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" >Proyek</label>
						<div class="controls">
							<input class="just_number" name="proyek" id="proyek" onkeyup="hit_otomatis();" value="<?php echo $proyek; ?>" required/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >Latihan</label>
						<div class="controls">
							<input class="just_number" name="portofolio" id="portofolio" onkeyup="hit_otomatis();" value="<?php echo $portofolio; ?>" required/>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" >UTS</label>
						<div class="controls">
							<input class="just_number" name="uts" id="uts" onkeyup="hit_otomatis();" value="<?php echo $uts; ?>" required/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >UAS</label>
						<div class="controls">
							<input class="just_number" name="uas" id="uas" onkeyup="hit_otomatis();" value="<?php echo $uas; ?>" required/>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" >Akhir</label>
						<div class="controls">
							<input name="akhir" id="akhir" value="<?php echo $akhir; ?>" required readonly data-toggle="tooltip" data-placement="top" title="Nilai Otomatis" style="cursor: no-drop;" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >Predikat</label>
						<div class="controls">
							<input name="predikat" id="predikat" value="<?php echo $predikat; ?>" required readonly data-toggle="tooltip" data-placement="top" title="Nilai Otomatis" style="cursor: no-drop;" />
						</div>
					</div>
					<div class="control-group">
						<a href="#my-modal" role="button" class="bigger-125 bg-primary white" data-toggle="modal">
							&nbsp; Content Slider inside Modal Box &nbsp;
						</a>
					</div>

					<div class="form-actions">
						<button class="btn btn-info">
							<i class="icon-save bigger-110"></i>
							Simpan
						</button>

						&nbsp; &nbsp; &nbsp;
						<a class="btn" href="<?php echo base_url(); ?>nilai/pengetahuan">
							<i class="icon-undo bigger-110"></i>
							Batal
						</a>
					</div>	
				</form>
			</div>
		</div>
	</div>
</div>

<?php include 'form_modal.php'; ?>