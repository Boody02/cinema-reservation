<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>


  <?php
  include 'common/header.php';
  ?>













  <div class="container">
    <div class="row shadow-lg my-3">
      <div class="col-md-12 text-center">

        <h1 style="padding-bottom: 20px;" >Home</h1>


        <div class="row">

<?php 
$sql = "SELECT * FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

  ?>

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?php echo $row['image']?>" alt="Card image cap" style="max-height:300px;">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['title']?></h5>
                <p class="card-text"><?php echo $row['details']?></p>
                <a href="reserve.php?movieId=<?php echo $row['id']?>" class="btn btn-dark">Book</a>
              </div>
            </div>
          </div>
          <?php
}
}
?>
        </div>


      </div>
    </div>





  </div>


</body>

</html>