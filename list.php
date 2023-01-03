<?php session_start();
include 'common/config.php';
if (!isset($_SESSION['login_user'])) {

    header("Location: login.php");
}
include 'common/header.php';
?><!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
 

  <div class="container">
    <div class="row shadow-lg my-3">
      <div class="col-md-12 text-center">

        <h2>My Reservations</h2>
        <div class="row">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Movie</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Guests</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $userid = $_SESSION['login_id'];

              $sql = "SELECT * FROM reservations where userid = $userid";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
              ?>
                  <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['movie'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['time'] ?></td>
                    <td><?php echo $row['guests'] ?></td>
                  </tr>
              <?php }
              } ?>
            </tbody>
          </table>

        </div>


      </div>
    </div>





  </div>


</body>

</html>