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
						<h3><span><i class="fa fa-user"></i></span> Profile</h3>
						<div class="row">
							<div class="col-md-8">
								<table class="table table-inverse table-responsive table-hover table-striped" cellpadding="0">
									<tbody>
										<tr>
											<td><h5 class="text-right">Name:</h5></td>
											<td><p class="lead text-left">JM Crisostomo<?php
												//echo $_SESSION['FIRST_NAME'].' '.$_SESSION['MIDDLE_NAME'].' '.$_SESSION['SUR_NAME'];
											?></p></td>
										</tr>
										<tr>
											<td><h5 class="text-right">Student #:</h5></td>
											<td><p class="lead text-left">STUDENT-0001<?php //echo $_SESSION['USER_NUMBER']; ?></p></td>
										</tr>
										<tr>
											<td><h5 class="text-right">LRN Number:</h5></td>
											<td><p class="lead text-left"><?php //echo $_SESSION['USERNAME']; ?></p></td>
										</tr>
										<tr>
											<td><h5 class="text-right">Grade Level:</h5></td>
											<td><p class="lead text-left"><?php //echo $_SESSION['USERNAME']; ?></p></td>
										</tr>
										<tr>
											<td><h5 class="text-right">Section:</h5></td>
											<td><p class="lead text-left"><?php //echo $_SESSION['USERNAME']; ?></p></td>
										</tr>
										<!-- <tr>
											<td><h5 class="text-right">Email:</h5></td>
											<td><p class="lead text-left"><?php //echo $_SESSION['EMAIL_ADDRESS']; ?></p></td>
										</tr> -->
										<!-- <tr>
											<td><h5 class="text-right">Entering For:</h5></td>
											<td>
												<p class="lead text-left">Grade
													<?php
														//$Grade_Level_Number = $_SESSION['GRADE_LEVEL_NUMBER'];
														//$Select_Query = $this->db->query("SELECT GRADE_LEVEL FROM tblrecordgradelevel WHERE GRADE_LEVEL_NUMBER = '$Grade_Level_Number'");
														//echo $Select_Query->row("GRADE_LEVEL");
													?>
												</p>
											</td>
										</tr> -->
										<!-- <tr>
											<td><h5 class="text-right">Verification:</h5></td>
											<td>
												<?php
												  //  $State  = $_SESSION['STATE'];
													 // if($State == 'ACTIVE')
													 // {
														// echo '<p class="lead text-success"><span><i class="fa fa-check"></i></span> '.$_SESSION["STATE"].'</p>';
													 // }
													 // else if($State == 'INACTIVE')
													 // {
														//  echo '<p class="lead text-danger"><span><i class="fa fa-times"></i></span> '.$_SESSION["STATE"].'</p>';
													 // }
												 ?>
											</td>
										</tr> -->
										<tr>
											<td><h5 class="text-right">Has Voted: <i class="fa fa-times"></i></h5></td>
											<td>
												<?php
												  //  $State  = $_SESSION['STATE'];
													 // if($State == 'ACTIVE')
													 // {
														// echo '<p class="lead text-success"><span><i class="fa fa-check"></i></span> '.$_SESSION["STATE"].'</p>';
													 // }
													 // else if($State == 'INACTIVE')
													 // {
														//  echo '<p class="lead text-danger"><span><i class="fa fa-times"></i></span> '.$_SESSION["STATE"].'</p>';
													 // }
												 ?>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-md-4">
								<div class="profile">
									<img class="img-fluid rounded-circle center" src="<?php echo base_url();?>assets/images/student.png">
								</div>
								
								<!-- <small><a href="#">Change Photo</a></small> -->
							</div>
						</div>
					</div>
				</div>
				<!-- /content -->
			</div>
		</div>

<?php
	$this->load->view('footer');
?>
