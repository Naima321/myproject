
<head>
<link href="css/member.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<?php
        include 'header.php';
        // $id = $_GET['id'];
        // $_SESSION['package_id'] = $id;
        // $q1 = "SELECT * FROM `members_package` WHERE package_id='$id'";
        // print_r($q1);

        $q7 = "SELECT * FROM `members_package`";
        $row = mysqli_query($con, $q7);
       
       
       
        
        if (isset($_SESSION['member_id'])) {
         
            // $id = $_SESSION['package_id'];
        //    $sql = "SELECT * FROM `members_package` where `package_id` = '$id' ";
        //   print_r($sql);
        //    $result = mysqli_query($con,$sql);
        //    $data = mysqli_fetch_assoc($result);
        //    $_SESSION['duration'] = $data['duration'];
        
        // echo $_SESSION['duration'] ;
        
            echo "<style>.package{display: block !important;} .package1{display: none !important;}</style>";
           }
           else{
            echo "<style>.package1{display: block !important;} .package{display: none!important;}</style>";
           }
        
        ?> 



<!------ Include the above in your HEAD tag ---------->

<!-- <section class="hero-section d-flex justify-content-center align-items-center " id="section_1" > -->


<!-- <div class="section-overlay"></div> -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

<!-- <section class="membership-section section-padding" id="section_3"> -->
<div class="container plans">
    
	<div class="row">
        <div class="col-md-10 offset-md-1 text-center py-2">
            <h1>Memberships Packages</h1>
            <h3>Get Membership here!</h3>
        </div>
    </div>
    
    <div class="row justify-content-center py-4">
    <?php
        while ($data = mysqli_fetch_assoc($row)) {
         ?>
        <div class="col-lg-4">
            <form method="POST">
            <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                    <!-- <h5 class="card-title text-muted text-uppercase text-center">Start Up</h5> -->
                    <h3 class=" text-center" id="costo1"><?php echo $data['packages'];?></h3>
                    <hr>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $data['duration'];?></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $data['Snookes'];?></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $data['gym'];?></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $data['swiming'];?></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $data['ground'];?></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $data['hall'];?></li>
                    </ul>
                    <h6 class="card-price text-center" id="costo1">Price:<?php echo $data['Price'];?></h6>
                    <hr>
                         </form>
                        <div class="package btn btn-block btn-primary text-uppercase">  <a href="member.php?id=<?php echo $data['package_id'];?>"class="text-uppercase"  style="color: white !important;" name="get">Select</a></div>
                 
                       <div class="package1 btn btn-block btn-primary text-uppercase"> <a href="login.php " class="text-uppercase" style="color: white !important;" name="get">Select</a></div>
                </div>
            </div>
           
        </div>
        <?php
                        }
            ?>
        <!-- Tier two -->
     
    </div>
</div>
<br><br><br>
<?php
include 'footer.php';
?>
