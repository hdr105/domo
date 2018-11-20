<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct() {
		parent::__construct();

		$session = 	$this->session->userdata("user_session");

		if ($session) {
			
			redirect(base_url()."products");
		}
	}


	public function index()
	{

		$formdata = $this->input->post();

		$data = array();

		if (!empty($formdata)) {
			extract($formdata);

			if ($username == "admin" && $password == "admin123") {
				
				$this->session->set_userdata("user_session",$formdata);

				redirect(base_url()."products");
			}else{

				$data['error'] = true;
			}
		}

		$this->load->view("login/view_login",$data);
	}
}