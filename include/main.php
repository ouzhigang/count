<?php

//字符过滤
function str_filter($str) {
	$str = htmlspecialchars($str, ENT_QUOTES);
	return $str;
}

function updateValue($name,$value){
	global $conn;
	$sql="update `config` set `value`='".$value."' where `name`='".$name."'";
	mysqli_query($conn,$sql);
}
function getValue($name){
	global $conn;
	$sql="select `value` from `config` where `name`='".$name."'";
	$re=mysqli_fetch_array(mysqli_query($conn,$sql));
	return $re["value"];
}
function cheakPass($name,$pass){
	if($name==getValue("admin") and md5($pass)==getValue("pass")){return true;}
	else{return false;}
}
