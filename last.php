<?php

session_start();
if(!isset($_SESSION['valid'])){

  header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Update Last User & Last Location</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>  
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<style>
		body{

			background-color: whitesmoke;
		}

		input{

			width: 40%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
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

          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

	<center>
		
		<h1> Update Last User  & Last Location </h1>

		<form action="" method="POST">
			<input type="text" name="sample" placeholder="Sample"><br>
			<input type="text" name="user" placeholder="Last User"><br>
			<input type="text" name="loc" placeholder="Last Location"><br>


			<input type="submit" name="update" value="UPDATE DATA"/>

		</form>
	</center>

</body>
</html>


<?php



$con= mysqli_connect("localhost","root","","login");

if(isset($_POST['update']))
{
	$sample=$_POST['sample'];
	
	$query = "UPDATE `register` SET user='$_POST[user]',loc='$_POST[loc]' where sample='$_POST[sample]' ";
	$query_run = mysqli_query($con,$query);

	if($query_run)
	{
		echo '<script type="text/javascript"> alert("Data Updated") </script>';

	}
	else
	{

		echo '<script type="text/javascript"> alert("Data not Updated") </script>';
	}
}	


?>