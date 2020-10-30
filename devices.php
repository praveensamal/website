<?php

session_start();
if(!isset($_SESSION['valid'])){

  header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Devices Registration </title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">

	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>  
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>
<body>
  
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#" style="color: #034EA2; font-family: Helvetica Black,sans-serif; font-weight:bold;"> SAMSUNG </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
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
        </ul>
      </div>
    </nav>

<br>
<br>
<div class="container">

	<!-- Default form contact -->
<form class="text-center border border-light abc" action="device.php" method="post">

    <p class="h4 mb-4" style="font-size:40px;"> Device Registeration </p>

    <!-- Sample ID -->
    <input type="text" id="defaultContactFormSample" class="form-control mb-4" name="sample" placeholder="Sample ID">

    <!-- Device Type -->
    <select class="browser-default custom-select mb-4" name="dropdown" id="dropdown">
        <option value="" disabled>Choose option</option>
        <option value="1" selected>Panel</option>
        <option value="2">Soundbar</option>
        <option value="3">PDM</option>
        <option value="4">MSPG</option>
        <option value="5">Network Speaker</option>
        <option value="6">Test Phone</option>
        <option value="7">Storage Devices</option>
        <option value="8">Other Devices</option>
    </select>

    <!-- Model -->
    <input type="text" id="defaultContactFormModel" class="form-control mb-4" name="model" placeholder="Model">


    <!-- Year -->
    <input type="text" id="defaultContactFormYear" class="form-control mb-4" name="year" placeholder="Year">


    <!-- Size -->
    <input type="text" id="defaultContactFormSize" class="form-control mb-4" name="size" placeholder="Size(in inches)">

   
    <!-- Owner Name -->
    <input type="text" id="defaultContactFormOwner" class="form-control mb-4" name="owner" placeholder="Owner Name">


    
    <!-- Last User -->
    <input type="text" id="defaultContactFormUser" class="form-control mb-4" name="user" placeholder="Last User">


    <!-- Last Location -->
    <input type="text" id="defaultContactFormLocation" class="form-control mb-4" name="loc" placeholder="Last Location">


    <!-- Remarks(If Any) -->
    <input type="text" id="defaultContactFormRemarks" class="form-control mb-4" name="remarks" placeholder="Remarks">


   

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit">Send</button>

</form>
<!-- Default Device Type Form -->
</div>
<br>
<br>
</body>
</html>
