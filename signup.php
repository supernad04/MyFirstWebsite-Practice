<?php 
session_start();

  include("connection.php"); //link to para maaccess ni signup si connection
  include("functions.php"); //link to para maaccess ni signup si functions


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //mapopost yung username at password mo
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

      //yung user_id, user_name, password masisisave siya sa database mo
      $user_id = random_num(20);
      $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

      mysqli_query($con, $query);

      header("Location: login.php");
      die;
    }else
    {
      echo "Please enter some valid information!";
    }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register Form</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/login3.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              
              <p class="login-card-description"><strong> REGISTRATION FORM </strong></p>
              <form method="post">
                  <div class="form-group">
                    <label for="username" class="sr-only">Username </label>
                    <input type="username" name="user_name" id="user_name" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  </div>

                   <button type="submit" class="btn btn-block login-btn mb-4">Register</button>

              </form>

                
                <p class="login-card-footer-text">Don't have an account? <a href="login.php" class="text-reset">Login here!</a></p>
                
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </main>
  
  
</body>
</html>