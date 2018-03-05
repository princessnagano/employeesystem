<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends MY_Controller {

	function __construct(){
		parent::__construct();
		parent::_verify_user_authentication();

		$this->load->library('form_validation');
	}

	public function index(){
		$data = array();
		$username = $this->session->userdata('username');
		$role_id = $this->session->userdata('role');

		$data['user'] = $user = $this->users_model->get_employee_info_by_employee_id($username);

		if(!isset($user['work_location'])){
			$user['work_location'] = '';
		}

		$record = $this->users_model->get_employee_name($role_id, $user['work_location'],0,0);
		$data['employees'] = $record['employees'];

		$this->load->view('reports_index', $data);
	}

	public function generate_time_log(){
		if($this->input->post()){
			$data = array();

			$data['date_from'] = $date_from = $this->input->post('date_from');
			$data['date_to'] = $date_to = $this->input->post('date_to');
			$employees = $this->input->post('usernames');

			$errors = array();

			if($date_from == '' AND $date_to == ''){
				$errors['message'] = 'Please complete shift time.';
				$errors['status'] = 'false';
			}

			if(strtotime($date_from) > strtotime($date_to)){
				$errors['message'] = 'Shift in must be less than the shift out.';
				$errors['status'] = 'false';
			}

			if(!array_check($employees)){
				$errors['message'] = 'Please select an employee.';
				$errors['status'] = 'false';
			}

			if(array_check($errors)){
				echo json_encode($errors);
			}else{
				$data['records'] = array();
				$fe = array();
				$f = array();
				$ev = array();

				foreach($employees as $k => $val){
					$fe[':u'.$k]['S'] = $val;
					$f[':u'.$k] = $val;
				}

				$ue = implode(',', array_map(
								function ($v, $k){
									return $k;
								},
								$f, array_keys($f)
				));

				$usernames['fe'] = $ue;
				$usernames['ev'] = $fe;
				$usernames['ev'][':f']['S'] = $date_from;
				$usernames['ev'][':t']['S'] = $date_to;

				$data['dates'] = $dates = get_dates_from_range($date_from, $date_to);
				
				$time_logs = $this->time_model->get_time_logs_by_username_daterange($usernames);

				foreach($employees as $username){

					$data['records'][$username]['employee_info'] = $this->users_model->get_user_by_username($username);

					foreach($time_logs as $key => $value){
						if($username == $value['username']){
							$data['records'][$username]['time_logs'][$value['date']] = $value;
						}
					}
				}

				$report_name = 'time_logs';
				$filename = $report_name.strtotime(date("y-m-d H:i:s")).".xlsx";
				$tmp_folder = 'tmp/excel_download/'.$report_name.'/';

				$return = $this->_time_logs_to_excel($data['records'], $data, $tmp_folder, $filename);

				echo json_encode($return);
			}
		}
	}

	private function _time_logs_to_excel($xls_array, $data, $tmp_folder, $filename){

		$this->load->library('excel');

		$this->excel->setActiveSheetIndex(0);
		$this->excel->getProperties()->setCreator("Sargas Inc.")
									 ->setLastModifiedBy("Sargas Inc.")
									 ->setTitle("Time Logs Report")
									 ->setSubject("Time Logs Report");

		$this->excel->getActiveSheet()->setCellValue('A1', 'Time Logs Report');
		$this->excel->getActiveSheet()->setCellValue('A2', date('F d, Y', strtotime($data['date_from'])).' - '.date('F d, Y', strtotime($data['date_to'])));

		$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true)->setSize(12);
		$this->excel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true)->setSize(12);

		$this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

		$this->excel->setActiveSheetIndex(0)->mergeCells('A1:I1');
		$this->excel->setActiveSheetIndex(0)->mergeCells('A2:I2');

		$i = 4;
		foreach($xls_array as $username => $records){
			$this->excel->getActiveSheet()->setCellValue('A'.$i, $records['employee_info']['family_name'].', '.$records['employee_info']['given_name']);
			$this->excel->getActiveSheet()->setCellValue('B'.$i, 'DATE');
			$this->excel->getActiveSheet()->setCellValue('C'.$i, 'SHIFT IN');
			$this->excel->getActiveSheet()->setCellValue('D'.$i, 'SHIFT OUT');
			$this->excel->getActiveSheet()->setCellValue('E'.$i, 'TIME IN');
			$this->excel->getActiveSheet()->setCellValue('F'.$i, 'TIME OUT');
			$this->excel->getActiveSheet()->setCellValue('G'.$i, 'LATE HOURS');
			$this->excel->getActiveSheet()->setCellValue('H'.$i, 'UNDERTIME HOURS');
			$this->excel->getActiveSheet()->setCellValue('I'.$i, 'TOTAL HOURS');

			$this->excel->getActiveSheet()->getStyle('B'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$this->excel->getActiveSheet()->getStyle('C'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$this->excel->getActiveSheet()->getStyle('D'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$this->excel->getActiveSheet()->getStyle('E'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$this->excel->getActiveSheet()->getStyle('F'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$this->excel->getActiveSheet()->getStyle('G'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$this->excel->getActiveSheet()->getStyle('H'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$this->excel->getActiveSheet()->getStyle('I'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

			$this->excel->getActiveSheet()->getStyle('A'.$i)->getFont()->setBold(true)->setSize(12);
			$this->excel->getActiveSheet()->getStyle('B'.$i)->getFont()->setBold(true)->setSize(12);
			$this->excel->getActiveSheet()->getStyle('C'.$i)->getFont()->setBold(true)->setSize(12);
			$this->excel->getActiveSheet()->getStyle('D'.$i)->getFont()->setBold(true)->setSize(12);
			$this->excel->getActiveSheet()->getStyle('E'.$i)->getFont()->setBold(true)->setSize(12);
			$this->excel->getActiveSheet()->getStyle('F'.$i)->getFont()->setBold(true)->setSize(12);
			$this->excel->getActiveSheet()->getStyle('G'.$i)->getFont()->setBold(true)->setSize(12);
			$this->excel->getActiveSheet()->getStyle('H'.$i)->getFont()->setBold(true)->setSize(12);
			$this->excel->getActiveSheet()->getStyle('I'.$i)->getFont()->setBold(true)->setSize(12);


			foreach($data['dates'] as $date){
				$this->excel->getActiveSheet()->setCellValue('B'.($i+1), $date);

				if(isset($records['time_logs'][$date])){
					$this->excel->getActiveSheet()->setCellValue('C'.($i+1), $records['time_logs'][$date]['shift_in']);
					$this->excel->getActiveSheet()->setCellValue('D'.($i+1), $records['time_logs'][$date]['shift_out']);
					$this->excel->getActiveSheet()->setCellValue('E'.($i+1), $records['time_logs'][$date]['time_in']);	
					$this->excel->getActiveSheet()->setCellValue('F'.($i+1), $records['time_logs'][$date]['time_out']);
					$this->excel->getActiveSheet()->setCellValue('G'.($i+1), $records['time_logs'][$date]['late_hours']);
					$this->excel->getActiveSheet()->setCellValue('H'.($i+1), $records['time_logs'][$date]['undertime_hours']);
					$this->excel->getActiveSheet()->setCellValue('I'.($i+1), $records['time_logs'][$date]['total_hours']);
				}
				

				$i++;
			}

			$i++;
			$i++;
			$i++;
		}

		$this->excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		$this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		$this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		$this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
		$this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
		$this->excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
		$this->excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
		$this->excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
		$this->excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);

		if(!file_exists($tmp_folder)){
			mkdir($tmp_folder,0777,true);
		}

		$tmp_folder = $tmp_folder.$filename;
		$objWriter = PHPExcel_IOFactory::createWriter($this->excel,'Excel2007');
		$objWriter->save($tmp_folder);

		$return = array('url' => $tmp_folder, 'file' => $filename);

		return $return;
	}
}