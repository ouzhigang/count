<?php
$year=date("Y");
$month=date("n");
$day=date("j");
$page=1;
$table_head="今日访问明细";
if(isset($_GET["date"]) and $_GET["date"]<>"" and preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/",$_GET["date"])){
	$date=explode("-",str_filter($_GET["date"]));
	$year=$date[0];
	$month=$date[1];
	$day=$date[2];
	$table_head=$year."/".$month."/".$day."(".getdaypv($year,$month,$day)."PV/".getdayuv($year,$month,$day)."UV)";
}
if(isset($_GET["page"])) {
	$page = intval($_GET["page"]);
}
function getmonthpv($year,$month){
	global $conn;
	$sql = "SELECT count(id) as total FROM count WHERE year='".$year."' AND month='".$month."'";
	$re = mysqli_fetch_array(mysqli_query($conn,$sql));
	return $re["total"];
}
function getdaypv($year,$month,$day){
	global $conn;
	$sql = "SELECT count(id) as total FROM count WHERE year='".$year."' AND month='".$month."' AND day='".$day."'";
	$re = mysqli_fetch_array(mysqli_query($conn,$sql));
	return $re["total"];
}
function getmonthuv($year,$month){
	global $conn;
	$sql = "select count(distinct(ip)) from count WHERE year='".$year."' AND month='".$month."'";
	$re = mysqli_fetch_array(mysqli_query($conn,$sql));
	return $re["count(distinct(ip))"];
}
function getdayuv($year,$month,$day){
	global $conn;
	$sql = "select count(distinct(ip)) from count WHERE year='".$year."' AND month='".$month."' AND day='".$day."'";
	$re = mysqli_fetch_array(mysqli_query($conn,$sql));
	return $re["count(distinct(ip))"];
}
function getnum($name,$value,$year,$month,$day){
	global $conn;
	$sql = "select count(`".$name."`) from count WHERE `year`='".$year."' AND `month`='".$month."' AND `day`='".$day."' AND `".$name."`='".$value."'";
	$re = mysqli_fetch_array(mysqli_query($conn,$sql));
	return $re["count(`".$name."`)"]*100;
}
function getPie($name,$year,$month,$day){
	global $conn;
	$sql = "select distinct(`".$name."`) from count WHERE `year`='".$year."' AND `month`='".$month."' AND `day`='".$day."' limit 20";
	//echo $sql;
	$re = $conn->query($sql);
	
	$data = array();
	if($re->num_rows > 0){
		while($row = $re->fetch_assoc()) {
			$data[] = array(
				$row[$name],
				floatval(number_format(getnum($name, $row[$name], $year, $month, $day) / getdaypv($year, $month, $day), 3, '.', ''))
			);
		}
	}
	return $data;
}
