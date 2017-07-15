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

<html>
  <head>
    <title>Learning Curve Foundation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/custom_home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container">
    <h3>Dream Life Skills Assessment Scale</h3>

    <form action=>
      <div class="form-group">
        <label for="text">Name:</label> <input type="text" class="" name="firstname" value="Enter name">
      </div>
    <br><br>
    Gender:<input type="text" name="lastname" value="Gender">
    <br><br>
    Name Of Accessor: <input type="text" name="firstofaccess" value="Name of accessor">
    <br><br>
    Actual Age: <input type="text" name="age" value="Actual age">
    <br><br>
    Age of Appearance: <input type="text" name="appearance" value="Appears as">
    <br><br>
    Faces difficulty with any language other than the native language?<input type="radio" name="rad" value="yes" checked> yes
    <input type="radio" name="rad" value="no"> No<br><br>
    Interacting with others - appropriate interaction with peers and teachers and having an effective communication:<input type="radio" name="rad1" value="notyet" checked> Not Yet
    <input type="radio" name="rad1" value="withlotshelp"> Does with lots of help
    <input type="radio" name="rad1" value="withsomehelp"> Does with some help
    <input type="radio" name="rad1" value="withlittlehelp"> Does with little help
    <input type="radio" name="rad1" value="withouthelp"> Does independently
    <br><br>
    Overcoming difficulties and solving problems:<input type="radio" name="rad2" value="notyet" checked> Not Yet
    <input type="radio" name="rad2" value="withlotshelp"> Does with lots of help
    <input type="radio" name="rad2" value="withsomehelp"> Does with some help
    <input type="radio" name="rad2" value="withlittlehelp"> Does with little help
    <input type="radio" name="rad2" value="withouthelp"> Does independently
    <br><br>
    Taking initiatives- age appropriate leadership qualities: <input type="radio" name="rad3" value="notyet" checked> Not Yet
    <input type="radio" name="rad3" value="withlotshelp"> Does with lots of help
    <input type="radio" name="rad3" value="withsomehelp"> Does with some help
    <input type="radio" name="rad3" value="withlittlehelp"> Does with little help
    <input type="radio" name="rad3" value="withouthelp"> Does independently
    <br><br>

    Managing Conflict- resolves disagreements?
    <input type="radio" name="rad2" value="notyet" checked> Not Yet
    <input type="radio" name="rad2" value="withlotshelp"> Does with lots of help
    <input type="radio" name="rad2" value="withsomehelp"> Does with some help
    <input type="radio" name="rad2" value="withlittlehelp"> Does with little help
    <input type="radio" name="rad2" value="withouthelp"> Does independently
    <br><br>
    Understanding and following instructions:<input type="radio" name="rad2" value="notyet" checked> Not Yet
    <input type="radio" name="rad2" value="withlotshelp"> Does with lots of help
    <input type="radio" name="rad2" value="withsomehelp"> Does with some help
    <input type="radio" name="rad2" value="withlittlehelp"> Does with little help
    <input type="radio" name="rad2" value="withouthelp"> Does independently
    <br><br>
        Overall score:<input type="text" name="final" value="Enter the final score">
      <input type="submit" value="Submit">
    </form>
  </div>
  </body>

</html>
