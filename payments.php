
<html>
    <head><
        !-- comment -->
        <title>Booking details </title>
    </head>
    <body>
<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_set_cookie_params(0, '/');
    session_start();
}



    
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petno";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve booking data from database
echo ($_SESSION["name"]);
$sql = "SELECT * FROM bookings WHERE booking_id = '$booking_id";
$result = mysqli_query($conn, $sql);

echo( $_SESSION["name"] );
   
// Display booking data in a table
echo "<table>";
echo "<tr><th>Parent name</th><tr><th>Booking ID</th><th>Pet Name</th><th>Date</th><th>Time Slot</th><th>Service</th><th>Price</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo  "<tr><td>" . $row['booking_id'] . "</td><td>" . $row['pet_name'] . "</td><td>" . $row['date'] . "</td><td>" . $row['time_slot'] . "</td><td>" . $row['service'] . "</td><td>" . $row['price'] . "</td></tr>";
}
echo "</table>";

// Close database connection
mysqli_close($conn);
?>
</body>
</html>
