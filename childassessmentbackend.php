
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "lc";


$conn = mysqli_connect("$hostname","$username","$password") or die(mysqli_error());
mysqli_select_db($conn,"$database") or die(mysqli_error());
if(isset($_POST["submit"]))
{
$file = $_FILES['file']['tmp_name'];
$handle = fopen($file, "r");
$c = 0;
while(($filesop = fgetcsv($handle, 1000, ","))!== false)
{
$name = $filesop[0];
$gender = $filesop[1];
$tname=$filesop[2];
$actual_age=$filesop[3];
$expected_age=$filesop[4];
$q1=$filesop[5];
$q2=$filesop[6];
$q3=$filesop[7];
$q4=$filesop[8];
$q5=$filesop[9];
$q6=$filesop[10];

$sql= mysqli_query($conn,"INSERT INTO  childassess(name,gender,tname,actual_age,expected_age,q1,q2,q3,q4,q5,q6) VALUES ('$name','$gender','$tname','$actual_age','$expected_age',$q1','$q2','$q3','$q4','$q5','$q6')");
$c = $c + 1;
}
}




?>
</body>
</html>
