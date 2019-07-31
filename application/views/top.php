<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>SIN - System Informasi Nilai</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    	<link rel="shortcut icon" href="<?php echo base_url(); ?>/asset/images/logo-smk-trimurjo.png" type="image/x-icon">

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/chosen.min.css" />
		<!-- page specific plugin styles -->
		

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url(); ?>asset/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo base_url(); ?>asset/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url(); ?>asset/js/respond.min.js"></script>
		<![endif]-->

		<style type="text/css">
			.tabel-kecil th, .tabel-kecil td{
				padding: 0px !important; 
			}
		</style>
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state" style="background-color: #5F9EA0">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?php echo base_url(); ?>" class="navbar-brand">
						<small>
							<img width="30px;" src="<?php echo base_url(); ?>asset/images/logo-smk-trimurjo.png">
							Sistem Informasi Akademik
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal" style="">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php if($this->session->userdata('avatar')=='L'){ echo base_url().'upload/avatar.png'; }else{ echo base_url().'upload/avatar3.png'; } ?>" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $this->session->userdata('nama'); ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?php echo base_url().'user/user_profil/'.$this->session->userdata('username'); ?>">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url(); ?>logout">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>