<!DOCTYPE html>
<html>
<head>
    <title>My Store Room</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>    
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
            <a class="nav-link" href="#">Login<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register Devices</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Update Device Status
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#"> Last User & Last Location </a>
              <a class="dropdown-item" href="#"> Time Period </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Search By
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#"> All </a>
              <a class="dropdown-item" href="#"> Sample ID </a>
              <a class="dropdown-item" href="#"> Device Type </a>
              <a class="dropdown-item" href="#"> Size </a>
              <a class="dropdown-item" href="#"> Model </a>
              <a class="dropdown-item" href="#"> Year </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div id ="particles-js"></div>
        <div class="login-page">
             <div class="form">
                <form action="user.php" class="register-form" method="post">
                    <input type="text" name="id" placeholder="ID"/>
                    <input type="Password" name="password" placeholder="Password" />
                    <input type="text" name="email" placeholder="Email"/>
                    <button>Create</button>
                    <p class="message">Already Registered? <a href="#">Login</a>
                    </p>
                </form> 
                
                <form action="validation.php" class="login-form" method="post">
                    <input type="text" name="id" placeholder="ID"/>
                    <input type="Password" name=password placeholder="Password"/>
                    <input type="text" name="email" placeholder="Email"/>
                    <button>login</button>
                     <p class="message">Not Registered? <a href="#">Register</a>
                     </p>

                </form>
            </div>
        </div>       
    <script src=" https://code.jquery.com/jquery-3.5.1.min.js">
    </script>

    <script>
        $('.message a').click(function(){
            $('form').animate({height:"toggle", opacity:"toggle"},"slow");
        });
    </script>   
    <script type="text/javascript" src="js/particles.js"></script>
    <script type="text/javascript" src="js/app.js"></script>       
</body>
</html>