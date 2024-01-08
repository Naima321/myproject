<?php
include 'header.php';

if(isset($_POST['done'])){
    $n = $_POST['fn'];
    $e = $_POST['email'];
    $m = $_POST['message'];
     
     $q1 ="INSERT INTO `contact`(`fname`,`email`,`message`) VALUES ('$n','$e','$m')";
    
     mysqli_query($con,$q1);
    
    
    }
?>

<!-- <section class="hero-section d-flex justify-content-center align-items-center " id="section_1" > -->


<!-- <div class="section-overlay"></div> -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
<!-- </section> -->
<!-- <section class="contact-section section-padding" id="section_5"> -->
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12">
                            <form  method="POST" class="custom-form contact-form" role="form">
                                <h2 class="mb-4 pb-2">Contact Us</h2>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="fn" id="full-name" class="form-control" placeholder="Full Name" required="">
                                            
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

                                        <button type="submit" class="form-control" name="done">Submit Form</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5 col-12">
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
                                        <a href="https://maps.google.com">Directions</a>
                                    </div>
                                </div>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14481.497056713244!2d67.0168121!3d24.8510639!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e0bdec69e0d%3A0x7372342c342046c0!2sAptech%20Computer%20Education!5e0!3m2!1sen!2s!4v1696357195856!5m2!1sen!2s" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <br><br>
            <?php
            include 'footer.php';

            ?>
