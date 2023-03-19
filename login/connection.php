<?php
$servername = "localhost";
$username = "root";
$password = "@Arunak2211";
$dbname = "hackathon";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  echo "error";
  die("Connection failed: ". $conn->connect_error);
}
else{
  
}

?>
