<?php
date_default_timezone_set("Etc/GMT-8");

define("dbhost","prohost");
define("dbuser","prouser");
define("dbpass","propass");
define("dbname","prodbname");
$conn = mysqli_connect(dbhost,dbuser,dbpass,dbname);
mysqli_query($conn, 'set names utf8');
