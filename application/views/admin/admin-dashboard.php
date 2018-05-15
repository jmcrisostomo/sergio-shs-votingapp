<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="admin">
		<meta name="author" content="admin">
		<title>Dashboard - International Christian Academy</title>
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
	<body>
		<!-- header-->
		<?php $this->load->view('admin/admin-header');?>
		<!-- /header -->
		<div class="container-fluid">
			<div class="row">
				<!-- sidebar -->
				<?php $this->load->view('admin/admin-sidebar');?>
				<!-- /sidebar -->

				<!-- content -->
				<div class="col-md-10 offset-md-2 main animated fadeIn" style="animation-duration: 500ms;">
					<h3><span><i class="fa fa-tachometer-alt"></i></span> My Dashboard</h3>
					<!-- <p class="lead">Non-Clickable</p>
					<ul class="list-group">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-12">
						  		<li class="list-group-item animated fadeInUp" style="animation-duration: 0.5s; background-color: #4CAF50; color: #FFF;">
						  			<div style="padding-bottom: 15px;">
						  				<span class="text-left"><i class="fa fa-thumbs-up fa-4x"></i></span>
						  			</div>
						  			<h3 class="float-right">83</h3>
						  			<h4>Passed</h4>
						  		</li>
							</div>
							<div class="col-md-3 col-sm-6 col-12">
						  		<li class="list-group-item animated fadeInUp" style="animation-duration: 0.6s; background-color: #f44336; color: #FFF;">
						  			<div style="padding-bottom: 15px;">
						  				<span class="text-left"><i class="fa fa fa-meh fa-4x"></i></span>
						  			</div>
						  			<h3 class="float-right">53</h3>
						  			<h4>Failed</h4>
						  		</li>
							</div>
							<div class="col-md-3 col-sm-6 col-12">
						  		<li class="list-group-item animated fadeInUp" style="animation-duration: 0.7s; background-color: #2196F3; color: #FFF;">
						  			<div style="padding-bottom: 15px;">
						  				<span class="text-left"><i class="fa fa-envelope fa-4x"></i></span>
						  			</div>
						  			<h3 class="float-right">18</h3>
						  			<h4>Request</h4>
						  		</li>
							</div>
							<div class="col-md-3 col-sm-6 col-12">
						  		<li class="list-group-item animated fadeInUp" style="animation-duration: 0.8s; background-color: #FF9800; color: #FFF;">
						  			<div style="padding-bottom: 15px;">
						  				<span class="text-left"><i class="fa fa-users fa-4x"></i></span>
						  			</div>
						  			<h3 class="float-right">151</h3>
						  			<h4>Users</h4>
						  		</li>
							</div>
						</div>
					</ul> -->

					<!-- <p class="lead">Clickable</p> -->
					<div class="list-group">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-12">
								<a href="#" class="list-group-item list-group-item-action animated fadeInUp" style="animation-duration: 0.5s; background-color: #4CAF50; color: #FFF;">
									<div style="padding-bottom: 15px;">
						  				<span class="text-left"><i class="fa fa-thumbs-up fa-4x"></i></span>
						  			</div>
						  			<h3 class="float-right">83</h3>
						  			<h4>Passed</h4>
								</a>
							</div>
							<div class="col-md-3 col-sm-6 col-12">
						  		<a href="#" class="list-group-item list-group-item-action animated fadeInUp" style="animation-duration: 0.6s; background-color: #f44336; color: #FFF;">
						  			<div style="padding-bottom: 15px;">
						  				<span class="text-left"><i class="fa fa fa-meh fa-4x"></i></span>
						  			</div>
						  			<h3 class="float-right">53</h3>
						  			<h4>Failed</h4>
						  		</a>
							</div>
							<div class="col-md-3 col-sm-6 col-12">
						  		<a href="<?php echo base_url('Admin/requests');?>" class="list-group-item list-group-item-action animated fadeInUp" style="animation-duration: 0.7s; background-color: #2196F3; color: #FFF;">
						  			<div style="padding-bottom: 15px;">
						  				<span class="text-left"><i class="fa fa-envelope fa-4x"></i></span>
						  			</div>
						  			<h3 class="float-right">
										<?php
											$Select_Query = $this->db->query("SELECT COUNT(REQUEST_ID) AS NUMBER_OF_REQUESTS FROM tblrequest WHERE STATE = 'ACTIVE'");
											echo $Select_Query->row("NUMBER_OF_REQUESTS");
										?>
									 </h3>
						  			<h4>Request</h4>
						  		</a>
							</div>
							<div class="col-md-3 col-sm-6 col-12">
						  		<a href="#" class="list-group-item list-group-item-action animated fadeInUp" style="animation-duration: 0.8s; background-color: #FF9800; color: #FFF;">
						  			<div style="padding-bottom: 15px;">
						  				<span class="text-left"><i class="fa fa-users fa-4x"></i></span>
						  			</div>
						  			<h3 class="float-right">151</h3>
						  			<h4>Users</h4>
						  		</a>
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
				$('#sidebarHome').addClass('active');
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
