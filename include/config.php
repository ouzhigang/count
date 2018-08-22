<?php
date_default_timezone_set("Etc/GMT-8");

define("dbhost","");
define("dbuser","");
define("dbpass","");
define("dbname","");
$conn = mysqli_connect(dbhost,dbuser,dbpass,dbname);
mysqli_query($conn, 'set names utf8');
