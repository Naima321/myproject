
<?php
include 'header.php';

   
    $q1 = "SELECT * FROM `events`";
    $row = mysqli_query($con, $q1);
    $count = mysqli_num_rows($row);
    

 
 
?>

            <section class="hero-section d-flex justify-content-center align-items-center " id="section_1" >

                <!-- <div class="section-overlay"></div> -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">

                            <h1 class="text-white mb-4 pb-2">Event Detail.</h1>

                            <a href="#section_2" class="btn custom-btn smoothscroll me-3">Learn more</a>
                        </div>

                    </div>
                </div>

            </section>


            <section class="events-section events-detail-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-8 col-12 mx-auto">
                            <h2 class="mb-lg-5 mb-4">Tiya Club's Group Tournaments</h2>
                        </div>
                            <section class="events-section section-bg section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-lg-3">Upcoming Events</h2>
                        </div>
 
                      
                        <div class="row custom-block mb-3">
                        <?php
                        while ($data = mysqli_fetch_assoc($row)) {



                       ?>
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0"><?php echo $data['date'];?> <strong class="text-white"></strong></h6>
                                    
                                 
                                </div>
                            </div>

                          
                          
                            <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                    <a href="event-detail.html">
                                        <img src="<?php echo $data['image'] ?>"  width="100%" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0 event-sec">
                                    <a href="event-detail.html" class="events-title mb-3 "><?php echo $data['eventname'];?></a>

                                    <p class="mb-0"><?Php echo $data['description'];?></p>

                                    <div class="d-flex flex-wrap border-top mt-4 pt-3">

                                        <div class="mb-4 mb-lg-0">
                                            <div class="d-flex flex-wrap align-items-center mb-1">
                                                <span class="custom-block-span">Location:</span>

                                                <p class="mb-0"><?php echo $data['location'];?></p>
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <span class="custom-block-span">Ticket:</span>

                                                <p class="mb-0"><?php echo $data['ticket_price'];?></p>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center ms-lg-auto">
                                            <a href="event-detail.html" class="btn custom-btn">Buy Ticket</a>
                                        </div>
                                    </div>
                               
                                </div>
                                <br><br><br>
                            </div>
                            <?php }


                           ?>
                        </div>

                        <!-- <div class="row custom-block custom-block-bg">
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">28</h6>
                                    
                                    <strong class="text-white"> 28 Feb 2048</strong>
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
                        </div> -->

                    </div>
                </div>
            </section>


                                <!-- <div class="contact-info">
                                    <div class="contact-info-item">
                                        <div class="contact-info-body">
                                            <strong>London, United Kingdom</strong>

                                            <p class="mt-2 mb-1">
                                                <a href="tel: 010-020-0340" class="contact-link">
                                                    (020) 
                                                    010-020-0340
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
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                        <a class="navbar-brand d-flex align-items-center" href="index.html">
                            <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="">
                            <span class="navbar-brand-text">
                                Tiya
                                <small>Golf Club</small>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-12">
                        <h5 class="site-footer-title mb-4">Join Us</h5>

                        <p class="d-flex border-bottom pb-3 mb-3 me-lg-3">
                            <span>Mon-Fri</span>
                            6:00 AM - 6:00 PM
                        </p>

                        <p class="d-flex me-lg-3">
                            <span>Sat-Sun</span>
                            6:30 AM - 8:30 PM
                        </p>
                        <br>
                        <p class="copyright-text">Copyright © 2048 Tiya Golf Club</p>
                    </div>

                        <div class="col-lg-2 col-12 ms-auto">
                            <ul class="social-icon mt-lg-5 mt-3 mb-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>

                            <p class="copyright-text">Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                        </div>

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#81B29A" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
