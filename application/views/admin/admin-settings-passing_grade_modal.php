







<!-- edit modal -->
<form method="POST" action="<?php echo base_url();?>Controller_Dashboard/function_edit_settings_passing_grade">
<div class="modal fade" id="modal-edit_passing_grade">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="edit_passing_grade_number_header"></h4>
				<input type="text" id="edit_passing_grade_number" name="edit_passing_grade_number" hidden>
			</div>
			<div class="modal-body">
        		<label>Passing Grade (%):</label></br>
				<input type="number" id="edit_passing_grade_number_input" name="edit_passing_grade_number_input" class="form-control">
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success">Save Changes</button>
			</form>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
