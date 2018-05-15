<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="student">
		<meta name="author" content="student">
		<title>My Exams - International Christian Academy</title>
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
		.nav-pills .nav-link.active, .nav-pills .show>.nav-link { 
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
					<h3><span><i class="fa fa-envelope"></i></span> Messages</h3>
					<div class="row">
						<div class="col-md-4">
							<div class="inbox-content" style="">
								<div class="nav flex-column nav-pills" id="inbox-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link text-dark font-weight-bold" id="message_1-tab" data-toggle="pill" href="#message_1" role="tab" aria-controls="message_1" aria-selected="false">
										<span><i class="fa fa-envelope"></i></span> 
										From: Admin <span class="badge badge-danger animated tada" style="animation-duration: 750ms; animation-delay: 1000ms;">New</span>
										<br>
										<small>Subject: Results</small>
									</a>
									<a class="nav-link text-dark" id="message_2-tab" data-toggle="pill" href="#message_2" role="tab" aria-controls="message_2" aria-selected="false">
										<span><i class="fa fa-envelope"></i></span> 
										From: Admin 
										<br>
										<small>Subject: Verification</small>
									</a>
									<a class="nav-link text-dark" id="message_3-tab" data-toggle="pill" href="#message_3" role="tab" aria-controls="message_3" aria-selected="false">
										<span><i class="fa fa-envelope"></i></span> 
										From: Admin 
										<br>
										<small>Subject: Exam</small>
									</a>
									<a class="nav-link text-dark" id="message_4-tab" data-toggle="pill" href="#message_4" role="tab" aria-controls="message_4" aria-selected="false">
										<span><i class="fa fa-envelope"></i></span> 
										From: Admin 
										<br>
										<small>Subject: Welcome</small>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="tab-content" id="inbox-tabContent">
								<div class="tab-pane fade" id="message_1" role="tabpanel" aria-labelledby="message_1-tab">
									<h4>Subject: <strong>Results</strong></h4>
									<h5>From: Admin</h5>
									<h5>To: Student-000001</h5>
									<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<small>Message Date: 2/20/2018 Time: 18:00 Philippine Standard Time</small>
								</div>
								<div class="tab-pane fade" id="message_2" role="tabpanel" aria-labelledby="message_2-tab">
									<h4>Subject: <strong>Verification</strong></h4>
									<h5>From: Admin</h5>
									<h5>To: Student-000001</h5>
									<p class="lead">Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<small>Message Date: 2/20/2018 Time: 18:00 Philippine Standard Time</small>
								</div>
								<div class="tab-pane fade" id="message_3" role="tabpanel" aria-labelledby="message_3-tab">...</div>
								<div class="tab-pane fade" id="message_4" role="tabpanel" aria-labelledby="message_4-tab">...</div>
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
				$('#sidebarMyExams').addClass('active');
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