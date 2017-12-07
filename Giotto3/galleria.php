<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gallery</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
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

</head>
<body>

<?php include "menu.php"; ?>

<div class="container gallery-container">

    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-2">
                <div class="thumbnail">
                    <a class="lightbox" href="images/1.jpg">
                        <img src="images/1.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-10">
                <div class="thumbnail">
                    <a class="lightbox" href="images/14.jpg">
                        <img src="images/14.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/6.jpg">
                        <img src="images/6.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/12.jpg">
                        <img src="images/12.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/9.jpg">
                        <img src="images/9.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="images/15.jpg">
                        <img src="images/15.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="images/11.jpg">
                        <img src="images/11.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="images/7.jpg">
                        <img src="images/7.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="images/IMG-20171103-WA0002.jpg">
                        <img src="images/IMG-20171103-WA0002.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/3.jpg">
                        <img src="images/3.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/10.jpg">
                        <img src="images/10.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/IMG-20171103-WA0008.jpg">
                        <img src="images/IMG-20171103-WA0008.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/4.jpg">
                        <img src="images/4.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-8">
                <div class="thumbnail">
                    <a class="lightbox" href="images/16.jpg">
                        <img src="images/16.jpg">
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
