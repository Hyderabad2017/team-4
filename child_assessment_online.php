<?php
if(isset($_POST['submit']))
{
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"lc");
if ((isset($_POST['firstname']))&&(isset($_POST['gender']))&&(isset($_POST['firstofaccess']))&&(isset($_POST['age']))&&(isset($_POST['appearance']))&&(isset($_POST['rad']))&&(isset($_POST['rad1']))&&(isset($_POST['rad2']))&&(isset($_POST['rad3']))&&(isset($_POST['rad4']))&&isset($_POST['rad5'])))
{

$fname=$_POST['firstname'];
$gender=$_POST['gender'];
$nameacc=$_POST['firstofaccess'];
$age=$_POST['age'];
$app=$_POST['appearance']
$rad=$_POST['rad'];
$r1=$_POST['r1'];
$r2=$_POST['r2']; 
$r3=$_POST['r3']; 
$r4=$_POST['r4'];
$r5=$_POST['r5']; 
$q="select *from  where stuid='$sid' and sname='$name';";
$r=mysqli_query($conn,$q);
$rs=mysqli_num_rows($r);
if($rs==0)
{
$q1="insert into childassess values('".$fname."','".$gender."','".$nameacc."','".$age."','".$app."','".$rad."','".$r1."','".$r2."','".$r3."','".$r4."','".$r5."','".$income."');";
$r1=mysqli_query($conn,$q1);
}
}
}
?>
