<?php
require 'function.php';

if(isset($_POST['Login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email'and password='$password'");

  $hitung = mysqli_num_rows($cekdatabase);

    if($hitung>0){
        $_SESSION['log'] = 'true';
        header('location:Home.html');
    } else {
        header('location:Login.php');
    };
};

if(!isset($_SESSION['log'])){

} else {
    header('location:Home.html');
}

?>

<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
 </head>
 <body>
   <div id="card">
     <div id="card-content">
       <div id="card-title">
         <h2>LOGIN</h2>
         <div class="underline-title"></div>
       </div>
     </div>
       <form method="Post" class="form"></form>
 <label for="email" style="padding-top: 13px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</label>
   <input type="email" name="email" id="email" class="form-content" autocomplete="on" required />
   <div class="form-border"></div>
   <br>
   <label for="password" style="padding-top: 22px">&nbsp;Password:</label>
   <input type="password" name="password" id="user-password" class="form-content" required />
   <div class="form-border"></div>

   <a href="#"><legend id="forgot-pass">Forgot Password?</legend></a>
    <a href="Home.html"><input type="submit" name="submit" id="submit-btn" value="LOGIN"/></a>
    &nbsp;<a href="#" id="signup">Don't have account yet?</a>

   </div>
 </body>
</html>