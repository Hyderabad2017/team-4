<?php
if(isset($_POST['butt']))
{
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"temp");
$sid=$_POST['sid'];
$name=$_POST['name'];
$gender=$_POST['radios'];
$age=$_POST['age'];
$ps=$_POST['ps'];
$siblings=$_POST['siblings']; 
$oob=$_POST['oob'];
$ft= $_POST['ft'];
$edu=$_POST['pel'];
$income=$_POST['familyincome']; 
echo "hi";
$q1="insert into dstudent values('".$sid."','".$name."','".$gender."','".$age."','".$ps."','".$ft."','".$siblings."','".$oob."','".$edu."','".$income."');";
$r1=mysqli_query($conn,$q1);
}
?>