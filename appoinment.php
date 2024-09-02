<?php
include_once('header.php');
?>
<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center mt--100">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Appointment</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="index.php">Home</a>
                    <span> / </span>
                    <a href="appoinment.php" class="active">Appointment</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->


<!-- rts circle progress area -->
<div class="rts-circle-progress-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single progress area -->
                <div class="single-circle-progress-inner">
                    <!-- single -->
                    <div class="progress red">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">85%</div>
                    </div>
                    <!-- single -->
                    <h5 class="title">Quality Service</h5>
                </div>
                <!-- single progress area End -->
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single progress area -->
                <div class="single-circle-progress-inner">
                    <!-- single -->
                    <div class="progress red">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">90%</div>
                    </div>
                    <!-- single -->
                    <h5 class="title">Skilled Members</h5>
                </div>
                <!-- single progress area End -->
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single progress area -->
                <div class="single-circle-progress-inner">
                    <!-- single -->
                    <div class="progress red">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">100%</div>
                    </div>
                    <!-- single -->
                    <h5 class="title">Happy Customers</h5>
                </div>
                <!-- single progress area End -->
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single progress area -->
                <div class="single-circle-progress-inner">
                    <!-- single -->
                    <div class="progress red">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">99%</div>
                    </div>
                    <!-- single -->
                    <h5 class="title">Successful Solutions</h5>
                </div>
                <!-- single progress area End -->
            </div>
        </div>
    </div>
</div>
<!-- rts circle progress area End -->

<!-- contact area start -->
<div class="rts-contact-area contact-one appoinment background-contact-appoinment">
    <div class="">
        <div class="row g-0 align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="contact-image-one appoinment">
                    <img src="assets/images/appoinment/02.png" alt="">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="contact-form-area-one">
                    <div class="rts-title-area contact-appoinment text-start">
                        <p class="pre-title">
                            Make An Appointment
                        </p>
                        <h2 class="title">Request a free quote</h2>
                    </div>
                    <form class="contact_form" id="contactForm" novalidate="novalidate" method="post">
                        <div class="name-email">
                            <input type="text" placeholder="Your Name" name="name" required>
                            <input type="email" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="name-email">
                            <input type="text" placeholder="Your Phone Number" name="number" required>
                            <input type="text" placeholder="Company Name" name="companyname" required>
                        </div>
                        <textarea placeholder="Type Your Message" name="message" required></textarea>
                        <button type="submit" name="apponitment" class="rts-btn btn-primary">Submit Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->
<?php
include_once('footer.php');
?>


<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        const formData = new FormData(this);

        fetch('appointmentmail.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log('Success:', data);
                document.getElementById('formAlert').innerHTML = data;
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('formAlert').innerHTML = "<div class='alert alert-danger'><span>An error occurred. Please try again.</span></div>";
            });
    });
</script>