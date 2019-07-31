<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login Page - SMKN 1 Trimurjo Lampung Tengah</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>asset/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="asset/css/font-awesome-ie7.min.css" />
		<![endif]-->


		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="asset/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
		body{
			background-color: #0 !important;
			background-repeat: no-repeat;
			background-size: 100% 100%;
		}
	</style>
</head>

	<body class="login-layout">
		<div class="main-container container-fluid">
			<div class="main-content">
				<div class="row-fluid">
					<div class="span12">
						<div class="login-container">
							<div class="row-fluid">
								<div class="center">
									<h1>
										<span class="white">Sistem</span>
										<span class="white">Informasi Nilai</span>
										
									</h1>
									<h4 class="red"> SMKN 1 TRIMURJO LAMPUNG TENGAH</h4>
								</div>
							</div>

							<div class="space-6"></div>

							<div class="row-fluid">
								<div class="position-relative">
									<div id="login-box" class="login-box visible widget-box no-border">
										<div class="widget-body">
											<div class="widget-main" >
												<h4 class="header blue lighter bigger">
													<i class="icon-coffee green"></i>
													Username dan Password anda :
												</h4>

												<div class="space-6"></div>

												<form method="post" action="<?php echo base_url().'Login/cobaLogin'; ?>" onSubmit="return cekform();">
													<fieldset>
														<label class="block clearfix">
															<span class="block input-icon input-icon-right">
																<input type="text" name="username" id="username" class="form-control" placeholder="Username" />
																<i class="ace-icon fa fa-user"></i>
															</span>
														</label>

														<label class="block clearfix">
															<span class="block input-icon input-icon-right">
																<input type="password" name="password" id="password" class="form-control" placeholder="Password" />
																<i class="ace-icon fa fa-lock"></i>
															</span>
														</label>

														<div class="space"></div>
														<?php if($this->session->flashdata('error')) { ?>
	                   											 <div class="alert alert-danger alert-dismissible fade in" role="alert">
	                    											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                     											   <span aria-hidden="true">&times;</span>
	                     											 </button>
	                   									   <?php echo $this->session->flashdata('error'); ?>
	                   											 </div> 
	 													<?php } ?>

														<div class="clearfix">
															<button type="submin" class="width-35 pull-right btn btn-sm btn-primary">
																<i class="ace-icon fa fa-key"></i>
																<span class="bigger-110">Login</span>
															</button>
														</div>

														<div class="space-4"></div>
													</fieldset>
												</form>
												<div class="social-or-login center">
												<span class="bigger-110">Sekolah Menengah Kejuruan</span>
												</div>
												<div class="space-6"></div>


											</div><!--/widget-main-->

									<!--/dari sini-->
									
			<!--/sampai sini-->

		<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>asset/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='asset/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>asset/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--ace scripts-->

		<script src="<?php echo base_url();?>asset/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>asset/js/ace.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
			function show_box(id) {
			 $('.widget-box.visible').removeClass('visible');
			 $('#'+id).addClass('visible');
			}
		</script>
	</body>
</html>
