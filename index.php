


<html>
  <head>
    <title>Learning Curve Foundation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
function verify()
{
	if(document.login.email.value=="")
	{
		alert("please enter emailid");
		return false;
	}
	if(document.login.pwd.value=="")
	{
		alert("please enter password");
		return false;
	}
}
</script>
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
							<!-- <h2 class="navbar-brand brand-name"> <a href="index.php"><img class="img-responsive" src="images/Learinng-curve-web.png"></a> </h2> -->
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
      </div>
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
                <label for="text">Contact Number:</label>
                <input type="text" class="form-control" id="phno">
              </div>
							<div class="form-group">
                <label for="text">School ID</label>
                <input type="text" class="form-control" id="sid">
              </div>
							<div class="form-group">
								<label for="text">Iam a:</label>
								Teacher:<input type="radio" class="form-control" id="rad1">
								Volunteer:<input type="radio" class="form-control" id="rad2">
							</div>
							<div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
              </div>
							<div class="form-group">
                <label for="pwd">Confirm Password:</label>
                <input type="password" class="form-control" id="cnf-pwd">
            </form>
					</div>

					</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <div id="myModal2" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <!-- Modal content -->
       <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Login</h4>
          </div>
          <div class="modal-body">

            <!-- form -->
            <form name="login" action="tlog.php" method="post">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="pwd">
              </div>
              <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
              </div>
          	</div>
          	<div class="modal-footer">
							<input type="submit" name="log" value="SUBMIT" onclick="return verify();"></button>
          	</div>
		   	</form>
			 <!--
			 <form name="login" action="tlog.php" method="POST">
				 <i>Enter Email: </i>
				 <input type="text" name="email" value=""/> <br/><br/>
				 <i>Enter Password: </i>
				 <input type="password" name="pwd" value=""/> <br/><br/>
				 <input type="submit" name="log" value="LOGIN" onclick="return verify();"> <br/>
			 </form>
		 -->
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
                    <p class="section-heading">We care about one simple thing – regardless of economic status, every child has the right to realize one’s own potential as a human being.We wish to see each child emotionally balanced, self-aware, resilient and able to make informed choices in life.</p>
										<h3 class="section-heading">Our Story</h3>
										<hr class="light">
										<p class="section-heading">When Learning Curve began its journey in 2011, we knew well what we wanted to do, but we didn’t know how. That’s when it began – the journey of self-reflection, research, numerous interactions with educationists, psychologists and other experts. It took us nearly two years to arrive at what we believed was a comprehensive life skills development program that would enable children to be psychologically, emotionally and socially healthy. Whenever we came across children who were marginalized in any form, our story started taking shape. It was in our third year that we were able to realize the power of life skills – when we walked into a children’s home of 40 girls for a visit. As we started working with these girls every weekend for over a year, we realized that more than academics, these children needed help with their overall self-esteem, identity, expression, self-confidence and the opportunity to realize their own potential. As we continued our work with several communities, organizations and children, the concept of emotional and social development resonated with us very strongly. It is the process through which children and acquire and effectively apply the knowledge, attitudes, and skills necessary to understand and manage emotions, set and achieve positive goals, feel and show empathy for others, establish and maintain positive relationships, and make responsible decisions. And that’s where our story began again – in the form of Learning Curve Life Skills Foundation.</p>
								</div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container contact-bg">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading-new">Reach out!</h2>
                    <hr class="primary">
                    <p>Have any problem? Well! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                  <span class="glyphicon glyphicon-earphone"></span>
                    <p>+91 9849 744 836, +91 9177 771 681 </p>
                </div>
                <div class="col-lg-4 text-center">
                    <span class="glyphicon glyphicon-envelope"></span>
                    <p><a href="mailto:bethelight@learning-curve-foundation.org">bethelight@learning-curve-foundation.org</a></p>
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

