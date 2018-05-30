<?php
	$this->load->view('header');
?>
<!-- header-->
<?php $this->load->view('student/student-header');?>
<!-- /header -->
<div class="container">
	<div class="row">
		<!-- sidebar -->
		<?php //$this->load->view('student/student-sidebar');?>
		<!-- /sidebar -->
		
		<!-- content -->
		<div class="offset-md-1 col-md-10 offset-md-1 main animated fadeIn" style="animation-duration: 500ms;">
			<button type="button" class="btn btn-sm btn-outline-danger my-3" data-toggle="modal" data-target="#modal-2">Cancel</button>
			<button type="button" class="btn btn-sm btn-outline-primary my-3" data-toggle="modal" data-target="#modal-2">Help <i class="fa fa-question-circle"></i></button>
			<div class="row">
				<div class="col-md-6">
					<h5 class="text-left">Official Student Ballot</h5>
					<p class="text-left"><span>[Date Given By Election]</span> Student Supreme Government Elections</p>
				</div>
				<div class="col-md-6">
					<p class="text-right">Ballot ID: <span class="badge badge-primary">B-0001</span></p>
				</div>
			</div>
			
			<!-- generate question and answer -->
			<div class="row">
				<div class="col-md-12">
					<div class="item-content">
						<form>
							<fieldset class="form-group">
								<div class="row">
									<legend class="form-label col-md-12">
										<span><h5 class="text-center text-uppercase">President</h5></span>
									</legend>
									<div class="col-md-6 col-sm-6 col-6">
										<label class="text-center" for="candidate-0001">
											<input type="radio" name="c_president" id="candidate-0001" value="Craig Rosario Suaco Jalandoni">
											<div class="ballot">
												<div class="row">
													<div class="col-md-4">
														<img class="img-fluid rounded-circle center" src="<?php echo base_url();?>assets/images/student.png">
													</div>
													<div class="col-md-8">
														<p>Craig Rosario Suaco Jalandoni</p>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-6 col-sm-6 col-6">
										<label class="text-center" for="candidate-0002">
											<input type="radio" name="c_president" id="candidate-0002" value="option1">
											<div class="ballot">
												<div class="row">
													<div class="col-md-4">
														<img class="img-fluid rounded-circle center" src="<?php echo base_url();?>assets/images/student.png">
													</div>
													<div class="col-md-8">
														<p>Maxwell Mohammed Dumalahay Catubig</p>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-6 col-sm-6 col-6">
										<label class="text-center" for="candidate-0003">
											<input type="radio" name="c_president" id="candidate-0003" value="option1">
											<div class="ballot">
												<div class="row">
													<div class="col-md-4">
														<img class="img-fluid rounded-circle center" src="<?php echo base_url();?>assets/images/student.png">
													</div>
													<div class="col-md-8">
														<p>Pancho Lonnie Sato Elorza</p>
													</div>
												</div>
											</div>
										</label>
									</div>
								</div>
							</fieldset>
							<fieldset class="form-group">
								<div class="row">
									<legend class="form-label col-md-12">
										<span><h5 class="text-center text-uppercase">Vice President</h5></span>
									</legend>
									<div class="col-md-6 col-sm-6 col-6">
										<label class="text-center" for="candidate-0004">
											<input type="radio" name="c_vice_president" id="candidate-0004" value="option1">
											<div class="ballot">
												<div class="row">
													<div class="col-md-4">
														<img class="img-fluid rounded-circle center" src="<?php echo base_url();?>assets/images/student.png">
													</div>
													<div class="col-md-8">
														<p>Akira Tatiana Biglang-Awa Halili</p>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-6 col-sm-6 col-6">
										<label class="text-center" for="candidate-0005">
											<input type="radio" name="c_vice_president" id="candidate-0005" value="option1">
											<div class="ballot">
												<div class="row">
													<div class="col-md-4">
														<img class="img-fluid rounded-circle center" src="<?php echo base_url();?>assets/images/student.png">
													</div>
													<div class="col-md-8">
														<p>Aubrey Marlina Quetua García</p>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-6 col-sm-6 col-6">
										<label class="text-center" for="candidate-0006">
											<input type="radio" name="c_vice_president" id="candidate-0006" value="option1">
											<div class="ballot">
												<div class="row">
													<div class="col-md-4">
														<img class="img-fluid rounded-circle center" src="<?php echo base_url();?>assets/images/student.png">
													</div>
													<div class="col-md-8">
														<p>Dayami Domenica Manigbas Catacutan</p>
													</div>
												</div>
											</div>
										</label>
									</div>
								</div>
							</fieldset>
							<fieldset class="form-group">
								<div class="row">
									<div class="col-md-12">
										<input type="checkbox" name="confirm_submission" id="confimation_checkBox" required>
										<!-- <input type="checkbox" name="confirm_submission" id="confimation_checkBox" style="  /* Double-sized Checkboxes */ -ms-transform: scale(2); /* IE */ -moz-transform: scale(2); /* FF */ -webkit-transform: scale(2); /* Safari and Chrome */ -o-transform: scale(2); /* Opera */ padding: 15px;" required> -->
										<label class=" for="confimation_checkBox">
											Check this to submit your exam paper.
										</label>
									</div>
									<div class="col-md-12">
										<button class="btn btn-primary" type="submit">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /content -->
	</div>
</div>
<!-- modal-help -->
<div class="modal fade" id="modal-2">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Help</h4>
			</div>
			<div class="modal-body">
				<h3>How to vote?</h3>
				<ul>
					<li>Click the radio button from your favorite candidate</li>
					<li>Recheck all votes</li>
					<li>Click Submit Vote and Drink Coffee</li>
				</ul>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			</div>
			</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			
			<?php
				$this->load->view('footer');
			?>