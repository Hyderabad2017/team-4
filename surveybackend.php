
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

$q1=$filesop[0];
$q2=$filesop[1];
$q3=$filesop[2];
$q4=$filesop[3];
$q5=$filesop[4];
$q6=$filesop[5];
$q7=$filesop[6];
$q8=$filesop[7];
$q9=$filesop[8];
$q10=$filesop[9];
$q11=$filesop[10];
$q12=$filesop[11];
$q13=$filesop[12];
$q14=$filesop[13];
$q15=$filesop[14];
$q16=$filesop[15];
$q17=$filesop[16];
$q18=$filesop[17];
$q19=$filesop[18];
$q20=$filesop[19];
$q21=$filesop[20];
$q22=$filesop[21];
$q23=$filesop[22];
$q24=$filesop[23];
$q25=$filesop[24];


$sql= mysqli_query($conn,"INSERT INTO  survey(q1,q2,q3,q4,q5,q6) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25')");
$c = $c + 1;
}
}




?>
</body>
</html>