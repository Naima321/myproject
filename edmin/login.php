<?php
include 'dp.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Edmin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="#">
							Sign Up
						</a></li>

						

						<li><a href="#">
							Forgot your password?
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="POST">
						<div class="module-head">
							<center><h1> Login Form</h1></center>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="email" id="inputEmail" placeholder="Username" name="email">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" pattern="(?=.*\d)(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="inputPassword" placeholder="Password" name="password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right" name="admin">Login</button>
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
						<?php
        if(isset($_POST['admin'])){
        $e = $_POST['email'];
        $p = $_POST['password'];
        $q = "SELECT * FROM `register` WHERE `email`LIKE 'admin@gmail.com' AND `password` LIKE '$p'";
        $run = mysqli_query($con, $q);
        $count = mysqli_num_rows($run);
        // $id = $count['id'];
        // echo $id;
        // if($data == 1){
  
        //     echo "<style>.account{display: none !important;} .member1{display: block !important;}</style>";
            
         
        //    }
        //    else{
            
        //    }
      
        if($count == 1){
            $_SESSION['email'] = $e;
          
            echo "<script>window.open('../edmin/index.php','_self')</script>";
        }
     
        else{

            echo "<div class='alert alert-warning'><b>Error!</b>Wrong Email or Password.</div>";
            
        }
        }
        ?>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	
</body>