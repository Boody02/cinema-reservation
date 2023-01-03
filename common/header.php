<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

</html>




        <?php
        include('config.php');
 
        
        if (!isset($_SESSION['login_user'])) {
        ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Sign In</a>
      </li>
    </ul>
  </div>
</nav>
        <?php
        }else{
            ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Sign Out</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list.php">My Reservations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
    </ul>
  </div>
</nav>
        <?php
        }
        ?>
    </div>
</div>
