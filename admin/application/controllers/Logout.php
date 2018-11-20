<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends Domo_Controller {


	public function __construct() {
		parent::__construct();
	}


	public function index()
	{

		$this->session->unset_userdata('user_session');

		redirect(base_url()."login");

	}
}