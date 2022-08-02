<?php
require("connect.php");
$namem = $_POST['name2'];
$numm= $_POST['number2'];

$query="INSERT INTO ordert(custName, CustNum) VALUES('$namem','$numm')";
$result = mysqli_query($con,$query);
if ($result) 
	echo "SUCCESS"

?>