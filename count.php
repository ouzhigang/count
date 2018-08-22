<?php
include("include/config.php");
include("include/count.php");
include("include/main.php");
$referrer_array = array("baidu","谷歌","Bing","360搜索","搜狗","站内","直接访问","友链");
$time = date("H:i:s");
$ua = str_filter($_POST['ua']);
$get = str_filter($_POST['get']);
$referrer = $referrer_array[str_filter($_POST["referrer"])];
$ip = GetIpAdd();
$os = str_filter($_POST['os']);
$lang = str_filter($_POST['lang']);
$browser = str_filter($_POST['browser']);
if(filter_var($ip,FILTER_VALIDATE_IP) and $ua<>"" and $get<>"" and $referrer<>"" and $os<>"" and $lang<>"" and $browser<>""){
	$json=GetIpJson($ip);
	//var_dump($ip);exit();
	//var_dump($json);exit();
	if($json["errMsg"]=="success" and $json["errNum"]==0){
		$add=$json["retData"];
		$sql="INSERT INTO `count` (`year`,`month`,`day`,`time`,`get`,`referrer`,`ip`,`country`,`state`,`city`,`area`,`extend`,`os`,`lang`,`browser`,`ua`) VALUES ('".date('Y')."','".date('n')."','".date('j')."','".$time."','".$get."','".$referrer."','".$ip."','".$add['country']."','".$add['state']."','".$add['city']."','".$add['area']."','".$add['extend']."','".$os."','".$lang."','".$browser."','".$ua."')";
	}else{
		$sql="INSERT INTO `count` (`year`,`month`,`day`,`time`,`get`,`referrer`,`ip`,`country`,`state`,`city`,`area`,`extend`,`os`,`lang`,`browser`,`ua`) VALUES ('".date('Y')."','".date('n')."','".date('j')."','".$time."','".$get."','".$referrer."','".$ip."','未知','未知','未知','未知','未知','".$os."','".$lang."','".$browser."','".$ua."')";
	}
	//var_dump($sql);exit();
	mysqli_query($conn,$sql);
}
mysqli_close($conn);
?>