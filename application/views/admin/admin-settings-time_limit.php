<!--<button class="btn btn-primary my-3 animated fadeInUp" type="button" data-toggle="modal" data-target="#modal-add_typeanswer" style="animation-duration: 500ms;"><span>
	<i class="fa fa-plus" style="color: #fff;"></i> Add Type Answer</span>
</button>-->
<div class="table-responsive animated fadeInUp" style="animation-delay: 250ms; animation-duration: 500ms;">
	<table class="table table-striped table-hover table-bordered nowrap" id="myTable_5" cellspacing="0" width="100%">
		<thead>
			<tr class="text-center">
				<th>Time Limit #</th>
				<th hidden></th>
				<th>State</th>
				<th>Time Limit (Minute/s)</th>
		        <th>Modified By</th>
		        <th>Date Modified</th>
		        <th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $this->db->query('SELECT * FROM tbltimelimit');
				foreach ($query->result() as $object) {
					echo '<tr class="text-center">';
					echo '	<td id="time_limit_number'.$object->TIME_LIMIT_ID.'" class="text-center font-weight-normal">'.$object->TIME_LIMIT_NUMBER.'</td>';
					echo '	<td hidden>'.$object->TIME_LIMIT_ID.'</td>';
					echo '	<td id="state'.$object->TIME_LIMIT_ID.'" class="text-center font-weight-normal">'.$object->STATE.'</td>';
					echo '	<td id="time_limit_minute'.$object->TIME_LIMIT_ID.'" class="text-center font-weight-normal">'.$object->TIME_LIMIT_MINUTES.'</td>';
          echo '	<td id="modified_by'.$object->TIME_LIMIT_ID.'" class="text-center font-weight-normal">'.$object->MODIFIED_BY.'</td>';
          echo '	<td id="date_modified'.$object->TIME_LIMIT_ID.'" class="text-center font-weight-normal">'.$object->DATE_MODIFIED.'</td>';
          echo '	<td>';
					echo '		<button id="editbutton_time_limit'.$object->TIME_LIMIT_ID.'" class="btn btn-sm btn-warning text-center" type="button" data-toggle="modal" data-target="#modal-edit_time_limit"><span><i class="fa fa-edit" style="color: #fff;"></i></span></button>';
          echo '	</td>';
					echo '</tr>';
				}
			?>
		</tbody>
	</table>
</div>
