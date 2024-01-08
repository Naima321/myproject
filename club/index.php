
<head>
<link href="css/member.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<?php
include 'header.php';

       
          
   
        

        $q7 = "SELECT * FROM `members_package`";
        // print_r($q7);
        // die();
        $row = mysqli_query($con, $q7);
        // $_SESSION['id'] = $row['id'];
        // echo  $_SESSION['id'] ;
  

?>
<?php
  if (isset($_SESSION['member_id'])) {
         
         //     $id = $_SESSION['package_id'];
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

            <section class="hero-section d-flex justify-content-center align-items-center " id="section_1" >

                <div class="section-overlay"></div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
                

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <h2 class="text-white">Welcome to the club</h2>

                            <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                                <span>Tiya is</span>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">Modern</b>
                                    <b>Creative</b>
                                    <b>Lifestyle</b>
                                </span>
                            </h1>

                            <div class="custom-btn-group">
                                <a href="#section_2" class="btn custom-btn smoothscroll me-3">Our Story</a>

                                <a href="#section_3" class="link smoothscroll">Become a member</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <img src="images/home-image.jpg" class="home-image" width="80%" alt="">
                        </div>

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </section>


            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-lg-5 mb-4">About Golf Club</h2>
                        </div>

                        <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0">
                            <h3 class="mb-3">Golf Club History</h3>

                            <p><strong>Since 1984</strong>, Tiya is ranked #8 in the top 10 golf courses in the world. Tiya is Bootstrap 5 HTML CSS template for golf clubs. Anyone can modify and use this layout for commercial purposes.</p>

                            <p>Golf Club is 100% free CSS template provided by TemplateMo website. Please tell your friends about our website. Thank you for visiting.</p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                            <div class="member-block">
                                <div class="member-block-image-wrap">
                                    <img src="images/members/second.jpg" class="member-block-image img-fluid" alt="">

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="member-block-info d-flex align-items-center">
                                    <h4>Michael</h4>

                                    <p class="ms-auto">Founder</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="member-block">
                                <div class="member-block-image-wrap">
                                    <img src="images/members/first.jpg" class="member-block-image img-fluid" alt="">

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-linkedin"></a>
                                        </li>
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="member-block-info d-flex align-items-center">
                                    <h4>Sandy</h4>

                                    <p class="ms-auto">Co-Founder</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

<!-- 
            <section class="section-bg-image">
                <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>

                <div class="container">
                    <div class="row">


                    </div>
                </div>

                <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>
            </section> -->


            <section class="membership-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                            <h2><span>Membership</span> at Golf Club</h2>
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
                       
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $data['Snookes'];?></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $data['gym'];?></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $data['swiming'];?></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $data['ground'];?></li>
                        <!-- <li><span class="fa-li"><i class="fas fa-check"></i></span>Family Gala For Members</li> -->
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $data['hall'];?></li>
                    </ul>
                    <h6 class="card-price text-center" id="costo1">Price:<?php echo $data['Price'];?></h6>
                    <hr>
                         </form>
                         <div class="package btn btn-block btn-primary text-uppercase"><a href="member.php?id=<?php echo $data['package_id'];?>"class="text-uppercase"  style="color: white !important;" name="get">Select</a></div>
                 
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

                       

                        

                    </div>
                </div>
            </section>


            <section class="events-section section-bg section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-lg-3">Upcoming Events</h2>
                        </div>

                        <div class="row custom-block mb-3">
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">24</h6>
                                    
                                    <strong class="text-white">Feb 2048</strong>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                    <a href="event-detail.html">
                                        <img src="images/professional-golf-player.jpg" width="100%" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0">
                                    <a href="event-detail.html" class="events-title mb-3">Private activities</a>

                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <div class="d-flex flex-wrap border-top mt-4 pt-3">

                                        <div class="mb-4 mb-lg-0">
                                            <div class="d-flex flex-wrap align-items-center mb-1">
                                                <span class="custom-block-span">Location:</span>

                                                <p class="mb-0">National Center, NYC</p>
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <span class="custom-block-span">Ticket:</span>

                                                <p class="mb-0">$250</p>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center ms-lg-auto">
                                            <a href="event-detail.html" class="btn custom-btn">Buy Ticket</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row custom-block custom-block-bg">
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">28</h6>
                                    
                                    <strong class="text-white">Feb 2048</strong>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                    <a href="event-detail.html">
                                        <img src="images/girl-taking-selfie-with-friends-golf-field.jpg" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0">
                                    <a href="event-detail.html" class="events-title mb-3">Group tournament activities</a>

                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <div class="d-flex flex-wrap border-top mt-4 pt-3">

                                        <div class="mb-4 mb-lg-0">
                                            <div class="d-flex flex-wrap align-items-center mb-1">
                                                <span class="custom-block-span">Location:</span>

                                                <p class="mb-0">National Center, NYC</p>
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <span class="custom-block-span">Ticket:</span>

                                                <p class="mb-0">$350</p>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center ms-lg-auto">
                                            <a href="event-detail.html" class="btn custom-btn">Buy Ticket</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12">
                            <form action="#" method="post" class="custom-form contact-form" role="form">
                                <h2 class="mb-4 pb-2">Contact Us</h2>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name" required="">
                                            
                                            <label for="floatingInput">Full Name</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"> 
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                            
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                                            
                                            <label for="floatingTextarea">Message</label>
                                        </div>

                                        <button type="submit" class="form-control">Submit Form</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="contact-info mt-5">
                                <div class="contact-info-item">
                                    <div class="contact-info-body">
                                        <strong>Karachi, Pakistan</strong>

                                        <p class="mt-2 mb-1">
                                            <a href="tel: 010-020-0340" class="contact-link">
                                                (+92) 
                                                324 23 56434
                                            </a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="mailto:info@company.com" class="contact-link">
                                                info@company.com
                                            </a>
                                        </p>
                                    </div>

                                    <div class="contact-info-footer">
                                        <a href="#">Directions</a>
                                    </div>
                                </div>

                                <img src="images/WorldMap.svg" class="img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>

      <?php
      
      include 'footer.php';
      
      ?>