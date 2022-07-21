<?php
  require 'functions.php';

  if (isset($_POST['login'])) 
  {
    global $conn;
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result)===1) 
    {
      //var_dump($result);
      //cek password
      $row = mysqli_fetch_assoc($result);
      //var_dump($row)
      //terdapat 2 parameter(password yang belum di acak, password yang sudah di acak)
      
      if (password_verify($password, $row['password'])) 
      {
        //set session
        $_SESSION['login'] = true;
        //cek remember me
        if (isset($_POST['remember'])) 
        {
          setcookie('login', 'true', time()+60);
          setcookie('key',hash(sha256, $row['username']),time()+60);
        }
        /*session_start();

        $_SESSION["login"] =$username;*/
        /*echo 
        " 
          <script>
            alert('user berhasil login');
          </script>
        ";*/
        header('Location:index.php');
        exit;
      }
    }
    $error = true;
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

    <title>Razer Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>

        

        <div class="card-body">
          <form>
          <div class="form-group">
                <input type="text" name="username" class="form-control input-text" id="username" placeholder="Your username" />
                <div class="validation"></div>
            </div>
              <div class="form-group">
                <input type="password" class="form-control input-text" name="password" id="password" placeholder="Password" data-rule="minlen:6" data-msg="Please enter at least 8 chars of subject"required="required" />
                <div class="validation"></div>
          </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
          
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
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
