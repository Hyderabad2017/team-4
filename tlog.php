<?php
	
$emailid=$_REQUEST['email'];
$password=$_POST['pwd'];
$conn=mysqli_connect("localhost","root","") or die("couldnt connect".mysqli_error());
mysqli_select_db($conn,"lc") or die("couldnt select database".mysqli_error());
$res=mysqli_query($conn,"select * from teacher where eid='$emailid' and password='$password'");
echo "hi";
if($row=mysqli_fetch_array($res))
{
		header("location:home_member.php");
		echo "hi hello";

}
else
{
	echo '<script>alert("Oops! Invalid Username or Password");</script>';
}


?>