<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');

		$url = base_url();
		
		redirect($url);
	}
}