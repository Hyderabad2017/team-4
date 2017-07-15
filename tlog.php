<?php

$emailid=$_REQUEST['email'];
$password=$_POST['pwd'];
$conn=mysqli_connect("localhost","root","Kalyan@23") or die("couldnt connect".mysqli_error());
mysqli_select_db($conn,"learning") or die("couldnt select database".mysqli_error());
$res=mysqli_query($conn,"select * from teacher where eid='$emailid' and password='$password'");
if($row=mysqli_fetch_array($res))
{
		header("location:home_member.php");

}
else
{
	echo '<script>alert("Oops! Invalid Username or Password");</script>';
			header("location:index.php");

}


?>
