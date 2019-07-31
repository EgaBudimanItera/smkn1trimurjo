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
				<form class="form-horizontal"  action="<?php echo base_url(); ?>Olah/save" method="post"/>
					<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
					<input type="hidden" name="id_olah" value="<?php echo $id_olah; ?>">

					<div class="control-group">
						<label class="control-label" >NIP</label>
						<div class="controls">
							<input class="form-control" name="nip" id="kode_guru" value="<?php echo $nip; ?>" required readonly data-toggle="tooltip" data-placement="top" title="Klik Tombol Search untuk mengisinya" style="cursor: no-drop;" />
							<button data-target=".modal_guru" data-toggle="modal" class="btn-primary"><i class="icon-search"></i></button>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >Nama Guru</label>
						<div class="controls">
							<input class="form-control" name="nama_guru" id="nama_guru" value="<?php echo $nama_guru; ?>" readonly data-toggle="tooltip" data-placement="top" title="Klik Tombol Search untuk mengisinya" style="cursor: no-drop;" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >Kode Kelas</label>
						<div class="controls">
							<input type="hidden" id="id_kelas" name="id_kelas" value="<?php echo $id_kelas; ?>">
							<input class="form-control" name="kode_kelas" id="kode_kelas" value="<?php echo $kode_kelas; ?>" required readonly data-toggle="tooltip" data-placement="top" title="Klik Tombol Search untuk mengisinya" style="cursor: no-drop;" />
							<button data-target=".modal_kelas" data-toggle="modal" class="btn-primary"><i class="icon-search"></i></button>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >Nama Kelas</label>
						<div class="controls">
							<textarea class="form-control"  name="nama_kelas" id="nama_kelas" readonly data-toggle="tooltip" data-placement="top" title="Klik Tombol Search untuk mengisinya" style="cursor: no-drop;" ><?php echo $nama_kelas; ?></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >Kode Mapel</label>
						<div class="controls">
							<input type="hidden" id="id_mapel" name="id_mapel" value="<?php echo $id_mapel; ?>">
							<input class="form-control" name="kode_mapel" id="kode_mapel" value="<?php echo $kode_mapel; ?>" required readonly data-toggle="tooltip" data-placement="top" title="Klik Tombol Search untuk mengisinya" style="cursor: no-drop;" />
							<button data-target=".modal_mapel" data-toggle="modal" class="btn-primary"><i class="icon-search"></i></button>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" >Nama Pelajaran</label>
						<div class="controls">
							<textarea class="form-control"  name="nama_mapel" id="nama_mapel" readonly data-toggle="tooltip" data-placement="top" title="Klik Tombol Search untuk mengisinya" style="cursor: no-drop;" ><?php echo $nama_mapel; ?></textarea>
						</div>
					</div>
					</div>
					<div class="control-group">
						<a href="#my-modal" role="button" class="bigger-125 bg-primary white" data-toggle="modal"></a>
					</div>
					<div class="form-actions">
						<button class="btn btn-info">
							<i class="icon-save bigger-110"></i>
							Simpan
						</button>

						&nbsp; &nbsp; &nbsp;
						<a class="btn" href="<?php echo base_url(); ?>Olah">
							<i class="icon-undo bigger-110"></i>
							Batal
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include 'form_olah.php'; ?>