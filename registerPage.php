<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="registerStyle.css">
</head>
<body>
   

<div class="wrapper">
    <div class="title">
      Registration
    </div>
    <form class="form" action="" method="post">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="fname" minlength="2" required>
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="lname" minlength="2" required>
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="password" minlength="3" required>
       </div>  
        <div class="inputfield">
          <label>Email Address</label>
          <input type="email" class="input" name="email" required>
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="number" class="input" name="phone" required>
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address" required></textarea>
       </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="number" class="input" name="postalcode" required>
       </div> 
       <div class="inputfield">
          <label>City</label>
          <input type="text" class="input" name="city" required>
       </div>
       <div class="inputfield">
          <label>State</label>
          <input type="text" class="input" name="state" required>
       </div>
      
      <div class="inputfield">
        <input type="submit" value="Register" class="btn" name="register">
      </div>
      </form>
      <div class="signup_link">
         <br>
          already a member <a href="login.php">login here.</a>
        </div>
    
</form>
	
</div>
	
</body>
</html>
<?php 
include 'config.php';
if(isset($_POST['register']))
{
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$code = $_POST['code'];
$city=$_POST['city'];
$state=$_POST['state'];

$insertquery = " INSERT INTO `users`(`fname`, `lname`, `password`, `email`, `phone`, `address`, `code`, `city`, `state`) VALUES ('$firstname','$lastname','$password','$email','$phone','$address','$code','$city','$state') ";
$res = mysqli_query($conn,$insertquery);
header("Location: login.php");
}

?>