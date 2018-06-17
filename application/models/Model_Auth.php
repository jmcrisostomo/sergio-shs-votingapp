<?php
class Model_Auth extends CI_Model {
	public function signin(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->query("
				SELECT a.*, b.STATE, c.USER_TYPE 
				FROM tbl_user a, tbl_state b, tbl_user_type c 
				WHERE a.STATE = b.STATE_ID 
				AND a.USER_NAME = '".$username."' 
				AND a.USER_PASSWORD = '".$password."' 
				AND a.USER_TYPE_NUMBER = c.USER_TYPE_NUMBER");

		return $query->result();
	}
}