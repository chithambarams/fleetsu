<?php

include __DIR__.'/header.php';

if(@$_POST['add_device']) {

	$device_id 		= $_POST['device_id'];
	$device_name 	= $_POST['device_name'];
	$last_reported  = $_POST['last_reported_date_time'];

	$insert_query = $con->prepare("INSERT INTO device_information (device_id,device_name,last_reported_date_time) VALUES ('$device_id','$device_name','$last_reported')");
	$insert_query->execute();
}

?>

<div class="ten columns">
	<h5 class="add-top-margin">Add device health information</h5>
	<form class="" method="POST" action="">
	  	<div class="row">
		    <div class="six columns">
		      	<label for="deviceID">Device ID <em>*</em></label>
		      	<input class="u-full-width" name="device_id" required type="text" placeholder="Device's ID" id="device_id"><button class="generate_random_id">Generate a random ID</button>
		      	<label for="deviceID">Device Label <em>*</em></label>
		      	<input class="u-full-width" name="device_name" required type="text" placeholder="Name of your device" id="">
		      	<label for="deviceID">Last Reported Date & Time</label>
		      	<input class="seven columns no-margin-left right-margin" name="last_reported_date_time" required type="text" placeholder="" id="current_date" value="">
		      	<button class="print_current_date">Print Current Date</button>
		    </div>
	    </div>
	  	<input class="button-primary" type="submit" name="add_device" value="Submit">
	</form>
</div>

<?php include 'footer.php'; ?>