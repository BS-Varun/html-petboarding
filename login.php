<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_set_cookie_params(0, '/');
    session_start();
}

if(isset($_SESSION["email"])){
  header("location:login.php");
  exit();
}

if(isset($_POST["submit"])){
  if(empty(trim($_POST["email"])) || empty(trim($_POST["password"]))){
    echo "Please fill all fields!";
  }
  else{
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $connection = mysqli_connect("localhost", "root", "", "petno");
    $query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) == 1){
      $user = mysqli_fetch_assoc($result);
      $_SESSION["email"] = $user["email"];
      $_SESSION["name"] = $user["name"];
      header("location:welcome.php");
      exit();
    }
    else{
      echo "Invalid email or password!";
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link r <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <style>
    body {
        
      background-color: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      margin-top: 50px;
    }
    label {
      font-weight: bold;
    }
    input[type="submit"] {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center">Login</h2>
        <form method="post" action="">
          <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control">
          </div>
          <input type="submit" name="submit" value="Login" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</body>
</html>


    


