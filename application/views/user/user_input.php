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
				<form class="form-horizontal"  action="<?php echo base_url(); ?>user/save" method="post"/>
					<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
					<input type="hidden" name="id_user" value="<?php echo $id_user; ?>">

					<div class="control-group">
						<label class="control-label">Pilih Cabang</label>

						<div class="controls">
							<select id="nasabah" name="id_cabang" required>
								<?php echo $combo_cabang; ?>
							</select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" >Nama User</label>

						<div class="controls">
							<input  class="span4" type="text" name="nama_user" value="<?php echo $nama_user; ?>"/>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" >Jabatan</label>

						<div class="controls">
							<input class="span4" type="text" name="jabatan" value="<?php echo $jabatan; ?>"/>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" >Username</label>

						<div class="controls">
							<input class="span4" type="text" name="username" value="<?php echo $username; ?>" required/>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" >Password</label>

						<div class="controls">
							<input class="span2" type="password" name="password" value="<?php echo $password; ?>" required/>
						</div>
					</div>		

					<div class="control-group">
						<label class="control-label" >Level</label>

						<div class="controls">
							<select class="span4" name="level" required>
								<option value>Pilih Level</option>
								<option value="Office">Office</option>
								<option value="Area">Area</option>
							</select>
						</div>
					</div>				


					<div class="form-actions">
						<button class="btn btn-info">
							<i class="icon-save bigger-110"></i>
							Simpan
						</button>

						&nbsp; &nbsp; &nbsp;
						<a class="btn" href="<?php echo base_url(); ?>user">
							<i class="icon-undo bigger-110"></i>
							Batal
						</a>
					</div>	
				</form>
			</div>
		</div>
	</div>
</div>