<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #FFF; border-bottom: 1px solid #E0E0E0">
	<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button> -->
	<button class="navbar-toggler" type="button" id="sidebarBtn">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="<?php echo base_url('Home');?>">
		<img class="img-fluid" src="<?php echo base_url('assets/images/logo-1.png');?>" style="height: 40px; /*background-color: #FFF;*/ border-radius: 5px;">
		<!-- <div class="d-inline-block border-right-to-left"></div> -->
		<img class="img-fluid" src="<?php echo base_url('assets/images/logo-3.png');?>" style="height: 40px; /*background-color: #FFF;*/ border-radius: 5px;">

		<span>OSSGVS - Sergio Osmena Sr. High School</span>
	</a>

	<div class="collapse navbar-collapse" id="navbarCollapse">
		<!-- <ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			</li>
		</ul> -->
		<!-- <form class="form-inline mt-2 mt-md-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form> -->
	</div>
	<span id="time_today" class="navbar-text text-light text-uppercase animated fadeIn" style="font-family: 'Rubik'; animation-delay: 1000ms; animation-duration: 250ms;"></span>
</nav>