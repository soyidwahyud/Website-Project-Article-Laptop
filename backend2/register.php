<?php
  require 'functions.php';

  if (isset($_POST['register'])) 
  {
    echo 
      "
        <script>
          alert('are you sure?');
        </script>
      ";
    if (register($_POST)>0) 
    {
      echo 
      "
        <script>
          alert('register successfully');
        </script>
      ";
    }
    else
    {
      echo 
      "
        <script>
          alert('register invalid');
        </script>
      ";
      echo mysqli_error($conn);
    }
  }   
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Razer Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form action="" method="POST">
            <div class="form-group">
                <input type="text" name="firstname" class="form-control input-text" id="firstname" placeholder="Your First Name" />
                <div class="validation"></div>
            </div>
            <div class="form-group">
                <input type="text" name="lastname" class="form-control input-text" id="lastname" placeholder="Your Last Name" />
                <div class="validation"></div>
            </div>
            <div class="form-group">
                <input type="text" name="username" class="form-control input-text" id="username" placeholder="Your username" />
                <div class="validation"></div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
          <div class="form-group">
                <input type="password" class="form-control input-text" name="password" id="password" placeholder="Password" data-rule="minlen:6" data-msg="Please enter at least 8 chars of subject"required="required" />
                <div class="validation"></div>
          </div>
          <div class="form-group">
                <input type="password" class="form-control input-text" name="password2" id="password" placeholder="Confirm Password" data-rule="minlen:6" data-msg="Please enter at least 8 chars of subject"required="required" />
                <div class="validation"></div>
          </div>
          <div class="form-group">
                <input type="file" name="image" id="image" class="form-control input-text" id="image" placeholder="Upload Image" />
                <div class="validation"></div>
          </div>
            <button class="btn btn-primary btn-block" type="submit" name="register">Register </button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
