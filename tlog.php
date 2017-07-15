<?php
<<<<<<< HEAD

$emailid=$_REQUEST['email'];
$password=$_POST['pwd'];
$conn=mysqli_connect("localhost","root","Kalyan@23") or die("couldnt connect".mysqli_error());
mysqli_select_db($conn,"learning") or die("couldnt select database".mysqli_error());
$res=mysqli_query($conn,"select * from teacher where eid='$emailid' and password='$password'");
if($row=mysqli_fetch_array($res))
{
		header("location:home_member.php");

}
=======
	
	
$emailid=$_REQUEST['email'];
$password=$_REQUEST['pwd'];
$conn=mysqli_connect("localhost","root","") or die("couldnt connect".mysqli_error());
mysqli_select_db($conn,"lc") or die("couldnt select database".mysqli_error());
//$res=mysqli_query($conn,"select * from teacher where eid='$emailid' and password='$password'");
$res=mysqli_query($conn,"select * from teacher where eid='$emailid' and password='$password'");
$res1=mysqli_query($conn,"select * from ngo where eid='$emailid' and password='$password'");
	if($res||$res1)
	{
	while($row=mysqli_fetch_array($res))
	{
		echo "hi";
		//$name=mysqli_query($conn,"select name from teacher where eid='$emailid' and password='$password'");
		header("location:home_teacher.php?name=".$row['name']);
		
	}
	while($row=mysqli_fetch_array($res1))
	{
		//$name=mysqli_query($conn,"select name from ngo where eid='$emailid' and password='$password'");
		header("location:home_member.php?name=".$row['name']);
		
	}
	}
>>>>>>> 9861afcbaf49b23e84df2b43b2bd9fee9cb4fe7f
else
{
	echo '<script>alert("Oops! Invalid Username or Password");</script>';
			header("location:index.php");

}


?>
