<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="student">
		<meta name="author" content="student">
		<title>Examination - International Christian Academy</title>
		<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/favicon.ico">
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
		<!--Font Awesome Icons CSS-->
		<link rel="stylesheet" href="<?php echo base_url('assets/font_awesome/css/fontawesome-all.min.css');?>">
		<!--Animate.CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>">
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">

		<!--DataTables CSS-->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/datatables/1.10.16/css/dataTables.bootstrap4.min.css"> -->
		<!-- Normalize.CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css');?>">
		<style type="text/css">
			html, body {
				background-color: rgba(236,239,241 ,1);
			}
			.timer {
			    position: fixed;
			    right: 3%;
			    top: 12%;
			    border: 1px solid #263238;
			    border-radius: 5px;
			    box-shadow: 3px 5px 15px #263238;
			    background: #FFF;
			    padding: 5px;
			    margin: 15px 10px;
			    width: 200px;
			}
			.timer > .timer-content {
				text-align: center;
				font-family: 'Orbitron', sans-serif;
			}
			.timer > .timer-content > h1{
				position: relative;
				margin-top: 0;
			}
			.timer > .timer-content > h1 > .hours{
				position: absolute;
			    top: 90%;
			    right: 72%;
			    font-size: 15px;
			}
			.timer > .timer-content > h1 > .minutes{
				position: absolute;
			    top: 90%;
			    right: 42%;
			    font-size: 15px;
			}
			.timer > .timer-content > h1 > .seconds{
				position: absolute;
			    top: 90%;
			    right: 8%;
			    font-size: 15px;
			}
			.timer > .timer-content > h3{
				margin: 0;
			}
		</style>
	</head>
	<body>
		<!-- header-->
		<?php $this->load->view('student/student-header');?>
		<!-- /header -->
		<script>
		// Set the date we're counting down to
		var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

		  // Get todays date and time
		  var now = new Date().getTime();

		  // Find the distance between now an the count down date
		  var distance = countDownDate - now;

		  // Time calculations for days, hours, minutes and seconds
		  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		  // Display the result in the element with id="demo"
		  // document.getElementById("demo").innerHTML = hours + "h:"
		  // + minutes + "m:" + seconds + "s ";

		  document.getElementById("demo").innerHTML = hours + '<span class="hours">HRS</span>:'+ minutes +'<span class="minutes">MIN</span>:'+ seconds +' <span class="seconds">SEC</span>';

		  // If the count down is finished, write some text 
		  if (distance < 0) {
		    clearInterval(x);
		    document.getElementById("demo").innerHTML = "EXPIRED";
		  }
		}, 1000);
		</script>

		<!-- header-->
		<?php $this->load->view('student/student-header');?>
		<!-- /header -->

		<!-- timer -->
		<div class="timer animated fadeInRight" style="animation-duration: 500ms; animation-delay: 1000ms;">
			<div class="timer-content">
				<h5>Timer <span><i class="fa fa-clock"></i></span></h5>
				<h1 id="demo">00<span class="hours">HRS</span>:00<span class="minutes">MIN</span>:00 <span class="seconds">SEC</span></h1>
				<!-- <h1 id="demo">00h:00m:00s</h1> -->
			</div>
		</div>
		<!-- /timer -->

		<div class="container" style="background-color: #ffffff;box-shadow: 3px 3px 3px #757575; margin: 25px auto;">
			<div class="row">
				<!-- sidebar -->
				<?php //$this->load->view('student/student-sidebar');?>
				<!-- /sidebar -->
				
				<!-- content -->
				<div class="col-md-10 offset-md-2 main animated fadeIn" style="animation-duration: 500ms;">
					<button type="button" class="btn btn-sm btn-outline-danger my-3" data-toggle="modal" data-target="#modal-2">Cancel the exam</button>
					<h3><span><i class="fa fa-book"></i></span> Subject: <span class="badge badge-primary">English</span></h3>
					<!-- generate question and answer -->
					<div class="row">
						<div class="col-md-10">
							<div class="item-content">
								<form>
									<fieldset class="form-group">
										<div class="row">
											<legend class="col-form-label">
												<span><h5>1. Hello World?</h5></span>
												<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua.</p>
											</legend>
											<div class="col-md-3">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="question_1" id="answer_a_question_1" value="option1">
													<label class="form-check-label" for="answer_a_question_1">
													 A. Java
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="question_1" id="answer_b_question_1" value="option1">
													<label class="form-check-label" for="answer_b_question_1">
													 B. C#
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="question_1" id="answer_c_question_1" value="option1">
													<label class="form-check-label" for="answer_c_question_1">
													 C. PHP
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="question_1" id="answer_d_question_1" value="option1">
													<label class="form-check-label" for="answer_d_question_1">
													 D. JavaScript
													</label>
												</div>
											</div>
										</div>
									</fieldset>
									<fieldset class="form-group">
										<div class="row">
											<legend class="col-form-label">
												<span><h5>2. Hello World?</h5></span>
												<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua.</p>
											</legend>
											<div class="col-md-3">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="question_2" id="answer_a_question_2" value="option1">
													<label class="form-check-label" for="answer_a_question_2">
													 A. Java
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="question_2" id="answer_b_question_2" value="option1">
													<label class="form-check-label" for="answer_b_question_2">
													 B. C#
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="question_2" id="answer_c_question_2" value="option1">
													<label class="form-check-label" for="answer_c_question_2">
													 C. PHP
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="question_2" id="answer_d_question_2" value="option1">
													<label class="form-check-label" for="answer_d_question_2">
													 D. JavaScript
													</label>
												</div>
											</div>
										</div>
									</fieldset>
									<fieldset class="form-group">
										<div class="row">
											<legend class="col-form-label">
												<span><h5>3. Hello World?</h5></span>
												<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua.</p>
											</legend>
											<div class="col-md-3">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="question_3" id="answer_a_question_3" value="option1">
													<label class="form-check-label" for="answer_a_question_3">
													 A. Java
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="question_3" id="answer_b_question_3" value="option1">
													<label class="form-check-label" for="answer_b_question_3">
													 B. C#
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="question_3" id="answer_c_question_3" value="option1">
													<label class="form-check-label" for="answer_c_question_3">
													 C. PHP
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="question_3" id="answer_d_question_3" value="option1">
													<label class="form-check-label" for="answer_d_question_3">
													 D. JavaScript
													</label>
												</div>
											</div>
										</div>
									</fieldset>
									<fieldset class="form-group">
										<div class="row">
											<div class="col-md-12">
												<input class="form-check-input" type="checkbox" name="confirm_submission" id="confimation_checkBox" required>
												<!-- <input class="form-check-input" type="checkbox" name="confirm_submission" id="confimation_checkBox" style="  /* Double-sized Checkboxes */ -ms-transform: scale(2); /* IE */ -moz-transform: scale(2); /* FF */ -webkit-transform: scale(2); /* Safari and Chrome */ -o-transform: scale(2); /* Opera */ padding: 15px;" required> -->
												<label class="form-check-label" for="confimation_checkBox">
													Check this to submit your exam paper.
												</label>
											</div>
											<div class="col-md-12">
												<button class="btn btn-primary disabled" type="submit" disabled>Submit</button>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /content -->
			</div>
		</div>

		<?php $this->load->view('student/student-exam_ongoing_modal');?>
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
		<script type="text/javascript">
			$(window).on('load',function(){
				$('#modal-1').modal('show');
			});
			$('#modal-1').modal({backdrop: 'static', keyboard: false})  
		</script>

	</body>
</html>