<?php
	header('Content-Type: application/json');
	
	#Date used on Api request from a week ago
	date_default_timezone_set('Europe/Lisbon'); // CDT
	$now   = new DateTime;
  	$now->modify( '-7 day');

	
	$apiToken='80af76a7b38f257c0ef7f26ee79aee07';
	$user_agent= 'phpCurlTest';//$_SERVER['HTTP_USER_AGENT'];
	$api_date=$now->format('Y-m-d');


	$apiURLBase = 'https://toggl.com/reports/api/v2/details?workspace_id=636935&user_agent=api_test&since='.$api_date;

	// Get cURL resource
	$curl = curl_init();
	// Set some options - we are passing in a useragent too here
	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => $apiURLBase,
	    CURLOPT_SSL_VERIFYPEER => FALSE,
		CURLOPT_HTTPHEADER => array('Content-type: application/json'),
	    CURLOPT_USERAGENT => $user_agent,
	    CURLOPT_USERPWD => $apiToken.':api_token'
	));

	if(!curl_exec($curl)){
    die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
	}


	// Send the request & save response to $resp
	$resp = curl_exec($curl);


	// Close request to clear up some resources
	curl_close($curl);

	echo $resp;
?>