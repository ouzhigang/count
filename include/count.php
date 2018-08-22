<?php
require("Ip.php");

function GetIpAdd(){
	if (getenv("HTTP_CLIENT_IP")){
		$ip = getenv("HTTP_CLIENT_IP");
	}elseif(getenv("HTTP_X_FORWARDED_FOR")){
		$ip = getenv("HTTP_X_FORWARDED_FOR");
	}elseif(getenv("REMOTE_ADDR")){
		$ip = getenv("REMOTE_ADDR");
	} else {
		$ip = 0;
	}
	return $ip;
}
function GetIpJson($ip_str){
	
	$ip = new Ip("../qqwry.dat");
	$ip_res = $ip->getLocation($ip_str);
	
	$data = array(
		"errMsg" => "success",
		"errNum" => 0,
		"retData" => array(
			"country" => $ip_res["country"],
			"state" => $ip_res["state"],
			"city" => $ip_res["city"],
			"area" => $ip_res["area"],
			"extend" => $ip_res["extend"]
		)
	);
	//var_dump($data);
	//exit();
	return $data;
}
