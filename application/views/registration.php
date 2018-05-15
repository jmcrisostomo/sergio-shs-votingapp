<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="admin">
		<meta name="author" content="admin">
		<title>Registration - International Christian Academy</title>
		<link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/favicon.ico');?>">
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
		<!--Font Awesome Icons CSS-->
		<link rel="stylesheet" href="<?php echo base_url('assets/font_awesome/css/fontawesome-all.min.css');?>">
		<!--Animate.CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>">
		<!-- Normalize.CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css');?>">
		<!-- Owl Carousel CSS and Default Theme -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl.carousel.js/dist/assets/owl.carousel.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl.carousel.js/dist/assets/owl.theme.default.min.css');?>">

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
		</style>
	</head>
	<body>
		<!-- header-->
		<?php $this->load->view('content-header');?>
		<!-- /header -->

		<!-- background slider -->
		<?php $this->load->view('content-bg_slider');?>
		<!-- /background slider -->
		<div class="container" style="background-color: #ffffff;box-shadow: 3px 3px 3px #757575; margin: 15px auto;">
			<div class="row">
				<div class="col-md-12 main">
					<div class="page-header">
					  <h1 class="text-center">Create an Account</h1>
					</div>
					<form method="POST" role="form" enctype="multipart/form-data" accept-charset="utf-8" style="max-width: 500px; margin: 0 auto;" action="<?php echo base_url();?>Student_Controller_Dashboard/function_create_account">
						<div class="row">
							<div class="col-md-12">
								<label> I want to enter grade
									<select class="form-control" name="grade_level_number">
										<?php
										$Select_Query = $this->db->query("SELECT * FROM tblrecordgradelevel WHERE STATE = 'ACTIVE'");
										foreach($Select_Query->result() as $object)
											{
												echo '<option value = "'.$object->GRADE_LEVEL_NUMBER.'" >'.$object->GRADE_LEVEL.'</option>';
											}
										?>
									</select>
								 </label>
								<div class="form-group">
									<label for="">Username</label>
									<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username..." oninput="myFunction2()" required>
									<p id="usernameValidation" class=""></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="********" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Confirm Password</label>
									<input type="password" class="form-control" id="repassword" name="repassword" placeholder="********" oninput="check(this)" required>
								</div>
							</div>
							<div class="col-md-12">
			         <div class="form-group">
				         <label for="email1">Email address</label>
				         <input type="email" class="form-control" id="email1" name="email" placeholder="Enter email" oninput="myFunction()" required>
				         <p id="emailValidation" class=""></p>
			         </div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Name</label>
									<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label for="">&nbsp;</label>
									<input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name">
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label for="">&nbsp;</label>
									<input type="text" class="form-control" id="sur_name" name="sur_name" placeholder="Surname" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="">Address</label>
							<div class="input-group mb-3">
								<input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
							</div>
							<label for="">Mobile Number</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">+63</span>
								</div>
								<input type="text" class="form-control" id="contact_number" name="contact_number" required>
							</div>
							<small class="text-muted form-text">e.g. 09123456789 </small>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleFormControlFile1">Upload Birth Certificate</label>
									<input type="file" class="form-control-file" id="exampleFormControlFile1" name="birth_certificate" accept="image/x-png" required><!-- onchange="check_image(image_name)" -->
								<!--	<p id="birth_cert_validation" class=""></p> -->
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleFormControlFile2">Upload Report Card</label>
									<input type="file" class="form-control-file" id="exampleFormControlFile2" name="report_card" accept="image/x-png" required><!-- onchange="check_image(image_name)" -->
									<!-- <p id="report_card_validation" class=""></p> -->
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" value="" required>
									I agree that I have read the <span><a href="<?php echo base_url('Home/terms')?>" target="_blank">Terms and Conditions.</a></span>
								</label>
							</div>
						</div>


						<button type="submit" class="btn btn-primary btn-lg">Create</button>
					</form>
				</div>
			</div>
		</div>

		<!-- footer + scripts-->
		<?php $this->load->view('content-footer');?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/popper.min.js');?>"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>

		<!-- Owl Carousel JS -->
		<script src="<?php echo base_url('assets/owl.carousel.js/dist/owl.carousel.min.js');?>"></script>
		<!-- ScrollReveal JS -->
		<script src="<?php echo base_url('assets/scrollreveal/dist/scrollreveal.min.js');?>"></script>
		<!-- Parallax.JS -->
		<!-- <script src="<?php echo base_url('assets/parallax.js/parallax.min.js');?>"></script> -->

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



<?php
// FOR EMAIL
$select_query = $this->db->query("SELECT EMAIL_ADDRESS FROM tblrecorduser");

echo ' <script>';
echo ' function myFunction()';
echo ' {';
echo '     var x = document.getElementById("email1").value;';


echo '     if(x == "")';
echo '     {';
echo '         document.getElementById("emailValidation").innerHTML = "";';
echo '     }';
foreach($select_query->result() as $object)
{
echo '     else if(x == "'.$object->EMAIL_ADDRESS.'")';
echo '     {';
echo '      var danger = "text-danger";';
echo '         document.getElementById("emailValidation").innerHTML = "<span class=" + danger + ">"+ x +" is NOT available</span>";';
echo '     }';
}


echo '     else';
echo '     {';
echo '      var success = "text-success";';
echo '         document.getElementById("emailValidation").innerHTML = "<span class="+success+">"+ x +" is available</span>";';
echo '     }';
echo ' }';
echo ' </script>';

?>


<?php
//FOR USERNAME
$select_query = $this->db->query("SELECT USER_NAME FROM tblrecorduser");

echo ' <script>';
echo ' function myFunction2()';
echo ' {';
echo '     var x = document.getElementById("username").value;';


echo '     if(x == "")';
echo '     {';
echo '         document.getElementById("usernameValidation").innerHTML = "";';
echo '     }';
foreach($select_query->result() as $object)
{
echo '     else if(x == "'.$object->USER_NAME.'")';
echo '     {';
echo '      var danger = "text-danger";';
echo '         document.getElementById("usernameValidation").innerHTML = "<span class=" + danger + ">"+ x +" is NOT available</span>";';
echo '     }';
}


echo '     else';
echo '     {';
echo '      var success = "text-success";';
echo '         document.getElementById("usernameValidation").innerHTML = "<span class="+success+">"+ x +" is available</span>";';
echo '     }';
echo ' }';
echo ' </script>';

?>

<script>
            function check(input)
            {
                if (input.value != document.getElementById('password').value)
                {
                    input.setCustomValidity('Password Must be Matching.');
                }
                else
                {
                    input.setCustomValidity('');
                }
            }

						/*function check_image(image_name)
						{
							//if (strpos(image_name.value, 'png') == true) {
							if(image_name.value == "foodie.png")
								document.getElementById("birth_cert_validation").innerHTML = "<span class='text-danger'>The image is not in PNG format!</span>";
								//alert("shit!");
							}
						}*/
</script>


	</body>
</html>
