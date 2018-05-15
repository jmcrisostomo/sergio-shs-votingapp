<button class="btn btn-primary my-3 animated fadeInUp" type="button" data-toggle="modal" data-target="#modal-add_type_user" style="animation-duration: 500ms;"><span>
	<i class="fa fa-plus" style="color: #fff;"></i> Add Type User</span>
</button>
<div class="table-responsive animated fadeInUp" style="animation-delay: 250ms; animation-duration: 500ms;">
	<table class="table table-striped table-hover table-bordered nowrap" id="myTable_1" cellspacing="0" width="100%">
		<thead>
			<tr class="text-center">
				<th>Type User #</th>
				<th hidden>typeuser_id</th>
				<th>State</th>
				<th>Type User</th>
				<th>Modified By</th>
				<th>Date Modified</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $this->db->query('SELECT * FROM tbltypeuser WHERE STATE = "ACTIVE"');
				foreach ($query->result() as $object) {
					echo '<tr>';
					echo '	<td id="usertype_number'.$object->USERTYPE_ID.'" class="text-center font-weight-normal">'.$object->USERTYPE_NUMBER.'</td>';
					echo '	<td hidden>'.$object->USERTYPE_ID.'</td>';
					
					echo '	<td id="state'.$object->USERTYPE_ID.'" class="text-center font-weight-normal">'.$object->STATE.'</td>';
					echo '	<td id="user_type'.$object->USERTYPE_ID.'" class="text-center font-weight-normal">'.$object->USER_TYPE.'</td>';
					echo '	<td id="modified_by'.$object->USERTYPE_ID.'" class="text-center font-weight-normal">'.$object->MODIFIED_BY.'</td>';
					echo '	<td id="date_modified'.$object->USERTYPE_ID.'" class="text-center font-weight-normal">'.$object->DATE_MODIFIED.'</td>';
					echo '	<td class="text-center">';
					echo '		<button id="editbutton_typeuser'.$object->USERTYPE_ID.'" class="btn btn-sm btn-warning" type="button" data-toggle="modal" data-target="#modal-edit_type_user"><span><i class="fa fa-edit" style="color: #fff;"></i></span></button>';
					echo '		<button id="removebutton_typeuser'.$object->USERTYPE_ID.'" class="btn btn-sm btn-danger" type="button" data-toggle="modal" data-target="#modal-remove_type_user"><span><i class="fa fa-trash-alt"></i></span></button>';
					echo '	</td>';
					echo '</tr>';
				}
			?>
		</tbody>
	</table>
</div>
