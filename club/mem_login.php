<?php
include 'dp.php';

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login As A Member</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST">
				
					<span class="login100-form-title">
							WELCOME! Login As A Golf ClubMember
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<?php
					if(isset($_POST['mem_log'])){
					$e = $_POST['email'];
					$p = $_POST['password'];
					$q9 = "SELECT * FROM `membership` WHERE `email` LIKE '$e' AND `password` LIKE '$p' ";
					$q7 = "SELECT * FROM `register` WHERE `email` LIKE '$e' AND `password` LIKE '$p'";
					$run = mysqli_query($con, $q9);
					$count = mysqli_num_rows($run);
					$run1 = mysqli_query($con, $q7);
					$count1 = mysqli_num_rows($run1);
					if($count == 1 && $count1 == 1){
						$_SESSION['email'] = $e;
						
						// echo "<style>.account{display: none !important;} .member1{display: block !important;}</style>";
						echo "<script>window.open('../dashboard/pages/examples/index.php','_self')</script>";
					}
					elseif($count == 0 && $count1 == 1){
			
						echo '<script>alert("Error! Get Membership.")</script>'; 
						echo "<script>window.open('login.php','_self')</script>";
					}

					elseif($count == 0 && $count1 == 0){
			
						echo '<script>alert("Error! First registered then Get Membership.")</script>'; 
						echo "<script>window.open('register.php','_self')</script>";
					}
					else{
			
						echo "<div class='alert alert-warning'><b>Error!</b>Wrong Email or Password.</div>";
						
					}
					}
					?>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="mem_log">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>