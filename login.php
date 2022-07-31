<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="loginStyle.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="">
          <div class="txt_field">
          <input type="text" name="email">
          <span></span>
          <label>Username</label>
          </div>
          <div class="txt_field">
          <input type="password"  name="password">
          <span></span>
          <label>Password</label>
          </div>
          <div class="pass">By login, you agree to WalkOver Conditions of Use and Privacy Notice.</div>
          <input type="submit" value="Login" name="submit">
          <div class="signup_link">
          Not a member? <a href="registerPage.php">Signup</a>
          </div>
      </form>
    </div>

  </body>
</html>
<?php
include 'config.php';
if(isset($_POST['submit']))
{
  $email =$_POST['email'];
  $password= $_POST['password'];

  $sql = "select * from users where email = '$email' and  password = '$password' " ;
  $res = mysqli_query($conn,$sql) ;
  $result = mysqli_fetch_assoc($res);
  session_start();
$_SESSION['first-name'] =  $result['fname'];
$_SESSION['last-name'] = $result['lname'];
$_SESSION['address'] =  $result['address'];
$_SESSION['email'] =  $result['email'];
$_SESSION['code'] = $result['code'];
$_SESSION['phone'] =  $result['phone'];
$_SESSION['city'] =  $result['city'];
$_SESSION['state'] =  $result['state'];


  if($res->num_rows >0){
    header("Location: home.php");
  }
    else
    {
  }
}




?>