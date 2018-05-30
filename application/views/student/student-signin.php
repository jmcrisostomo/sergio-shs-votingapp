<?php
	$this->load->view('header');
?>

<div class="container-fluid">
	<div class="login-bg animated fadeIn" style="animation-duration: 500ms;"></div>
	<div class="login-content row my-auto">
		<div class="col-md-8 col-12">
			<div class="login-logo-content">
				<div class="row mt-3">
					<div class="col-md-6 col-6 text-center animated fadeIn border-right-to-left" style="animation-duration: 500ms;">
						<a href="<?php echo base_url();?>">
							<img class="img-fluid login-logo" src="<?php echo base_url('assets/images/logo-1.png');?>" >
						</a>
					</div>
					<div class="col-md-6 col-6 text-center animated fadeIn" style="animation-duration: 500ms;">
						<a href="<?php echo base_url();?>">
							<img class="img-fluid login-logo" src="<?php echo base_url('assets/images/logo-3.png');?>" >
						</a>
					</div>
					<div class="col-md-12">
						<h1 class="text-center animated fadeInUp" style="animation-duration: 500ms; animation-delay: 250ms;">Sergio Osmeña Sr. High School</h1>
						<p class="text-center lead animated fadeInUp" style="animation-duration: 500ms; animation-delay: 300ms;">Supreme Student Government</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div class="login-form">
				<div class="animated fadeIn" style="animation-duration: 500ms;">
					<h5 class="text-center mb-3">Student Sign In</h5>
					<form method="POST" action="<?php echo base_url();?>Controller_Authentication/function_sign_in_user">
						<div class="input-group mb-3 animated fadeInUp" style="animation-duration: 500ms;">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-hashtag"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="LRN Number" aria-label="LRN Number" name="lrn_number" aria-describedby="basic-addon1">
						</div>
						<div class="input-group mb-3 animated fadeInUp" style="animation-duration: 600ms;">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="Password" aria-label="password" name="password" aria-describedby="basic-addon1">
						</div>
						<button class="btn btn-primary mt-3 animated fadeInUp" type="submit" value="Login" style="width: 100%; animation-duration: 700ms;"><span><i class="fa fa-sign-in-alt"></i></span> Sign in</button>
					</form>
					<small><a href="#" class="text-primary">Forgot Password?</a></small>
				</div>
			</div>
		</div>
	</div>
	<!--./row-->

	<!-- <div class="login-content animated fadeIn" style="animation-duration: 500ms;">
		<a href="<?php echo base_url();?>"><img class="img-fluid login-logo" src="<?php echo base_url('assets/images/company_logo.png');?>" ></a>
		<h5 class="text-center mb-3">Student Sign In</h5>
		<form method="POST" action="<?php echo base_url();?>Controller_Authentication/function_sign_in_user">
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
	</div> -->
</div>

<?php
	$this->load->view('footer');
?>