<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Time extends MY_Controller {

	function __construct(){
		parent::__construct();

		$this->load->library('form_validation');
		parent::_verify_user_authentication();
	}

	public function index($offset = 0){

		$limit = 15;
		$key = array();
		$count = 0;

		$data = array();
		$username = $this->session->userdata('username');
		$data['user'] = $this->users_model->get_employee_info_by_employee_id($username);

		$record = $this->time_model->get_logs_by_username($username, $date = array(), 0,0);

		if(array_check($record)){
			$config = array();
			$config['base_url'] = base_url().'time/index';
			$config['total_rows'] = $count = count($record['time_logs']);
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$this->pagination->initialize($config);

			$record2 = $this->time_model->get_logs_by_username($username, $date = array(), $key, $limit);

			$i = 1;
			$page_key = array();
			$page_key[0] = array();

			for($i; $i < $count; $i++){
				$key = '';

				if(array_check($page_key)){
					$k = $i;

					$record2 = $this->time_model->get_logs_by_username($username, $date = array(), $page_key[$k-1], $limit);

					if(isset($record2['LastEvaluatedKey'])){
						$key = $record2['LastEvaluatedKey'];
					}
				}

				$i = $i+14;
				$page_key[$i] = $key;
			}

			$record2 = $this->time_model->get_logs_by_username($username, $date = array(), $page_key[$offset], $limit);

			$data['time_logs'] = $record2['time_logs'];
			
		}
		
		$data['links']['pagination'] = $this->pagination->create_links();
		$this->load->view('dashboard', $data);
	}

	public function bundy_index(){
		//$date = date('Y-m-d');
		//$previous_date = date('Y-m-d', strtotime('-1 day'));

		$data = array();
		$username = $this->session->userdata('username');
		$data['user'] = $this->users_model->get_employee_info_by_employee_id($username);

		$last_log = $this->time_model->get_last_log_by_username($username);

		if(array_check($last_log)){
			if($last_log['time_log']['time_out'] == '0000-00-00 00:00:00'){
				$date = $last_log['time_log']['date'];
			}else{
				$date = date('Y-m-d');
			}
		}else{
			$date = date('Y-m-d');
		}

		$time_logs = $this->time_model->get_logs_by_username_and_date($username, $date);

		$data['recent_log'] = $time_logs;

		$this->load->view('bundy', $data);
	}

	public function time_logs_index($offset = 0){
		$limit = 15;
		$key = '';

		$data = array();
		$record = array();
		$record2 = array();
		$username = $this->session->userdata('username');
		$data['user'] = $user = $this->users_model->get_employee_info_by_employee_id($username);
		$role_id = $data['user']['role_id'];

		$team_leader = $user['given_name'].' '.$user['family_name'];

		$t = 1;
		$fe = array();
		$f = array();
		$ue = array();
		$teams = $this->users_model->get_teams($role_id, $team_leader);

		if(isset($teams['teams'])){

			foreach($teams['teams'] as $key => $team){
				$fe[':t'.$t]['S'] = $team['team_name'];
				$f[':t'.$t] = $team['team_name'];

				$t++;
			}

			$ue = implode(',', array_map(
								function ($v, $k){
									return $k;
								},
								$f, array_keys($f)
			));

			$teams['ev'] = $fe;
			$teams['fe'] = $ue;

			$record = $this->users_model->get_employee_by_team_leader($role_id, $teams, 0,0);
		}

		if($role_id == 1){
			$record = $this->users_model->get_employee_by_team_leader($role_id, $teams, 0,0);
		}

		if(!isset($record['employees'])){
			$record['employees'] =  array();
		}

		if(array_check($record['employees'])){
			$config = array();
	        $config["base_url"] = base_url() . "time/time_logs_index";
	        $config["total_rows"] = $count = count($record['employees']);
	        $config["per_page"] = $limit;
	        $config["uri_segment"] = 3;
	        $this->pagination->initialize($config);

	        $record2 = $this->users_model->get_employee_by_team_leader($role_id, $teams, $key, $limit);

	        $i = 1;
	        $page_key = array();
	        $page_key[0] = '';

	        for ($i; $i < $count; $i++) {

	        	$key = ''; 
	        	
	        	if(array_check($page_key)){
	        		$k = $i;
	        		
	        		$record2 = $this->users_model->get_employee_by_team_leader($role_id, $teams, $page_key[$k-1], $limit);

	        		if(isset($record2['LastEvaluatedKey'])){
	        			$key = $record2['LastEvaluatedKey'];
	        		}
	        	}
	        	$i = $i+14;
	        	$page_key[$i] = $key;
	        }

	        $record2 = $this->users_model->get_employee_by_team_leader($role_id, $teams, $page_key[$offset], $limit);

	        if(!isset($record2['employees'])){
	        	$record2['employees'] = array();
	        }

	        $data['team_members'] = $record2['employees'];
			
		}

		$data['links']['pagination'] = $this->pagination->create_links();
		$this->load->view('time_logs', $data);
	}

	public function employee_time_log($url_encode, $offset = 0){
		$limit = 15;
		$key = array();
		$dates = array();
		$count = 0;

		$data = array();
		$user_name = $this->session->userdata('username');
		$data['user'] = $this->users_model->get_employee_info_by_employee_id($user_name);

		$username = url_decode($url_encode);
		$record = $this->time_model->get_logs_by_username($username, $dates, 0,0);
		$data['team_member'] = $this->users_model->get_user_by_username($username);

		if(array_check($_POST)){
			$date_from = $this->input->post('date_from');
			$date_to = $this->input->post('date_to');

			$errors = array();

			if($date_from == '' AND $date_to == ''){
				$errors['message'] = 'Please complete shift time';
				$errors['status'] = 'false';
			}

			if($date_from == $date_to){
				$errors['message'] = 'Shift in must not be equal to shift out.';
				$errors['status'] = 'false';
			}

			if(strtotime($date_from) > strtotime($date_to)){
				$errors['message'] = 'Shift in must be less than the shift out.';
				$errors['status'] = 'false';
			}

			if(array_check($errors)){
				$data['errors'] = $errors;
			}else{
				$dates = $this->input->post();

				if(array_check($record)){
					$config = array();
					$config['base_url'] = base_url().'time/employee_time_log/'.$url_encode;
					$config['total_rows'] = $count = count($record['time_logs']);
					$config['per_page'] = $limit;
					$config['uri_segment'] = 4;
					$this->pagination->initialize($config);

					$record2 = $this->time_model->get_logs_by_username($username, $dates, $key, $limit);

					$i = 1;
					$page_key = array();
					$page_key[0] = array();

					for($i; $i < $count; $i++){
						$key = '';

						if(array_check($page_key)){
							$k = $i;

							$record2 = $this->time_model->get_logs_by_username($username, $dates, $page_key[$k-1], $limit);

							if(isset($record2['LastEvaluatedKey'])){
								$key = $record2['LastEvaluatedKey'];
							}
						}

						$i = $i+14;
						$page_key[$i] = $key;
					}

					$record2 = $this->time_model->get_logs_by_username($username, $dates, $page_key[$offset], $limit);

					$data['time_logs'] = $record2['time_logs'];
				}
			}
		}else{
			if(array_check($record)){
				$config = array();
				$config['base_url'] = base_url().'time/employee_time_log/'.$url_encode;
				$config['total_rows'] = $count = count($record['time_logs']);
				$config['per_page'] = $limit;
				$config['uri_segment'] = 4;
				$this->pagination->initialize($config);

				$record2 = $this->time_model->get_logs_by_username($username, $dates, $key, $limit);

				$i = 1;
				$page_key = array();
				$page_key[0] = array();

				for($i; $i < $count; $i++){
					$key = '';

					if(array_check($page_key)){
						$k = $i;

						$record2 = $this->time_model->get_logs_by_username($username, $dates, $page_key[$k-1], $limit);

						if(isset($record2['LastEvaluatedKey'])){
							$key = $record2['LastEvaluatedKey'];
						}
					}

					$i = $i+14;
					$page_key[$i] = $key;
				}

				$record2 = $this->time_model->get_logs_by_username($username, $dates, $page_key[$offset], $limit);

				$data['time_logs'] = $record2['time_logs'];
				
			}
		}

		

		$data['links']['pagination'] = $this->pagination->create_links();

		$this->load->view('employee_time_logs', $data);
	}

	public function bundy($action = ''){
		$username = $this->session->userdata('username');
		$user = $this->users_model->get_employee_info_by_employee_id($username);

		if($this->input->post()){
			$shift_in = $this->input->post('shift_in');
			$shift_out = $this->input->post('shift_out');

			$errors = array();

			if($shift_in == '' AND $shift_out == ''){
				$errors['message'] = 'Please complete shift time';
				$errors['status'] = 'false';
			}

			if($shift_in == $shift_out){
				$errors['message'] = 'Shift in must not be equal to shift out.';
				$errors['status'] = 'false';
			}

			if(strtotime($shift_in) > strtotime($shift_out)){
				$errors['message'] = 'Shift in must be less than the shift out.';
				$errors['status'] = 'false';
			}
		}

		$date = date('Y-m-d H:i:s');
		$log_date = date('Y-m-d H:i:s');

		switch ($action) {
			case 'time_in':
				$this->time_in($username, $user['employee_id'], $date, $log_date, $shift_in, $shift_out, $errors);
				break;
			
			case 'time_out':
				$this->time_out($username, $date, $log_date);
				break;
		}

	}

	public function time_in($username, $employee_id, $date, $log_date, $shift_in, $shift_out, $errors){

		if($date == ''){
			$date = date('Y-m-d H:i:s');
		}

		if($log_date == ''){
			$log_date = date('Y-m-d', strtotime($date));
		}
		if(array_check($errors)){

			echo json_encode($errors);
		}else{

			$late_hours = $this->time_model->calculate_late_hours($date, $shift_in);

			$insert = array();

			$insert['username'] = $username;
			$insert['date'] = date('Y-m-d', strtotime($date));
			$insert['employee_id'] = $employee_id;
			$insert['time_in'] = $date; 
			$insert['time_out'] = '0000-00-00 00:00:00';
			$insert['late_hours'] = $late_hours;
			$insert['undertime_hours'] = '0';
			$insert['total_hours'] = '0';
			$insert['shift_in'] = $shift_in;
			$insert['shift_out'] = $shift_out;

			$insert = json_encode($insert);

			$success = $this->time_model->insert_attendance($insert);

			echo json_encode($success);
		}
	}

	public function time_out($username, $date, $log_date){

		if($date == ''){
			$date = date('Y-m-d H:i:s');
		}

		if($log_date == ''){
			$log_date = date('Y-m-d', strtotime($date));
		}

		$record = $this->time_model->get_last_log_by_username($username);
		$time_log = $record['time_log'];

		$undertime_hours = $this->time_model->calculate_undertime_hours($log_date, $time_log['shift_out']);
		$total_hours = $this->time_model->calculate_total_hours($username, $time_log, $log_date);

		$total_hours = $total_hours - ($time_log['late_hours'] + $undertime_hours);

		$update = array();

		$key['username']['S'] = $username;
		$key['date']['S'] = $time_log['date'];

		$update[':ti'] = $time_log['time_in'];
		$update[':to'] = $log_date;
		$update[':lh'] = $time_log['late_hours'];
		$update[':uh'] = $undertime_hours;
		$update[':th'] = $total_hours;
		$update[':si'] = $time_log['shift_in'];
		$update[':so'] = $time_log['shift_out'];

		$update_expression = array();
		foreach($update as $ue => $value){
			if($ue == ':ti'){
				$ue = 'time_in=:ti';
			}

			if($ue == ':to'){
				$ue = 'time_out=:to';
			}

			if($ue == ':lh'){
				$ue = 'late_hours=:lh';
			}

			if($ue == ':uh'){
				$ue = 'undertime_hours=:uh';
			}

			if($ue == ':th'){
				$ue = 'total_hours=:th';
			}

			if($ue == ':si'){
				$ue = 'shift_in=:si';
			}

			if($ue == ':so'){
				$ue = 'shift_out=:so';
			}

			array_push($update_expression, $ue);
		}

		$ue = implode(',', $update_expression);
		$update = json_encode($update);
		$time_log = $this->time_model->update_attendance($update, $key, $ue);

		redirect(base_url().'time/bundy_index');

	}

	public function update_time_log(){
		if($this->input->post()){
			$time_in = $this->input->post('time_in');
			$time_out = $this->input->post('time_out');
			$date = $this->input->post('date');
			$username = $this->input->post('username');
			$shift_in = $this->input->post('shift_in');
			$shift_out = $this->input->post('shift_out');

			$errors = array();

			if($time_in == '' AND $time_out == ''){
				$errors['message'] == 'Please complete shift time';
				$errors['status'] = 'false';
			}

			if($time_in == $time_out){
				$errors['message'] = 'Shift in must not be equal to shift out.';
				$errors['status'] = 'false';
			}

			if(strtotime($time_in) > strtotime($time_out)){
				$errors['message'] = 'Shift in must be less than the shift out.';
				$errors['status'] = 'false';
			}

			if(array_check($errors)){
				echo json_encode($errors);
			}else{

				$late_hours = $this->time_model->calculate_late_hours($time_in, $shift_in);
				$undertime_hours = $this->time_model->calculate_undertime_hours($time_out, $shift_out);
				$total_hours = $this->time_model->calculate_total_hours($username, $_POST, $time_out);

				$total_hours = $total_hours - ($late_hours + $undertime_hours);

				$update = array();

				$key['username']['S'] = $username;
				$key['date']['S'] = date('Y-m-d', strtotime($date));

				$update[':ti'] = $time_in;
				$update[':to'] = $time_out;
				$update[':lh'] = $late_hours;
				$update[':uh'] = $undertime_hours;
				$update[':th'] = $total_hours;
				$update[':si'] = $shift_in;
				$update[':so'] = $shift_out;

				$update_expression = array();
				foreach($update as $ue => $value){
					if($ue == ':ti'){
						$ue = 'time_in=:ti';
					}

					if($ue == ':to'){
						$ue = 'time_out=:to';
					}

					if($ue == ':lh'){
						$ue = 'late_hours=:lh';
					}

					if($ue == ':uh'){
						$ue = 'undertime_hours=:uh';
					}

					if($ue == ':th'){
						$ue = 'total_hours=:th';
					}

					if($ue == ':si'){
						$ue = 'shift_in=:si';
					}

					if($ue == ':so'){
						$ue = 'shift_out=:so';
					}

					array_push($update_expression, $ue);
				}

				$ue = implode(',', $update_expression);
				$update = json_encode($update);
				$time_log = $this->time_model->update_attendance($update, $key, $ue);
				$time_log['record'] = json_decode($time_log['record']);

				echo json_encode($time_log);
			}
		}
	}
	public function delete_time_log(){
		if($this->input->post()){
			$key['username']['S'] = $this->input->post('username');
			$key['date']['S'] = $this->input->post('date');

			$success = $this->time_model->delete_time_log($key);

			echo json_encode($success);
		}
	}

	
}
