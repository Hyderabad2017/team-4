<?php
if(isset($_POST['s']))
{
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
if ((isset($_POST['sid']))&&(isset($_POST['name']))&&(isset($_POST['gender']))&&(isset($_POST['age']))&&(isset($_POST['ps']))&&(isset($_POST['family']))&&(isset($_POST['siblings']))&&(isset($_POST['oob']))&&(isset($_POST['pel']))&&(isset($_POST['fi'])))
{

$sid=$_POST['sid'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$ps=$_POST['ps'];
$family=$_POST['family'];
$siblings=$_POST['siblings']; 
$oob=$_POST['oob']; 
$edu=$_POST['edu'];
$income=$_POST['income']; 
$q="select *from dstudent where stuid='$sid' and sname='$name';";
$r=mysqli_query($conn,$q);
$rs=mysqli_num_rows($r);
if($rs==0)
{
$q1="insert into dstudent values('".$sid."','".$name."','".$gender."','".$age."','".$ps."','".$family."','".$siblings."','".$oob."','".$edu."','".$income."')";
$r1=mysqli_query($conn,$q1);
}
?>
</body>
</html>
