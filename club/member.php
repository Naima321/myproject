

<?php

include 'header.php';
// $id = $_GET['id'];
// $q7 = "SELECT * FROM `members_package` '";
// print_r($q7);
// die();
// $row = mysqli_query($con, $q7);
// $data = mysqli_fetch_assoc($row);

      
     

  $q1 = "SELECT * FROM `event_activity`";
  $row = mysqli_query($con, $q1);
  $count1 = mysqli_num_rows($row);



// if(isset($_POST['membership'])){
//     $e = $_POST['email'];
//     $p = $_POST['password'];
//     $q = "SELECT * FROM `membership` WHERE `email`LIKE '$e' AND `password` LIKE '$p'";
//     $run = mysqli_query($con, $q);
//     $count = mysqli_num_rows($run);
    
//     if ( $count == 1) {
//         // echo "<script>window.open('mem_login.php','_self');</script>";
//         echo "<div class='alert alert-warning'><b>Error!</b>Already Member.</div>";
//     }
  
//   } 

?>
                         <?php
                                     $id = $_GET['id'];
                                     $_SESSION['package_id'] = $id;
                                     // echo $id;
                                     $q1 = "SELECT * FROM `members_package` WHERE package_id='$id'";
                                     $result = mysqli_query($con,$q1);
                                     $data = mysqli_fetch_assoc($result);
                                     $_SESSION['packages'] = $data['packages'];
                             
                                     if (isset($_POST['membership'])) {
                                     $n = $_POST['name'];
                                     $e = $_POST['email'];
                                     $p = $_POST['password'];
                                     $g = $_POST['gender'];
                                     $c = $_POST['city'];
                                     $ag = $_POST['age'];
                                     $a = $_POST['address'];
                                     $ph = $_POST['phone'];

                                     $q5="SELECT * FROM `register` where `email` like '$e' ";
                                     $run1 = mysqli_query($con, $q5);
                                     $count1 = mysqli_num_rows($run1);

                                     $q = "SELECT * FROM `membership` WHERE `email`LIKE '$e' ";
                                     $run = mysqli_query($con, $q);
                                     $count2 = mysqli_num_rows($run);
                                     $member = $_SESSION['member_id'];
                                
                               
                                 
                               
                               if ( $count2 == 0 ) {
                                 $_SESSION['email'] = $e;
                                 
                                 // echo "<div class='alert alert-warning'  style='border-radius:25px'><b>Already registered!</b> go to login.</div>";
                                 $q="INSERT INTO `membership`(`name`,`email`,`password`,`city`,`phone`,`address`,`gender`,`age`,`package_id`,`member_id`)VALUES('$n','$e','$p','$c','$ph','$a','$g','$ag','$id','$member')";
                                 $data =mysqli_query($con,$q);
                                //  print_r($data);
                                //  die();
                                 echo "<script>window.open('mem_login.php','_self');</script>";
                               }
                            //    elseif($count1 === 0 ){
                            //     echo "<script>window.open('register.php','_self');</script>";
                            //    }
                               elseif($count2 >= 1){
                                echo '<script>alert("Error! This Email Address have Already Membership.")</script>'; 
                               }
                               
                                 // if($data == true)
                                 // {
                                 //     echo "<script>window.open('profile.php', '_self')</scirpt>";
                                 // // }
                                 // elseif($count==0)
                                 // {
                                     
                                 //  header("location:profile.php");
                                 // }
                                 
                             else{
                                 echo '<script>alert("Error! Something weny wrong.")</script>';
                             }
                             
                              }
                                    
                                    ?>


</head>
<body>





<!-- <section class="hero-section d-flex justify-content-center align-items-center " id="section_1" > -->


