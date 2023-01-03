<?php
include("common/config.php");
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "cinema";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
if ($_SERVER["REQUEST_METHOD"]=="POST") {


  $uname = $_POST['name'];
  $password = $_POST['password'];
  $pnumber = $_POST['pnumber'];
  $email = $_POST['email'];

  $sql = "INSERT INTO users (username, password, phone, email) VALUES ('$uname','$password', '$pnumber', '$email')";
$result = $conn->query($sql);
}
?>