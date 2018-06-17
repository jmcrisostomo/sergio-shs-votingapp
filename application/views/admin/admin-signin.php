<?php
	$this->load->view('header');
?>

<div class="container-fluid">
	<div class="login-bg animated fadeIn" style="animation-duration: 500ms;">
	</div>

	<div class="admin-login-content row">
		<div class="col-md-12 col-12">
			<div class="admin-login-form">
				<div class="animated fadeIn">
					<a href="<?php echo base_url();?>">
						<img class="img-fluid admin-login-logo" src="<?php echo base_url('assets/images/logo-1.png');?>" >
					</a>
					<h5 class="text-center mb-3">Administrator Sign In</h5>
					<form method="POST" action="<?php echo base_url('Auth/function_signin');?>">
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
						<button class="btn btn-primary mt-3 animated fadeInUp" type="submit" value="Login" style="width: 100%; animation-duration: 700ms;"><span><i class="fa fa-sign-in-alt"></i></span> Sign in</button>
					</form>
					<small><a href="#" class="text-primary">Forgot Password?</a></small>
				</div>
			</div>
		</div>
	</div><!--./row-->
</div>

<?php
	$this->load->view('footer');
?>