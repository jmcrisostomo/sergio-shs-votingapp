







<!-- edit modal -->
<form method="POST" action="<?php echo base_url();?>Controller_Dashboard/function_edit_settings_message">
<div class="modal fade" id="modal-edit_message">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="edit_message_number_header"></h4>
				<input type="text" id="edit_message_number" name="edit_message_number" hidden>
			</div>
			<div class="modal-body">

        		<label>Message:</label></br>
				<textarea type="text" id="edit_message_number_input" name="edit_message_number_input" class="form-control" rows="10"></textarea>
				<label><strong>Note: Special characters are not allowed.</strong></label>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success">Save Changes</button>
			</form>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
