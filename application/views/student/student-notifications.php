<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="student">
		<meta name="author" content="student">
		<title>Notifications - International Christian Academy</title>
		<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/favicon.ico">
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
		<!--Font Awesome Icons CSS-->
		<link rel="stylesheet" href="<?php echo base_url('assets/font_awesome/css/fontawesome-all.min.css');?>">
		<!--Animate.CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>">
		<!--DataTables CSS-->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/datatables/1.10.16/css/dataTables.bootstrap4.min.css"> -->
		<!-- Normalize.CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css');?>">
		<!--Bootstrap Simple Sidebar CSS-->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-simple-sidebar.css"> -->
	</head>
	<style type="text/css">
		/*.nav-pills .nav-link.active, .nav-pills .show>.nav-link { 
			color: #fff!important;
		background-color: rgba(96,125,139 ,1);
		}
		.nav-link:focus, .nav-link:hover {
			background-color: rgba(207,216,220 ,1);
		}
		.tab-content>.active {
			padding: 15px 10px;
			border-radius: 5px;
			border: 1px solid rgba(96,125,139,1);
		}*/
		.timeline {
			position: relative;
			padding: 21px 0px 10px;
			margin-top: 4px;
			margin-bottom: 30px;
		}

		.timeline .line {
			position: absolute;
			width: 4px;
			display: block;
			background: currentColor;
			top: 0px;
			bottom: 0px;
			margin-left: 30px;
		}

		.timeline .separator {
			border-top: 1px solid currentColor;
			padding: 5px;
			padding-left: 40px;
			font-style: italic;
			font-size: .9em;
			margin-left: 30px;
		}

		.timeline .line::before { top: -4px; }
		.timeline .line::after { bottom: -4px; }
		.timeline .line::before,
		.timeline .line::after {
			content: '';
			position: absolute;
			left: -4px;
			width: 12px;
			height: 12px;
			display: block;
			border-radius: 50%;
			background: currentColor;
		}

		.timeline .card {
			position: relative;
			margin: 10px 0px 21px 70px;
			clear: both;
		}

		.timeline .card::before {
			position: absolute;
			display: block;
			top: 8px;
			left: -24px;
			content: '';
			width: 0px;
			height: 0px;
			border: inherit;
			border-width: 12px;
			border-top-color: transparent;
			border-bottom-color: transparent;
			border-left-color: transparent;
		}

		.timeline .card .card-heading.icon * { font-size: 20px; vertical-align: middle; line-height: 40px; }
		.timeline .card .card-heading.icon {
			position: absolute;
			left: -59px;
			display: block;
			width: 40px;
			height: 40px;
			padding: 0px;
			border-radius: 50%;
			text-align: center;
			float: left;
		}

		.timeline .card-outline {
			border-color: transparent;
			background: transparent;
			box-shadow: none;
		}

		.timeline .card-outline .card-body {
			padding: 10px 0px;
		}

		.timeline .card-outline .card-heading:not(.icon),
		.timeline .card-outline .card-footer {
			display: none;
		}
	</style>
	<body>
		<!-- header-->
		<?php $this->load->view('student/student-header');?>
		<!-- /header -->
		<div class="container-fluid">
			<div class="row">
				<!-- sidebar -->
				<?php $this->load->view('student/student-sidebar');?>
				<!-- /sidebar -->

				<!-- content -->
				<div class="col-md-10 offset-md-2 main animated fadeIn" style="animation-duration: 500ms;">
					<h3><span><i class="fa fa-bell"></i></span> Notifications</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="timeline">
								<div class="line" style="color: rgba(96,125,139,1)"></div>
								<div class="separator text-muted">
									<time>02/22/2018</time>
								</div>
								<article class="card card-outline animated fadeIn" style="animation-duration: 250ms; animation-delay: 500ms;">
									<div class="card-heading icon" style="background-color: rgba(255,193,7,1);">
										<span class="text-light"><i class="fas fa-fw fa-trophy"></i></span>
									</div>
									<div class="card-body">
										<p>Congratulations <strong>Uvuvwevwevwe Onyetenyevwe Ugwemuhwem Osas</strong>! You have passed the exam!</p>
										<img class="img-fluid" src="https://media.giphy.com/media/kDMnvuIfgRU6Q/giphy.gif" style="height: 200px;">
									</div>
								</article>
								<div class="separator text-muted">
									<time>02/21/2018</time>
								</div>
								<article class="card card-outline animated fadeIn" style="animation-duration: 250ms; animation-delay: 500ms;">
									<div class="card-heading icon" style="background-color: rgba(96,125,139,1);">
										<i class="glyphicon glyphicon-info-sign"></i>
										<span class="text-light"><i class="fa fa-fw fa-info"></i></span>
									</div>
									<div class="card-body">
										Your exam is now pending to check. Please come back later.
									</div>
								</article>
								<article class="card card-outline animated fadeIn" style="animation-duration: 250ms; animation-delay: 500ms;">
									<div class="card-heading icon" style="background-color: rgba(96,125,139,1);">
										<i class="glyphicon glyphicon-info-sign"></i>
										<span class="text-light"><i class="fa fa-fw fa-info"></i></span>
									</div>
									<div class="card-body">
										You have started an Exam at <i>2/21/2018 18:00 Philippine Time</i>
									</div>
								</article>
								<div class="separator text-muted">
									<time>02/20/2018</time>
								</div>
								<article class="card card-outline animated fadeIn" style="animation-duration: 250ms; animation-delay: 500ms;">
									<div class="card-heading icon" style="background-color: rgba(76,175,80,1);">
										<span class="text-light"><i class="fa fa-fw fa-check"></i></span>
									</div>
									<div class="card-body">
										Your account has been successfully verified.
									</div>
								</article>
								<article class="card card-outline animated fadeIn" style="animation-duration: 250ms; animation-delay: 500ms;">
									<div class="card-heading icon" style="background-color: rgba(229,115,115 ,1);">
										<span class="text-light"><i class="fa fa-fw fa-heart"></i></span>
									</div>
									<div class="card-body">
										<p>Thank you for joining International Christian Academy, <strong>Uvuvwevwevwe Onyetenyevwe Ugwemuhwem Osas</strong>.</p>
										<img class="img-fluid" src="https://media.giphy.com/media/OkJat1YNdoD3W/giphy.gif" style="height: 250px;">
									</div>
								</article>
								<article class="card card-outline animated fadeIn" style="padding-top: 100px;animation-duration: 250ms; animation-delay: 500ms;">
									<div class="card-heading icon" style="background-color: rgba(96,125,139,1);">
										<i class="glyphicon glyphicon-info-sign"></i>
										<span class="text-light"><i class="fa fa-fw fa-info"></i></span>
									</div>
									<div class="card-body">
										That is all.
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
				<!-- /content -->
			</div>
		</div>
		<!-- footer + scripts-->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/popper.min.js');?>"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>

		<!--DataTables JS-->
<!-- 		<script src="<?php echo base_url();?>assets/datatables/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/datatables/1.10.16/js/dataTables.bootstrap4.min.js"></script> -->
		
		<!-- Test LiveReload Plugin -->
		<script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:81}/livereload.js?snipver=1"></' + 'script>')</script>

		<!-- other scripts -->
		<script>
			$(document).ready(function($) {
				$('#sidebarNotifications').addClass('active');
				$('#sidebarBtn').on('click', function() {
					sidebar_open();
				});
				$('#sidebarOverlay, #sidebarCloseButton').on('click', function() {
					sidebar_close();
				});
			});

			function sidebar_open() {
				if ($('.sidebar').css('display','block') === 'block') {
					$('.sidebar').css('display','none');
					$('.sidebar-overlay').css('display','none');
				} else {
					$('.sidebar').css('display','block');
					$('.sidebar-overlay').css('display','block');
				}
			}

			function sidebar_close() {
				$('.sidebar').css('display','none');
				$('.sidebar-overlay').css('display','none');
			}
		</script>

	</body>
</html>