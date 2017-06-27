<?php

include '../config/config.php';
include '../config/database.php';

//Get All devices
$get_all_devices = $con->prepare("SELECT * FROM device_information");
$get_all_devices->execute();

$device_info = $get_all_devices->fetchAll(); //Fetch all records

foreach($device_info as $key => $value) {

	$result_array[$key]['ID'] 			 = $value['ID'];
	$result_array[$key]['device_id'] 	 = $value['device_id'];
	$result_array[$key]['device_name'] 	 = $value['device_name'];
	$result_array[$key]['last_reported'] = $value['last_reported_date_time'];
}

header('Content-Type: application/json'); // To print JSON neat

$resArray = array("device_list" => $result_array); //Assigning a identity key

echo json_encode($resArray);