<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="student">
		<meta name="author" content="student">
		<title>Requests - International Christian Academy</title>
		<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/favicon.ico">
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
		<!--Font Awesome Icons CSS-->
		<link rel="stylesheet" href="<?php echo base_url('assets/font_awesome/css/fontawesome-all.min.css');?>">
		<!--Animate.CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>">
		<!-- Fancy Box CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fancybox/dist/jquery.fancybox.min.css');?>">
		<!--DataTables CSS-->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/datatables/1.10.16/css/dataTables.bootstrap4.min.css"> -->
		<!-- Normalize.CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css');?>">
		<!--Bootstrap Simple Sidebar CSS-->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-simple-sidebar.css"> -->
		<style type="text/css">
			.req_content {
				position: relative;
				margin-bottom: 15px;
			}
			.req_content:hover .icon-overlay {
				opacity: 1;
			}
			.req_content > .icon-overlay {
				position: absolute;
				top: 0;
				bottom: 0;
				left: 0;
				right: 0;
				height: 100%;
				width: 100%;
				opacity: 0;
				-webkit-transition: all 250ms ease-in-out;
				   -moz-transition: all 250ms ease-in-out;
				    -ms-transition: all 250ms ease-in-out;
				     -o-transition: all 250ms ease-in-out;
				        transition: all 250ms ease-in-out;
				background-color: rgba(144,164,174 ,0.5);
			}
			.req_content > .icon-overlay > span {
				color: white;
				font-size: 20px;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				-ms-transform: translate(-50%, -50%);
				text-align: center;
			}
		</style>
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
					<a class="btn btn-outline-primary mb-1" href="<?php echo base_url('Admin/requests');?>"><span><i class="fas fa-caret-left"></i></span> Back</a>
					<h3><span><i class="fa fa-user"></i></span>
					<?php
						foreach($user_data as $object)
						{
							echo $object->USER_NUMBER;
						}
					?></h3>
					<div class="row">
						<div class="col-md-6">
							<table class="table table-inverse table-responsive" cellpadding="0">
								<tbody>
									<tr>
										<td><h5 class="text-right">Name:</h5></td>
										<td><p class="lead text-left" id="full_name">
											<?php
												foreach($user_data as $object)
												{
													echo $object->FIRST_NAME.' '.$object->MIDDLE_NAME.' '.$object->SUR_NAME;
												}
											?>
										</p></td>
									</tr>
									<tr>
										<td><h5 class="text-right">User #:</h5></td>
										<td><p class="lead text-left" id="user_number">
											<?php
												foreach($user_data as $object)
												{
													echo $object->USER_NUMBER;
												}
											?>
										</p></td>
									</tr>
									<tr>
										<td><h5 class="text-right">Username:</h5></td>
										<td><p class="lead text-left">
											<?php
												foreach($user_data as $object)
												{
													echo $object->USER_NAME;
												}
											?>
										</p></td>
									</tr>
									<tr>
										<td><h5 class="text-right">Email:</h5></td>
										<td><p class="lead text-left">
											<?php
												foreach($user_data as $object)
												{
													echo $object->EMAIL_ADDRESS;
												}
											?>
										</p></td>
									</tr>
									<tr>
										<td><h5 class="text-right">Entering For:</h5></td>
										<td>
											<p class="lead text-left">Grade
												<?php
													$Grade_Level_Number = $object->GRADE_LEVEL_NUMBER;
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
											  foreach($user_data as $object)
												{
												 if($object->STATE == 'ACTIVE')
												 {
													echo '<p class="lead text-success"><span><i class="fa fa-check"></i></span> '.$object->STATE.'</p>';
												 }
												 else if($object->STATE == 'INACTIVE')
												 {
													 echo '<p class="lead text-danger"><span><i class="fa fa-times"></i></span> '.$object->STATE.'</p>';
												 }
											 }
											 ?>
										</td>
									</tr>
									<tr>
										<td><h5 class="text-right">&nbsp;</h5></td>
										<td>
											<button id="accept_button" class="btn btn-success" type="button" data-toggle="modal" data-target="#modal-confirmation"><span><i class="fas fa-check"></i></span> Accept</button>
											<!-- <button class="btn btn-danger" type="button"><span><i class="fas fa-check"></i></span> Decline</button> -->
											<button id="decline_button" class="btn btn-danger" type="button" data-toggle="modal" data-target="#modal-sendmessage"><span><i class="fas fa-times"></i></span> Decline</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-6">

							<!-- <img class="img-fluid rounded-circle center" src="<?php echo base_url();?>assets/images/student.png" style="height: 200px;box-shadow: 3px 3px 3px #757575;"> -->

							<div class="row">
								<div class="col-md-6">
									<h5>Birth Certificate</h5>
									<a href="<?php echo base_url();?>assets/images/BirthCertificate/
									<?php
										foreach($user_data as $object)
										{
											echo $object->USER_NUMBER.'-'.$object->ATTEMP.'.png';
										}
									?>" data-fancybox >
										<div class="req_content">
											<img class="img-fluid" src="<?php echo base_url();?>assets/images/BirthCertificate/
											<?php
												foreach($user_data as $object)
												{
													echo $object->USER_NUMBER.'-'.$object->ATTEMP.'.png';
												}
											?>" alt="There's a problem on the image" style="width: 250px; height: 400px;">
											<div class="icon-overlay">
												<span><i class="fas fa-eye fa-2x"></i></span>
											</div>
										</div>
									</a>
								</div>

								<div class="col-md-6">
									<h5>Report Card</h5>
									<a href="<?php echo base_url();?>assets/images/ReportCard/
									<?php
										foreach($user_data as $object)
										{
											echo $object->USER_NUMBER.'-'.$object->ATTEMP.'.png';
										}
									?>" data-fancybox>
									<div class="req_container">
										<div class="req_content">
											<img class="img-fluid" src="<?php echo base_url();?>assets/images/ReportCard/
											<?php
												foreach($user_data as $object)
												{
													echo $object->USER_NUMBER.'-'.$object->ATTEMP.'.png';
												}
											?>" alt="There's a problem on the image" style="width: 250px; height: 400px;">
											<div class="icon-overlay">
												<span><i class="fas fa-eye fa-2x"></i></span>
											</div>
										</div>
									</div>
									</a>
								</div>
							</div>
							<!-- <small><a href="#">Change Photo</a></small> -->
						</div>
					</div>
				</div>
				<!-- /content -->
			</div>
		</div>









		<!-- message modal -->
		<form method="POST" action="<?php echo base_url();?>Controller_Dashboard/function_decline_request">
		<div class="modal fade" id="modal-sendmessage">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title"><span><i class="fas fa-envelope"></i></span> Send Message</h4>
					</div>
					<div class="modal-body">
							<fieldset class="form-group">
								<div class="row">
									<!-- <legend class="col-form-label">
										<span><h5>2. Hello World?</h5></span>
										<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
									</legend> -->
									<div class="col-md-12">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">To:</div>
											</div>
											<input type="text" class="form-control" id="full_name" name="full_name" value="<?php
												foreach($user_data as $object)
												{
													echo $object->FIRST_NAME.' '.$object->MIDDLE_NAME.' '.$object->SUR_NAME;
												}
											?>" disabled>
											<input type="text" id="user_number" name="user_number" value="<?php
												foreach($user_data as $object)
												{
													echo $object->USER_NUMBER;
												}
											?>" hidden>
										</div>
										<label>Subject/Problem: </label></br>
										<select name="subject">
											<option value="Birth Certificate">Birth Certificate</option>
											<option value="Report Card">Report Card</option>
											<option value="Birth Certificate and Report Card">Birth Certificate and Report Card</option>
											<option value="Technical">Technical</option>
											<option value="Slots">Slots</option>
										</select>
									</div>
									<div class="col-md-12">
										<label for="message_content"></label>
    									<textarea class="form-control" id="message_content" name="message_content" rows="10" placeholder="Enter message..."></textarea>
									</div>
									<small class="text-muted form-text">Note: Special characters are not allowed.</small>
								</div>
							</fieldset>
			</form>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Send</button>
					</form>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->



		<!-- confirmation modal -->
		<form method="POST" action="<?php echo base_url();?>Controller_Dashboard/function_accept_request">
		<div class="modal fade" id="modal-confirmation">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Confirm Request</h4>
						<input id="user_number" name="user_number" value="<?php
							foreach($user_data as $object)
							{
								echo $object->USER_NUMBER;
							}
						?>" hidden>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to accept this request?</p>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-danger">Yes</button>
					</form>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->











		<!-- footer + scripts-->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/popper.min.js');?>"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>

		<!-- Fancy Box JS-->
		<script src="<?php echo base_url('assets/fancybox/dist/jquery.fancybox.min.js');?>"></script>

		<!--DataTables JS-->
		<!--<script src="<?php echo base_url();?>assets/datatables/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/datatables/1.10.16/js/dataTables.bootstrap4.min.js"></script> -->

		<!-- Test LiveReload Plugin -->
		<!-- <script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:81}/livereload.js?snipver=1"></' + 'script>')</script> -->

		<!-- other scripts -->
		<script type="text/javascript">
			$(document).ready(function($){
				$('[data-fancybox]').fancybox({
					buttons : [
						// 'slideShow',
						'fullScreen',
						// 'thumbs',
						// 'share',
						'download',
						// 'zoom',
						'close'
				    ]
				});
			});
		</script>
		<script>
			$(document).ready(function($) {
				// #('#myTable').DataTable({});
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
