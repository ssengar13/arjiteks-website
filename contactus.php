<?php
include_once('header.php');
?>
<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center mt--100">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Contact Us</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="index.html">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->
<!-- contact single area start -->
<div class="rts-contact-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <!-- single contact area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner">
                    <div class="thumbnail">
                        <img src="assets/images/contact/2.webp" alt="">
                    </div>
                    <div class="content">
                        <div class="icone">
                            <img src="assets/images/contact/shape/0.svg" alt="">
                        </div>
                        <div class="info">
                            <span>Call Us 24/7</span>
                            <a href="tel:+918484902130">
                                <h5>+(91) 8484902130</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single contact area end -->
            <!-- single contact area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner">
                    <div class="thumbnail">
                        <img src="assets/images/contact/3.webp" alt="">
                    </div>
                    <div class="content">
                        <div class="icone">
                            <img src="assets/images/contact/shape/02.svg" alt="">
                        </div>
                        <div class="info">
                            <span>MAke A Quote</span>
                            <a href="mailto:contact@arjiteks.com">
                                <h5>contact@arjiteks.com</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single contact area end -->
            <!-- single contact area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner">
                    <div class="thumbnail">
                        <img src="assets/images/contact/1.webp" alt="">
                    </div>
                    <div class="content">
                        <div class="icone">
                            <img src="assets/images/contact/shape/03.svg" alt="">
                        </div>
                        <div class="info">
                            <span>Service Station</span>
                            <a href="#">
                                <h5>Pune, India</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single contact area end -->
        </div>
    </div>
</div>
<!-- conact single area end -->

<!-- bizup map area start -->
<div class="rts-contact-map-area">
    <div class="contaciner-fluid">
        <div class="row">
            <div class="col-12">
                <div class="contact-map-area-fluid">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15132.052767047035!2d73.886395!3d18.528306!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c18966585cb9%3A0xca2b7c3bd31af86e!2sArticle%20Academy%20for%20OET%20%7C%20IELTS%20%7C%20DHA%20%7C%20Prometric%20%26%20Medical%20Coding!5e0!3m2!1sen!2sin!4v1724738248218!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <img class="location" src="assets/images/fav.png" alt="Business_map"> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bizup map area end -->


<!-- conact us form fluid start -->
<div class="rts-contact-form-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-contact-fluid rts-section-gap">
                    <div class="rts-title-area contact-fluid text-center mb--50">
                        <p class="pre-title">
                            Get In Touch
                        </p>
                        <h2 class="title">Needs Help? Let’s Get in Touch</h2>
                    </div>
                    <div class="form-wrapper">
                        <div id="form-messages"></div>
                        <form method="post" class="contact_form" id="contactForm" novalidate="novalidate">
                            <div class="name-email">
                                <input type="text" name="name" placeholder="Your Name" required>
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="name-email">
                                <input type="number" name="number" placeholder="Your Contact Number" required>
                                <input type="text" name="subject" placeholder="Your Subject" required>
                            </div>
                            <textarea placeholder="Type Your Message" name="message"></textarea>
                            <button type="submit" name="contactus" class="rts-btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- conact us form fluid end -->

<?php
include_once('footer.php');
?>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        const formData = new FormData(this);

        fetch('contactmail.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log('Success:', data); // Log the response data
                document.getElementById('formAlert').innerHTML = data; // Show the alert message
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('formAlert').innerHTML = "<div class='alert alert-danger'><span>An error occurred. Please try again.</span></div>";
            });
    });
</script>