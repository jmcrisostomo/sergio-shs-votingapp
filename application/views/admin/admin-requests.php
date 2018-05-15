<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="student">
		<meta name="author" content="student">
		<title>Requests - International Christian Academy</title>
		<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/favicon.ico">
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
		<!--Bootstrap Simple Sidebar CSS-->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-simple-sidebar.css"> -->
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
					<a class="btn btn-outline-primary mb-1" href="<?php echo base_url('Admin');?>"><span><i class="fas fa-caret-left"></i></span> Back</a>
					<h3><span><i class="fa fa-comment"></i></span> Requests</h3>
					<div class="table-responsive animated fadeInUp" style="animation-delay: 250ms; animation-duration: 500ms;">
						<table class="table table-striped table-hover table-bordered nowrap" id="myTable" cellspacing="0" width="100%">
							<thead>
								<tr class="text-center">
									<th>Request #</th>
									<th hidden></th>
									<th>State</th>
									<th>User #</th>
									<th>Grade Level #</th>
									<th># of Attemp</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = $this->db->query("SELECT * FROM tblrequest WHERE STATE = 'ACTIVE'");
									foreach ($query->result() as $object) {
										echo '<tr class="text-center">';
										echo '  <td hidden>'.$object->REQUEST_ID.'</td>';
										echo '	<td class="text-center">'.$object->REQUEST_NUMBER.'</td>';
										echo '	<td class="text-center text-success">'.$object->STATE.'</td>';
										echo '	<td class="text-center">'.$object->USER_NUMBER.'</td>';
										echo '	<td class="text-center">'.$object->GRADE_LEVEL_NUMBER.'</td>';
										$User_Number = $object->USER_NUMBER;
										$Select_Query_Attemp = $this->db->query("SELECT ATTEMP FROM tblrecorduser WHERE USER_NUMBER = '$User_Number'");
										echo '	<td class="text-center">'.$Select_Query_Attemp->row("ATTEMP").'</td>';
										echo '	<td>';//id="'.$object->REQUEST_ID.'"
										echo '		<button class="btn btn-sm btn-warning" type="button" onclick="func_submit'.$object->REQUEST_ID.'()"><span><i class="fa fa-list" style="color: #fff;"></i></span></button>';
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

		<?php

		$query = $this->db->query("SELECT * FROM tblrequest WHERE STATE = 'ACTIVE'");
			foreach ($query->result() as $object)
			{
				echo '<form method="POST" action="'.base_url().'Controller_Dashboard/function_requests_studentprofile" hidden>';
				echo '	<input type="text" name="request_number" value="'.$object->REQUEST_NUMBER.'">';
				echo '	<input type="text" name="state" value="'.$object->STATE.'">';
				echo '	<input type="text" name="user_number" value="'.$object->USER_NUMBER.'">';
				echo '	<input type="text" name="grade_level_number" value="'.$object->GRADE_LEVEL_NUMBER.'">';
				echo '  <input type="submit" id="'.$object->REQUEST_ID.'">';
				echo '</form>';
			}

		/*	$query = $this->db->query("SELECT * FROM tblrequest WHERE STATE = 'ACTIVE'");
			foreach ($query->result() as $object)
			{
				//echo '<form method="GET" action="'.base_url().'Admin/requests_studentprofile">';
				echo '	<input type="text" id="request_number'.$object->REQUEST_ID.'" name="request_number'.$object->REQUEST_ID.'" value="'.$object->REQUEST_NUMBER.'">';
				echo '	<input type="text" id="state'.$object->REQUEST_ID.'" name=""state'.$object->REQUEST_ID.' value="'.$object->STATE.'">';
				echo '	<input type="text" id="user_number'.$object->REQUEST_ID.'" name="user_number'.$object->REQUEST_ID.'" value="'.$object->USER_NUMBER.'">';
				echo '	<input type="text" id="grade_level_number'.$object->REQUEST_ID.'" name="grade_level_number'.$object->REQUEST_ID.'" value="'.$object->GRADE_LEVEL_NUMBER.'">';
				echo '  <input type="button" id="'.$object->REQUEST_ID.'" onclick="func_submit(myValue);" value="hello">';
				//echo '</form>';
			}*/

			/*foreach ($query->result() as $object)
			{
				echo '<form method="GET" action="'.base_url().'Admin/requests_studentprofile">';
				echo '	<input type="text" id="request_number'.$object->REQUEST_ID.'" name="request_number'.$object->REQUEST_ID.'" value="'.$object->REQUEST_NUMBER.'">';
				echo '	<input type="text" id="state'.$object->REQUEST_ID.'" name=""state'.$object->REQUEST_ID.' value="'.$object->STATE.'">';
				echo '	<input type="text" id="user_number'.$object->REQUEST_ID.'" name="user_number'.$object->REQUEST_ID.'" value="'.$object->USER_NUMBER.'">';
				echo '	<input type="text" id="grade_level_number'.$object->REQUEST_ID.'" name="grade_level_number'.$object->REQUEST_ID.'" value="'.$object->GRADE_LEVEL_NUMBER.'">';
				echo '  <input type="submit" id="sheep_brix">';
				echo '</form>';
			}*/
			?>





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
		<script>
			$(document).ready(function($) {
				$('#myTable').DataTable({
			    	responsive: true
			    	// 'order': [[ 12, 'asc' ]]
			    });
				$('#sidebarProfile').addClass('active');
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

		<script>
		<?php
		$query = $this->db->query("SELECT * FROM tblrequest WHERE STATE = 'ACTIVE'");
		foreach ($query->result() as $object)
		{
			echo 'function func_submit'.$object->REQUEST_ID.'()';
			echo '{';
			echo '	$("#'.$object->REQUEST_ID.'").click();';
			echo '}';
		}
		?>
		//function func_submit()
		//{
			//if (strpos(image_name.value, 'png') == true) {
		/*	if(image_name.value == "foodie.png")
				document.getElementById("birth_cert_validation").innerHTML = "<span class='text-danger'>The image is not in PNG format!</span>";*/
				//alert(myValue.value);
				//alert(this.value);
				//var x = myValue.value;
				//alert(x);
				//alert("shit");
			  //$('#sheep_brix').trigger('click');
				//$('#sheep_brix').click();
				//$('input[type=submit]#sheep_brix').click();

				/*if(myValue.value == "1")
				{
					alert("shit");
				}*/
			//}
		</script>

	</body>
</html>
