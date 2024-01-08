<?php



include 'dp.php';

    
if (isset($_SESSION['email'])) {
   $e= $_SESSION['email'];
  
// echo $e;
    $q2="SELECT * FROM `register` WHERE `email` = '$e'";
    $run = mysqli_query($con, $q2);
    $data = mysqli_fetch_assoc($run);
    $_SESSION['member_id'] = @$data['member_id']; 
    $_SESSION['name'] = @$data['name'];
    $_SESSION['password'] = @$data['password'];
     
   echo "<style>.account{display: none !important;} .member1{display: block !important;}</style>";
   
}
  
  else{
    echo "<style>.account{display: block !important;} .member1{display: none!important;}</style>"; 
  }

?>



<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Golf Club </title>

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="head.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    
    <body>

        <main>

            <nav class="navbar navbar-expand-lg">                
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="Tiya Golf Club">
                        <span class="navbar-brand-text">
                            Golf
                            <small> Club</small>
                        </span>
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Member Login</a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="about.php">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="members.php">Membership</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="product.php">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="event-detail.php">Events</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="contact.php">Contact Us</a>
                            </li>

                            
                        </ul>

                        <div class="d-none d-lg-block ms-lg-3 ">
                            <a class="btn custom-btn custom-border-btn account"  href="register.php" role="button" >Registered</a>
                        </div>
                        <div class="d-none d-lg-block ms-lg-3">
                                    <a class="btn custom-btn custom-border-btn account "  href="login.php" role="button" >Login</a>
                                </div>
                        <div class="d-none d-lg-block ms-lg-3">
                                    <a class="btn custom-btn custom-border-btn member1"  href="profile.php?id=<?php echo $data['member_id']; ?>" role="button" >View Profile</a>
                                </div>
                                <div class="d-none d-lg-block ms-lg-3">
                                    <a class="btn custom-btn custom-border-btn member1"  href="logout.php" role="button" >Logout</a>
                                </div>
                                </div>
                                
                                <div class="d-none d-lg-block ms-lg-3">
                            <a href="cart.php?id=<?php echo $data['member_id']; ?>" style="color:#ffffff">
                            <i class="bi bi-cart4" style="font-size:30px;"></i>
                            <span id="cart-item" class="badge badge-danger"></span></a>
                            <!-- <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> 
                            <span id="cart-item" class="badge badge-danger"></span></a> -->
                                <!-- // if(!empty($_SESSION["cart"])) {
                                // $cart_count = count(array_keys($_SESSION["cart"]));
                                // echo  $cart_count; 
                                // }
                                // else echo "0"; -->
                                
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            
   


               
               


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>

           