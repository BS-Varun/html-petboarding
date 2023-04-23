<!DOCTYPE html>
<html>
<head>
  <title>Book a Session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    body {
      background-color: #f5f5f5;
    }
    .container {
      background-color: #fff;
      padding: 50px;
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
    <h2 class="text-center">Book a Session</h2>
    <form  method="post" action="booking.php" >
      <div class="form-group">
        <label>Pet Name:</label>
        <input type="text" name="pet_name" class="form-control">
      </div>
      <div class="form-group">
        <label>Date:</label>
        <input type="date" name="date" class="form-control">
      </div>
      <div class="form-group">
        <label>Time Slot:</label>
        <select name="time_slot" class="form-control">
          <option value="morning">Morning (9am-12pm)</option>
          <option value="afternoon">Afternoon (12pm-3pm)</option>
          <option value="evening">Evening (3pm-6pm)</option>
        </select>
      </div>
      <div class="form-group">
        <label>Service:</label>
        <select name="service" class="form-control">
          <option value="Grooming">Grooming</option>
          <option value="Pool sessions">Pool sessions</option>
          <option value="Pets day out">Pets day out</option>
        </select>
      </div>
      <button type="submit" name='submit' class="btn btn-outline-dark btn-lg " value="Register"  >Book Now</button>
    </form>
  </div>
    <?php
    // Get the form data
    
     
       if($_SERVER["REQUEST_METHOD"]=="POST")
       {
       
            $pet_name = $_POST['pet_name'];
           $date = $_POST['date'];
          $time_slot = $_POST['time_slot'];
          $service = $_POST['service'];
          $price=0.0;
         

// Calculate the price based on the selected service
if ($service == 'Grooming') {
  $price=999.00;
} elseif ($service =='Pool sessions') {
  $price = 199.00;
} elseif ($service =='Pets day out') {
 $price = 1099.00;
}

// Generate random booking ID
$booking_id = uniqid();

// Insert the data into the database
$conn = mysqli_connect('localhost', 'root', '', 'petno');
$sql= "INSERT INTO `bookings` (booking_id, pet_name, date, time_slot, service, price) VALUES ('$booking_id', '$pet_name', '$date', '$time_slot', '$service', '$price')";
   mysqli_query($conn,$sql);
   if(mysqli_query($conn, $sql)){
  echo "<div class='container mt-5'>";
  echo "<h2 class='text-center'>Booking Successful</h2>";
  echo "<p class='text-center'>Your Booking ID is: <strong>" . $booking_id . "</strong></p>";
  echo "<p class='text-center'>Your pet name is: <strong>" . $pet_name. "</strong></p>";
  echo "<p class='text-center'>Your date is: <strong>" . $date . "</strong></p>";
  echo "<p class='text-center'>Your time_slot is: <strong>" . $time_slot . "</strong></p>";
  echo "<p class='text-center'>Your service is: <strong>" . $service . "</strong></p>";
  echo "<p class='text-center'>Your price is: <strong>" . $price . "</strong></p>";
  echo "</div>";
  header("location:payments.php");
		
		
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
       }





                        
                        
         
 

                         
?>

      
</body>
</html>
