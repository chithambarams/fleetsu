<?php

include __DIR__.'/header.php';

$get_all_devices = $con->prepare("SELECT * FROM device_information ORDER BY ID DESC");
$get_all_devices->execute();

$device_list = $get_all_devices->fetchAll();

$i = 1;

foreach($device_list as $value){

	$device_list_html .= sprintf('<tr><td>%s</td><td>%s</td><td>%s</td><td><button class="button-primary">Update</button> <button class="button-danger">Delete</button></td></tr>', $i, $value['device_name'],$value['last_reported_date_time']);

	$i++;
}

?>
<div class="ten columns">
	<h5 class="add-top-margin">List of Devices added</h5>
	<table class="u-full-width">
	  	<thead>
		    <tr>
		      <th>S No</th>
		      <th>Device Name</th>
		      <th>Date Last Reported</th>
		      <th>Actions</th>
		    </tr>
	  	</thead>
	  	<tbody><?php echo $device_list_html; ?></tbody>
	</table>
</div>

<?php include 'footer.php'; ?>