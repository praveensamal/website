<?php

session_start();
if(!isset($_SESSION['valid'])){

  header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>  
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <style type="text/css">
      .carousel-item img {
        background-size: cover;
         background-position: 0 -220px;
      }
    </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#" style="color: #034EA2; font-family: Helvetica Black,sans-serif; font-weight:bold;"> SAMSUNG </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Devices.php">Register Devices</a>
          </li> 

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Update Devices Status
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="last.php"> Last User & Last Location </a>
              <a class="dropdown-item" href="update.php"> Time Period </a>
            </div>
          </li> 
             
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Search By
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="all.php"> All </a>
              <a class="dropdown-item" href="sample.php"> Sample ID </a>
              <a class="dropdown-item" href="devicetype.php"> Device Type </a>
              <a class="dropdown-item" href="size.php"> Size </a>
              <a class="dropdown-item" href="model.php"> Model </a>
              <a class="dropdown-item" href="year.php"> Year </a>
            </div>
          </li>

          
        </ul>
         <div class="navbar-collapse collapse w-50 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
            </ul>
          </div>
      </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel" style="height: 568px;overflow: hidden;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://wowslider.net/local-sliders/demo-10/data1/images/idaho239691_1920.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="https://lms.logonback2life.eu/moodle/pluginfile.php/1/theme_lambda/slide1image/1576748284/road220058.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="https://jpcamara.com/wp-content/uploads/2015/02/carousel.jpg" alt="New York">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

  
</body>
</html>