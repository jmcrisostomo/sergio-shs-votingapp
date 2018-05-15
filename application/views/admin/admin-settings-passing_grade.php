<!--<button class="btn btn-primary my-3 animated fadeInUp" type="button" data-toggle="modal" data-target="#modal-add_typeanswer" style="animation-duration: 500ms;"><span>
	<i class="fa fa-plus" style="color: #fff;"></i> Add Type Answer</span>
</button>-->
<div class="table-responsive animated fadeInUp" style="animation-delay: 250ms; animation-duration: 500ms;">
	<table class="table table-striped table-hover table-bordered nowrap" id="myTable_4" cellspacing="0" width="100%">
		<thead>
			<tr class="text-center">
				<th>Passing Grade #</th>
				<th hidden></th>
				<th>State</th>
				<th>Passing Grade (&percnt;)</th>
        <th>Modified By</th>
        <th>Date Modified</th>
        <th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $this->db->query('SELECT * FROM tblpassinggrade');
				foreach ($query->result() as $object) {
					echo '<tr class="text-center">';
					echo '	<td id="passing_grade_number'.$object->PASSING_GRADE_ID.'" class="text-center font-weight-normal">'.$object->PASSING_GRADE_NUMBER.'</td>';
					echo '	<td hidden>'.$object->PASSING_GRADE_ID.'</td>';
					echo '	<td id="state'.$object->PASSING_GRADE_ID.'" class="text-center font-weight-normal">'.$object->STATE.'</td>';
					echo '	<td id="passing_grade_percent'.$object->PASSING_GRADE_ID.'" class="text-center font-weight-normal">'.$object->PASSING_GRADE_PERCENT.'</td>';
          echo '	<td id="modified_by'.$object->PASSING_GRADE_ID.'" class="text-center font-weight-normal">'.$object->MODIFIED_BY.'</td>';
          echo '	<td id="date_modified'.$object->PASSING_GRADE_ID.'" class="text-center font-weight-normal">'.$object->DATE_MODIFIED.'</td>';
          echo '	<td>';
					echo '		<button id="editbutton_passing_grade'.$object->PASSING_GRADE_ID.'" class="btn btn-sm btn-warning text-center" type="button" data-toggle="modal" data-target="#modal-edit_passing_grade"><span><i class="fa fa-edit" style="color: #fff;"></i></span></button>';
          echo '	</td>';
					echo '</tr>';
				}
			?>
		</tbody>
	</table>
</div>
