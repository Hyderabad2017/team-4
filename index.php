<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "Kalyan@23";
		if($_POST["action"]=="login"){
		  $username = $_POST["rollno"];
		  $password = $_POST["pwd"];
			$style1='"display:block"';
		  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
		  if(! $conn ){
		    die("Could not connect: ".mysqli_error($conn));
		  }
		  //echo "Connected successfully<br/>";
		  mysqli_select_db($conn, "student_portal");
		  $sql = "select * from login where ROLLNO = '".$username."';";
		  $retval = mysqli_query($conn, $sql);
		  if(!$retval){
		    die("Could not register".mysqli_error($conn));
		  }
		  $result = mysqli_fetch_array($retval);
		  if($password==$result["PASSWORD"]){
		    //$msg1 = "Login successful<br/>";
				session_start();
				$_SESSION["username"]=$username;
				$_SESSION["password"]=$password;
				header('Location:welcome.php');
		  }
		  else {
		    $msg1 = "*Incorrect username or password<br/>";
		  }
		  mysqli_close($conn);
		}
		else if($_POST["action"]=="register"){
		  $rollno = $_POST["rollno"];
		  $name = $_POST["name"];
		  $password = $_POST["pwd"];
			$style2='"display:block"';
		  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
		  if(! $conn ){
		    die("Could not connect: ".mysqli_error($conn));
		  }
		  //echo "Connected successfully<br/>";
		  mysqli_select_db($conn, "student_portal");
		  $sql = "insert into login(NAME,PASSWORD,ROLLNO) values('".$name."','".$password."','".$rollno."');";
		  $retval = mysqli_query($conn, $sql);
		  if(!$retval){
		    die("Could not register".mysqli_error($conn));
		  }
		  $msg2 = "Registered successfully";
		  mysqli_close($conn);
		}
	}
?>


<html>
  <head>
    <title>Learning Curve Foundation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>

    <!-- navigation bar -->

    <nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand page-scroll" href="#">Learning Curve Foundation</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="#myModal1" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="#myModal2" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a class="page-scroll" href="#about">About</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#contact">Contact</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#location">Location</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

    <div id="myModal1" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Sign Up</h4>
          </div>
          <div class="modal-body">
            <!-- form -->
            <form action="<?php $PHP_SELF?>">
              <div class="form-group">
                <label for="text">Name:</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="text">Email:</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="myModal2" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Login</h4>
          </div>
          <div class="modal-body">
            <!-- form -->
            <form action="<?php $PHP_SELF?>">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
              </div>
              <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
              <?php echo $msg1?>
            </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <!-- body -->
    <div class="intro-banner">
      <div class="contaner">
        <div class="row">
          <div class="col-lg-12">
            <div class="intro-inner">
                <h1>Learning Curve</h1>
                <h3>Life skills foundation</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="about-bg" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About Us!</h2>
                    <hr class="light">
                    <p class="section-heading">].</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container contact-bg">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading-new">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Have any problem? Well! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                  <span class="glyphicon glyphicon-earphone"></span>
                    <p>040-659356</p>
                </div>
                <div class="col-lg-4 text-center">
                    <span class="glyphicon glyphicon-envelope"></span>
                    <p><a href="mailto:your-email@your-domain.com">somerandom@cbit.ac.in</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-bg" id="location">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
              <h2 class="section-heading">Our Location!</h2>
              <hr class="light">
              <div id="map" class="rounded"></div>
          </div>
        </div>
      </div>
    </section>

    <script>
      function initMap() {
        var uluru = {lat: 17.391988, lng: 78.319578};
        var map = new google.maps.Map(document.getElementById('map'), {zoom: 11,center: uluru });
        var marker = new google.maps.Marker({position: uluru, map: map });
      }
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXBRkyKSrGdABYkUI6S4c0KHzCscGqLwI&callback=initMap">
    </script>

  </body>
</html>
