
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
$school=$filesop[0];
$class=$filesop[1]
$q1=$filesop[2];
$q2=$filesop[3];
$q3=$filesop[4];
$q4=$filesop[5];
$q5=$filesop[6];
$q6=$filesop[7];
$q7=$filesop[8];
$q8=$filesop[9];
$q9=$filesop[10];
$q10=$filesop[11];
$q11=$filesop[12];
$q12=$filesop[13];
$q13=$filesop[14];
$q14=$filesop[15];
$q15=$filesop[16];
$q16=$filesop[17];
$q17=$filesop[18];
$q18=$filesop[19];
$q19=$filesop[20];
$q20=$filesop[21];
$q21=$filesop[22];
$q22=$filesop[23];
$q23=$filesop[24];
$q24=$filesop[25];
$q25=$filesop[26];


$sql= mysqli_query($conn,"INSERT INTO  survey(q1,q2,q3,q4,q5,q6) VALUES ('$school','$class','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25')");
$c = $c + 1;
}
}




?>
</body>
</html>