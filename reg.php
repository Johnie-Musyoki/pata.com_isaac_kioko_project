<?php
include('config.php');
//fetching data from the registration form
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$conpass=$_POST['conpass'];

//sending data to the database
$send="INSERT INTO pata_reg (email, username, password, conpass, time)VALUES('$email','$username','$password','$conpass', NOW())";
$checksend=mysqli_query($conn, $send) or die(mysqli_error($conn));
if($checksend)
{
	echo"
	<script>
	alert('Data send successfully');
	window.location.href='index.html';
	</script>
	";
}
else
{
	echo"
	<script>
	alert('Failed to send Data, try again');
	window.location.href='login.html';
	</script>
	";
}








?>