<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
} 

$sql="insert into classasess values('{$_POST['sid']}',{$_POST['tid']},'{$_POST['name']}','{$_POST['gender']}','{$_POST['teachername']}','{$_POST['age']}','{$_POST['expectedage']}','{$_POST['languageproblem']}',{$_POST['q1']},{$_POST['q2'],{$_POST['q3']},{$_POST['q4']},{$_POST['q5']},{$_POST['q6']})";



?>