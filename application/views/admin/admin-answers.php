<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="admin">
		<meta name="author" content="admin">
		<title>Answers - International Christian Academy</title>
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
					<h3><span><i class="fa fa-check-circle"></i></span> Answers</h3>
					<button class="btn btn-primary my-3 animated fadeInUp" type="button" data-toggle="modal" data-target="#modal-add" style="animation-duration: 500ms;"><span>
						<i class="fa fa-plus" style="color: #fff;"></i> Add Answer</span>
					</button>
					<div class="table-responsive animated fadeInUp" style="animation-delay: 250ms; animation-duration: 500ms;">
						<table class="table table-striped table-hover table-bordered nowrap" id="myTable" cellspacing="0" width="100%">
							<thead>
								<tr class="text-center">
									<th>Answer #</th>
									<th hidden></th>
									<th>State</th>
									<th>Answer</th>
									<th>Modified By</th>
									<th>Date Modified</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = $this->db->query('SELECT * FROM tblrecordanswer WHERE STATE="ACTIVE"');
									foreach ($query->result() as $object) {
										echo '<tr>';
										echo '	<td class="text-center" id="answer_number'.$object->ANSWER_ID.'">'.$object->ANSWER_NUMBER.'</td>';
										echo '	<td hidden>'.$object->ANSWER_ID.'</td>';
										echo '	<td class="text-center text-success" id="state'.$object->ANSWER_ID.'">'.$object->STATE.'</td>';
										echo '	<td class="text-center" id="answer'.$object->ANSWER_ID.'">'.$object->ANSWER.'</td>';
										echo '	<td class="text-center" id="modified_by'.$object->ANSWER_ID.'">'.$object->MODIFIED_BY.'</td>';
										echo '	<td class="text-center" id="date_modified'.$object->ANSWER_ID.'">'.$object->DATE_MODIFIED.'</td>';
										echo '	<td>';
										echo '		<button id="editbutton'.$object->ANSWER_ID.'" class="btn btn-sm btn-warning" type="button" data-toggle="modal" data-target="#modal-edit"><span><i class="fa fa-edit" style="color: #fff;"></i></span></button>';
										echo '		<button id="removebutton'.$object->ANSWER_ID.'" class="btn btn-sm btn-danger" type="button" data-toggle="modal" data-target="#modal-remove"><span><i class="fa fa-trash-alt"></i></span></button>';
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
				<form method="POST" action="<?php echo base_url();?>Controller_Dashboard/function_add_answer">
				<div class="modal fade" id="modal-add">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Add Answer</h4>
							</div>
							<div class="modal-body">
								<label>Subject: </label>
								<!-- <input type="text" id="Answer" name="Answer" placeholder="Enter Answer..." class="form-control"> -->
								<textarea type="text" id="Answer" name="Answer" placeholder="Enter Answer..." class="form-control" rows="5"></textarea>
								<!-- <label for="#Cb_Image">Answer Image: </label> -->
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="hasImage" id="add_cb_image" value="IMAGE-ID">
									<label class="form-check-label" for="add_cb_image">
									 Has Image?
									</label>
								</div>
								<input type="file" name="Add_Answer_Image" id="Add_Answer_Image" class="form-control" disabled="disabled">
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
				<form method="POST" action="<?php echo base_url();?>Controller_Dashboard/function_edit_answer">
				<div class="modal fade" id="modal-edit">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="edit_answer_header"></h4>
								<input type="text" id="edit_answer_number" name="edit_answer_number" hidden>
							</div>
							<div class="modal-body">
								<label>Answer: </label>
								<!-- <input type="text" id="edit_answer" name="edit_answer" class="form-control"> -->
								<textarea type="text" id="edit_answer" name="edit_answer" class="form-control" rows="5"></textarea>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="hasImage" id="edit_cb_image" value="IMAGE-ID">
									<label class="form-check-label" for="edit_cb_image">
									 Has Image?
									</label>
								</div>
								<input type="file" name="Edit_Answer_Image" id="Edit_Answer_Image" class="form-control" disabled="disabled">
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
				<form method="POST" action="<?php echo base_url();?>Controller_Dashboard/function_remove_answer">
				<div class="modal fade" id="modal-remove">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Remove Answer</h4>
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
		<!-- <script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:81}/livereload.js?snipver=1"></' + 'script>')</script> -->

		<!-- other scripts -->
		<script type="text/javascript">
			$(document).ready(function($) {
				$("#add_cb_image").click(function(){
					if ($('#add_cb_image').is(':checked')) 
					{
				 		$("#Add_Answer_Image").removeAttr("disabled");

					}
					else{
				 		$("#Add_Answer_Image").prop("disabled", true);
				 		$("#Add_Answer_Image").val("");
					}
				});
				$("#edit_cb_image").click(function(){
					if ($('#edit_cb_image').is(':checked')) 
					{
				 		$("#Edit_Answer_Image").removeAttr("disabled");

					}
					else{
				 		$("#Edit_Answer_Image").prop("disabled", true);
				 		$("#Edit_Answer_Image").val("");
					}
				});
 			});
		</script>
		<script>
			$(document).ready(function($) {
			    $('#myTable').DataTable({
			    	responsive: true,
			    	'order': [[ 1, 'asc' ]]
			    });
				$('#sidebarAnswers').addClass('active');
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
				$Select_Query = $this->db->query("SELECT * FROM tblrecordanswer WHERE STATE = 'ACTIVE'");

				foreach($Select_Query->result() as $object)
				{
					//EDIT
					echo '	$(".table").on("click", "#editbutton'.$object->ANSWER_ID.'", function() {'.PHP_EOL;
					//echo	'$("#editbutton'.$object->GRADE_LEVEL_ID.'").on("click",  function() {';

					echo '				var a = $("#answer_number'.$object->ANSWER_ID.'").html();'.PHP_EOL;
					echo '				$("#edit_answer_header").text(a);'.PHP_EOL;
					echo '				$("#edit_answer_number").val(a);'.PHP_EOL;

					echo '        var b = $("#answer'.$object->ANSWER_ID.'").html();'.PHP_EOL;
					echo '        $("#edit_answer").val(b);'.PHP_EOL;
					echo '		});'.PHP_EOL;


					//REMOVE
					echo '	$(".table").on("click", "#removebutton'.$object->ANSWER_ID.'", function() {'.PHP_EOL;

					echo '        var a = $("#answer_number'.$object->ANSWER_ID.'").html();'.PHP_EOL;
					echo '				$("#remove_number").text("Are you sure you want to remove " + a + "?");'.PHP_EOL;
					echo '				$("#remove_number_header").val(a);'.PHP_EOL;
					echo	'});';

				}
			?>
		});
		</script>


	</body>
</html>
