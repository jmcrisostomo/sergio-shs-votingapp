<?php
	$this->load->view('header');
?>
		<!-- header-->
		<?php $this->load->view('student/student-header');?>
		<!-- /header -->

		<div class="container-fluid">
			<div class="row">

				<!-- sidebar -->
				<?php $this->load->view('student/student-sidebar');?>
				<!-- /sidebar -->

				<!-- content -->
				<div class="col-md-10 offset-md-2 animated fadeIn" style="animation-duration: 500ms;">
					<div class="main">
						<h3><span><i class="fa fa-tachometer"></i></span> My Dashboard</h3>
						<div class="list-group">
							<div class="row">
								<div class="col-md-3 col-sm-6 col-12">
									<a href="<?php echo base_url('Home/vote');?>" class="list-group-item list-group-item-action animated fadeInUp" style="animation-duration: 0.5s; background-color: #4CAF50; color: #FFF;">
										<div style="padding-bottom: 15px;">
											<span class="text-left"><i class="fa fa-plus fa-4x"></i></span>
											<!-- <img class="img-fluid" src="<?php echo base_url('/assets/images/044-vote.png');?>" alt="vote" width="64"> -->
										</div>
										<h4>Vote Now!</h4>
									</a>
								</div>
								<div class="col-md-3 col-sm-6 col-12">
									<a href="<?php echo base_url('Home/candidates')?>" class="list-group-item list-group-item-action animated fadeInUp" style="animation-duration: 0.6s; background-color: #2196F3; color: #FFF;">
										<div style="padding-bottom: 15px;">
											<span class="text-left"><i class="fa fa-users fa-4x"></i></span>
										</div>
										<!-- <h3 class="float-right">3</h3> -->
										<h4>Candidates</h4>
									</a>
								</div>
								<div class="col-md-3 col-sm-6 col-12">
									<a href="#" class="list-group-item list-group-item-action animated fadeInUp" style="animation-duration: 0.7s; background-color: #f44336; color: #FFF;">
										<div style="padding-bottom: 15px;">
											<span class="text-left"><i class="fa fa fa-bell fa-4x"></i></span>
										</div>
										<h3 class="float-right">10</h3>
										<h4>View Polls</h4>
									</a>
								</div>
							</div>
						</div>

						<h3>Candidate #1</h3>
						<div class="progress">
							<div id="prog" class="progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<h3>Candidate #1</h3>
						<div class="progress">
							<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<h3>Candidate #1</h3>
						<div class="progress">
							<div class="progress-bar bg-inverse" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<h3>Candidate #1</h3>
						<div class="progress">
							<div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<h3>Candidate #1</h3>
						<div class="progress">
							<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<h3>Candidate #1</h3>
						<div class="progress">
							<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<h3>Candidate #1</h3>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<h3>Candidate #1</h3>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<h3>Candidate #1</h3>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<h3>Candidate #1</h3>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<!-- /content -->
			</div>
		</div>
<?php
	$this->load->view('footer');
?>
