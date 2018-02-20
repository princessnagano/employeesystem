<?php

require_once AWS_AUTOLOAD . 'aws-autoloader.php';

use Aws\DynamoDb\DynamoDbClient;
use Aws\DynamoDb\Exception\DynamoDbException;
use Aws\CacheInterface;
use Aws\DynamoDb\Marshaler;

class Users_model extends CI_Model{

	function __construct(){
		parent::__construct();

	}

	public function get_user_authentication($username, $password){
		$user = $this->get_user_by_username($username);

		if(array_check($user)){
			if(defined('LDAP_AUTHENTICATION') AND LDAP_AUTHENTICATION == 1){
				return $user;
			}else{
				return array();
			}
		}else{
			return array();
		}
	}

	public function get_user_by_username($username){
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
			'TableName' => 'sgsemployees',
			'Key' => [
				'username' => array('S' => $username)
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

	public function get_employee_name($key, $limit){
		$record = array();

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
			'TableName' => 'sgsemployees',
			'ProjectionExpression' => 'username, employee_id, family_name, given_name, position_name, work_location, gender, hire_date',
			'KeyConditionExpression' => 'username = :u',
			'FilterExpression' => 'username <> :u',
			'ExpressionAttributeValues' => [
				':u' => [
							'S' => 'sgsddbadmin'
						]
			]
		];

		if($limit > 0){
			$params['ScanIndexForward'] = false;
			$params['Limit'] = $limit;
		}

		if($key != ''){
			$params['ExclusiveStartKey']['username']['S'] = $key;
		}

		$scan_response = $dynamodb->scan($params);

		if($scan_response['@metadata']['statusCode'] == '200'){
			if(array_check($scan_response['Items'])){

				foreach($scan_response['Items'] as $key => $value){
					$record['employees'][] = json_decode($marshaler->unmarshalJson($value), true);
				}
				
			}

			if(isset($scan_response['LastEvaluatedKey'])){
				$record['LastEvaluatedKey'] = $scan_response['LastEvaluatedKey']['username']['S'];
			}

			return $record;
		}else{
			return $record;
		}
	}

	public function get_employee_info_by_employee_id($username){
		$record = array();

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
			'TableName' => 'sgsemployees',
			'Key' => [
				'username' => array('S' => $username)
			],
		];

		$scan_response = $dynamodb->getItem($params);

		if($scan_response['@metadata']['statusCode'] == '200'){

			if(isset($scan_response['Item'])){
				$record = json_decode($marshaler->unmarshalJson($scan_response['Item']), true);	
			}
			
			return $record;
		}else{
			return $record;
		}
	}

	public function update_employee($data, $key, $ue){
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
			'TableName' => 'sgsemployees',
			'Key' => $key,
			'UpdateExpression' => 'SET '.$ue,
			'ExpressionAttributeValues' => $update,
			'ReturnValues' => 'UPDATED_NEW'
		];

		try {
		    $result = $dynamodb->updateItem($params);
		    $status['message'] = 'Changes Applied.';
		    $status['status'] = 'success';

		    $result = $marshaler->unmarshalJson($result['Attributes']);
		    $result = json_decode($result);
		   
		   	$status['record'] = $result;

		    return $status;

		} catch (DynamoDbException $e) {
		    $error['message'] = 'Unable to update. Kindly contact your IT Support.';
		    $error['status'] = 'false';

		    return $error;
		}
	}

	public function create_users(){

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
		
		$params = [
		    'TableName' => 'sgsemployees',
		    'KeySchema' => [
		        [
		            'AttributeName' => 'username',
		            'KeyType' => 'HASH'  //Partition key
		        ]
		    ],
		    'AttributeDefinitions' => [
		        [
		            'AttributeName' => 'username',
		            'AttributeType' => 'S'
		        ]

		    ],
		    'ProvisionedThroughput' => [
		        'ReadCapacityUnits' => 1,
		        'WriteCapacityUnits' => 1
		    ]
		];

		try {
		    $result = $dynamodb->createTable($params);
		    echo 'Created table.  Status: ' . 
		        $result['TableDescription']['TableStatus'] ."\n";

		} catch (DynamoDbException $e) {
		    echo "Unable to create table:\n";
		    echo $e->getMessage() . "\n";
		}

	}

	public function insert_users(){
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

		$item['username']['S'] = 'sgsddbadmin';
		$item['role_id']['S'] = '1';
		$item['family_name']['S'] = 'admin';
		$item['given_name']['S'] = 'admin';
		
		$params = [
			'TableName' => 'sgsemployees',
			'Item' => $item
		];

		$result = $dynamodb->putItem($params);
		//kprint($result);exit;
		if($result['@metadata']['statusCode'] == '200'){
			$status = 'success';
		}else{
			$status = 'false';
		}

		return $status;

	}

	public function insert_employee($data){
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

		$id = time().rand(0,100);

		$item = $marshaler->marshalJson($data);
		// $item['employee_id']['S'] = '0';
		// $item['last_name']['S'] = 'Admin';
		// $item['username']['S'] = 'admin';
		// $item['password']['S'] = 'demo123';
		// $item['role']['S'] = 'admin';

		$params = [
			'TableName' => 'sgsemployees',
			'Item' => $item
		];
		//kprint($params);exit;
		$result = $dynamodb->putItem($params);
		
		if($result['@metadata']['statusCode'] == '200'){
			$status = 'success';
		}else{
			$status = 'false';
		}

		return $status;

	}

	public function delete_employee($key){
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

		$params = [
			'TableName' => 'sgsemployees',
			'Key' => $key
		];

		try {
		    $result = $dynamodb->deleteItem($params);
		    $status['status'] = 'true';

		    return $status;
		} catch (DynamoDbException $e) {
		    $error['message'] = 'Unable to delete. Kindly contact your IT Support.';
		    $error['status'] = 'false';

		    return $error;
		}
	}

	public function update_admin(){
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

		$key = array(
						'username' => array(
										'S' => 'sgsddbadmin')
						);
		$params = [
			'TableName' => 'sgsemployees',
			'Key' => $key,
			'UpdateExpression' => 'SET role:r',
			'ExpressionAttributeValues' => [
				':r' => ['S' => '1']
			],
			'ReturnValues' => 'UPDATED_NEW'
		];

		try {
		    $result = $dynamodb->updateItem($params);
		    $status['status'] = 'success';

		    $result = $marshaler->unmarshalJson($result['Attributes']);
		    $result = json_decode($result);
		   
		   	$status['record'] = $result;

		    return $status;

		} catch (DynamoDbException $e) {
		    $error['message'] = 'Unable to update. Kindly contact your IT Support.';
		    $error['status'] = 'false';

		    return $error;
		}
	}

	public function delete_table(){
		$sdk = new Aws\Sdk([
		    'region'   => 'ap-southeast-1',
		    'version'  => 'latest',
		    'credentials' => array('key'=>'AKIAIKQ6XI5AR6CJDI3A',
                'secret'=>'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')
		]);

		$dynamodb = $sdk->createDynamoDb();

		$params = [
			'TableName' => 'SGSEmployees'
		];

		try{
			$result = $dynamodb->deleteTable($params);
			echo "Deleted table.\n";
		}catch(DynamoDbException $e){
			echo "Unable to delete table:\n";
			echo $e->getMessage() . "\n";
		}
	}

}