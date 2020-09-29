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
   <style type="text/css">
     .praveen{
      text-align: center;
     }
     .samal{
      text-align: center;
     }
   </style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">My Store Room </a>
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

          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

	<h1> Devices Registeration </h1>
	<div class="container" align="center">
		<div class="form">
			<form action="device.php" class="register-form" method="post">
        <div class="row">
          <div class="col-md-6">
				    <label class="praveen"> Sample No. : </label>
          </div>
          <div class="col-md-6">  
				    <input class="samal" type="text" name="sample" placeholder="Sample" > <br><br>
          </div>  
        </div>
        <div class="row">
          <div class="col-md-6">
				<label class="praveen"> Device Type : </label>
        </div>
          <div class="col-md-6">  
				<select class="samal" name = "dropdown" id="dropdown">
                <option value = "Panel" selected> Panel </option>
                <option value = "Soundbar"> Soundbar </option>
                <option value = "PDM"> PDM </option>
                <option value = "MSPG"> MSPG </option>
                <option value = "Network Speaker"> Network Speaker </option>
                <option value = "Test Phone"> Test Phone </option>
                </select> <br><br><br>
        </div>  
        </div>
         <div class="row">
          <div class="col-md-6">
				<label class="praveen"> Model :</label>
        </div>
          <div class="col-md-6">  
				<input class="samal" type="text" name="model" placeholder="Model"><br><br>
        </div>  
        </div>
        <div class="row">
          <div class="col-md-6">
				<label class="praveen" > Year :</label>
        </div>
          <div class="col-md-6">  
				<input class="samal" type="text" name="year" placeholder="Year"><br><br>
        </div>  
        </div>
         <div class="row">
          <div class="col-md-6">
				<label class="praveen"> Size :</label>
        </div>
          <div class="col-md-6"> 
				<input class="samal" type="text" name="size" placeholder="Size(in inches)"><br><br>
        </div>  
        </div>
        <div class="row">
          <div class="col-md-6">
				<label class="praveen"> Owner Name :</label>
        </div>
          <div class="col-md-6"> 
				<input class="samal" type="text" name="owner" placeholder="Owner Name"><br><br>
        </div>  
        </div>
         <div class="row">
          <div class="col-md-6">
				<label class="praveen"> Last User :</label>
        </div>
          <div class="col-md-6"> 
				<input class="samal" type="text" name="user" placeholder="Last User"><br><br>
        </div>  
        </div>
        <div class="row">
          <div class="col-md-6">
				<label class="praveen"> Last Location :</label>
        </div>
          <div class="col-md-6"> 
				<input class="samal" type="text" name="loc" placeholder="Last Location"><br><br>
         </div>  
        </div>
        <div class="row">
          <div class="col-md-6">
				<label class="praveen"> Remarks(If Any) :</label>
        </div>
          <div class="col-md-6"> 
				<input class="samal" type="text" name="remarks" placeholder="Remarks"><br><br>
         </div>  
        </div>
				<button> Register </button>


				


			</form>

			
		</div>
	</div>
</body>
</html>
