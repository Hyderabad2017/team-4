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
    <legend>Demographic Data Form</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Student Name</label>
      <div class="col-md-4">
      <input name="name" class="form-control input-md" id="name" type="text" placeholder="enter student name">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="sid">Student ID</label>
      <div class="col-md-4">
      <input name="sid" class="form-control input-md" id="sid" type="text" placeholder="enter student id">

      </div>
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="radios">Gender</label>
      <div class="col-md-4">
      <div class="radio">
        <label for="radios-0">
          <input name="radios" id="radios-0" type="radio" checked="checked" value="1">
          Male
        </label>
    	</div>
      <div class="radio">
        <label for="radios-1">
          <input name="radios" id="radios-1" type="radio" value="2">
          Female
        </label>
    	</div>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="age">Age</label>
      <div class="col-md-4">
      <input name="age" class="form-control input-md" id="age" type="text" placeholder="enter age">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="ps">Parental status</label>
      <div class="col-md-4">
      <input name="ps" class="form-control input-md" id="ps" type="text" placeholder="both/single/orphan">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="siblings">Siblings</label>
      <div class="col-md-4">
      <input name="siblings" class="form-control input-md" id="siblings" type="text" placeholder="1/2/3/more">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="oob">Order of birth</label>
      <div class="col-md-4">
      <input name="oob" class="form-control input-md" id="oob" type="text" placeholder="First born/ second born">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="pel">Parental Education Level</label>
      <div class="col-md-4">
      <input name="pel" class="form-control input-md" id="pel" type="text" placeholder="primary/secondary/high school">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="ft">Family type</label>
      <div class="col-md-4">
      <input name="ft" class="form-control input-md" id="ft" type="text" placeholder="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="familyincome">Family Income</label>
      <div class="col-md-4">
      <input name="familyincome" class="form-control input-md" id="familyincome" type="text" placeholder="Joint annual income in Rs.">

      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="butt"></label>
      <div class="col-md-4">
        <button name="butt" class="btn btn-primary" id="butt">Submit</button>
      </div>
    </div>

    </fieldset>
    </form>
  </body>
</html>