<!-- <div class="section-overlay"></div> -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
<!-- </section> -->
<!-- <section class="membership-section section-padding" id="section_3"> -->
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                            <h2><span>Membership</span> at Golf Club</h2>
                        </div>

                        <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                            <h4 class="mb-4 pb-lg-2">Membership Fees</h4>

                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th style="width: 34%;">Yearly Access</th>
                                            
                                            <th style="width: 22%;">Basic</th>
                                            
                                            <th style="width: 22%;">Standard</th>
                                            
                                            <th style="width: 22%;">Advance</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                    while ($data = mysqli_fetch_assoc($row)) {

                    $b = $data['basic'];
                    $s = $data['Standard'];
                    $p = $data['premium'];
                  
                    ?>
                                        <tr>
                                            <th scope="row" class="text-start"><?php echo $data['yearly_access'];?></th>
                                            
                                            <td>
                                                <?php
                                                  if($b == 1){
                                                echo "<i class='bi-check-circle-fill'></i>";
                                            
                                            }
                                            else{
                                                echo "<i class='bi-x-circle-fill'></i>";
                                            }
                                              ?>
                                            </td>
                                            
                                            <td>
                                            <?php
                                                  if($s == 1){
                                                echo "<i class='bi-check-circle-fill'></i>";
                                            
                                            }
                                            else{
                                                echo "<i class='bi-x-circle-fill'></i>";
                                            }
                                              ?>
                                            </td>
                                            
                                            <td>
                                            <?php
                                                  if($p == 1){
                                                echo "<i class='bi-check-circle-fill'></i>";
                                            
                                            }
                                            else{
                                                echo "<i class='bi-x-circle-fill'></i>";
                                            }
                                              ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <?php
                                        }
                                            ?>
                                        
                                            
                                          

                                        
                                     

                                      
                                    
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mx-auto">
                        <h4 class="mb-4 pb-lg-2">Please join us!</h4>
                            <form  method="POST" class="custom-form membership-form shadow-lg">
                                <h4 class="text-white mb-4">Become a member</h4>
                                <h6 class="text-white mb-4"><?php echo $_SESSION['packages'];?></h6>

                                    <div class="row">
                                        <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" id="full-name" class="form-control" value="">
                                        
                                        <label for="floatingInput">Full Name</label>
                                    </div>
                                        </div>
                                    <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required="">
                                        
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                     </div>
                                    <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" name="age" id="email" class="form-control" placeholder="Your Age" required="">
                                        
                                        <label for="floatingInput">Age</label>
                                    </div>
                                     </div>

                                     <div class="col-lg-6">
                                        <div class="form-floating">
                                        <select  name="gender" id="email"  class="form-control form-select" aria-label="Default select example" placeholder="" required="">
                                        <!-- <select for="floatingTextarea" class="form-select" aria-label="Default select example"> -->
                                             <option selected></option>
                                            <option class="gender"  value="Male">Male</option>
                                            <option class="gender" value="Female">Female</option>
                                           
                                        </select>
                                            <label for="floatingTextarea">Gender</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                        <input type="password" name="password" id="email" pattern="(?=.*\d)(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}"  class="form-control" placeholder="" required="">
                                            
                                            <label for="floatingTextarea">Password</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                        <input type="text" name="city" id="email"  class="form-control" placeholder="" required="">
                                            
                                            <label for="floatingTextarea">City</label>
                                        </div>
                                    </div>
                                 
                                <div class="col-lg-6">
                                        <div class="form-floating">
                                        <input type="text" name="address" id="email"  class="form-control" placeholder="" required="">
                                            
                                            <label for="floatingTextarea">Address</label>
                                        </div>
                                    </div>
                                
                                <div class="col-lg-6">
                                        <div class="form-floating">
                                        <input type="number" name="phone" id="email"  class="form-control" placeholder="" required="">
                                            
                                            <label for="floatingTextarea">Phone</label>
                                        </div>
                                    </div>
           
                                    <button type="submit" class="form-control" name="membership">Submit</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
      


            </section>
         <br><br>

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>





  
 
            <?php
            include 'footer.php';
            
    ?>