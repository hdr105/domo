<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Domo_Controller extends CI_Controller {


	public function __construct() {
		parent::__construct();

		$session = 	$this->session->userdata("user_session");

		if (!$session) {
			
			redirect(base_url()."login");
		}
	}


}