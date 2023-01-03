<?php session_start();
include 'common/config.php';
if(isset($_POST['date'])){


    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
    $movie = $_POST['movie'];
    $userid = $_SESSION['login_id'];

    $sql = "INSERT INTO reservations (movie, date, time, guests, userid)
VALUES ('$movie','$date', '$time', $guests, $userid)";

if ($conn->query($sql) === true) {
    header("Location: list.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

    

}

?>