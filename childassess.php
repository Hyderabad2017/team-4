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
    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Dream Life Skills Assessment Scale</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name:</label>  
  <div class="col-md-4">
  <input name="textinput" class="form-control input-md" id="textinput" type="text" placeholder="enter name">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gender">Gender</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="Gender-0">
      <input name="Gender" id="Gender-0" type="radio" checked="checked" value="1">
      Male
    </label>
	</div>
  <div class="radio">
    <label for="Gender-1">
      <input name="Gender" id="Gender-1" type="radio" value="2">
      Female
    </label>
	</div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name Of Accessor:">Name of accessor</label>  
  <div class="col-md-4">
  <input name="Name Of Accessor:" class="form-control input-md" id="Name Of Accessor:" type="text" placeholder="your name">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Age">Actual Age</label>  
  <div class="col-md-4">
  <input name="Age" class="form-control input-md" id="Age" type="text" placeholder="age of the child">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="appearsas">Age Appears as</label>  
  <div class="col-md-4">
  <input name="appearsas" class="form-control input-md" id="appearsas" type="text" placeholder="age according to appearance">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios7">Faces difficulty with any language other than the native language?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios7-0">
      <input name="radios7" id="radios7-0" type="radio" checked="checked" value="1">
      yes
    </label>
	</div>
  <div class="radio">
    <label for="radios7-1">
      <input name="radios7" id="radios7-1" type="radio" value="2">
      no
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios2">Interacting with others - appropriate interaction with peers and teachers and having an effective communication:</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios2-0">
      <input name="radios2" id="radios2-0" type="radio" checked="checked" value="1">
      Not Yet
    </label> 
    <label class="radio-inline" for="radios2-1">
      <input name="radios2" id="radios2-1" type="radio" value="2">
      Does with lots of help
    </label> 
    <label class="radio-inline" for="radios2-2">
      <input name="radios2" id="radios2-2" type="radio" value="3">
      Does with some help
    </label> 
    <label class="radio-inline" for="radios2-3">
      <input name="radios2" id="radios2-3" type="radio" value="4">
      Does with little help
    </label> 
    <label class="radio-inline" for="radios2-4">
      <input name="radios2" id="radios2-4" type="radio" value="5">
      Does independently
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Overcoming difficulties and solving problems:</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input name="radios" id="radios-0" type="radio" checked="checked" value="1">
      Not Yet
    </label> 
    <label class="radio-inline" for="radios-1">
      <input name="radios" id="radios-1" type="radio" value="2">
      Does with lots of help
    </label> 
    <label class="radio-inline" for="radios-2">
      <input name="radios" id="radios-2" type="radio" value="3">
      Does with some help
    </label> 
    <label class="radio-inline" for="radios-3">
      <input name="radios" id="radios-3" type="radio" value="4">
      Does with little help
    </label> 
    <label class="radio-inline" for="radios-4">
      <input name="radios" id="radios-4" type="radio" value="">
      Does independently
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios4">Taking initiatives- age appropriate leadership qualities:</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios4-0">
      <input name="radios4" id="radios4-0" type="radio" checked="checked" value="1">
      Not Yet
    </label> 
    <label class="radio-inline" for="radios4-1">
      <input name="radios4" id="radios4-1" type="radio" value="2">
      Does with lots of help
    </label> 
    <label class="radio-inline" for="radios4-2">
      <input name="radios4" id="radios4-2" type="radio" value="3">
      Does with some help
    </label> 
    <label class="radio-inline" for="radios4-3">
      <input name="radios4" id="radios4-3" type="radio" value="4">
      Does with little help
    </label> 
    <label class="radio-inline" for="radios4-4">
      <input name="radios4" id="radios4-4" type="radio" value="">
      Does independently
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Managing Conflict- resolves disagreements?</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input name="radios" id="radios-0" type="radio" checked="checked" value="1">
      Not Yet
    </label> 
    <label class="radio-inline" for="radios-1">
      <input name="radios" id="radios-1" type="radio" value="2">
      Does with lots of help
    </label> 
    <label class="radio-inline" for="radios-2">
      <input name="radios" id="radios-2" type="radio" value="3">
      Does with some help
    </label> 
    <label class="radio-inline" for="radios-3">
      <input name="radios" id="radios-3" type="radio" value="4">
      Does with little help
    </label> 
    <label class="radio-inline" for="radios-4">
      <input name="radios" id="radios-4" type="radio" value="">
      Does independently
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios1">Understanding and following instructions</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios1-0">
      <input name="radios1" id="radios1-0" type="radio" checked="checked" value="1">
      Not Yet
    </label> 
    <label class="radio-inline" for="radios1-1">
      <input name="radios1" id="radios1-1" type="radio" value="2">
      Does with lots of help
    </label> 
    <label class="radio-inline" for="radios1-2">
      <input name="radios1" id="radios1-2" type="radio" value="3">
      Does with some help
    </label> 
    <label class="radio-inline" for="radios1-3">
      <input name="radios1" id="radios1-3" type="radio" value="4">
      Does with little help
    </label> 
    <label class="radio-inline" for="radios1-4">
      <input name="radios1" id="radios1-4" type="radio" value="5">
      Does independently
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput2">Final Input</label>  
  <div class="col-md-4">
  <input name="textinput2" class="form-control input-md" id="textinput2" type="text" placeholder="Score between 1-5 based on the average">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button name="button1id" class="btn btn-default" id="button1id">Submit</button>
    <button name="button2id" class="btn btn-inverse" id="button2id">Cancel</button>
  </div>
</div>

</fieldset>
</form>
</body>
      </html>

   
