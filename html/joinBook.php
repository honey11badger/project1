<?php
$namex = $_POST['name1'];
$numberx= $_POST['number1'];

$di="INSERT INTO book(custName, CustNum) VALUES('$namex','$numx')";
$res = mysqli_query($con,$di);
if ($result) 
	echo "SUCCESS"
?>