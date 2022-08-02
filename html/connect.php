<?php
$host = 'localhost';
$user= 'root';
$pass = '';
$db='tickets';
$con=mysql_connect($host,$user,$pass,$db);
if ($con) {
	echo "connected successfully";
}else
echo "try again";
?>