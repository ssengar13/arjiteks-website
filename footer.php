 <?php
    $servername = "localhost";
    $username = "root";
    $password = "Ywynbw2z2!@123";
    $dbname = "blogs";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    ?>

 <!-- rts footer area start -->
 <div class="rts-footer-area footer-one rts-section-gapTop bg-footer-one">
     <div class="container bg-shape-f1">
         <!-- rts footer area -->
         <div class="row pt_sm--80 pb--40 pb_sm--40">
             <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                 <div class="footer-one-single-wized">
                     <div class="wized-title">
                         <h5 class="title">Quick Links</h5>
                         <img src="assets/images/footer/under-title.png" alt="voicebot_footer">
                     </div>
                     <div class="quick-link-inner">
                         <ul class="links">
                             <li><a href="index.php"><i class="far fa-arrow-right"></i> Home</a></li>
                             <li><a href="faq.php"><i class="far fa-arrow-right"></i> Help & FAQ</a></li>
                             <li><a href="contactus.php"><i class="far fa-arrow-right"></i> Contact Us</a></li>
                             <li><a href="partners.php"><i class="far fa-arrow-right"></i> Partners</a></li>
                             <li><a href="career.php"><i class="far fa-arrow-right"></i> Careers</a></li>
                         </ul>
                         <ul class="links margin-left-70">
                             <li><a href="about-us.php"><i class="far fa-arrow-right"></i> About Us</a></li>
                             <li><a href="appointment.php"><i class="far fa-arrow-right"></i> Appointment</a></li>
                             <li><a href="about-us.php"><i class="far fa-arrow-right"></i>Our Company</a></li>
                             <li><a href="testimonial.php"><i class="far fa-arrow-right"></i>Testimonial</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <!-- footer mid area -->
             <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                 <div class="footer-one-single-wized mid-bg">
                     <div class="wized-title">
                         <h5 class="title">Arjiteks Consulting LLP</h5>
                         <img src="assets/images/footer/under-title.png" alt="voicebot_footer">
                     </div>
                     <div class="opening-time-inner">
                         <p class="text-white">Experience unparalleled business innovation with Arjiteks Consulting LLP —where limitless solutions redefine communication excellence.</p>
                         <a href="contactus.php" class="rts-btn btn-primary contact-us">Contact Us</a>
                     </div>
                 </div>
             </div>
             <!-- footer mid area end -->

             <!-- footer end area post -->
             <!-- <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                 <div class="footer-one-single-wized margin-left-65">
                     <div class="wized-title">
                         <h5 class="title">Popular Updates</h5>
                         <img src="assets/images/footer/under-title.png" alt="voicebot_footer">
                     </div>
                     <?php
                        $latest_sql = "SELECT * FROM blogs ORDER BY created_at DESC LIMIT 2";
                        $latest_res = mysqli_query($conn, $latest_sql);
                        if (mysqli_num_rows($latest_res) > 0) {
                            while ($menu = mysqli_fetch_assoc($latest_res)) {
                        ?>
                             <div class="post-wrapper">
                                 <div class="single-footer-post mb--30">
                                     <div class="left-thumbnail">
                                         <a href="newblog.php?id=<?php echo $menu['id']; ?>"><img src="./admin/upload/<?php echo $menu['img']; ?>" style="height:90px; width:90px;" alt="Blog_post"></a>
                                     </div>
                                     <div class="post-right">
                                         <p> <i class="fal fa-clock"></i> <?php echo $menu['created_at']; ?></p>
                                         <a href="newblog.php?id=<?php echo $menu['id']; ?>">
                                             <h6 class="title" style="word-wrap: break-word; max-width: 200px;"><?php echo $menu['heading1']; ?></h6>
                                         </a>
                                         <a class="red-more" href="newblog.php?id=<?php echo $menu['id']; ?>">Read More<i class="far fa-arrow-right"></i></a>
                                     </div>
                                 </div>
                             </div>
                     <?php
                            }
                        } else {
                            echo '<p>No recent posts found.</p>';
                        }
                        ?>
                 </div>
             </div> -->


             <!-- rts footer area End -->
         </div>
         <!-- copyright area start -->
         <div class="rts-copyright-area">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <div class="text-center">
                             <p>Arjitek - Copyright 2024. All rights reserved.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- copyright area end -->
     </div>
     <!-- rts footer area end -->
     <!-- ENd Header Area -->


     <!-- start loader -->
     <div class="loader-wrapper">
         <div class="loader">
         </div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
     </div>
     <!-- End loader -->

     <!-- progress Back to top -->
     <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
             <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
     </div>
     <!-- progress Back to top End -->


     <!-- scripts start form hear -->
     <script src="assets/js/vendor/jquery.min.js"></script>
     <script src="assets/js/vendor/jqueryui.js"></script>
     <script src="assets/js/vendor/waypoint.js"></script>
     <script src="assets/js/plugins/swiper.js"></script>
     <script src="assets/js/plugins/counterup.js"></script>
     <script src="assets/js/plugins/sal.min.js"></script>
     <script src="assets/js/vendor/bootstrap.min.js"></script>
     <script src="assets/js/plugins/contact.form.js"></script>
     <!-- main Js -->
     <script src="assets/js/main.js"></script>
     <!-- scripts end form hear -->
     </body>

     </html>