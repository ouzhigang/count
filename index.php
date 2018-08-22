<?php
$install = @fopen("include/install.txt","r");

if(!$install){
	Header("Location:install.php");
}
else {
	@fclose($install);

	include("include/config.php");
	include("include/main.php");
	include("init.php");
}
?>