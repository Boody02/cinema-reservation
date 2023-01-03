<?php
   include("common/config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = $conn->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      		
      if($count == 1) {
         $myid = $row['id'];
         $_SESSION['login_user'] = $myusername;
         $_SESSION['login_id'] = $myId;
         
         header("location: index.php?loggedin=true");
      }else {
        header("location: login.php?error=true");
    }
   }
?>