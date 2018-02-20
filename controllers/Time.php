<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Time extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->library('form_validation');
	}

	public function index($offset = 0){

		$limit = 15;
		$key = array();
		$count = 0;

		$data = array();
		$username = $this->session->userdata('username');
		$data['user'] = $this->users_model->get_employee_info_by_employee_id($username);

		$record = $this->time_model->get_logs_by_username($username, 0,0);

		if(array_check($record)){
			$config = array();
			$config['base_url'] = base_url().'time/index';
			$config['total_rows'] = $count = count($record['time_logs']);
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$this->pagination->initialize($config);

			$record2 = $this->time_model->get_logs_by_username($username, $key, $limit);

			$i = 1;
			$page_key = array();
			$page_key[0] = array();

			for($i; $i < $count; $i++){
				$key = '';

				if(array_check($page_key)){
					$k = $i;

					$record2 = $this->time_model->get_logs_by_username($username, $page_key[$k-1], $limit);

					if(isset($record2['LastEvaluatedKey'])){
						$key = $record2['LastEvaluatedKey'];
					}
				}

				$i = $i+14;
				$page_key[$i] = $key;
			}

			$record2 = $this->time_model->get_logs_by_username($username, $page_key[$offset], $limit);

			$data['time_logs'] = $record2['time_logs'];
			
		}
		$data['links']['pagination'] = $this->pagination->create_links();
		$this->load->view('dashboard', $data);
	}

	public function bundy_index(){
		$date = date('Y-m-d');
		$previous_date = date('Y-m-d', strtotime('-1 day'));

		$data = array();
		$username = $this->session->userdata('username');
		$data['user'] = $this->users_model->get_employee_info_by_employee_id($username);

		$data['time_logs'] = $this->time_model->get_logs_by_username_and_date($username, $date);
		$data['previous_time_logs'] = $this->time_model->get_logs_by_username_and_date($username, $previous_date);

		$this->load->view('bundy', $data);
	}

	public function bundy($action = ''){
		$username = $this->session->userdata('username');
		$user = $this->users_model->get_employee_info_by_employee_id($username);

		if($user['username'] == 'sgsddbadmin'){
			$user['employee_id'] = '1234';
		}


		if($this->input->post()){
			$shift_in = $this->input->post('shift_in');
			$shift_out = $this->input->post('shift_out');

			$errors = array();

			if($shift_in == '' AND $shift_out){
				$errors['message'] == 'Please complete shift time';
				$errors['status'] = 'false';
			}

			if($shift_in == $shift_out){
				$errors['message'] = 'Shift in must not be to shift out.';
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

		if(date('a', strtotime($date)) == 'am'){
			$date = date('Y-m-d', strtotime($date.'-1 day'));
		}else{
			$date = date('Y-m-d', strtotime($date));
		}

		$time_log = $this->time_model->get_logs_by_username_and_date($username, $date);

		$undertime_hours = $this->time_model->calculate_undertime_hours($log_date, $time_log['shift_out']);
		$total_hours = $this->time_model->calculate_total_hours($username, $time_log, $log_date);

		$total_hours = $total_hours - ($time_log['late_hours'] + $undertime_hours);

		$update = array();

		$key['username']['S'] = $username;
		$key['date']['S'] = date('Y-m-d', strtotime($date));

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

		redirect(base_url().'time');

	}

	
}