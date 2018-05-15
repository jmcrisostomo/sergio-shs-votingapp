
<!-- add modal -->
<form method="POST" action="<?php echo base_url();?>Controller_Dashboard/function_add_settings_type_user">
<div class="modal fade" id="modal-add_type_user">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Type User</h4>
      </div>
      <div class="modal-body">
        <label>Type User: </label>
        <input type="text" id="Type_User" name="Type_User" placeholder="Enter Type User..." class="form-control">
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
<form method="POST" action="<?php echo base_url();?>Controller_Dashboard/function_edit_settings_type_user">
<div class="modal fade" id="modal-edit_type_user">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="edit_usertype_number_header"></h4>
				<input type="text" id="edit_usertype_number" name="edit_usertype_number" hidden>
			</div>
			<div class="modal-body">
        <label>Type User:</label></br>
				<input type="text" id="edit_user_type_number_input" name="edit_user_type_number_input" class="form-control">
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
<form method="POST" action="<?php echo base_url();?>Controller_Dashboard/function_remove_settings_type_user">
<div class="modal fade" id="modal-remove_type_user">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Remove Type User</h4>
        <input id="remove_type_answer_number_header" name="remove_type_answer_number_header" hidden>
      </div>
      <div class="modal-body">
        <p id="remove_type_answer_number" name="remove_type_answer_number"></p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Remove</button>
      </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
