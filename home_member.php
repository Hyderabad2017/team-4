

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
    <nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand page-scroll" href="#">Learning Curve Foundation</a>
          </div>

          <div class="collapse navbar-collapse" id="#navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
              </ul>
          </div>
      </div>
    </nav>

    <div class="container content-heading">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-left">
              <h1>Welcome
			             <?php
			                $username=$_REQUEST['name'];
               //	header("location:welcome.php?name=".$_REQUEST["uname"]);
               echo $username."!";?></h1></br>
          </div>
        </div>
      </div>

      <!-- Content row 1 -->
      <div class="content-section-a">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-sm-6">

                    <!-- clearfix makes it so elements are not side by side -->
                    <div class="clearfix"></div>

                    <h1 class="section-heading">Upload demographic data here !!</h1>
                    <p class="lead">
                        You can upload the excel demographic data of students here using the 'upload excel' option. Or you can upload each student demographics directly using the form.
                    </p>
                </div>

                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                  <h3 class="section-heading">Upload demographic data here !!</h3>
                  <form name="import" method="post" enctype="multipart/form-data" action="demographicbackend.php">
                    <input type="file" name="file" /><br />
                    <input type="submit" name="submit" value="Submit" />
                  </form>

                  <h3 class="section-heading">Upload demographic data through form here !!</h3>
                  <form type="submit" action="demographic.php">
                    <button class="btn btn-default">Data Form</button>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Content row 2 -->
    <div class="content-section-b">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-sm-6">
                    <div class="clearfix"></div>
                    <h1 class="section-heading">You can upload the child assessment data here!</h1>
                    <p class="lead">
                        You can upload the child assessment data here as excel format and directly enter the inputs through web form.
                    </p>
                </div>

                 <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                  <h3 class="section-heading">Upload child assessment data !!</h3>
                  <form name="import" method="post" enctype="multipart/form-data" action="childassessmentbackend.php">
                  <input type="file" name="file2" /><br />
                  <input type="submit" name="submit" value="Submit" />
                </div>
              </div>
        </div>
    </div>
  </div>

  <!-- Content row 3 -->
  <div class="content-section-a">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 col-sm-6">
                <!-- clearfix makes it so elements are not side by side -->
                <div class="clearfix"></div>

                <h1 class="section-heading">Student filled classroom survey !!</h1>
                <p class="lead">
                    You can upload the excel doc for student filled classroom survey data of students here using the 'upload excel' option. Or you can upload each student choices directly using the form.
                </p>
            </div>

            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
            </form>
              <h3 class="section-heading">Upload final survey data!!</h3>
              <form name="import" method="post" enctype="multipart/form-data" action="surverybackend.php">
                <input type="file" name="file3" /><br />
                <input type="submit" name="submit" value="Submit" />
            </form>
            </div>

        </div>
    </div>
  </div>

  <div class="content-section-b">
      <div class="container">
          <div class="row">

              <div class="col-lg-5 col-sm-6">
                  <div class="clearfix"></div>
                  <h1 class="section-heading">You can visualize the data here!</h1>
                  <p class="lead">
                      You can view the visualized data of students !!.
                  </p>
              </div>

               <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <h3 class="section-heading">See it here !!</h3>
                <form type="submit" action="visualize.php">
                  <button class="btn btn-default">View</button>
                </form>
              </div>
            </div>
      </div>
    </div>
  </div>

  </body>
</html>
>>>>>>> a2540028f600b19a6f89cbf001f8c3153665d519
