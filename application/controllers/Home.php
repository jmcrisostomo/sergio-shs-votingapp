<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Manila');

class Home extends CI_Controller {

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
	public function index()
	{
		// $this->load->view('content-landing_page'); Home must be the login agad, for the student's safety.
		// $this->load->view('student/student-signin');


		$this->load->view('student/student-dashboard');
	}

	public function login(){
		$this->load->view('student/student-signin');
	}

	public function profile(){
		$this->load->view('student/student-profile');
	}

	public function candidates(){
		$this->load->view('student/student-candidates');
	}

	public function vote(){
		// this will start the condition if the student has been voted or not, if voted redirect else continue.
		$this->load->view('student/student-vote_ballot');
	}
}
