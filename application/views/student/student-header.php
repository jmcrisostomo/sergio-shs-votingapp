<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: rgba(63,81,181,1); border-bottom: 1px solid #E0E0E0">
	<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button> -->
	<button class="navbar-toggler" type="button" id="sidebarBtn">
	<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="<?php echo base_url('home');?>">
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
	<div class="dropdown dropdown-profile">
		<div class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<div class="nav-profile-content noselect">
				<div class="user-info">
					<div class="user-info-text">
						<p class="text-light text-right">JM Crisostomo</p>
						<small class="text-light">Grade: <span class="badge badge-info">7</span> Section: <span class="badge badge-info">Diamond</span></small>
					</div>
					
				</div>
				<div class="user-img">
					<img class="img-fluid rounded-circle" src="<?php echo base_url();?>assets/images/test.jpg" style="height: 50px;">
				</div>
			</div>
		</div>
		<!-- <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Dropdown
		</button> -->
		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
			<span class="dropdown-item-text">Menu</span>
			<!-- <a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a> -->
			<a class="dropdown-item animated fadeIn" style="animation-duration: 500ms;" href="<?php echo base_url();?>" id="sidebarHome"><span><i class="fa fa-fw fa-home"></i></span> Home</a>
			<a class="dropdown-item animated fadeIn" style="animation-duration: 525ms;" href="<?php echo base_url('Home/profile');?>" id="sidebarProfile"><span><i class="fa fa-fw fa-user"></i></span> Profile</a>
			<a class="dropdown-item animated fadeIn" style="animation-duration: 550ms;" href="<?php echo base_url('Home/candidates');?>" id="sidebarCandidates"><span><i class="fa fa-fw fa-users"></i></span> Candidates</a>
			<a class="dropdown-item animated fadeIn" style="animation-duration: 575ms;" href="<?php echo base_url('Student/messages');?>" id="sidebarMessages"><span><i class="fa fa-fw fa-envelope"></i>
			</span> Messages
			<?php
			// $User_Number = $_SESSION['USER_NUMBER'];
			// $Select_Query = $this->db->query("SELECT COUNT(_READ) AS NUMBER_OF_UNREAD FROM tblinbox WHERE _TO = '$User_Number' AND _READ = 'NO' AND STATE = 'ACTIVE'");
			// $Number_Of_Unread = $Select_Query->row("NUMBER_OF_UNREAD");
			// if($Number_Of_Unread == '0')
			// {
			// }
			// else
			// {
				// 	echo ' <span class="badge badge-danger animated tada" style="animation-duration: 750ms; animation-delay: 1000ms;">';
					// 	echo $Number_Of_Unread;
				// 	echo ' </span>';
			// }
			?>
		</a>
		<a class="dropdown-item animated fadeIn" style="animation-duration: 600ms;" href="<?php echo base_url('Student/notifications');?>" id="sidebarNotifications"><span><i class="fa fa-fw fa-bell"></i></span> Notifications <span class="badge badge-danger animated tada" style="animation-duration: 750ms; animation-delay: 1000ms;">10</span></a>
		<a class="dropdown-item animated fadeIn" style="animation-duration: 625ms;" href="<?php echo base_url('Student/sign_out');?>" id="sidebarSignOut"><span><i class="fa fa-fw fa-cog"></i></span> Settings</a>
		<a class="dropdown-item animated fadeIn" style="animation-duration: 650ms;" href="<?php echo base_url('Student/sign_out');?>" id="sidebarSignOut"><span><i class="fa fa-fw fa-sign-out"></i></span> Sign out</a>
	</div>
</div>
</nav>