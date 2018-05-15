<!--<button class="btn btn-primary my-3 animated fadeInUp" type="button" data-toggle="modal" data-target="#modal-add_typeanswer" style="animation-duration: 500ms;"><span>
	<i class="fa fa-plus" style="color: #fff;"></i> Add Type Answer</span>
</button>-->
<div class="table-responsive animated fadeInUp" style="animation-delay: 250ms; animation-duration: 500ms;">
	<table class="table table-striped table-hover table-bordered nowrap" id="myTable_3" cellspacing="0" width="100%">
		<thead>
			<tr class="text-center">
				<th>Message #</th>
				<th hidden></th>
				<th>State</th>
				<th>Message Type</th>
				<th>Message</th>
				<th>Modified By</th>
				<th>Date Modified</th>
        <th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $this->db->query('SELECT * FROM tblmessage');
				foreach ($query->result() as $object) {
					echo '<tr>';
					echo '	<td id="message_number'.$object->MESSAGE_ID.'" class="text-center font-weight-normal">'.$object->MESSAGE_NUMBER.'</td>';
					echo '	<td hidden>'.$object->MESSAGE_ID.'</td>';
					echo '	<td id="state'.$object->MESSAGE_ID.'" class="text-center font-weight-normal">'.$object->STATE.'</td>';
					echo '	<td id="message_type'.$object->MESSAGE_ID.'" class="text-center font-weight-normal">'.$object->MESSAGE_TYPE.'</td>';
          echo '	<td id="message'.$object->MESSAGE_ID.'" class="text-center font-weight-normal">'.$object->MESSAGE.'</td>';
					echo '	<td id="modified_by'.$object->MESSAGE_ID.'" class="text-center font-weight-normal">'.$object->MODIFIED_BY.'</td>';
					echo '	<td id="date_modified'.$object->MESSAGE_ID.'" class="text-center font-weight-normal">'.$object->DATE_MODIFIED.'</td>';
					echo '	<td>';
					echo '		<button id="editbutton_message'.$object->MESSAGE_ID.'" class="btn btn-sm btn-warning" type="button" data-toggle="modal" data-target="#modal-edit_message"><span><i class="fa fa-edit" style="color: #fff;"></i></span></button>';
					echo '	</td>';
					echo '</tr>';
				}
			?>
		</tbody>
	</table>
</div>
