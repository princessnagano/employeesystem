<?php

require_once AWS_AUTOLOAD . 'aws-autoloader.php';

use Aws\DynamoDb\DynamoDbClient;
use Aws\DynamoDb\Exception\DynamoDbException;
use Aws\CacheInterface;
use Aws\DynamoDb\Marshaler;

class Time_model extends CI_Model{

	function __construct(){
		parent::__construct();

	}

	public function get_logs_by_username_and_date($username, $date){
		// $sdk = new Aws\Sdk([
		//     'endpoint'   => 'http://localhost:8000/',
		//     'region'   => 'us-west-2',
		//     'version'  => 'latest',
		//     'credentials' => array('key'=>'sharedDb',
  //               'secret'=>'sharedDb')
		// ]);

		$sdk = new Aws\Sdk([
		    'region'   => 'ap-southeast-1',
		    'version'  => 'latest',
		    'credentials' => array('key'=>'AKIAIKQ6XI5AR6CJDI3A',
                'secret'=>'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')
		]);

		$dynamodb = $sdk->createDynamoDb();
		$marshaler = new Marshaler();

		$params = [
			'TableName' => 'empattendance',
			'Key' => [
				'username' => array('S' => $username),
				'date' => array('S' => $date)
			],
		];

		$scan_response = $dynamodb->getItem($params);

		if($scan_response['@metadata']['statusCode'] == '200'){

			if(isset($scan_response['Item'])){
				$user = json_decode($marshaler->unmarshalJson($scan_response['Item']), true);	
			}else{
				$user = array();
			}
			
			return $user;
		}else{
			return false;
		}
	}

	public function get_logs_by_username($username, $key, $limit){
		$record = array();

		// $sdk = new Aws\Sdk([
		//     'endpoint'   => 'http://localhost:8000/',
		//     'region'   => 'us-west-2',
		//     'version'  => 'latest',
		//     'credentials' => array('key'=>'sharedDb',
        //         'secret'=>'sharedDb')
		// ]);

		$sdk = new Aws\Sdk([
		    'region'   => 'ap-southeast-1',
		    'version'  => 'latest',
		    'credentials' => array('key'=>'AKIAIKQ6XI5AR6CJDI3A',
                'secret'=>'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')
		]);

		$dynamodb = $sdk->createDynamoDb();
		$marshaler = new Marshaler();

		$params = [
			'TableName' => 'empattendance',
			'KeyConditionExpression' => 'username = :u',
			'FilterExpression' => 'username = :u',
			'ExpressionAttributeValues' => [
				':u' => [
							'S' => $username
						]
			]
		];

		if($limit > 0){
			$params['ScanIndexForward'] = false;
			$params['Limit'] = $limit;
		}

		if(array_check($key)){
			$params['ExclusiveStartKey']['username']['S'] = $key['username'];
			$params['ExclusiveStartKey']['date']['S'] = $key['date'];
		}

		$scan_response = $dynamodb->scan($params);

		if($scan_response['@metadata']['statusCode'] == '200'){
			if(array_check($scan_response['Items'])){

				foreach($scan_response['Items'] as $key => $value){
					$record['time_logs'][] = json_decode($marshaler->unmarshalJson($value), true);
				}
				
			}

			if(isset($scan_response['LastEvaluatedKey'])){
				$record['LastEvaluatedKey']['username'] = $scan_response['LastEvaluatedKey']['username']['S'];
				$record['LastEvaluatedKey']['date'] = $scan_response['LastEvaluatedKey']['date']['S'];
			}

			return $record;
		}else{
			return $record;
		}
	}

	public function insert_attendance($data){
		// $sdk = new Aws\Sdk([
		//     'endpoint'   => 'http://localhost:8000/',
		//     'region'   => 'us-west-2',
		//     'version'  => 'latest',
		//     'credentials' => array('key'=>'sharedDb',
  //               'secret'=>'sharedDb')
		// ]);

		$sdk = new Aws\Sdk([
		    'region'   => 'ap-southeast-1',
		    'version'  => 'latest',
		    'credentials' => array('key'=>'AKIAIKQ6XI5AR6CJDI3A',
                'secret'=>'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')
		]);

		$dynamodb = $sdk->createDynamoDb();
		$marshaler = new Marshaler();

		$item = $marshaler->marshalJson($data);

		$params = [
			'TableName' => 'empattendance',
			'Item' => $item
		];

		try {
			$result = $dynamodb->putItem($params);
			$status['status'] = 'success';
		} catch (DynamoDbException $e) {
			$status['message'] = 'Unsuccessful time in. Kindly contact your IT Support.';
			$status['status'] = 'false';
		}

		return $status;
	}

	public function update_attendance($data, $key, $ue){
		// $sdk = new Aws\Sdk([
		//     'endpoint'   => 'http://localhost:8000/',
		//     'region'   => 'us-west-2',
		//     'version'  => 'latest',
		//     'credentials' => array('key'=>'sharedDb',
  //               'secret'=>'sharedDb')
		// ]);

		$sdk = new Aws\Sdk([
		    'region'   => 'ap-southeast-1',
		    'version'  => 'latest',
		    'credentials' => array('key'=>'AKIAIKQ6XI5AR6CJDI3A',
                'secret'=>'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')
		]);

		$dynamodb = $sdk->createDynamoDb();
		$marshaler = new Marshaler();

		$update = $marshaler->marshalJson($data);

		$params = [
			'TableName' => 'empattendance',
			'Key' => $key,
			'UpdateExpression' => 'SET '.$ue,
			'ExpressionAttributeValues' => $update,
			'ReturnValues' => 'UPDATED_NEW'
		];

		try {
			$result = $dynamodb->updateItem($params);
			$status['status'] = 'success';

			// $record = $marshaler->unmarshalJson($result['Attributes']);
			// $record = json_decode($record);

			//$status['record'] = $record;

			return $status;
		} catch (DynamoDbException $e) {
			$error['message'] = 'Unable to punch out. Kindly contact your IT Support.';
			$error['status'] = 'false';

			return $error;
		}
	}

	public function calculate_late_hours($time_in, $shift_in){

		$late_array = crs_date_diff(strtotime($time_in), strtotime($shift_in));
		$late_hours = add_date_diff_array($late_array);

		return $late_hours;
	}

	public function calculate_undertime_hours($time_out, $shift_out){
		$undertime_array = crs_date_diff(strtotime($time_out), strtotime($shift_out));
		$undertime_hours = add_date_diff_array($undertime_array);

		return $undertime_hours;
	}

	public function calculate_total_hours($username, $current_log, $time_out){

		$time_in = $current_log['time_in'];

		$total_hours_array = crs_date_diff(strtotime($time_in), strtotime($time_out));
		$total_hours = add_date_diff_array($total_hours_array);

		return $total_hours;
	}
}