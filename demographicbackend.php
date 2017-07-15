
<
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
while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
{
$name = $filesop[0];
$age = $filesop[1];
$gender=$filesop[2];
$parentalstatus=$filesop[3];
$occupation=$filesop[4];
$income=$filesop[5];

$sql= mysqli_query($conn,"INSERT INTO  demographic(name,age,gender,parentalstatus,occupation,income) VALUES ('$name','$age','$gender','$parentalstatus','$occupation','$income')");
$c = $c + 1;
}
}




?>
</body>
</html>