<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function function_signin()
	{
		$model = $this->model_auth->signin();

		if($model != null){
			foreach ($a as $value) {
				echo '<script type=text/javascript>alert("User Number: '.$value->USER_NUMBER.' User Type: '.$value->USER_TYPE.' Username: '.$value->USER_NAME.'");</script>';
			}
        	redirect('Admin','refresh');
		}
		else
		{
			echo '<script type=text/javascript>alert("Username or Password is incorrect!");</script>';
        	redirect('Admin/signin','refresh');
		}
	}
}