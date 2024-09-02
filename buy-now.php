

<?php
include_once "header.php";

?>
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center mt--100">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Buy Now</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.php">Home</a>
                        <span> / </span>
                        <a href="buy-now.php" class="active">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- contact area start -->
    <div class="rts-contact-area contact-one">
        <div class="container">
            <div class="row align-items-center g-0">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="contact-image-one">
                        <img src="assets/images/contact/01.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="contact-form-area-one">
                        <div class="rts-title-area contact text-start">
                            <p class="pre-title">
                                Make An Appointment
                            </p>
                            <h2 class="title">Request a free quote</h2>
                        </div>
                        <div id="form-messages"></div>
                        <form id="contact-form" action="https://reactheme.com/products/html/voicebot/mailer.php" method="post">
                            <div class="name-email">
                                <input type="text" placeholder="Your Name" name="name" required>
                                <input type="email" placeholder="Email Address" name="email" required>
                            </div>
                            <div class="name-email">
                                <input type="text" placeholder="Your Number" name="name" required>
                                <input type="text" placeholder="Your Plan" name="plan" required>
                            </div>                            
                            <textarea placeholder="Type Your Message" name="message"></textarea>
                            <button type="submit" class="rts-btn btn-primary">Proceed</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
 

    <?php
    include_once("footer.php");?>

