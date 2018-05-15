<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="student">
		<meta name="author" content="student">
		<title>Profile - International Christian Academy</title>
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
		<?php $this->load->view('student/student-header');?>
		<!-- /header -->
		<div class="container-fluid">
			<div class="row">
				<!-- sidebar -->
				<?php $this->load->view('student/student-sidebar');?>
				<!-- /sidebar -->

				<!-- content -->
				<div class="col-md-10 offset-md-2 main animated fadeIn" style="animation-duration: 500ms;">
					<h3><span><i class="fa fa-user"></i></span> Profile</h3>
					<div class="row">
						<div class="col-md-8">
							<table class="table table-inverse table-responsive table-hover table-striped" cellpadding="0">
								<tbody>
									<tr>
										<td><h5 class="text-right">Name:</h5></td>
										<td><p class="lead text-left"><?php
											echo $_SESSION['FIRST_NAME'].' '.$_SESSION['MIDDLE_NAME'].' '.$_SESSION['SUR_NAME'];
										?></p></td>
									</tr>
									<tr>
										<td><h5 class="text-right">Student #:</h5></td>
										<td><p class="lead text-left"><?php echo $_SESSION['USER_NUMBER']; ?></p></td>
									</tr>
									<tr>
										<td><h5 class="text-right">Username:</h5></td>
										<td><p class="lead text-left"><?php echo $_SESSION['USERNAME']; ?></p></td>
									</tr>
									<tr>
										<td><h5 class="text-right">Email:</h5></td>
										<td><p class="lead text-left"><?php echo $_SESSION['EMAIL_ADDRESS']; ?></p></td>
									</tr>
									<tr>
										<td><h5 class="text-right">Entering For:</h5></td>
										<td>
											<p class="lead text-left">Grade
												<?php
													$Grade_Level_Number = $_SESSION['GRADE_LEVEL_NUMBER'];
													$Select_Query = $this->db->query("SELECT GRADE_LEVEL FROM tblrecordgradelevel WHERE GRADE_LEVEL_NUMBER = '$Grade_Level_Number'");
													echo $Select_Query->row("GRADE_LEVEL");
												?>
											</p>
										</td>
									</tr>
									<tr>
										<td><h5 class="text-right">Verification:</h5></td>
										<td>
											<?php
											   $State  = $_SESSION['STATE'];
												 if($State == 'ACTIVE')
												 {
													echo '<p class="lead text-success"><span><i class="fa fa-check"></i></span> '.$_SESSION["STATE"].'</p>';
												 }
												 else if($State == 'INACTIVE')
												 {
													 echo '<p class="lead text-danger"><span><i class="fa fa-times"></i></span> '.$_SESSION["STATE"].'</p>';
												 }
											 ?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-4">
							<img class="img-fluid rounded-circle center" src="<?php echo base_url();?>assets/images/student.png" style="height: 200px;box-shadow: 3px 3px 3px #757575;">
							<!-- <small><a href="#">Change Photo</a></small> -->
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
				$('#sidebarProfile').addClass('active');
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
