<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function _verify_user_authentication() {
			
		$username	= $this->session->userdata('username');

		if (isset($username) == FALSE || $username == '') {
			$this->session->set_flashdata('session_exp','Your session has expired. Please log in again.');
			redirect(base_url().'Login/');
		}
			
	}
}