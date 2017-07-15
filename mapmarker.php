<html>
<head>
  
  <title>Google Maps Multiple Markers</title>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyCgYnqRdV8xPEPL0FdqgBeEBshexbVstEc" type="text/javascript"></script>
</head>
<body>
  <div id="map" style="height: 400px; width: 500px;">
</div>
<script type="text/javascript">
    var locations = [
      ['Ameerpet', 17.4375, 78.4483, 4],
      ['Dilsukhnagar', 17.3688, 78.5247, 5],
      ['Gachibowli', 17.4401, 78.3489, 3],
      ['Begumpet', 17.4447, 78.4664, 2],
      ['Mehdipatnam', 17.3916, 78.4401, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(17.43, 78.44),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</body>
</html>