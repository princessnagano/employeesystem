<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();

		if(extension_loaded('ldap')){
			$this->load->library('auth_ldap');
		}
	}

	public function index(){

		//$this->users_model->insert_users();

		$data = array();

		if($this->session->userdata('username')){
			redirect(base_url().'Time');
		}

		if(array_check($_POST)){
			$login = $this->validate_login($this->input->post('username'), $this->input->post('password'));

			if(count($login['errors']) > 0){
				$data['error_message'] = implode('<br />', $login['errors']);
			}

			if(array_check($data)){
				$this->load->view('login', $data);
			}
			
			if($login['ldap_auth'] == 0){
				redirect(base_url().'Time');
			}
		}else{

			if($this->session->userdata('username')){
				redirect(base_url().'Time');
			}else{
				$this->load->view('login');
			}
		}

	}

	private function validate_login($username, $password){
		$errors = array();
		$user = array();

		if($username == ''){
			$errors[] = 'Please enter your username.';
		}

		if($password == ''){
			$errors[] = 'Please enter your password.';
		}

		$ldap_aut = 0;
		if(defined('LDAP_AUTHENTICATION') and LDAP_AUTHENTICATION == 1){
			//$password = md5($password);
			$ldap_auth = $this->auth_ldap->_authenticate($username,$password);
		}

		if(count($errors) == 0){
			$password = md5($password);
			$user = $this->users_model->get_user_authentication($username, $password);
//kprint($user);exit;
			if(array_check($user) AND $ldap_auth == 0){
				$this->session->set_userdata('username', $user['username']);
				$this->session->set_userdata('role', $user['role_id']);
			}else{
				$errors[] = 'Incorrect username/password.';
			}
		}

		return array('errors' => $errors, 'user' => $user, 'ldap_auth' => $ldap_auth);	
	}
}