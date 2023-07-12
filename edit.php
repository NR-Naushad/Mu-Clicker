<?php
require_once("dbconnection.php");
$sql = "SELECT * FROM user  where srno=".$_GET['srno'];
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Mu Clicker</title>
</head>
 
<body>
  <div class="container">
    <div class="form">
      <div class="btn">
        <button class="signUpBtn">UPDATE</button>

      </div>
      <form class="signUp" action="update.php" method="post">
        <div class="formGroup">
            <?php
          echo '<input type="text"  name="username" id="userName" value="' .$row['username'].'" placeholder="Username" autocomplete="off" required>';
          ?>
        </div>
        <div class="formGroup">
            <?php
          echo '<input type="email" value="' .$row['email'].'" placeholder="Email ID" name="email" required autocomplete="off"  >';
          ?>
        </div>

        <!-- <div class="formGroup">
            <?php
          echo '<input type="password" name="fpassword" value="' .$row['fpassword'].'" id="password" placeholder="Password" required autocomplete="off">';
          ?>
        </div>
        <div class="formGroup">
            <?php
          echo '<input type="password" name="cpassword" value="' .$row['cpassword'].'" id="confirmPassword" placeholder="Confirm Password" required autocomplete="off">';
          ?>
        </div>
        <div class="checkBox">
          <input type="checkbox" name="agree" id="checkbox" required>
          <span class="text">I agree with term & conditions</span>
        </div> -->
        <div class="formGroup">
          <button type="submit"  name="submit" value="Register" class="btn2">Update</button>
          <button type="reset" name="reset" value="reset" class="btn2">Reset</button>
        </div>
 
      </form>
        
      
    
 
    </div>
  </div>
 
  <script src="jQuery.js"></script>
</body>
 
</html>