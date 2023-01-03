<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>

  
    .container2{

        float: right;
       
        width: 50%;
        height: 50%;
        margin: auto;
        
       
        
        
    }   
    .header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: rgb(92, 184, 92);
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
button{

    width: 100%;
}
  </style>
</head>
<body>


 <?php include 'common/header.php'; ?> 












<div class="container">
    <div class="row shadow-lg my-3">
<div class="col-md-6 image">

    <img style="size: 50%;" src="images/bg1.png" alt="bg">    
</div>



<div class="col-md-6 container2">
    <h1 style="text-align: center; padding-bottom: 30px;"><b>Log in</b></h1>
    <form action="loginProcess.php" method="post">
      <div class="mb-3 mt-3">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      </div>
      <div class="form-check mb-3">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember" required> I Agree for all terms
        </label>
      </div>
      <button type="submit" class="btn btn-outline-success" >Submit</button>
    </form>
  </div>
  </div>





</div>


</body>
</html>
