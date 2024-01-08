<?php 
include 'header.php';

  ?>
  <?php




if (isset($_SESSION['email'])) {

  // $id = $_SESSION['member_id'];
  // $id = $_GET['id'];
  // $_SESSION['id'] = $i;
  // echo  $i ;
  $e = $_SESSION['email'];
 $q7 = "SELECT * FROM `membership` WHERE `email` like '$e' ";
//  print_r($q7);
//  die(); 
// 

   $row = mysqli_query($con, $q7);
   $data = mysqli_fetch_assoc($row);
  
  //  $_SESSION['name'] = $data['name'];
   $_SESSION['age'] = @$data['age'];
  $_SESSION['gender'] = @$data['gender'];
   $_SESSION['address'] = @$data['address'];
   $_SESSION['phone'] = @$data['phone'];
   $_SESSION['city'] = @$data['city'];
   $_SESSION['passwprd'] = @$data['password'];






}
      
        
     
        

?>
 

           


        <body>
            <main>
                <!-- <section class="hero-section d-flex justify-content-center align-items-center " id="section_1" > -->


                    <!-- <div class="section-overlay"></div> -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg> 
                    
              <!-- <section  class="membership-section section-padding" id="section_3"> -->
                <div class="container">
                  <div class="row">
        
                    <div class="col-lg-8 col-12 mx-auto">
                      <div class="profile-button">
        
                        <h2 class="text-center mb-lg-3 mb-2" style="color:#3D405B;">Personal Information </h2>
                        <hr>
                     
                        <div class="row">
                          <div class="col-lg-6 col-6 mb-3 mt-3">
                            <label class="form-label">First Name:</label>
                            <p><?php echo $_SESSION['name']; ?></p>
                          </div>
                          <!-- <div class="col-lg-6 col-6 mb-3 mt-3">
                            <label class="form-label">Last Name:</label>
                            <p></p>
                          </div>
         -->
        
                          <div class="col-lg-6 col-6 mb-3 mt-3">
                            <label class="form-label">Email:</label>
                            <p><?php echo $_SESSION['email']; ?></p>
                          </div>

                          <div class="col-lg-6 col-6 mb-3 mt-3">
                            <label class="form-label">Age:</label>
                            <p><?php echo $_SESSION['age']; ?></p>
                          </div>

                          <div class="col-lg-6 col-6 mb-3 mt-3">
                            <label class="form-label">City:</label>
                            <p><?php echo $_SESSION['city']; ?></p>
                          </div>

                          <div class="col-lg-6 col-6 mb-3 mt-3">
                            <label class="form-label">Address:</label>
                            <p><?php echo $_SESSION['address']; ?></p>
                          </div>
                           
                          <div class="col-lg-6 col-6 mb-3 mt-3">
                            <label class="form-label">Phone:</label>
                            <p><?php echo $_SESSION['phone']; ?></p>
                          </div>

                          <div class="col-lg-6 col-6 mb-3 mt-3">
                            <label class="form-label">Gender:</label>
                            <p><?php echo $_SESSION['gender']; ?></p>
                          </div>

                          <div class="col-lg-6 col-6 mb-3 mt-3">
                            <label class="form-label">Password:</label>
                            <p><?php echo $_SESSION['password']; ?></p>
                          </div>
                             
                               <!-- <div class="row">
                                <div class="col-lg-3 col-sm-3 mb-3 mt-3">
                                    <a href="setting.php"><button class="form-control profile-button" id="submit-button">Setting</button></a>
                                  </div> -->
                
                                  <div class="col-lg-6 col-sm-3 mb-3 mt-3">
                                    <a href="index.php"><button type="submit" class="form-control profile-button  btn btn-default btn-block btn-lg" style="background-color: #3D405B !important;color:white !important;float:left;padding:10px 11px 8px 9px;
                                    " id="submit-button">Back</button></a>
                                  </div>
                                  <div class="col-lg-6 col-sm-3 mb-3 mt-3">
                                    <a href="setting.php"><button type="submit" class="form-control profile-button btn btn-primary btn-block btn-lg" style="float:right;" id="submit-button">update</button></a>
                                  </div>
                                </div>
                           <!-- <div class="col-lg-1"></div>      -->
                        </div>
                         
                      
                         </div>
                            </div>
                        </div>
                        </section>
                        <br><br>
                                 </main> 
                                 <?php
                                 
                                 include 'footer.php';
//  }else {
//      echo "<script>window.open('login.php','_self');</script>";
//    }
                                 ?>

                                   </body>
</html>