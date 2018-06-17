<?php
	$this->load->view('header');
?>
<!-- header-->
<?php $this->load->view('admin/admin-header');?>
<!-- /header -->
<div class="container-fluid">
	<div class="row">
		<!-- sidebar -->
		<?php $this->load->view('admin/admin-sidebar');?>
		<!-- /sidebar -->
		<!-- content -->
		<div class="col-md-10 offset-md-2 animated fadeIn" style="animation-duration: 500ms;">
			<div class="main">
				<h3><span><i class="fa fa-tachometer-alt"></i></span> My Dashboard</h3>
				<!-- <p class="lead">Non-Clickable</p>
				<ul class="list-group">
						<div class="row">
								<div class="col-md-3 col-sm-6 col-12">
										<li class="list-group-item animated fadeInUp" style="animation-duration: 0.5s; background-color: #4CAF50; color: #FFF;">
												<div style="padding-bottom: 15px;">
														<span class="text-left"><i class="fa fa-thumbs-up fa-4x"></i></span>
												</div>
												<h3 class="float-right">83</h3>
												<h4>Passed</h4>
										</li>
								</div>
								<div class="col-md-3 col-sm-6 col-12">
										<li class="list-group-item animated fadeInUp" style="animation-duration: 0.6s; background-color: #f44336; color: #FFF;">
												<div style="padding-bottom: 15px;">
														<span class="text-left"><i class="fa fa fa-meh fa-4x"></i></span>
												</div>
												<h3 class="float-right">53</h3>
												<h4>Failed</h4>
										</li>
								</div>
								<div class="col-md-3 col-sm-6 col-12">
										<li class="list-group-item animated fadeInUp" style="animation-duration: 0.7s; background-color: #2196F3; color: #FFF;">
												<div style="padding-bottom: 15px;">
														<span class="text-left"><i class="fa fa-envelope fa-4x"></i></span>
												</div>
												<h3 class="float-right">18</h3>
												<h4>Request</h4>
										</li>
								</div>
								<div class="col-md-3 col-sm-6 col-12">
										<li class="list-group-item animated fadeInUp" style="animation-duration: 0.8s; background-color: #FF9800; color: #FFF;">
												<div style="padding-bottom: 15px;">
														<span class="text-left"><i class="fa fa-users fa-4x"></i></span>
												</div>
												<h3 class="float-right">151</h3>
												<h4>Users</h4>
										</li>
								</div>
						</div>
				</ul> -->
				<!-- <p class="lead">Clickable</p> -->
				<div class="list-group">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-12">
							<a href="#" class="list-group-item list-group-item-action animated fadeInUp" style="animation-duration: 0.5s; background-color: #4CAF50; color: #FFF;">
								<div style="padding-bottom: 15px;">
									<span class="text-left"><i class="fa fa-thumbs-up fa-4x"></i></span>
								</div>
								<h3 class="float-right">83</h3>
								<h4>Passed</h4>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-12">
							<a href="#" class="list-group-item list-group-item-action animated fadeInUp" style="animation-duration: 0.6s; background-color: #f44336; color: #FFF;">
								<div style="padding-bottom: 15px;">
									<span class="text-left"><i class="fa fa fa-meh fa-4x"></i></span>
								</div>
								<h3 class="float-right">53</h3>
								<h4>Failed</h4>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-12">
							<a href="<?php echo base_url('Admin/requests');?>" class="list-group-item list-group-item-action animated fadeInUp" style="animation-duration: 0.7s; background-color: #2196F3; color: #FFF;">
								<div style="padding-bottom: 15px;">
									<span class="text-left"><i class="fa fa-envelope fa-4x"></i></span>
								</div>
								<h3 class="float-right">
								<?php
									//$Select_Query = $this->db->query("SELECT COUNT(REQUEST_ID) AS NUMBER_OF_REQUESTS FROM tblrequest WHERE STATE = 'ACTIVE'");
									//echo $Select_Query->row("NUMBER_OF_REQUESTS");
								?>
								</h3>
								<h4>Request</h4>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-12">
							<a href="#" class="list-group-item list-group-item-action animated fadeInUp" style="animation-duration: 0.8s; background-color: #FF9800; color: #FFF;">
								<div style="padding-bottom: 15px;">
									<span class="text-left"><i class="fa fa-users fa-4x"></i></span>
								</div>
								<h3 class="float-right">151</h3>
								<h4>Users</h4>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /content -->
		</div>
	</div>
</div>
<?php
	$this->load->view('footer');
?>