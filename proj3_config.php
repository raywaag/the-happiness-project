<?php
$servername = "students.cah.ucf.edu";
$username = "ra332956";
$password = "28A6AE2F37404BAF85ADCDD20A8E973Ca!";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
  echo "Connected successfully";
  mysqli_close($conn);

?>
