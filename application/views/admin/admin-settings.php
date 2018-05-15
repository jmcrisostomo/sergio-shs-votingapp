<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="admin">
		<meta name="author" content="admin">
		<title>Settings - International Christian Academy</title>
		<link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/favicon.ico');?>">
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
		<!--Font Awesome Icons CSS-->
		<link rel="stylesheet" href="<?php echo base_url('assets/font_awesome/css/fontawesome-all.min.css');?>">
		<!--Animate.CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>">
		<!--DataTables CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/datatables.min.css');?>">
		<!-- Normalize.CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css');?>">
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
					<h3><span><i class="fa fa-cog"></i></span> Settings</h3>

					<ul class="nav nav-tabs" id="settingsTab" role="tablist">

						<!-- OVERVIEW -->
					  <li class="nav-item">
					    <a class="nav-link animated fadeInRight active" href="#overview" id="overview-tab" data-toggle="tab" role="tab" aria-controls="overview" aria-selected="true" style="animation-duration: 500ms; animation-delay: 500ms">Overview</a>
					  </li>

						<!-- TYPE USER -->
					  <li class="nav-item">
					    <a class="nav-link animated fadeInRight" href="#typeuser" id="typeuser-tab" data-toggle="tab" role="tab" aria-controls="typeuser" aria-selected="true" style="animation-duration: 510ms; animation-delay: 500ms">Type User</a>
					  </li>

						<!-- TYPE ANSWER -->
					  <li class="nav-item">
					    <a class="nav-link animated fadeInRight" href="#typeanswer" id="typeanswer-tab" data-toggle="tab" role="tab" aria-controls="typeanswer" aria-selected="true" style="animation-duration: 520ms; animation-delay: 500ms">Type Answer</a>
					  </li>

						<!-- MESSAGE -->
					  <li class="nav-item">
					    <a class="nav-link animated fadeInRight" href="#message" id="message-tab" data-toggle="tab" role="tab" aria-controls="message" aria-selected="true" style="animation-duration: 530ms; animation-delay: 500ms">Message</a>
					  </li>

						<!-- PASSING GRADE -->
						<li class="nav-item">
							<a class="nav-link animated fadeInRight" href="#passing_grade" id="passing_grade-tab" data-toggle="tab" role="tab" aria-controls="passing_grade" aria-selected="true" style="animation-duration: 500ms; animation-delay: 500ms">Passing Grade</a>
						</li>

						<!-- TIME LIMIT -->
						<li class="nav-item">
							<a class="nav-link animated fadeInRight" href="#time_limit" id="time_limit-tab" data-toggle="tab" role="tab" aria-controls="time_limit" aria-selected="true" style="animation-duration: 500ms; animation-delay: 500ms">Time Limit</a>
						</li>

					</ul>


					<div class="tab-content" id="settingsTabContent">

						<!-- OVERVIEW -->
						<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
							<p class="lead mt-3">Please select the other tabs.</p>
						</div>

						<!-- TYPE USER -->
						<div class="tab-pane fade" id="typeuser" role="tabpanel" aria-labelledby="typeuser-tab">
							<?php
								$this->load->view('admin/admin-settings-type_user');
							?>
						</div>

						<!-- TYPE ANSWER -->
						<div class="tab-pane fade" id="typeanswer" role="tabpanel" aria-labelledby="typeanswer-tab">
							<?php
								$this->load->view('admin/admin-settings-type_answer');
							?>
						</div>

						<!-- MESSAGE -->
						<div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">
							<?php
								$this->load->view('admin/admin-settings-message');
							?>
						</div>

						<!-- PASSING GRADE -->
						<div class="tab-pane fade" id="passing_grade" role="tabpanel" aria-labelledby="passing_grade-tab">
							<?php
								$this->load->view('admin/admin-settings-passing_grade');
							?>
						</div>

						<!-- PASSING GRADE -->
						<div class="tab-pane fade" id="time_limit" role="tabpanel" aria-labelledby="time_limit-tab">
							<?php
								$this->load->view('admin/admin-settings-time_limit');
							?>
						</div>

					</div>
				</div>
				<!-- /content -->
			</div>
		</div>



		<!-- modals -->
		<!-- type user modal -->
		<?php $this->load->view('admin/admin-settings-type_user_modal');?>

		<!-- type answer modal -->
		<!-- NO ACTION NEEDED -->

		<!-- messages -->
		<?php $this->load->view('admin/admin-settings-message_modal');?>

		<!-- passing grade -->
		<?php $this->load->view('admin/admin-settings-passing_grade_modal');?>

		<!-- time limit -->
		<?php $this->load->view('admin/admin-settings-time_limit_modal');?>







		<!-- footer + scripts-->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/popper.min.js');?>"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
		<!--DataTables JS-->
		<script src="<?php echo base_url('assets/datatables/datatables.min.js');?>"></script>
		<!-- Test LiveReload Plugin -->
		<!-- <script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:81}/livereload.js?snipver=1"></' + 'script>')</script> -->

		<!-- other scripts -->
		<script>
			$(document).ready(function($) {
			    $('#myTable_1').DataTable({
			    	responsive: true,
			    	'order': [[ 1, 'asc' ]]
			    });
			    $('#myTable_2').DataTable({
			    	responsive: true,
			    	'order': [[ 1, 'asc' ]]
			    });
			    $('#myTable_3').DataTable({
			    	responsive: true,
			    	'order': [[ 1, 'asc' ]]
			    });
				$('#myTable_4').DataTable({
			    	responsive: true,
			    	'order': [[ 1, 'asc' ]]
			    });
				$('#myTable_5').DataTable({
			    	responsive: true,
			    	'order': [[ 1, 'asc' ]]
			    });

				$('#sidebarSettings').addClass('active');
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

		<!-- TYPE USER -->
		<script type="text/javascript">
		$(document).ready( function () {
			<?php
				$Select_Query = $this->db->query('SELECT * FROM tbltypeuser WHERE STATE = "ACTIVE"');

				foreach($Select_Query->result() as $object)
				{
					//EDIT
					echo '	$(".table").on("click", "#editbutton_typeuser'.$object->USERTYPE_ID.'", function() {'.PHP_EOL;
					//echo	'$("#editbutton'.$object->MESSAGE_ID.'").on("click",  function() {';

					echo '				var a = $("#usertype_number'.$object->USERTYPE_ID.'").html();'.PHP_EOL;
					echo '				$("#edit_usertype_number_header").text(a);'.PHP_EOL;
					echo '				$("#edit_usertype_number").val(a);'.PHP_EOL;

					echo '        var b = $("#user_type'.$object->USERTYPE_ID.'").html();'.PHP_EOL;
					echo '        $("#edit_user_type_number_input").val(b);'.PHP_EOL;

					echo '		});'.PHP_EOL;

					//REMOVE
					echo '	$(".table").on("click", "#removebutton_typeuser'.$object->USERTYPE_ID.'", function() {'.PHP_EOL;

					echo '        var a = $("#usertype_number'.$object->USERTYPE_ID.'").html();'.PHP_EOL;
					echo '				$("#remove_type_answer_number").text("Are you sure you want to remove " + a + "?");'.PHP_EOL;
					echo '				$("#remove_type_answer_number_header").val(a);'.PHP_EOL;
					echo	'});';

				}
			?>
		});
		</script>



		<!-- TYPE ANSWER -->
		<!-- NO ACTION NEEDED -->

		<!-- MESSAGE -->
		<script type="text/javascript">
		$(document).ready( function () {
			<?php
				$Select_Query = $this->db->query('SELECT * FROM tblmessage WHERE STATE = "ACTIVE"');

				foreach($Select_Query->result() as $object)
				{
					//EDIT
					echo '	$(".table").on("click", "#editbutton_message'.$object->MESSAGE_ID.'", function() {'.PHP_EOL;
					//echo	'$("#editbutton'.$object->MESSAGE_ID.'").on("click",  function() {';

					echo '				var a = $("#message_number'.$object->MESSAGE_ID.'").html();'.PHP_EOL;
					echo '				$("#edit_message_number_header").text(a);'.PHP_EOL;
					echo '				$("#edit_message_number").val(a);'.PHP_EOL;

					echo '        var b = $("#message'.$object->MESSAGE_ID.'").html();'.PHP_EOL;
					echo '        $("#edit_message_number_input").val(b);'.PHP_EOL;

					echo '		});'.PHP_EOL;
				}
			?>
		});
		</script>


		<!-- PASSING GRADE -->
		<script type="text/javascript">
		$(document).ready( function () {
			<?php
				$Select_Query = $this->db->query('SELECT * FROM tblpassinggrade WHERE STATE = "ACTIVE"');

				foreach($Select_Query->result() as $object)
				{
					//EDIT
					echo '	$(".table").on("click", "#editbutton_passing_grade'.$object->PASSING_GRADE_ID.'", function() {'.PHP_EOL;

					echo '				var a = $("#passing_grade_number'.$object->PASSING_GRADE_ID.'").html();'.PHP_EOL;
					echo '				$("#edit_passing_grade_number_header").text(a);'.PHP_EOL;
					echo '				$("#edit_passing_grade_number").val(a);'.PHP_EOL;

					echo '        var b = $("#passing_grade_percent'.$object->PASSING_GRADE_ID.'").html();'.PHP_EOL;
					echo '        $("#edit_passing_grade_number_input").val(b);'.PHP_EOL;

					echo '		});'.PHP_EOL;
				}
			?>
		});
		</script>


		<!-- PASSING GRADE -->
		<script type="text/javascript">
		$(document).ready( function () {
			<?php
				$Select_Query = $this->db->query('SELECT * FROM tbltimelimit WHERE STATE = "ACTIVE"');

				foreach($Select_Query->result() as $object)
				{
					//EDIT
					echo '	$(".table").on("click", "#editbutton_time_limit'.$object->TIME_LIMIT_ID.'", function() {'.PHP_EOL;

					echo '				var a = $("#time_limit_number'.$object->TIME_LIMIT_ID.'").html();'.PHP_EOL;
					echo '				$("#edit_time_limit_number_header").text(a);'.PHP_EOL;
					echo '				$("#edit_time_limit_number").val(a);'.PHP_EOL;

					echo '        var b = $("#time_limit_minute'.$object->TIME_LIMIT_ID.'").html();'.PHP_EOL;
					echo '        $("#edit_time_limit_number_input").val(b);'.PHP_EOL;

					echo '		});'.PHP_EOL;
				}
			?>
		});
		</script>


	</body>
</html>
