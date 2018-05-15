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
		<div class="container-fluid">
			<div class="login-bg">
			</div>
			<div class="login-content animated fadeIn" style="animation-duration: 500ms;">
				<img class="img-fluid login-logo" src="<?php echo base_url('assets/images/company_logo.png');?>">
				<h5 class="text-center mb-3">Administrator Sign In</h5>

				<form method="POST" action="<?php echo base_url();?>Controller_Authentication/function_sign_in">
					<div class="input-group mb-3 animated fadeInUp" style="animation-duration: 500ms;">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
					  </div>
					  <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3 animated fadeInUp" style="animation-duration: 600ms;">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
					  </div>
					  <input type="password" class="form-control" placeholder="Password" aria-label="password" name="password" aria-describedby="basic-addon1">
					</div>

					<button class="btn btn-success mt-3 animated fadeInUp" type="submit" value="Login" style="width: 100%; animation-duration: 700ms;"><span><i class="fa fa-sign-in-alt"></i></span> Sign in</button>
				</form>

				<small><a href="#" class="text-primary">Forgot Password?</a></small>
			</div>
		</div>
		<!-- footer + scripts-->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/popper.min.js');?>"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
		<!-- Test LiveReload Plugin -->
		<script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:81}/livereload.js?snipver=1"></' + 'script>')</script>
	</body>
</html>
