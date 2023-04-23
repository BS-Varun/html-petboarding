
    <?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_set_cookie_params(0, '/');
    session_start();
}

if(!isset($_SESSION["email"])){
  header("location:login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <!-- bootstrap -->
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
    h2 {
      margin-top: 50px;
    }
    .lead{
        text-align:center;
    }
    .container{
        text-align:center;
    }
    
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center">Welcome, <?php echo $_SESSION["name"]; ?>!</h2>
        <p class="lead">You have successfully logged in.</p>
        <p class="lead">Click here to continue to the Bookings section</p>
        <div class="container">
        <button type="button" class="btn btn-outline-dark btn-lg "  onclick="window.location.href='booking.php';">Book Now</button>

     
        </div>  
      </div>
    </div>
  </div>
</body>
</html>