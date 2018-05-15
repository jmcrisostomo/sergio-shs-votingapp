<!--<button class="btn btn-primary my-3 animated fadeInUp" type="button" data-toggle="modal" data-target="#modal-add_typeanswer" style="animation-duration: 500ms;"><span>
	<i class="fa fa-plus" style="color: #fff;"></i> Add Type Answer</span>
</button>-->
<div class="table-responsive animated fadeInUp" style="animation-delay: 250ms; animation-duration: 500ms;">
	<table class="table table-striped table-hover table-bordered nowrap" id="myTable_2" cellspacing="0" width="100%">
		<thead>
			<tr class="text-center">
				<th>Answer Type #</th>
				<th hidden></th>
				<th>State</th>
				<th>Answer Type</th>
			<!-- <th>Action</th> -->
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $this->db->query('SELECT * FROM tbltypeanswer WHERE STATE = "ACTIVE"');
				foreach ($query->result() as $object) {
					echo '<tr>';
					echo '	<td class="font-weight-normal text-center" id="answer_type_number'.$object->ANSWER_TYPE_ID.'" class="text-center">'.$object->ANSWER_TYPE_NUMBER.'</td>';
					echo '	<td  hidden>'.$object->ANSWER_TYPE_ID.'</td>';
					echo '	<td class="font-weight-normal text-center" id="state'.$object->ANSWER_TYPE_ID.'" class="text-center">'.$object->STATE.'</td>';
					echo '	<td class="font-weight-normal text-center" id="answer_type'.$object->ANSWER_TYPE_ID.'" class="text-center">'.$object->ANSWER_TYPE.'</td>';
					/*echo '	<td class="text-center">';
					echo '		<button id="editbutton'.$object->ANSWER_TYPE_ID.'" class="btn btn-sm btn-warning" type="button" data-toggle="modal" data-target="#modal-edit_typeanswer"><span><i class="fa fa-edit" style="color: #fff;"></i></span></button>';
					echo '		<button id="removebutton'.$object->ANSWER_TYPE_ID.'" class="btn btn-sm btn-danger" type="button" data-toggle="modal" data-target="#modal-remove_typeanswer"><span><i class="fa fa-trash-alt"></i></span></button>';
					echo '	</td>';*/
					echo '</tr>';
				}
			?>
		</tbody>
	</table>
</div>
