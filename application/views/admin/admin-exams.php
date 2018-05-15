<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="admin">
		<meta name="author" content="admin">
		<title>Exams - International Christian Academy</title>
		<link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/favicon.ico');?>">
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
		<!--Font Awesome Icons CSS-->
		<link rel="stylesheet" href="<?php echo base_url('assets/font_awesome/css/fontawesome-all.min.css');?>">
		<!--Animate.CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>">
		<!--DataTables CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/datatables.min.css');?>">
		<!-- Normalize.CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css');?>">
	</head>
	<body>
		<!-- header-->
		<?php $this->load->view('admin/admin-header');?>
		<!-- /header -->
		<div class="container-fluid">
			<div class="row">
				<!-- sidebar -->
				<?php $this->load->view('admin/admin-sidebar');?>
				<!-- /sidebar -->

				<!-- content -->
				<div class="col-md-10 offset-md-2 main animated fadeIn" style="animation-duration: 500ms;">
					<h3><span><i class="fa fa-list-ul"></i></span> Exams</h3>
					<button class="btn btn-primary my-3 animated fadeInUp" type="button" data-toggle="modal" data-target="#modal-add" style="animation-duration: 500ms;"><span>
						<i class="fa fa-plus" style="color: #fff;"></i> Add Exam</span>
					</button>
					<div class="table-responsive animated fadeInUp" style="animation-delay: 250ms; animation-duration: 500ms;">
						<table class="table table-striped table-hover table-bordered nowrap" id="myTable" cellspacing="0" width="100%">
							<thead>
								<tr class="text-center">
									<th>Exam #</th>
									<th>State</th>
									<th>Grade Level #</th>
									<th>Subject #</th>
									<th>Question #</th>
									<th>Answer #</th>
									<th>Answer Type #</th>
									<th>Modified By</th>
									<th>Date Modified</th>
									<th hidden>exam_id</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = $this->db->query("SELECT * FROM tblrecordexam WHERE STATE = 'ACTIVE'");
									foreach ($query->result() as $object) {
										echo '<tr>';
										echo '	<td class="text-center" id="exam_number'.$object->EXAM_ID.'">'.$object->EXAM_NUMBER.'</td>';
										echo '	<td class="text-center" id="state'.$object->EXAM_ID.'">'.$object->STATE.'</td>';
										echo '	<td class="text-center" id="grade_level_number'.$object->EXAM_ID.'">'.$object->GRADE_LEVEL_NUMBER.'</td>';
										echo '	<td class="text-center" id="subject_number'.$object->EXAM_ID.'">'.$object->SUBJECT_NUMBER.'</td>';
										echo '	<td class="text-center" id="question_number'.$object->EXAM_ID.'">'.$object->QUESTION_NUMBER.'</td>';
										echo '	<td class="text-center" id="answer_number'.$object->EXAM_ID.'">'.$object->ANSWER_NUMBER.'</td>';
										echo '	<td class="text-center" id="answer_type_number'.$object->EXAM_ID.'">'.$object->ANSWER_TYPE_NUMBER.'</td>';
										echo '	<td class="text-center" id="modified_by'.$object->EXAM_ID.'">'.$object->MODIFIED_BY.'</td>';
										echo '	<td class="text-center" id="date_modified'.$object->EXAM_ID.'">'.$object->DATE_MODIFIED.'</td>';
										echo '	<td hidden id="exam_id'.$object->EXAM_ID.'">'.$object->EXAM_ID.'</td>';
										echo '	<td>';
										echo '		<button id="editbutton'.$object->EXAM_ID.'" class="btn btn-sm btn-warning" type="button" data-toggle="modal" data-target="#modal-edit"><span><i class="fa fa-edit" style="color: #fff;"></i></span></button>';
										echo '		<button id="removebutton'.$object->EXAM_ID.'" class="btn btn-sm btn-danger" type="button" data-toggle="modal" data-target="#modal-remove"><span><i class="fa fa-trash-alt"></i></span></button>';
										echo '	</td>';
										echo '</tr>';
									}
								?>
							</tbody>
						</table>
					</div>

				</div>
				<!-- /content -->
			</div>
		</div>
		<!-- add modal -->
		<form method="POST" action="<?php echo base_url();?>Controller_Dashboard/function_add_exam">
		<div class="modal fade" id="modal-add">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Exam</h4>
					</div>
					<div class="modal-body">
						<label>Grade LeveL: </label>
						<select class="form-control" name="add_grade_level">
							<?php
							$Select_Query = $this->db->query("SELECT * FROM tblrecordgradelevel WHERE STATE = 'ACTIVE'");
							foreach($Select_Query->result() as $object)
								{
									echo '<option value = "'.$object->GRADE_LEVEL_NUMBER.'" >['.$object->GRADE_LEVEL_NUMBER.'] - '.$object->GRADE_LEVEL.'</option>';
								}
							?>
						</select>

						<label>Subject: </label>
						<select class="form-control" name="add_subject">
							<?php
							$Select_Query = $this->db->query("SELECT * FROM tblrecordsubject WHERE STATE = 'ACTIVE'");
							foreach($Select_Query->result() as $object)
								{
									echo '<option value = "'.$object->SUBJECT_NUMBER.'" >['.$object->SUBJECT_NUMBER.'] - '.$object->SUBJECT.'</option>';
								}
							?>
						</select>

						<label>Question: </label>
						<select class="form-control" name="add_question">
							<?php
							$Select_Query = $this->db->query("SELECT * FROM tblrecordquestion WHERE STATE = 'ACTIVE'");
							foreach($Select_Query->result() as $object)
								{
									echo '<option value = "'.$object->QUESTION_NUMBER.'" >['.$object->QUESTION_NUMBER.'] - '.$object->QUESTION.'</option>';
								}
							?>
						</select>

						<label>Answer: </label>
						<select class="form-control" name="add_answer">
							<?php
							$Select_Query = $this->db->query("SELECT * FROM tblrecordanswer WHERE STATE = 'ACTIVE'");
							foreach($Select_Query->result() as $object)
								{
									echo '<option value = "'.$object->ANSWER_NUMBER.'" >['.$object->ANSWER_NUMBER.'] - '.$object->ANSWER.'</option>';
								}
							?>
						</select>

						<label>Answer Type: </label>
						<select class="form-control" name="add_answer_type">
							<?php
							$Select_Query = $this->db->query("SELECT * FROM tbltypeanswer WHERE STATE = 'ACTIVE'");
							foreach($Select_Query->result() as $object)
								{
									echo '<option value = "'.$object->ANSWER_TYPE_NUMBER.'" >['.$object->ANSWER_TYPE_NUMBER.'] - '.$object->ANSWER_TYPE.'</option>';
								}
							?>
						</select>

					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Add</button>
					</form>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->






		<!-- edit modal -->
		<form method="POST" action="<?php echo base_url();?>Controller_Dashboard/function_edit_exam">
		<div class="modal fade" id="modal-edit">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="edit_exam"></h4>
						<input type="text" id="edit_exam_number" name="edit_exam_number" hidden>
					</div>
					<div class="modal-body">
						<label>Grade LeveL: </label>
						<select class="form-control" id="edit_grade_level" name="edit_grade_level">
							<?php
							$Select_Query = $this->db->query("SELECT * FROM tblrecordgradelevel WHERE STATE = 'ACTIVE'");
							foreach($Select_Query->result() as $object)
								{
									echo '<option value = "'.$object->GRADE_LEVEL_NUMBER.'" >['.$object->GRADE_LEVEL_NUMBER.'] - '.$object->GRADE_LEVEL.'</option>';
								}
							?>
						</select>

						<label>Subject: </label>
						<select class="form-control" id="edit_subject" name="edit_subject">
							<?php
							$Select_Query = $this->db->query("SELECT * FROM tblrecordsubject WHERE STATE = 'ACTIVE'");
							foreach($Select_Query->result() as $object)
								{
									echo '<option value = "'.$object->SUBJECT_NUMBER.'" >['.$object->SUBJECT_NUMBER.'] - '.$object->SUBJECT.'</option>';
								}
							?>
						</select>

						<label>Question: </label>
						<select class="form-control" id="edit_question" name="edit_question">
							<?php
							$Select_Query = $this->db->query("SELECT * FROM tblrecordquestion WHERE STATE = 'ACTIVE'");
							foreach($Select_Query->result() as $object)
								{
									echo '<option value = "'.$object->QUESTION_NUMBER.'" >['.$object->QUESTION_NUMBER.'] - '.$object->QUESTION.'</option>';
								}
							?>
						</select>

						<label>Answer: </label>
						<select class="form-control" id="edit_answer_number" name="edit_answer_number">
							<?php
							$Select_Query = $this->db->query("SELECT * FROM tblrecordanswer WHERE STATE = 'ACTIVE'");
							foreach($Select_Query->result() as $object)
								{
									echo '<option value = "'.$object->ANSWER_NUMBER.'" >['.$object->ANSWER_NUMBER.'] - '.$object->ANSWER.'</option>';
								}
							?>
						</select>

						<label>Answer Type: </label>
						<select class="form-control" id="edit_answer_type" name="edit_answer_type">
							<?php
							$Select_Query = $this->db->query("SELECT * FROM tbltypeanswer WHERE STATE = 'ACTIVE'");
							foreach($Select_Query->result() as $object)
								{
									echo '<option value = "'.$object->ANSWER_TYPE_NUMBER.'" >['.$object->ANSWER_TYPE_NUMBER.'] - '.$object->ANSWER_TYPE.'</option>';
								}
							?>
						</select>
					</div>
					<div class="modal-footer">
					<button type="submit" class="btn btn-success">Save Changes</button>
					</form>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->







		<!-- remove modal -->
		<form method="POST" action="<?php echo base_url();?>Controller_Dashboard/function_remove_exam">
		<div class="modal fade" id="modal-remove">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Remove Exam</h4>
						<input id="remove_number_header" name="remove_number_header" hidden>
					</div>
					<div class="modal-body">
						<p id="remove_number" name="remove_number"></p>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-danger">Remove</button>
					</form>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->













		<!-- footer + scripts-->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/popper.min.js');?>"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
		<!--DataTables JS-->
		<script src="<?php echo base_url('assets/datatables/datatables.min.js');?>"></script>
		<!-- Test LiveReload Plugin -->
		<script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:81}/livereload.js?snipver=1"></' + 'script>')</script>

		<!-- other scripts -->
		<script>
			$(document).ready(function($) {
			    $('#myTable').DataTable({
			    	responsive: true,
			    	'order': [[ 9, 'asc' ]]
			    });
				$('#sidebarExams').addClass('active');
				$('#sidebarBtn').on('click', function() {
					sidebar_open();
				});
				$('#sidebarOverlay, #sidebarCloseButton').on('click', function() {
					sidebar_close();
				});
			});

			function sidebar_open() {
			    if ($('.sidebar').css('display','block') === 'block') {
					$('.sidebar').css('display','none');
					$('.sidebar-overlay').css('display','none');
			    } else {
					$('.sidebar').css('display','block');
					$('.sidebar-overlay').css('display','block');
			    }
			}

			function sidebar_close() {
				$('.sidebar').css('display','none');
				$('.sidebar-overlay').css('display','none');
			}
		</script>


		<script type="text/javascript">
		$(document).ready( function () {
			<?php
				$Select_Query = $this->db->query("SELECT * FROM tblrecordexam WHERE STATE = 'ACTIVE'");

				foreach($Select_Query->result() as $object)
				{
					echo '	$(".table").on("click", "#editbutton'.$object->EXAM_ID.'", function() {'.PHP_EOL;
					//echo	'$("#editbutton'.$object->GRADE_LEVEL_ID.'").on("click",  function() {';

					//HEADER
					echo '				var a = $("#exam_number'.$object->EXAM_ID.'").html();'.PHP_EOL;
					echo '				$("#edit_exam").text(a);'.PHP_EOL;
					echo '				$("#edit_exam_number").val(a);'.PHP_EOL;

					//GRADE LEVEL
					echo '        var b = $("#grade_level_number'.$object->EXAM_ID.'").html();'.PHP_EOL;
					echo '				$("#edit_grade_level").val(b);'.PHP_EOL;

					//SUBJECT
					echo '        var c = $("#subject_number'.$object->EXAM_ID.'").html();'.PHP_EOL;
					echo '				$("#edit_subject").val(c);'.PHP_EOL;

					//Question
					echo '        var d = $("#question_number'.$object->EXAM_ID.'").html();'.PHP_EOL;
					echo '				$("#edit_question").val(d);'.PHP_EOL;

					//ANSWER
					echo '        var e = $("#answer_number'.$object->EXAM_ID.'").html();'.PHP_EOL;
					echo '				$("#edit_answer_number").val(e);'.PHP_EOL;

					//ANSWER TYPE
					echo '        var f = $("#answer_type_number'.$object->EXAM_ID.'").html();'.PHP_EOL;
					echo '				$("#edit_answer_type").val(f);'.PHP_EOL;


					echo '		});'.PHP_EOL;

					echo '	$(".table").on("click", "#removebutton'.$object->EXAM_ID.'", function() {'.PHP_EOL;

					//REMOVE NUMBER
					echo '        var a = $("#exam_number'.$object->EXAM_ID.'").html();'.PHP_EOL;
					echo '				$("#remove_number").text("Are you sure you want to remove " + a + "?");'.PHP_EOL;
					echo '				$("#remove_number_header").val(a);'.PHP_EOL;


					echo '		});'.PHP_EOL;

				}
			?>
		});
		</script>

	</body>
</html>
