<?php
session_name("php_count");
session_start();
$info="";
$ifcookie=0;
if(isset($_SESSION["php_count_admin"]) and $_SESSION["php_count_admin"]=="admin"){$ifcookie=1;}
if($ifcookie==0){
	if(isset($_GET["mod"]) and $_GET["mod"]=="log"){
		$admin=str_filter($_POST["admin"]);
		$pass=str_filter($_POST["pass"]);
		if(cheakPass($admin,$pass)){
			$_SESSION["php_count_admin"]="admin";
			Header("Location:index.php");
		} else {
			$info="<script>alert('用户名或密码错误！');</script>";
		}
	}
	include("template/login.php");
} else {
	$mod = isset($_GET["mod"]) ? str_filter($_GET["mod"]) : "";

	switch($mod){
		case "logout":
			session_destroy();
			Header("Location:index.php");
		break;
		case "setting":
			include("include/setting.php");
			mysqli_close($conn);
			exit(0);
		break;
		case "pie":
			include_once("include/top.php");
			
			$f = isset($_GET["f"]) ? str_filter($_GET["f"]) : "";
			
			header("Content-type: application/json; chartset=uft-8");
			$data = getPie($f, $year, $month, $day);
			echo json_encode($data);
			exit();
			
		break;
		default:
			include("template/top.php");
			include("template/table.php");
		break;
	}
}
include("template/footer.php");
mysqli_close($conn);
?>