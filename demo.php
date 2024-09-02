<?php
include_once('header.php');
?>


<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center mt--100">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Request Demo</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="index.php">Home</a>
                    <span> / </span>
                    <a href="demo.php" class="active">Request Demo</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->




<!-- contact area start -->
<div class="rts-contact-area contact-one appoinment">
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
                            Get a Demo
                        </p>
                        <h2 class="title">Request a free demo</h2>
                    </div>
                    <form class="contact_form" id="contactForm" novalidate="novalidate" method="post">
                        <input type="hidden" name="form" value="demo request">
                        <div class="name-email">
                            <input type="text" placeholder="Your Name" name="name" required>
                            <input type="email" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="name-email">
                            <input type="number" placeholder="Your Number" name="number" required>
                            <input type="text" name="companyname" placeholder="Your Company Name" required>
                        </div>
                        <textarea placeholder="Type Your Message" name="message"></textarea>
                        <button type="submit" name="demomail" class="rts-btn btn-primary">Request Demo</button>
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

        fetch('demomail.php', {
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