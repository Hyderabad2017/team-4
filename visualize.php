<?php


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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
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

    <div class="container">
	   <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container">
                <div class="input-group stylish-input-group">
                    <input type="text" id="myInput" onkeyup="myFunction()" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
	     </div>
    </div>

    <div class="container">
      <h2>Student details</h2>
      <table id="customers" class="table table-hover">
      <thead>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John</td>
          <td>Doe</td>
          <td>john@example.com</td>
        </tr>
        <tr>
          <td>Mary</td>
          <td>Moe</td>
          <td>mary@example.com</td>
        </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="content-section-a">
      <div class="container">
          <div class="row">

              <div class="col-lg-5 col-sm-6">

                  <!-- clearfix makes it so elements are not side by side -->
                  <div class="clearfix"></div>

                  <h1 class="section-heading">Students data assessment !!</h1>

                  <form class="form-inline" name="import" action="">
                    <div class="form-group">
                      <label for="email">Student Id:</label>
                      <input type="text" name="student" id="sid"/>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
              </div>

              <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <canvas id="myChart" width="150px" height="150px"></canvas>
              </div>
            </div>
          </div>
      </div>
  </div>


      <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Interaction", "Overcoming difficulty", "Initiation", "Conflict Management", "Understanding"],
          datasets: [{
            label: '#Rating',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                '#00a3cc',
                '#00a3cc',
                '#00a3cc',
                '#00a3cc',
                '#00a3cc'
            ],
            borderColor: [
                '#006680',
                '#006680',
                '#006680',
                '#006680',
                '#006680'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
          }
        }
      });
    </script>

    <script>
		  function myFunction() {
		      var input, filter, table, tr, td, i;
		       input = document.getElementById("myInput");
		       filter = input.value.toUpperCase();
		       table = document.getElementById("customers");
		       tr = table.getElementsByTagName("tr");
		       for (i = 0; i < tr.length; i++) {
			          td = tr[i].getElementsByTagName("td")[1];
			          if (td) {
				          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
					               tr[i].style.display = "";
				          }
				          else {
					               tr[i].style.display = "none";
				          }
			          }
		      }
	   }
	 </script>

</body>
</html>
