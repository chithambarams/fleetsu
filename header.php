<?php

include __DIR__.'/config/config.php';
include __DIR__.'/config/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Fleetsu - Demo Project</title>

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!--Font Awesome-->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!--Custom Styles Include-->
  <link rel="stylesheet" href="css/custom-styles.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

<div class="container admin-workspace">
    <div class="row twelve columns">
        <div class="two columns">
            <div class="logo-block">
                <img src="images/fleetsu-logo-hq.png">
            </div>
        </div>
        <div class="ten columns no-padding">
            <div class="main-header">
                <span>Back-end</span>
                <a href="#"><span class="fa fa-sign-out"></span>Logout</a>
            </div>
        </div>
    </div>
    <div class="twelve columns">
        <div class="two columns sidebar">
            <div class="menu-container">
                <h4 class="dash-title">Dashboard</h4>
                <ul class="nav-menu">
                    <li><span class="fa fa-tablet"></span><a href="index.php">Add Devices</a></li>
                    <li><span class="fa fa-list-ul"></span><a href="listDevices.php">List Devices</a></li>
                    <li><span class="fa fa-link"></span><a href="retrieveURL.php">Retrieve API URL</a></li>
                </ul>
            </div>
        </div>