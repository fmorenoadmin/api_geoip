<?php
	$cl1='api_geoip';

	function index($rut){
		$ip = $_SERVER['REMOTE_ADDR'];
		if ($ip=='::1' || $ip=='127.0.0.1') { $ip='190.236.211.199'; }
			
		$data = file_get_contents("http://api.ipgeolocationapi.com/geolocate/".$ip);

		$inf = json_decode($data);

		//header("Content-Type: applicaition/json");
		//echo $inf;
		return $inf;
	}