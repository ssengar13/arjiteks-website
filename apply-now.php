<?php
// session_start();
include "header.php";
?>

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center mt--100">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Apply Now</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="index.php">Home</a>
                    <span> / </span>
                    <a href="apply-now.php" class="active">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->
<!-- contact area start -->
<div class="rts-contact-area contact-one appoinment background-contact-appoinment mt--70 mb--70">
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
                            BEGIN YOUR CAREER
                        </p>
                        <h2 class="title">Take the next step in your career with us...</h2>
                    </div>
                    <form class="contact_form" id="contactForm" novalidate="novalidate" method="post" enctype="multipart/form-data">
                        <div class=" name-email">
                            <input type="text" name="name" placeholder="Your Name">
                            <input type="email" name="email" placeholder="Email Address">
                        </div>
                        <div class="name-email">
                            <input type="text" name="phonenumber" placeholder="Phone Number">
                            <input type="text" name="qualification" placeholder="Your Qualifications">
                        </div>
                        <div class="name-email">
                            <input type="text" name="experience" placeholder="Total years of Experience">
                            <input type="text" name="noticeperiod" placeholder="Your Notice Period">
                        </div>
                        <input type="file" accept=".pdf, .doc, .docx" name="resume" id="resume" required style="text-align: center; padding-top: 15px;">
                        <span class="error"></span>
                        <label for="resume">Upload your resume (PDF, DOC, DOCX)</label>

                        <button type="submit" name="apply" class="rts-btn btn-primary">Submit Message</button>
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

        fetch('applymail.php', {
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