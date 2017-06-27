<?php

include __DIR__.'/header.php';

if(@$_POST['devID']) {

	$device_id = $_POST['devID'];
	
	$get_device = $con->prepare("SELECT * FROM device_information WHERE ID=$device_id");
	$get_device->execute();

	$device_info = $get_device->fetch();

}

if(@$_POST['add_device']) {

	$devID 			= $_POST['hidden_id'];
	$deviceID 		= $_POST['device_id'];
	$device_name 	= $_POST['device_name'];
	$last_reported  = $_POST['last_reported_date_time'];

	$update_query = $con->prepare("UPDATE `device_information`   
								   SET `device_id` = :device_id,
								       `device_name` = :device_name,
								       `last_reported_date_time` = :last_reported
								 WHERE `ID` = :devID");

	$update_query->bindValue(":device_id", $deviceID);
	$update_query->bindValue(":device_name", $device_name);
	$update_query->bindValue(":last_reported", $last_reported);
	$update_query->bindValue(":devID", $devID);
	$count = $update_query->execute();
}



?>

<div class="ten columns">
	<h5 class="add-top-margin">Add device health information</h5>
	<form class="" method="POST" action="">
	  	<div class="row">
		    <div class="six columns">
		      	<input type="hidden" name="hidden_id" value="<?php echo $device_info['ID']; ?>">
		      	<label for="deviceID">Device ID <em>*</em></label>
		      	<input class="u-full-width" name="device_id" required type="text" value="<?php echo $device_info['device_id']; ?>" placeholder="Device's ID" id="device_id"><button class="generate_random_id">Generate a random ID</button>
		      	<label for="deviceID">Device Label <em>*</em></label>
		      	<input class="u-full-width" name="device_name" required type="text" value="<?php echo $device_info['device_name']; ?>" placeholder="Name of your device" id="">
		      	<label for="deviceID">Last Reported Date & Time</label>
		      	<input class="seven columns no-margin-left right-margin" name="last_reported_date_time" required type="text" placeholder="" id="current_date" value="">
		      	<button class="print_current_date">Print Current Date</button>
		    </div>
	    </div>
	  	<input class="button-primary" type="submit" name="add_device" value="Submit">
	</form>
</div>

<?php include 'footer.php'; ?>