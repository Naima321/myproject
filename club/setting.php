<?php
include 'header.php';


  
    // $q6 = "SELECT * FROM `membership` WHERE `email`= '$email'";
    // print_r($q6);
    // die();
    // $run = mysqli_query($con, $q6);
    // $data = mysqli_fetch_assoc($run); 
    // $_SESSION['membername'] = $data['membername'];

?>

<body>
            <main>
                <!-- <section class="hero-section d-flex justify-content-center align-items-center " id="section_1" > -->


                    <!-- <div class="section-overlay"></div> -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
                    <!-- </section> -->
              <!-- <section  class="membership-section section-padding" id="section_3"> -->
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <div class="Update-form">


                    <center><h2>Edit Profile</h2></center>
                    <form method="POST">
                    <div class="row">
                            <div class="col-lg-6 col-6 mb-3 mt-3">
                                <label class="form-label">Name:</label>
                                <input type="text" name="name" id="name" value="<?php echo $_SESSION['name']; ?>" class="form-control" placeholder="Full name" required disabled>
                            </div>

                            <div class="col-lg-6 col-6 mb-3 mt-3">   
                            <label class="form-label">Age:</label><br>
                            <input type="number" name="age" value="<?php echo $_SESSION['age'];?>"class="form-control" placeholder="Full name" required>
                            
                            </div>
                            
                            <div class="col-lg-6 col-6 mb-3 mt-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" class="form-control" placeholder="Email 123-456-7890" disabled>
                            </div>

                               
                            <div class="col-lg-6 col-6 mb-3 mt-3">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" value="<?php echo $_SESSION['address']; ?>" class="form-control" placeholder="Email 123-456-7890">
                            </div>

                            <div class="col-lg-6 col-6 mb-3 mt-3">
                                <label class="form-label">Phone:</label>
                                <input type="number" name="phone" value="<?php echo $_SESSION['phone']; ?>" class="form-control" placeholder="Email 123-456-7890">
                            </div>

                            <div class="col-lg-6 col-6 mb-3 mt-3">
                                        <label class="form-label">Gender:</label>
                                        <select name="gender" class="form-control" required>
                                            <!-- <option>Select an option</option> -->
                                            <option value="male" <?php if ($_SESSION['gender'] == 'Male') {echo 'selected'; } ?>>Male</option>
                                                                        
                                                                   
                                            <option value="female" <?php if ($_SESSION['gender'] == 'Female') {echo 'selected'; } ?>>Female</option>
                                                                        
                                                                   
                                        </select>
                                        <!-- <input type="text" name="gender"  value="<?php echo $data1['gender']; ?>"  class="form-control" placeholder="Gender" required> -->
                                    </div>

                            <div class="col-lg-6 col-6 mb-3 mt-3">
                            
                            <label class="form-label">city</label><br>
                            <select class="from-control" name="city" >
                                <option <?php if ($_SESSION['city'] == 'karachi') {echo 'selected';} ?>>karachi</option>
                                <option <?php if ($_SESSION['city'] == 'Islamabad') {echo 'selected';} ?>value="islamabad">islamabad</option>
                                <option <?php if ($_SESSION['city'] == 'Lahore') {echo 'selected';} ?>>lahore</option>
                                <option <?php if ($_SESSION['city'] == 'Peshawar') {echo 'selected';} ?>>Peshawar</option>
                            </select>
                            </div>  

                            <div class="col-lg-6 col-6 mb-3 mt-3">
                                <label class="form-label">Current Password:</label>
                                <input type="password" name="password" id="email" value="<?php echo $_SESSION['password']; ?>" pattern="(?=.*\d)(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" placeholder="Current Password" required disabled>
                            </div>

                            <!-- <div class="col-lg-6 col-6 mb-3 mt-3">
                                <label class="form-label">New Password:</label>
                                <input type="password" name="n-password" id="email" value="" pattern="(?=.*\d)(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" placeholder="New Password" required>
                            </div> -->

                        </div>
                        <br>
                        <div class="col-lg-6 col-md-6 col-6 mx-auto">
                            <button type="submit" name="update" class="btn btn-info form-control" id="submit-button" style="background-color: #3d405b; border-color: #5fa93a;color:white;" name="go">Update Info</button>
                            <!-- <button type="submit" class="form-control"  name="go">Update Info</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</body> 
</html>
<?php
if(isset($_POST['update'])){
  $n = $_POST['name'];
  $a = $_POST['address'];
  $c = $_POST['city'];
  $ph = $_POST['phone'];
  $g = $_POST['gender'];
  $ag = $_POST['age'];
  $p = $_POST['password'];
  $q = "update `membership` set `name` = '$n', `age` = '$ag' ,`password` = '$p', `city` = '$c',`phone` = '$ph',`address` = '$a',`gender` = '$g' where `email` = '$e'";
// print_r( $q);
// exit() ;
  mysqli_query($con, $q);
  echo "<script>window.open('profile.php','_self')</script>";
}


 

?>