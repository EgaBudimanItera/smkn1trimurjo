<div id="user-profile-1" class="user-profile row">
	<div class="col-xs-12 col-sm-3 center">
		<div>
			<span class="profile-picture">
				<img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="<?php if($this->session->userdata('avatar')=='L'){ echo base_url().'upload/avatar.png'; }else{ echo base_url().'upload/avatar3.png'; } ?>">
			</span>

			<div class="space-4"></div>

			<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
				<div class="inline position-relative">
					<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
						<i class="ace-icon fa fa-circle light-green"></i>
						&nbsp;
						<span class="white"><?php echo $nama; ?></span>
					</a>

					<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
						<li class="dropdown-header"> Change Status </li>

						<li>
							<a href="#">
								<i class="ace-icon fa fa-circle green"></i>
&nbsp;
								<span class="green">Available</span>
							</a>
						</li>

						<li>
							<a href="#">
								<i class="ace-icon fa fa-circle red"></i>
&nbsp;
								<span class="red">Busy</span>
							</a>
						</li>

						<li>
							<a href="#">
								<i class="ace-icon fa fa-circle grey"></i>
&nbsp;
								<span class="grey">Invisible</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="space-6"></div>

		<div class="hr hr16 dotted"></div>
	</div>

	<div class="col-xs-12 col-sm-9">
		<?php if($this->session->flashdata('success')) { ?>
		    <div class="alert alert-success alert-dismissible fade in" role="alert">
		      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		      </button>
		      <?php echo $this->session->flashdata('success'); ?>
		    </div> 
		<?php } ?>

		<div class="space-12"></div>
		<form action="<?php echo base_url(); ?>user/save" method="post">

		<div class="profile-user-info profile-user-info-striped">
			<input type="hidden" name="tipe" value="<?php echo $tipe; ?>">
			<div class="profile-info-row">
				<div class="profile-info-name"> Username </div>

				<div class="profile-info-value">
					<input type="text" name="username" id="username" readonly value="<?php echo $username; ?>">
				</div>
			</div>

			<div class="profile-info-row">
				<div class="profile-info-name"> Nama </div>

				<div class="profile-info-value">
					<input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
				</div>
			</div>

			<div class="profile-info-row">
				<div class="profile-info-name"> Password </div>

				<div class="profile-info-value">
					<input type="password" name="password" id="password"> <label style="color: red;">* kosongkan jika tidak merubah password</label>
				</div>
			</div>

		</div>

		<div class="form-actions">
			<button class="btn btn-info">
				<i class="icon-save bigger-110"></i>
				Simpan
			</button>

			&nbsp; &nbsp; &nbsp;
			<a class="btn" href="<?php echo base_url(); ?>">
				<i class="icon-undo bigger-110"></i>
				Batal
			</a>
		</div>
		</form>

		<div class="hr hr2 hr-double"></div>
	</div>
</div>