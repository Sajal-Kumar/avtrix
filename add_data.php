<?php
include('dbcon.php');

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql = mysqli_query($con, "INSERT INTO contact (name, email, phone) VALUES('$name', '$email', '$phone')");

if($sql){
	echo "";
}

?>