<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="student">
		<meta name="author" content="student">
		<title>Messages - International Christian Academy</title>
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
		input[type="checkbox"]{
		  width: 20px; /*Desired width*/
		  height: 20px; /*Desired height*/
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
					<?php //echo $error;?>
					<div class="row">
						<div class="col-md-4">
							<div class="inbox-content" style="">
								<div class="row" style="margin-bottom: 5px;">
									<div class="col-md-2 col-sm-2 col-2">
										<!-- <input type="checkbox" name="" id="checkAll" class="">  -->
										<div class="my-auto">
											<input type="checkbox" name="" id="checkAll" class="" data-toggle="tooltip" title="All"> 
										</div>
									</div>
									<div class="col-md-10 col-sm-10 col-10 d-flex">
										<!-- <div class="btn-group" role="group" aria-label="Inbox Options"> -->
										<button id="optionRead" class="btn btn-light" type="button" data-toggle="tooltip" title="Mark As Read"><span><i class="fa fa-fw fa-envelope-open"></i></span></button>
										<button class="btn btn-light" type="button" data-toggle="tooltip" title="Mark As Unread"><span><i class="fa fa-fw fa-envelope"></i></span></button>
										<button class="btn btn-light" type="button" data-toggle="tooltip" title="Remove Message"><span><i class="fa fa-fw fa-trash-alt"></i></span></button>
										<!-- </div> -->
									</div>
								</div>	
								<div class="row">
									<div class="col-md-2 col-sm-2 col-2">
										<form id="checkBoxSelection" action="<?php echo base_url('Student/message_markasread');?>" method="get">
											<table>
												<tbody>
													<tr>
														<input type="text" name="selectedCheckboxes" id="cb_count" hidden>
														<td style="height: 64px;"><input type="checkbox" name="cb_message1" value="MESSAGE-001"></td>
													</tr>
													<tr>
														<td style="height: 64px;"><input type="checkbox" name="cb_message2" value="MESSAGE-002"></td>
													</tr>
													<tr>
														<td style="height: 64px;"><input type="checkbox" name="cb_message3" value="MESSAGE-003"></td>
													</tr>
													<tr>
														<td style="height: 64px;"><input type="checkbox" name="cb_message4" value="MESSAGE-004"></td>
													</tr>
												</tbody>
											</table>
										</form>
									</div>
									<div class="col-md-10 col-sm-10 col-10">
										<div class="nav flex-column nav-pills" id="inbox-tab" role="tablist" aria-orientation="vertical">
											<?php
											$User_Number = $_SESSION['USER_NUMBER'];
											$Select_Query = $this->db->query("SELECT * FROM tblinbox WHERE STATE = 'ACTIVE' AND _TO = '$User_Number'");
											foreach($Select_Query->result() as $object)
											{
												echo ' <a class="nav-link text-dark font-weight-bold" id="'.$object->INBOX_NUMBER.'-tab" data-toggle="pill" href="#'.$object->INBOX_NUMBER.'" role="tab" aria-controls="'.$object->INBOX_NUMBER.'" aria-selected="false">';
												echo ' 	<span><i class="fa fa-envelope"></i></span>';
												if($object->_READ == 'NO')
												{
													echo ' 	From: Admin <span class="badge badge-danger animated tada" style="animation-duration: 750ms; animation-delay: 1000ms;">New</span>';
												}
												else if($object->_READ == 'YES')
												{
													echo ' 	From: Admin';
												}
												echo ' 	<br>';
										    echo ' 	<small>Subject: '.$object->SUBJECT.'</small>';
												echo ' </a>';
											}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-8">
							<div class="tab-content" id="inbox-tabContent">
								<?php
								$User_Number = $_SESSION['USER_NUMBER'];
								$Select_Query = $this->db->query("SELECT * FROM tblinbox WHERE STATE = 'ACTIVE' AND _TO = '$User_Number'");
								foreach($Select_Query->result() as $object)
								{
									if($object->SUBJECT == 'Birth Certificate' || $object->SUBJECT == 'Report Card' || $object->SUBJECT == 'Birth Certificate and Report Card')
									{
										
										echo '	<div class="tab-pane fade" id="'.$object->INBOX_NUMBER.'" role="tabpanel" aria-labelledby="'.$object->INBOX_NUMBER.'-tab">';
										echo '		<form method="POST" enctype="multipart/form-data" accept-charset="utf-8" action="'.base_url().'Student_Controller_Dashboard/function_resend_birthcertificate_reportcard">';
										echo '		<h4>Subject: <strong>'.$object->SUBJECT.'</strong></h4>';
										echo '		<h5>From: Admin</h5>';
										echo '		<h5>To: '.$object->_TO.'</h5>';
										echo '		<p class="lead">';
										echo       $object->MESSAGE;
										echo '		</p>';
										echo '		<div class="row">';
										echo '			<div class="col-md-6">';
										echo '				<div class="form-group">';
										echo '					<label for="exampleFormControlFile1">Upload Birth Certificate</label>';
										echo '					<input type="file" class="form-control-file" id="exampleFormControlFile1" name="birth_certificate" accept="image/x-png" required>';
										echo '				</div>';
										echo '			</div>';
										echo '			<div class="col-md-6">';
										echo '				<div class="form-group">';
										echo '					<label for="exampleFormControlFile1">Upload Report Card</label>';
										echo '					<input type="file" class="form-control-file" id="exampleFormControlFile1" name="report_card" accept="image/x-png" required>';
										echo '				</div>';
										echo '			</div>';
										echo '		</div>';
										echo '		<small>Message Date: '.$object->DATE_MODIFIED.' Philippine Standard Time</small>';
										echo '    <button class="btn btn-success" type="submit">Send</button>';
										echo '	</div>';
										echo '</form>';
									}
									else if($object->SUBJECT == 'Verification')
									{
										echo '	<div class="tab-pane fade" id="'.$object->INBOX_NUMBER.'" role="tabpanel" aria-labelledby="'.$object->INBOX_NUMBER.'-tab">';
										echo '		<h4>Subject: <strong>'.$object->SUBJECT.'</strong></h4>';
										echo '		<h5>From: Admin</h5>';
										echo '		<h5>To: '.$object->_TO.'</h5>';
										echo '		<p class="lead">';
										$Message_Number = $object->MESSAGE;
										$Select_Query_Message = $this->db->query("SELECT MESSAGE FROM tblmessage WHERE MESSAGE_NUMBER = '$Message_Number'");
										echo $Select_Query_Message->row("MESSAGE");
										echo '		</p>';
										echo '		<small>Message Date: '.$object->DATE_MODIFIED.' Philippine Standard Time</small>';
										echo '	</div>';
									}
									else
									{
										echo '	<div class="tab-pane fade" id="'.$object->INBOX_NUMBER.'" role="tabpanel" aria-labelledby="'.$object->INBOX_NUMBER.'-tab">';
										echo '		<h4>Subject: <strong>'.$object->SUBJECT.'</strong></h4>';
										echo '		<h5>From: Admin</h5>';
										echo '		<h5>To: '.$object->_TO.'</h5>';
										echo '		<p class="lead">';
										echo       $object->MESSAGE;
										echo '		</p>';
										echo '		<small>Message Date: '.$object->DATE_MODIFIED.' Philippine Standard Time</small>';
										echo '	</div>';
									}
								}
								?>
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
		<!-- <script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:81}/livereload.js?snipver=1"></' + 'script>')</script> -->

		<!-- other scripts -->
		<script>
			$(document).ready(function(){
			    $('[data-toggle="tooltip"]').tooltip(); 
			});
		</script>
		<script>
			$(document).ready(function($) {
				$('#sidebarMessages').addClass('active');
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
		<script type="text/javascript">
			// Testing ko lang hahaha - Matt
			$(document).ready(function($) {
				$('#checkAll').click(function () {
				    $('input:checkbox').not(this).prop('checked', this.checked);
				    var countChecked = function() {
						var n = $( "input:checked" ).length;
						$( '#cb_count' ).val( n - 1 );
					};
					$( "input[type=checkbox]" ).on( "click", countChecked );
				 });

				var countChecked = function() {
						var n = $( "input:checked" ).length;
						$( '#cb_count' ).val( n );
					};
				$( "input[type=checkbox]" ).on( "click", countChecked );
				
				$('#optionRead').on('click', function(){
					$('#checkBoxSelection').submit();
				});
			});
		</script>
	</body>
</html>
