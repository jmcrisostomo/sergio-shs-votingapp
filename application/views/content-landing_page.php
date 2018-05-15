<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="OSSGVS - Sergio Osmena Sr. High School">
		<meta name="keywords" content="school, grade 1 to 12, elections, entrance elections,  sergio osmena sr high school, philippines, manila senior high school, senior high schools">
		<meta name="author" content="International Christian Academy">
		<title>OSSGVS - sergio Osmena Sr. High School</title>
		<link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/favicon.ico');?>">
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.min.css');?>">
		<!--Font Awesome Icons CSS-->
		<link rel="stylesheet" href="<?php echo base_url('node_modules/font-awesome/css/font-awesome.min.css');?>">
		<!--Animate.CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('node_modules/animate.css/animate.min.css');?>">
		<!-- Owl Carousel CSS and Default Theme -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('node_modules/owl.carousel/dist/assets/owl.carousel.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('node_modules/owl.carousel/dist/assets/owl.theme.default.min.css');?>">
		<!-- Normalize.CSS -->
		<link rel="stylesheet" href="<?php echo base_url('node_modules/normalize.css/normalize.css');?>">
		<!-- Textillate CSS -->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('node_modules/textillate/assets/style.css');?>"> -->
		<!--Bootstrap Simple Sidebar CSS-->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-simple-sidebar.css"> -->
		<style type="text/css">
			html, body {
				margin-top: 0px;
			}
			.title-content {
				height: 600px;
			    padding: 100px 15px;
			    /*background-color: rgba(255,255,255,0.2);*/
			    text-align: center;
			    position: relative;
			}
			.title-content > .title-bar {
				height: 1px;
				width: 300px;
				border-radius: 50%;
				background-color: rgba(255,255,255,1);
				/*position: absolute;*/
				/*top: 50%;*/
				/*left: 50%;*/
				/*transform: translate(-50%, -50%);*/
			}
			.no-gutter {
				margin-left: -15px;
    			margin-right: -15px;
			}
			.bg-slider {
				position: fixed;
				width: 100%;
				height:100%;
				top: 0;
				z-index: -1000;
				filter: brightness(90%);
			}
			.slideCover {
				/*object-fit: cover;*/
			}
			.slideCover > .content-slideImage {
				height: 768px;
				width: 1366px;
				object-fit: cover;

			}
			.a_nav-link {
				padding: .5rem 1rem;
				color: white;
    			text-decoration: none;
			}
			.a_nav-link:hover {
				color: rgba(189,189,189 ,1);
    			text-decoration: none;
			}
			ul > li.a_nav-item:hover, ul > li > a.a_nav-link:hover{

			}
			.navbar {
				background-color: rgba(96,125,139,0.5);
				-webkit-transition: all 200ms ease-in;
				   -moz-transition: all 200ms ease-in;
				    -ms-transition: all 200ms ease-in;
				     -o-transition: all 200ms ease-in;
				        transition: all 200ms ease-in;
			}
			.navbar:hover{
				background-color: rgba(96,125,139,0.8) !important;
				-webkit-transition: all 200ms ease-in;
				   -moz-transition: all 200ms ease-in;
				    -ms-transition: all 200ms ease-in;
				     -o-transition: all 200ms ease-in;
				        transition: all 200ms ease-in;
			}
			/*footer*/
			.footer-row{
			  position: relative;
			  min-height: 100%;
			}
			.unstyled{
  				list-style-type: none;
  				padding: 0;
  				margin: 0;
			}
			.unstyled > li > a:hover {
				text-decoration: none;
			}
			.footer{
			  position: relative;
			  /*top: 30px;*/
			  bottom: 0;
			  left: 0;
			  width: 100%;
			  background-color: rgba(38,50,56 ,1);
			}
			.footer-content{
			  /*padding-top: 20px;*/
			  padding: 20px;
			}
			.title-content > h1 {
				font: 5em 'Mina', sans-serif;
			}
			/*landing page header*/
			@media only screen and (max-device-width:480px) {
				.title-content > h1 {
					font: 3em 'Mina', sans-serif;
				}
			}
		</style>
	</head>
	<body>
		<!-- header-->
		<?php $this->load->view('content-header');?>
		<!-- /header -->

		<!-- background slider -->
		<?php $this->load->view('content-bg_slider');?>
		<!-- /background slider -->

		<!-- banner -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="title-content no-gutter">
						<h1 class="text-light text-center animated fadeInUp tlt" style="animation-duration: 200ms; margin: 30px auto;">
							<!-- ENTRANCE EXAMINATION -->
							<ul class="texts">
								<li>ENTRANCE EXAMINATION</li>
								<li>ICA IS NOW OPEN FOR ENROLLMENT</li>
								<li>REGISTER NOW!</li>

								<!-- <li>Eksaminasyon Sa Pasukan</li> -->
								<!-- <li>入試</li> -->
								<!-- <li>入学考试</li> -->
								<!-- <li>Examen De Ingreso</li> -->
								<!-- <li>امتحان القبول</li> -->
							</ul>
						</h1>
						<!-- <div class="title-bar"></div> -->
						<a href="<?php echo base_url();?>Home/registration">
							<button type="button" class="btn btn-primary btn-lg  animated fadeInUp" style="animation-duration: 200ms;">Register Now!</button>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- exams -->
		<div class="container-fluid" style="background-color: rgba(236,239,241 ,1);">
			<div class="row">
				<div class="col-md-12" style="padding: 15px 10px;">
					<h1 id="title-1" class="h1 text-center">Our Exams</h1>
					<div class="exams-content">
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div id="card_1" class="card text-center" style="padding: 75px 10px; margin-top: 5px; box-shadow: 3px 3px 3px #757575">
									<img class="img-fluid" src="<?php echo base_url('assets/images/book.png');?>" alt="book" style="width: 100px; margin: 15px auto;">
									<div class="card-block">
										<h4 class="card-title">English Language</h4>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
										<!-- <a href="#" class="btn btn-primary">Button</a> -->
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div id="card_2" class="card text-center"  style="padding: 75px 10px; margin-top: 5px; box-shadow: 3px 3px 3px #757575">
									<img class="img-fluid" src="<?php echo base_url('assets/images/reading.png');?>" alt="reading" style="width: 100px; margin: 15px auto;">
									<div class="card-block">
										<h4 class="card-title">Reading Comprehension</h4>
										<p class="card-text">Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
										<!-- <a href="#" class="btn btn-primary">Button</a> -->
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div id="card_3" class="card text-center"  style="padding: 75px 10px; margin-top: 5px; box-shadow: 3px 3px 3px #757575">
									<img class="img-fluid" src="<?php echo base_url('assets/images/board.png');?>" alt="board" style="width: 100px; margin: 15px auto;">
									<div class="card-block">
										<h4 class="card-title">Mathematics</h4>
										<p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur.</p>
										<!-- <a href="#" class="btn btn-primary">Button</a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- schedule -->
		<div class="container-fluid" style="background-color: rgba(207,216,220 ,1);">
			<div class="row">
				<div class="col-md-12" style="padding: 15px 10px;">
					<h1 id="title-2" class="h1 text-center">Our Schedules</h1>
					<div class="schedule-content">
						<div class="row">
							<div class="col-md-6">
								<div id="card_4" class="card text-center" style="padding: 75px 10px; margin-top: 5px; box-shadow: 3px 3px 3px #757575">
									<img class="img-fluid" src="<?php echo base_url('assets/images/time.png');?>" alt="book" style="width: 100px; margin: 15px auto;">
									<div class="card-block">
										<h4 class="card-title">Monday to Friday</h4>
										<p class="card-text">Morning Session: 8 AM / Afternoon Session: 1 PM</p>
										<!-- <a href="#" class="btn btn-primary">Button</a> -->
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div id="card_5" class="card text-center"  style="padding: 75px 10px; margin-top: 5px; box-shadow: 3px 3px 3px #757575">
									<img class="img-fluid" src="<?php echo base_url('assets/images/school.png');?>" alt="reading" style="width: 100px; margin: 15px auto;">
									<div class="card-block">
										<h4 class="card-title">Located At</h4>
										<p class="card-text">Somewhere over the rainbow.</p>
										<!-- <a href="#" class="btn btn-primary">Button</a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer + scripts-->
		<?php $this->load->view('content-footer');?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js');?>"></script>
		<script src="<?php echo base_url('node_modules/popper.js/dist/umd/popper.min.js');?>"></script>
		<script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.min.js');?>"></script>

		<!-- Owl Carousel JS -->
		<script src="<?php echo base_url('node_modules/owl.carousel/dist/owl.carousel.min.js');?>"></script>
		<!-- ScrollReveal JS -->
		<script src="<?php echo base_url('node_modules/scrollreveal/dist/scrollreveal.min.js');?>"></script>
		<!-- Parallax.JS -->
		<!-- <script src="<?php echo base_url('assets/parallax.js/parallax.min.js');?>"></script> -->
		<!-- Textillate.JS -->
		<script src="<?php echo base_url('node_modules/textillate/assets/jquery.fittext.js');?>"></script>
		<script src="<?php echo base_url('node_modules/textillate/assets/jquery.lettering.js');?>"></script>
		<script src="<?php echo base_url('node_modules/textillate/jquery.textillate.js');?>"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$(".owl-carousel").owlCarousel({
					lazyLoad: true,
					autoplay:				true,
					autoplayTimeout:		5000,
					loop:					true,
					autoplayHoverPause:		false,
					animateOut: 			'fadeOut',
					animateIn: 				'fadeIn',
					items:					1,
					center: 				true,
					// smartSpeed:				450
				});
			});
		</script>
		<script type="text/javascript">
			function parallax(){
				var a = document.getElementById('content-bg');
				a.style.top = -(window.pageYOffset / 2) + 'px';
			}
			window.addEventListener("scroll", parallax, false);
		</script>
		<script type="text/javascript">
			window.sr = ScrollReveal();
			sr.reveal('#title-1',  { delay: 300, duration: 250 });
			sr.reveal('#card_1',  { delay: 300, duration: 250 });
			sr.reveal('#card_2',  { delay: 300, duration: 500 });
			sr.reveal('#card_3',  { delay: 300, duration: 750 });
			sr.reveal('#title-2',  { delay: 300, duration: 250 });
			sr.reveal('#card_4',  { delay: 300, duration: 250 });
			sr.reveal('#card_5',  { delay: 300, duration: 500 });
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.tlt').textillate({
					selector: '.texts',
  					loop: true,
  					in: {
					    effect: 'fadeIn',
					    delayScale: 1,
					    delay: 50,
					    sync: false,
					    shuffle: false,
					    reverse: false,
					    callback: function () {}
					  },
  					out: {
					    effect: 'fadeOut',
					    delayScale: 1,
					    delay: 50,
					    sync: false,
					    shuffle: false,
					    reverse: false,
					    callback: function () {}
					  },
  					type: 'word'
				});
			});
		</script>
		<!-- Test LiveReload Plugin -->
		<!-- <script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:81}/livereload.js?snipver=1"></' + 'script>')</script> -->

		<!-- other scripts -->
		<!-- <script>
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
		</script> -->

	</body>
</html>
