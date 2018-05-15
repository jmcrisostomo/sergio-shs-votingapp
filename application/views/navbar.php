<nav class="navbar navbar-expand-md navbar-dark ">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<!-- 			<button class="navbar-toggler" type="button" id="sidebarBtn">
		<span class="navbar-toggler-icon"></span>
	</button> -->
	<a class="navbar-brand" href="<?php echo base_url();?>">
		<img class="img-fluid" src="<?php echo base_url('assets/images/company_logo.png');?>" style="height: 90px; background-color: #FFF; border-radius: 5px; box-shadow: 3px 3px 3px #757575">
		<span>International Christian Academy</span>
	</a>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav ml-auto">
			<li class="a_nav-item">
				<a class="a_nav-link" href="<?php echo base_url()?>">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="a_nav-item">
				<a class="a_nav-link" href="<?php echo base_url('Home/about')?>">About</a>
			</li>
			<li class="a_nav-item">
				<a class="a_nav-link" href="<?php echo base_url('Home/signin')?>">Sign-in</a>
			</li>
			<li class="a_nav-item">
				<a class="a_nav-link" href="<?php echo base_url('Home/registration')?>">Register</a>
			</li>
		</ul>
	</div>
</nav>
