<?php

include __DIR__.'/header.php';

function siteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'].'/';
    return $protocol.$domainName;
}

$dir_name 		= dirname(__FILE__);
$root_path 		= $_SERVER['DOCUMENT_ROOT'];
$project_path   = str_replace($root_path.'/','',$dir_name);

$api_url 		= siteURL().$project_path.'/v1/listAllDevices.php';

printf('<div class="ten columns"><h5 class="add-top-margin">%s</h5></div>', $api_url);


