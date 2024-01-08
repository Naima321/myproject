<?php 
include 'dp.php';
if (isset($_POST['register'])) {
  $n = $_POST['name'];
  $e = $_POST['email'];
  $p = $_POST['password'];
 
  $q1="SELECT * FROM `register` where `email` like '$e'";
  $run = mysqli_query($con, $q1);
  $count=mysqli_num_rows($run);

if ($count == 1) {
//   echo "<div class='alert alert-danger'>
//   <strong>Go to login!</strong>Already Register.</div>";
  header('location:login.php');
}else{
 $q="Insert into `register`(`name`,`email`,`password`)values('$n','$e','$p')";
 mysqli_query($con,$q); 
 echo"<div class='alert alert-success'><strong>Success!</strong>Registered</div>";
 header('location:login.php');
}

}



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Form</title>

<link rel="stylesheet" type="text/css" href="css/register.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<body>
<!--  Request me for a signup form or any type of help  -->

<div class="register-form">    
    <form method="Post">
    <center><h1>Welcome In Golf Club</h1></center>
    	<!-- <center><h3>Register Form</h3></center> -->
        <section class="section-padding pb-0" >
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
        </div>
        <div class="form-group">
            <input type="Password" pattern="(?=.*\d)(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}"  class="form-control" name="password"  placeholder="Password" required="required">
        </div>
        <div class="form-group small clearfix">
            <label class="checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="forgot-link">Forgot Password?</a>
        </div> 
     
        <input type="submit" name="register" class="btn btn-primary btn-block btn-lg" value="Submit">              
    </form>			
    
</div>
</section>
</body>
</html>       