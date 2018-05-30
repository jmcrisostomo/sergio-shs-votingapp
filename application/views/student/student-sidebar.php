<div class="col-md-2 sidebar animated " style="animation-duration: 0.4s;" id="sidebar">
		<ul class="nav flex-column">
			<li>
				<div class="user-content">
					<button id="sidebarCloseButton" class="btn hidden-md-up"><span><i class="fa fa-times"></i></span></button>
					<div class="user-img">
						<img class="img-fluid rounded-circle" src="<?php echo base_url();?>assets/images/test.jpg">
					</div>
					<p class="text-center">
						<strong>
							JM Crisostomo
							<?php
								// echo $_SESSION['FIRST_NAME'].' '.$_SESSION['MIDDLE_NAME'].' '.$_SESSION['SUR_NAME'];
							?>
						</strong>
					</p>
				</div>
				<div class="nav-sidebar-header">
					<p class="h5">Menu</p>
				</div>
			</li>

			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 500ms;" href="<?php echo base_url();?>" id="sidebarHome"><span><i class="fa fa-fw fa-home"></i></span> Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 525ms;" href="<?php echo base_url('Home/profile');?>" id="sidebarProfile"><span><i class="fa fa-fw fa-user"></i></span> Profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 550ms;" href="<?php echo base_url('Home/candidates');?>" id="sidebarCandidates"><span><i class="fa fa-fw fa-users"></i></span> Candidates</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 575ms;" href="<?php echo base_url('Student/messages');?>" id="sidebarMessages"><span><i class="fa fa-fw fa-envelope"></i>
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
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 600ms;" href="<?php echo base_url('Student/notifications');?>" id="sidebarNotifications"><span><i class="fa fa-fw fa-bell"></i></span> Notifications <span class="badge badge-danger animated tada" style="animation-duration: 750ms; animation-delay: 1000ms;">10</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 625ms;" href="<?php echo base_url('Student/sign_out');?>" id="sidebarSignOut"><span><i class="fa fa-fw fa-cog"></i></span> Settings</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 650ms;" href="<?php echo base_url('Student/sign_out');?>" id="sidebarSignOut"><span><i class="fa fa-fw fa-sign-out"></i></span> Sign out</a>
			</li>
		</ul>
		<!-- for mobile devices -->
		<div id="sidebarOverlay" class="sidebar-overlay"></div>
</div>
