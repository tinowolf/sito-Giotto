<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

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
</head>
<body>

<?php
	// this is a php script
	include 'menu.php';
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators 
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
-->
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0000.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0001.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0002.jpg" alt="">
    </div>

    <div class="item active">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0003.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0004.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0005.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0006.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0007.jpg" alt="">
    </div>

    <div class="item active">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0008.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0009.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0010.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0011.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0012.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0014.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0015.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0016.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0017.jpg" alt="">
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="images/IMG-20171103-WA0018.jpg" alt="">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<?php
include 'footer.php';
?>

</body>
</html>
