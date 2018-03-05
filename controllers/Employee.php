<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends MY_Controller {

	function __construct(){
		parent::__construct();
		parent::_verify_user_authentication();

		$this->load->library('form_validation');
	}

	public function index($offset = 0){

		$limit = 15;
		$key = '';

		$data = array();
		$username = $this->session->userdata('username');
		$role_id = $this->session->userdata('role');

		$data['user'] = $user = $this->users_model->get_employee_info_by_employee_id($username);
		
		if(!isset($user['work_location'])){
			$user['work_location'] = '';
		}

		$record = $this->users_model->get_employee_name($role_id, $user['work_location'], 0,0);

		$config = array();
    	$config["base_url"] = base_url() . "employee/index";
    	$config["total_rows"] = $count = count($record['employees']);
    	$config["per_page"] = $limit;
    	$config["uri_segment"] = 3;
    	$this->pagination->initialize($config);

    	$record2 = $this->users_model->get_employee_name($role_id, $user['work_location'], $key, $limit);
    
    	$i = 1;
    	$page_key = array();
    	$page_key[0] = '';

    	for ($i; $i < $count; $i++) {

    		$key = ''; 
    	
    		if(array_check($page_key)){
    			$k = $i;
    		
    			$record2 = $this->users_model->get_employee_name($role_id, $user['work_location'], $page_key[$k-1], $limit);

    			if(isset($record2['LastEvaluatedKey'])){
    				$key = $record2['LastEvaluatedKey'];
    			}
    		}
    		$i = $i+14;
    		$page_key[$i] = $key;
    	}

		$record2 = $this->users_model->get_employee_name($role_id, $user['work_location'], $page_key[$offset], $limit);

		if($role_id == 5){
			$data['employees'] = array();
		}else{
			$data['employees'] = $record2['employees'];
		}

		$data['employees'] = $record2['employees'];
		$data['links']['pagination'] = $this->pagination->create_links();

		$this->load->view('employee', $data);
	}

	public function save_employee_info(){
		if($this->input->post()){
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('family_name', 'Last Name', 'required');
			$this->form_validation->set_rules('given_name', 'First Name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('role_id', 'Access', 'required');
			$this->form_validation->set_rules('employee_id', 'Employee id', 'required');

			$this->form_validation->set_rules('postal_code', 'Postal Code', 'numeric');
			$this->form_validation->set_rules('phone', 'Phone number', 'numeric');
			$this->form_validation->set_rules('mobile', 'Mobile number', 'numeric');
			$this->form_validation->set_rules('billing_rate', 'Billing Rate', 'numeric');
			$this->form_validation->set_rules('salary', 'Salary', 'numeric');

			if($this->form_validation->run() == false){
				$errors['message'] = validation_errors();
				$errors['status'] = 'false';

				echo json_encode($errors);
			}else{

				$server		= 'kbsnet.sargasinc.com';
				$base_dn 	= 'ou=Users,dc=kbsnet,dc=sargasinc,dc=com';
				$username = 'sgsddbadmin';
				$password = '$uperadmin2017';  

				$ldap = ldap_connect($server);

				if($ldap){

		            $username = 'uid='.$username.','.$base_dn;

			        ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
			        ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);

			        $r = ldap_bind($ldap, $username, $password);

// 				$search = ldap_search($ldap, $base_dn, "(objectclass=*)");
// 				$result = ldap_get_entries($ldap, $search);
// kprint($result);exit;

		            if($r){
				    
			            $info['uid'] = $this->input->post('username');
				    	$info['givenname'] = $this->input->post('given_name');
				    	$info['objectclass'][0] = "inetOrgPerson";
			            $info['objectclass'][1] = "organizationalPerson";
			            $info['objectclass'][2] = "person";
			            $info['objectclass'][3] = "top";
			            $info['sn'] = $this->input->post('family_name');
				    	$info['cn'] = $this->input->post('username');
			            $info['userpassword'] = $this->input->post('password');
			            
			            $r = ldap_add($ldap, 'uid='.$info['uid'].','.$base_dn, $info);

			            if($r){
			            	$insert = $this->input->post();

							if($insert['password'] == ''){
								unset($insert['password']);
							}else{
								$insert['password'] = md5($insert['password']);
							}

							if($insert['role_id'] == ''){
								unset($insert['role_id']);
							}

							if($insert['street'] == ''){
								unset($insert['street']);
							}

							if($insert['city'] == ''){
								unset($insert['city']);
							}

							if($insert['province'] == ''){
								unset($insert['province']);
							}

							if($insert['postal_code'] == ''){
								unset($insert['postal_code']);
							}

							if($insert['country'] == ''){
								unset($insert['country']);
							}

							if($insert['work_location'] == ''){
								unset($insert['work_location']);
							}

							if($insert['email'] == ''){
								unset($insert['email']);
							}

							if($insert['phone'] == ''){
								unset($insert['phone']);
							}

							if($insert['mobile'] == ''){
								unset($insert['mobile']);
							}

							if($insert['billing_rate'] == ''){
								unset($insert['billing_rate']);
							}

							if($insert['is_default'] == ''){
								unset($insert['is_default']);
							}

							if($insert['gender'] == ''){
								unset($insert['gender']);
							}

							if($insert['position_name'] == ''){
								unset($insert['position_name']);
							}

							if($insert['hire_date'] == ''){
								unset($insert['hire_date']);
							}

							if($insert['release_date'] == ''){
								unset($insert['release_date']);
							}

							if($insert['birth_date'] == ''){
								unset($insert['birth_date']);
							}

							if($insert['salary'] == ''){
								unset($insert['salary']);
							}

							if($insert['employee_status'] == ''){
								unset($insert['employee_status']);
							}

							// if($insert['team_name'] == ''){
							// 	unset($insert['team_name']);
							// }

							if($insert['time_log_access'] == ''){
								unset($insert['time_log_access']);
							}

							if($insert['work_email'] == ''){
								unset($insert['work_email']);
							}

							if($insert['reports_access'] == ''){
								unset($insert['reports_access']);
							}

							$insert = json_encode($insert);
							$success = $this->users_model->insert_employee($insert);

							echo json_encode($success);
			            }else{
			            	$error['status'] = 'false';
			           		$error['message'] = 'Unable to save. Contact your IT support';

			            	echo json_encode($error);
			            }
			        }else{
		            	$error['status'] = 'false';
		           		$error['message'] = 'Unable to save. Contact your IT support';

		            	echo json_encode($error);
		            }

		        }else{
		            $error['status'] = 'false';
		            $error['message'] = 'Error connecting to server '.$server;

		            echo json_encode($error);
		        }
			}	
		}
	}

	public function info($url_encode){
		$data = array();
		$data['role_id'] = $role_id = $this->session->userdata('role');

		if($role_id == 5){
			show_error('You are not permitted to access this page.<br /><a href="javascript:history.back();">Click here</a> to go back.',500, 'Access Denied!');
		}

		$user_name = $this->session->userdata('username');
		$data['user'] = $this->users_model->get_employee_info_by_employee_id($user_name);

		if(!isset($user['work_location'])){
			$user['work_location'] = '';
		}

		$username = url_decode($url_encode);
		$data['info'] = $this->users_model->get_employee_info_by_employee_id($username);

		if(isset($data['info']['team_leader'])){
			$tl_info = $this->users_model->get_employee_info_by_employee_id($data['info']['team_leader']);
			$data['info']['team_leader'] = $tl_info['family_name'].', '.$tl_info['given_name'];
		}
		

		$record = $this->users_model->get_employee_name($role_id, $user['work_location'],0,0);
		$data['team_leaders'] = $record['employees'];

		$this->load->view('employee_info', $data);
	}

	public function manage_team_index(){
		$data = array();
		$username = $this->session->userdata('username');
		$role_id = $this->session->userdata('role');
		$data['user'] = $user = $this->users_model->get_employee_info_by_employee_id($username);

		$team_leader = $user['given_name'].' '.$user['family_name'];

		if(!isset($user['work_location'])){
			$user['work_location'] = '';
		}

		$record = $this->users_model->get_employee_name($role_id, $user['work_location'],0,0);
		$teams = $this->users_model->get_teams($role_id, $team_leader);

		$team = array();

		if(isset($teams['teams'])){
			foreach($teams['teams'] as $key => $value){
				if(!in_array($value, $team)){
					$team[$key]  = $value;
				}
			}
		}

		$data['teams']['teams'] = $team;
		$data['team_leaders'] = $record['employees'];
		$this->load->view('manage_team_index', $data);
	}

	public function manage_team($url){
		$data = array();
		$username = $this->session->userdata('username');
		$role_id = $this->session->userdata('role');
		$data['user'] = $user = $this->users_model->get_employee_info_by_employee_id($username);

		if(!isset($user['work_location'])){
			$user['work_location'] = '';
		}

		$record = $this->users_model->get_employee_name($role_id, $user['work_location'],0,0);
		$data['team_name'] = $team_name = url_decode($url);

		$data['team_leaders'] = $team_leaders = $this->users_model->get_team_leaders_by_team_name($team_name);

		if($role_id != 1){
			$employee = $user['given_name'].' '.$user['family_name'];
			$tl = array($employee);
			foreach($team_leaders['team_leader'] as $key => $value){
				$tl[$key] = $value['team_leader'];
			}

			if(!in_array($employee, $tl)){
				show_error('You are not permitted to access this page.<br /><a href="javascript:history.back();">Click here</a> to go back.',500, 'Access Denied!');
			}

		}

		$data['team_members'] = $this->users_model->get_team_members_by_team_name($team_name);
		$data['employees'] = $record['employees'];

		$this->load->view('manage_team', $data);
	}

	public function update_employee_info(){
		
		if($this->input->post()){
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('family_name', 'Last Name', 'required');
			$this->form_validation->set_rules('given_name', 'First Name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('role_id', 'Access', 'required');
			$this->form_validation->set_rules('employee_id', 'Employee id', 'required');

			$this->form_validation->set_rules('postal_code', 'Postal Code', 'numeric');
			$this->form_validation->set_rules('phone', 'Phone number', 'numeric');
			$this->form_validation->set_rules('mobile', 'Mobile number', 'numeric');
			$this->form_validation->set_rules('billing_rate', 'Billing Rate', 'numeric');
			$this->form_validation->set_rules('salary', 'Salary', 'numeric');

			if($this->form_validation->run() == false){
				$errors['message'] = validation_errors();
				$errors['status'] = 'false';

				echo json_encode($errors);
			}else{
				$update = $this->input->post();
				
				$key = array(
						'username' => array(
										'S' => $update['username'])
						);

				if($update['password'] == ''){
					unset($update['password']);
				}else{
					
					if($update['old_password'] == $update['password']){
						$update[':pa'] = $update['password'];
						unset($update['password']);
						unset($update['old_password']);
					}else{
						$server		= 'kbsnet.sargasinc.com';
						$base_dn 	= 'ou=Users,dc=kbsnet,dc=sargasinc,dc=com';
						$username = 'sgsddbadmin';
						$password = '$uperadmin2017';  

						$ldap = ldap_connect($server);

						if($ldap){

				            $username = 'uid='.$username.','.$base_dn;

					        ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
					        ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);

					        $r = ldap_bind($ldap, $username, $password);
				            
				            if($r){
				            	$info['userpassword'] = $update['password'];

				            	$r = ldap_modify($ldap, 'uid='.$update['username'].','.$base_dn, $info);

				            	if($r){
				            		$update[':pa'] = md5($update['password']);
									unset($update['password']);
									unset($update['old_password']);
				            	}else{
				            		$error['status'] = 'false';
					           		$error['message'] = 'Unable to save. Contact your IT support';

					            	echo json_encode($error);
				            	}
				            }else{
				            	$error['status'] = 'false';
				           		$error['message'] = 'Unable to save. Contact your IT support';

				            	echo json_encode($error);
				            }
				        }else{
				        	$error['status'] = 'false';
			           		$error['message'] = 'Unable to save. Contact your IT support';

			            	echo json_encode($error);
				        }
					}
					
				}

				if($update['role_id'] == ''){
					unset($update['role_id']);
				}else{
					$update[':r'] = $update['role_id'];
					unset($update['role_id']);
				}

				if($update['employee_id'] == ''){
					unset($update['employee_id']);
				}else{
					$update[':ei'] = $update['employee_id'];
					unset($update['employee_id']);
				}

				if($update['family_name'] == ''){
					unset($update['family_name']);
				}else{
					$update[':fn'] = $update['family_name'];
					unset($update['family_name']);
				}

				if($update['given_name'] == ''){
					unset($update['given_name']);
				}else{
					$update[':gn'] = $update['given_name'];
					unset($update['given_name']);
				}

				if($update['street'] == ''){
					unset($update['street']);
				}else{
					$update[':s'] = $update['street'];
					unset($update['street']);
				}

				if($update['city'] == ''){
					unset($update['city']);
				}else{
					$update[':c'] = $update['city'];
					unset($update['city']);
				}

				if($update['province'] == ''){
					unset($update['province']);
				}else{
					$update[':p'] = $update['province'];
					unset($update['province']);
				}

				if($update['postal_code'] == ''){
					unset($update['postal_code']);
				}else{
					$update[':pc'] = $update['postal_code'];
					unset($update['postal_code']);
				}

				if($update['country'] == ''){
					unset($update['country']);
				}else{
					$update[':co'] = $update['country'];
					unset($update['country']);
				}

				if($update['work_location'] == ''){
					unset($update['work_location']);
				}else{
					$update[':l'] = $update['work_location'];
					unset($update['work_location']);
				}

				if($update['email'] == ''){
					unset($update['email']);
				}else{
					$update[':e'] = $update['email'];
					unset($update['email']);
				}

				if($update['phone'] == ''){
					unset($update['phone']);
				}else{
					$update[':ph'] = $update['phone'];
					unset($update['phone']);
				}

				if($update['mobile'] == ''){
					unset($update['mobile']);
				}else{
					$update[':mo'] = $update['mobile'];
					unset($update['mobile']);
				}

				if($update['billing_rate'] == ''){
					unset($update['billing_rate']);
				}else{
					$update[':br'] = $update['billing_rate'];
					unset($update['billing_rate']);
				}

				if($update['is_default'] == ''){
					unset($update['is_default']);
				}else{
					$update[':d'] = $update['is_default'];
					unset($update['is_default']);
				}

				if($update['gender'] == ''){
					unset($update['gender']);
				}else{
					$update[':g'] = $update['gender'];
					unset($update['gender']);
				}

				if($update['position_name'] == ''){
					unset($update['position_name']);
				}else{
					$update[':pos'] = $update['position_name'];
					unset($update['position_name']);
				}

				if($update['hire_date'] == ''){
					unset($update['hire_date']);
				}else{
					$update[':hd'] = $update['hire_date'];
					unset($update['hire_date']);
				}

				if($update['release_date'] == ''){
					unset($update['release_date']);
				}else{
					$update[':rd'] = $update['release_date'];
					unset($update['release_date']);
				}

				if($update['birth_date'] == ''){
					unset($update['birth_date']);
				}else{
					$update[':bd'] = $update['birth_date'];
					unset($update['birth_date']);
				}

				if($update['salary'] == ''){
					unset($update['salary']);
				}else{
					$update[':sa'] = $update['salary'];
					unset($update['salary']);
				}

				if($update['employee_status'] == ''){
					unset($update['employee_status']);
				}else{
					$update[':es'] = $update['employee_status'];
					unset($update['employee_status']);
				}

				// if($update['team_name'] == ''){
				// 	unset($update['team_name']);
				// }else{
				// 	$update[':tn'] = $update['team_name'];
				// 	unset($update['team_name']);
				// }

				if($update['time_log_access'] == ''){
					unset($update['time_log_access']);
				}else{
					$update[':tla'] = $update['time_log_access'];
					unset($update['time_log_access']);
				}

				if($update['work_email'] == ''){
					unset($update['work_email']);
				}else{
					$update[':we'] = $update['work_email'];
					unset($update['work_email']);
				}

				if($update['reports_access'] == ''){
					unset($update['reports_access']);
				}else{
					$update[':ra'] = $update['reports_access'];
					unset($update['reports_access']);
				}

				unset($update['username']);

				$update_expression = array();
				foreach ($update as $ue => $value) {

					if($ue == ':pa'){
						$ue = 'password=:pa';
					}

					if($ue == ':r'){
						$ue = 'role_id=:r';
					}

					if($ue == ':ei'){
						$ue = 'employee_id=:ei';
					}
					
					if($ue == ':fn'){
						$ue = 'family_name=:fn';
					}

					if($ue == ':gn'){
						$ue = 'given_name=:gn';
					}

					if($ue == ':s'){
						$ue = 'street=:s';
					}

					if($ue == ':c'){
						$ue = 'city=:c';
					}

					if($ue == ':p'){
						$ue = 'province=:p';
					}

					if($ue == ':pc'){
						$ue = 'postal_code=:pc';
					}

					if($ue == ':co'){
						$ue = 'country=:co';
					}

					if($ue == ':l'){
						$ue = 'work_location=:l';
					}

					if($ue == ':e'){
						$ue = 'email=:e';
					}

					if($ue == ':ph'){
						$ue = 'phone=:ph';
					}

					if($ue == ':mo'){
						$ue = 'mobile=:mo';
					}

					if($ue == ':br'){
						$ue = 'billing_rate=:br';
					}

					if($ue == ':d'){
						$ue = 'is_default=:d';
					}

					if($ue == ':g'){
						$ue = 'gender=:g';
					}

					if($ue == ':pos'){
						$ue = 'position_name=:pos';
					}

					if($ue == ':hd'){
						$ue = 'hire_date=:hd';
					}

					if($ue == ':rd'){
						$ue = 'release_date=:rd';
					}

					if($ue == ':bd'){
						$ue = 'birth_date=:bd';
					}

					if($ue == ':sa'){
						$ue = 'salary=:sa';
					}

					if($ue == ':es'){
						$ue = 'employee_status=:es';
					}

					// if($ue == ':tn'){
					// 	$ue = 'team_name=:tn';
					// }

					if($ue == ':tla'){
						$ue = 'time_log_access=:tla';
					}

					if($ue == ':we'){
						$ue = 'work_email=:we';
					}

					if($ue == ':ra'){
						$ue = 'reports_access=:ra';
					}

					array_push($update_expression, $ue);

				}

				$ue = implode(',', $update_expression);
				$update = json_encode($update);

				$record = $this->users_model->update_employee($update, $key, $ue);

				echo json_encode($record);
			}	
		}
	}

	public function delete_employee_info(){
		$key['username']['S'] = $this->input->post('username');

		if($key['username']['S'] != ''){

			$server		= 'kbsnet.sargasinc.com';
			$base_dn 	= 'ou=Users,dc=kbsnet,dc=sargasinc,dc=com';
			$username 	= 'sgsddbadmin';
			$password 	= '$uperadmin2017';  

			$ldap 		= ldap_connect($server);

			if($ldap){

	            $username = 'uid='.$username.','.$base_dn;

		        ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
		        ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);

		        $r = ldap_bind($ldap, $username, $password);
	            
	            if($r){
	            	$r = ldap_delete($ldap, 'uid='.$this->input->post('username').','.$base_dn);

	            	if($r){
	            		$success = $this->users_model->delete_employee($key);

						echo json_encode($success);
	            	}else{
	            		$error['status'] = 'false';
		           		$error['message'] = 'Unable to save. Contact your IT support';

		            	echo json_encode($error);
	            	}
	            }else{
	            	$error['status'] = 'false';
	           		$error['message'] = 'Unable to save. Invalid credential, contact your IT support';

	            	echo json_encode($error);
	            }
	        }else{
	        	$error['status'] = 'false';
           		$error['message'] = 'Unable to save. No connection, contact your IT support';

            	echo json_encode($error);
	        }
	    }else{
	    	$error['status'] = 'false';
       		$error['message'] = 'Unable to save. No username, contact your IT support';

        	echo json_encode($error);
	    }
	}
	
	public function insert_team(){
		if($this->input->post()){
			$this->form_validation->set_rules('team_name', 'Team Name', 'required');
			$this->form_validation->set_rules('team_leader', 'Team Leader', 'required');

			if($this->form_validation->run() == false){
				$errors['message'] = validation_errors();
				$errors['status'] = 'false';

				echo json_encode($errors);
			}else{
				$insert = array();

				$insert = $this->input->post();

				$insert = json_encode($insert);
				$success = $this->users_model->insert_team($insert);

				echo json_encode($success);
			}

		}
	}

	public function update_team(){
		if($this->input->post()){
			$type = $this->input->post('modal_type');

			if($type == 'team_leader'){
				$this->form_validation->set_rules('team_leader', 'Team Leader', 'required');
			}else{
				$this->form_validation->set_rules('team_member', 'Team Member', 'required');
			}
			
			if($this->form_validation->run() == false){
				$errors['message'] = validation_errors();
				$errors['status'] = 'false';

				echo json_encode($errors);
			}else{

				if($type == 'team_leader'){
					$insert = array();

					$insert['team_name'] = $this->input->post('team_name');
					$insert['team_leader'] = $this->input->post('team_leader');

					$insert = json_encode($insert);
					$record = $this->users_model->insert_team($insert);

					echo json_encode($record);
				}else{
					$key['username']['S'] = $this->input->post('team_member');

					$user = $this->users_model->get_user_by_username($this->input->post('team_member'));

					if(isset($user['team_name'])){
						$errors['message'] = 'Employee already have a team assigned.';
						$errors['status'] = 'false';

						echo json_encode($errors);
					}else{
						$insert = array();

						$team_name = $this->input->post('team_name');
						
						$insert = json_encode($insert);
						$record = $this->users_model->insert_team_member($team_name, $key);

						echo json_encode($record);
					}
				}
			}
		}
	}

	public function delete_team_leader(){
		$key['team_name']['S'] = $this->input->post('team_name');
		$key['team_leader']['S'] = $this->input->post('team_leader');

		$success = $this->users_model->delete_team_leader($key);
		echo json_encode($success);
	}

	public function delete_team_member(){
		$key['username']['S'] = $this->input->post('team_member');

		$success = $this->users_model->delete_team_member($key);

		echo json_encode($success);
	}	
}
