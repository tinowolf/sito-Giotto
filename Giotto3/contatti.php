<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contacts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="gallery-clean.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    /*.row.content {height: 450px}*/

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>

  <style>
      #map {
        height: 400px;
        width: 100%;
       }
   </style>
</head>
<body>

<?php
	// this is a php script
	include 'menu.php';
?>

<div class="container-fluid text-center">
  <div class="row content">
    <?php include "sideL.php"; ?>
    <div class="col-sm-10 text-left">
      <h1>Welcome</h1>
	  <h2>Per info e prenotazioni:</h2>
      <h3><a href="mailto:mostragiottovenezia@gmail.com">mostragiottovenezia@gmail.com</a></h3>
      <hr>
      <h3>Venite a trovarci! </h3>
	  <h3> Scuola Grande San Rocco: <br> Campo San Rocco, 3052, <br>30125 San Polo, Venezia VE </h3>
	  <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 45.436506, lng: 12.325236};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMtDZh63g1NqXK64t3cuhDgWlx835-Osc&callback=initMap">
    </script>

    </div>
    <?php include"sideR.php"; ?>
  </div>
</div>

<?php
include 'footer.php';
?>
</body>
</html>
