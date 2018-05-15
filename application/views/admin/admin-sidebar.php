<div class="col-md-2 sidebar animated fadeInLeft" style="animation-duration: 0.4s;" id="sidebar">
		<ul class="nav flex-column">
			<li>
				<div class="user-content">
					<!-- <div class="close-toggle float-right">
						<button class="btn btn-secondary"><span><i class="fa fa-times"></i></span></button>
					</div>  -->
					<button id="sidebarCloseButton" class="btn hidden-md-up"><span><i class="fa fa-times"></i></span></button>
					<div class="user-img">
						<img class="img-fluid rounded-circle center" src="<?php echo base_url();?>assets/images/johnwick2_0.jpg">
					</div>
					<p class="text-center">Welcome, <strong><?php echo $_SESSION['NAME'];?></strong></p>
				</div>
				<div class="nav-sidebar-header">
					<p class="h5">Menu</p>
				</div>
			</li>

			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 0.50s" href="<?php echo base_url();?>Admin" id="sidebarHome"><span><i class="fa fa-fw fa-home"></i></span> Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 510ms;" href="<?php echo base_url('Admin/terms?page_status=VIEW');?>" id="sidebarTerms"><span><i class="fa fa-fw fa-list"></i></span> Terms &amp; Conditions</a>	
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 0.52s" href="<?php echo base_url();?>Admin/accounts" id="sidebarAccounts"><span><i class="fa fa-fw fa-users"></i></span> Accounts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 0.54s" href="<?php echo base_url();?>Admin/grade_levels" id="sidebarGradeLevels"><span><i class="fa fa-fw fa-level-up-alt"></i></span> Grade Levels</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 0.56s" href="<?php echo base_url();?>Admin/subjects" id="sidebarSubjects"><span><i class="fa fa-fw fa-sticky-note"></i></span> Subjects</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 0.58s" href="<?php echo base_url();?>Admin/questions" id="sidebarQuestions"><span><i class="fa fa-fw fa-question-circle"></i></span> Questions</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 0.60s" href="<?php echo base_url();?>Admin/answers" id="sidebarAnswers"><span><i class="fa fa-fw fa-check-circle"></i></span> Answers</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 0.62s" href="<?php echo base_url();?>Admin/exams" id="sidebarExams"><span><i class="fa fa-fw fa-list-ul"></i></span> Exams</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 0.64s" href="<?php echo base_url();?>Admin/exam_arrangement" id="sidebarExamArrangement"><span><i class="fa fa-fw fa-list-ol"></i></span> Exam Arrangement</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 0.66s" href="<?php echo base_url();?>Admin/exam_records" id="sidebarExamRecords"><span><i class="fa fa-fw fa-file-alt"></i></span> Exam Records</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 0.68s" href="<?php echo base_url();?>Admin/reports" id="sidebarReports"><span><i class="fa fa-fw fa-chart-line"></i></span> Reports</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 0.70s" href="<?php echo base_url();?>Admin/settings" id="sidebarSettings"><span><i class="fa fa-fw fa-cog"></i></span> Settings</a>
			</li>
			<li class="nav-item">
				<a class="nav-link animated fadeInLeft" style="animation-duration: 0.72s" href="<?php echo base_url();?>Admin/sign_out" id="sidebarSignOut"><span><i class="fa fa-fw fa-sign-out-alt"></i></span> Sign out</a>
			</li>
		</ul>
		<!-- for mobile devices -->
		<div id="sidebarOverlay" class="sidebar-overlay"></div>
</div>
