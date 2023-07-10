<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$add=$_POST['add'];
$city=$_POST['city'];
$amt=$_POST['amt'];

$mysql_host = "localhost";
    $mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "index";
	
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);

$sql="insert into customers values('$fname','$lname','$email','$phone','$add','$city','$amt')";
$result = $mysqli->query($sql);
if($result)
{
    echo'<script>alert("Proceed for payment")</script>'.include("payment1.php");
}
else {
    echo'<script>alert("Registeration Failed.please fill correctly")</script>';

}


?>