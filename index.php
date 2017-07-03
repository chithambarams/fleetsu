<?php

include 'header.php';

$api_url = "http://localhost/fleetsu/admin/v1/listAllDevices.php";

$data = json_decode(file_get_contents($api_url));

$api_endpoint = $data->device_list;

$i = 1;

foreach($api_endpoint as $key => $value) {

	$date = new DateTime($value->last_reported, new DateTimeZone('UTC'));
	$date->setTimezone(new DateTimeZone(MY_TIME_ZONE));
	$date_reported = $date->format('Y-m-d H:i:s');

	$datetime1 = new DateTime($date_reported);
	$datetime1_date = $datetime1->format('Y-m-d H:i:s');

	$reported_date = new DateTime($datetime1_date);

	$curDate = date('Y-m-d H:i:s');
	$datetime2 = new DateTime($curDate);

	$interval = $datetime2->diff($reported_date);
	$interval_time = $interval->format("%H");
	$interval_date = $interval->format("%d");

	if($interval_date >= 1) { $btn_class = 'fa-toggle-off off'; }
	elseif($interval_time > 24) { $btn_class = 'fa-toggle-off off'; } 
	else { $btn_class = 'fa-toggle-on on'; }

	$device_list_html .= sprintf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td><center><span class="fa %s"></span></center></td></tr>', $i, $value->device_id, $value->device_name, $date_reported, $btn_class);

	$i++;
}

?>
<div class="container">
	<div class="row">
		<div class="twelve columns">
			<table class="u-full-width">
			  	<thead>
				    <tr>
				      <th>S No</th>
				      <th>Device ID</th>
				      <th>Device Name</th>
				      <th>Date Last Reported</th>
				      <th>Status</th>
				    </tr>
			  	</thead>
			  	<tbody><?php echo $device_list_html; ?></tbody>
			</table>
		</div>
	</div>
</div>