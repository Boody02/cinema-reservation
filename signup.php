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


<?php include 'common/header.php'; ?> 













<div class="container">
    <div class="row shadow-lg my-3">
<div class="col-md-6 image">

    <img style="size: 50%;" src="images/bg1.png" alt="bg">    
</div>



<div class="col-md-6 container2">
    <h1 style="text-align: center;"><b>Sign up</b></h1>
    <form  method="post" action="signdata.php" class="was-validated">
        <div class="mb-3 mt-3">
          <label for="Name">Name</label>
          <input type="text" class="form-control"  placeholder="Enter your Name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="Password">Password</label>
          <input type="password" class="form-control"  placeholder="Enter new password" name="password" required>
        </div>
        <div class="mb-3">
          <label for="Phone number">Phone number</label>
          <input type="number" class="form-control"  placeholder="Enter  your phone number" name="pnumber" required>
        </div>
         
      
        </div>
        <div class="mb-3 mt-3">
          <label for="Email">Email</label>
          <input type="email" class="form-control"  placeholder="Enter your Email" name="email" required>
                      
        </div>
        <button type="submit" style="width: 100%;" class="btn btn-outline-success">Submit</button>
        
    </div>
    </form>
  </div>
  </div>





</div>



</body>
</html>
