<?php

include __DIR__.'/header.php';

?>

<div class="container admin-workspace">
    <div class="row">
      	<div class="two columns sidebar">
      		<div class="menu-container">
      			<div class="logo-block">
      				<img src="images/fleetsu-logo-hq.png">
      			</div>
      			<h4 class="dash-title">Dashboard</h4>
      			<ul class="nav-menu">
        			<li><span class="fa fa-tablet"></span><a href="#">Add Devices</a></li>
        			<li><span class="fa fa-link"></span><a href="#">Retrieve API URL</a></li>
        		</ul>
        	</div>
      	</div>
      	<div class="ten columns no-padding">
        	<div class="main-header">
        		<span>Back-end</span>
        		<a href="#"><span class="fa fa-sign-out"></span>Logout</a>
        	</div>
      	</div>
    </div>
</div>

<?php include 'footer.php'; ?>