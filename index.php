<?php
include_once("header.php");
?>

<?php
include_once('header.php');
?>

<?php
$servername = "localhost";
$username = "root";
$password = "Ywynbw2z2!@123";
$dbname = "blogs";

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>

<!-- banner blank space area -->
<div class="rts-banner-area rts-banner-one">
    <div class="swiper mySwiper banner-one">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <!-- banner single content -->
                <div class="banner-one-inner text-start">
                    <p class="pre-title text-white">
                        <span>Welcome!</span> Start Growing Your Business Today
                    </p>
                    <h1 class="title text-white">Elevate <span>Your Business </span> <br>
                        with the power of AI</h1>
                    <p class="disc banner-para text-white">
                        Elevate your business potential by harnessing the unparalleled capabilities of AI, <br>driving innovation and efficiency.
                    </p>
                    <a href="#" class="rts-btn btn-primary color-h-black">Get Solution</a>
                    <img class="shape-img one" src="assets/images/banner/shape/01.png" alt="banner_business">
                </div>
                <!-- banner single content end -->
            </div>
            <div class="swiper-slide two">
                <!-- banner single content -->
                <div class="banner-one-inner text-start">
                    <p class="pre-title text-white">
                        <span>Welcome!</span> Start Growing Your Business Today
                    </p>
                    <h1 class="title text-white">Empower <span>Conversations</span> <br> with CPaaS Excellence</h1>
                    <p class="disc banner-para text-white">
                        Experience the epitome of communication with our CPaaS solutions, unlocking <br> unparalleled connectivity for a smoother digital experience.
                    </p>
                    <a href="#" class="rts-btn btn-primary color-h-black">Get Solution</a>
                    <img class="shape-img one" src="assets/images/banner/shape/01.png" alt="banner_business">
                </div>
                <!-- banner single content end -->
            </div>
            <div class="swiper-slide three">
                <!-- banner single content -->
                <div class="banner-one-inner text-start">
                    <p class="pre-title text-white">
                        <span>Welcome!</span> Start Growing Your Business Today
                    </p>
                    <h1 class="title text-white">Elevate <span>Communication</span> <br> with AI Excellence</h1>
                    <p class="disc banner-para text-white">
                        Unlock the future of communication with our AI excellence—where innovation meets <br> seamless connectivity for unparalleled business growth.
                    </p>
                    <a href="#" class="rts-btn btn-primary color-h-black">Get Solution</a>
                    <img class="shape-img one" src="assets/images/banner/shape/01.png" alt="banner_business">
                </div>
                <!-- banner single content end -->
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="animation-img">
        <img class="shape-img two" src="assets/images/banner/shape/02.png" alt="banner_business">
        <img class="shape-img three" src="assets/images/banner/shape/03.png" alt="banner_business">
    </div>
</div>
<!-- banner blank space area end -->

<!-- rts about us section start -->
<div class="rts-about-area rts-section-gap bg-about-sm-shape">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- about left -->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                <div class="rts-title-area">
                    <p class="pre-title">
                        More About Us
                    </p>
                    <h2 class="title">We Deliver the Ultimate Business Solutions in Town</h2>
                </div>
                <div class="about-inner">
                    <p class="disc">
                        We specialize in delivering cutting-edge contact center and CPaaS solutions, bringing seamless communication experiences to businesses. Our commitment to innovation ensures that your organization stays at the forefront of modern connectivity, providing customers with an unmatched level of service. With our expertise, we empower businesses to thrive in the digital landscape, delivering excellence in every interaction.
                    </p>
                    <!-- start about success area -->
                    <div class="row about-success-wrapper">
                        <!-- left wrapper start -->
                        <div class="col-lg-6 col-md-6">
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">24/7 Services Avilable</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Great Skilled Consultant</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Expert Team Members</p>
                            </div>
                        </div>
                        <!-- left wrapper end -->
                        <div class="col-lg-6 col-md-6">
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Trust and Security
                                </p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Innovation</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Sustainablity</p>
                            </div>
                        </div>
                    </div>
                    <!-- start about success area -->

                    <!-- about founder & get in touch start -->
                    <div class="row about-founder-wrapper align-items-center mt--40">
                        <!-- left area start -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="author-call-option">
                                <img class="authore-call" src="assets/images/about/mail.png" alt="call_founder" style="height: 53px; width: 53px;">
                                <div class="call-details">
                                    <span>Mail us anytime</span>
                                    <a href="mailto:contact@arjiteks.com">
                                        <h6 class="title">contact@arjiteks.com</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- left area end -->
                        <!-- right founder area -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_sm--20">
                            <div class="author-call-option">
                                <img class="authore-call" src="assets/images/about/call.svg" alt="call_founder">
                                <div class="call-details">
                                    <span>Call us anytime</span>
                                    <a href="tel:+918484902130">
                                        <h6 class="title">+(91) 8484902130</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- left founder area -->
                    </div>
                    <!-- about founder & get in touch end -->
                </div>
            </div>
            <!-- about right -->

            <!-- about-right Start-->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-md-1 order-sm-1 order-1">
                <div class="about-one-thumbnail">
                    <img src="assets/images/about/main/about-2.webp" alt="about-voicebot">
                    <img class="small-img" src="assets/images/about/main/about-01.webp" alt="voicebot-small">
                    <div class="experience">
                        <div class="left single">
                            <h2 class="title">01+</h2>
                            <p class="time">Years</p>
                        </div>
                        <div class="right single">
                            <p class="disc">
                                Of Experience in AI Solutions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about-right end -->
        </div>
    </div>
</div>
<!-- rts about us section end -->

<!-- rts service post area  Start-->
<div class="rts-service-area rts-section-gapBottom  mt--50 ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area service text-center">
                    <p class="pre-title">
                        Our Services
                    </p>
                    <h2 class="title">High Quality Services</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid service-main plr--120-service plr_md--0 pl_sm--0 pr_sm--0">
        <div class="background-service row">
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner one">
                    <div class="thumbnail">
                        <img src="assets/images/services/artificial-intelligence.png" alt="voicebot_service">
                    </div>
                    <div class="service-details">
                        <a href="chatbot.php">
                            <h5 class="title">Conversational AI</h5>
                        </a>
                        <p class="disc">
                            Revolutionize interaction with Conversational AI for enhanced user engagement and personalized experiences.
                        </p>
                        <a class="rts-read-more btn-primary" href="chatbot.php"><i class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner two">
                    <div class="thumbnail">
                        <img src="assets/images/services/software-development.png" alt="voicebot_service">
                    </div>
                    <div class="service-details">
                        <a href="software-development.php">
                            <h5 class="title">Software Development</h5>
                        </a>
                        <p class="disc">
                            Innovative solutions in website, software, and mobile app development for seamless user experience. </p>
                        <a class="rts-read-more btn-primary" href="software-development.php"><i class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner three">
                    <div class="thumbnail">
                        <img src="assets/images/services/customer-service.png" alt="voicebot_service">
                    </div>
                    <div class="service-details">
                        <a href="contact-center.php">
                            <h5 class="title">Contact Center Solution</h5>
                        </a>
                        <p class="disc">
                            Transform customer engagement with our advanced CPaas Model Contact Center Solution.
                        </p>
                        <a class="rts-read-more btn-primary" href="contact-center.php"><i class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner four">
                    <div class="thumbnail">
                        <img src="assets/images/services/api.png" alt="voicebot_service">
                    </div>
                    <div class="service-details">
                        <a href="api.php">
                            <h5 class="title">Telecom API Integration</h5>
                        </a>
                        <p class="disc">
                            Seamlessly integrate telecom APIs to enhance communication capabilities and streamline processes.
                        </p>
                        <a class="rts-read-more btn-primary" href="api.php"><i class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner five">
                    <div class="thumbnail">
                        <img src="assets/images/services/test.png" alt="voicebot_service">
                    </div>
                    <div class="service-details">
                        <a href="mobile-apps.php">
                            <h5 class="title">Mobile Applications</h5>
                        </a>
                        <p class="disc">
                            Crafting mobile appslications to elevate user experiences and meet evolving technological demands.
                        </p>
                        <a class="rts-read-more btn-primary" href="mobile-apps.php"><i class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner six">
                    <div class="thumbnail">
                        <img src="assets/images/services/fax.png" alt="voicebot_service">
                    </div>
                    <div class="service-details">
                        <a href="efax.php">
                            <h5 class="title">IT & Telecom Hardware</h5>
                        </a>
                        <p class="disc">
                            Transforming IT and Telecom Hardware services with our advanced solutions for seamless connectivity.
                        </p>
                        <a class="rts-read-more btn-primary" href="#"><i class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
        </div>
        <div class="row">
            <div class="cta-one-bg col-12">
                <div class="cta-one-inner">
                    <div class="cta-left">
                        <h3 class="title">Let’s discuss about how we can help
                            make your business better</h3>
                    </div>
                    <div class="cta-right">
                        <a class="rts-btn btn-white" href="appoinment.php">Lets Work Together</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts service post area ENd -->

<!-- business goal area -->
<div class="rts-business-goal mt--0 rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <!-- business goal left -->
            <div class="col-lg-6">
                <div class="business-goal-one">
                    <img src="assets/images/business-goal/01.webp" alt="Business_Goal">
                    <img class="small" src="assets/images/business-goal/02.webp" alt="Business_Goal">
                </div>
            </div>
            <!-- business goal right -->

            <!-- right area business -->
            <div class="col-lg-6 mt--35 mt_md--70 mt_sm--70">
                <div class="business-goal-right">
                    <div class="rts-title-area business text-start pl--30">
                        <p class="pre-title">
                            BUSINESS SOLUTIONS EXPERTISE HUB
                        </p>
                        <h2 class="title">We know how to manage
                            business globally</h2>
                    </div>
                    <div class="rts-business-goal pl--30">
                        <div class="single-goal">
                            <img src="assets/images/business-goal/icon/1.png" alt="business_Icone" class="thumb">
                            <div class="goal-wrapper">
                                <h6 class="title">Best Business Solution</h6>
                                <p class="disc">Unlock your business's full potential with our tailored and innovative solutions under the banner of 'Best Business Solution'.
                                </p>
                            </div>
                        </div>
                        <div class="single-goal">
                            <img src="assets/images/business-goal/icon/2.png" alt="business_Icone" class="thumb">
                            <div class="goal-wrapper">
                                <h6 class="title">24/7 Customer Support</h6>
                                <p class="disc">Reliable Assistance Around the Clock: Experience Uninterrupted 24/7 Customer Support Excellence.
                                </p>
                            </div>
                        </div>
                        <div class="goal-button-wrapper mt--70">
                            <a href="contactus.html" class="rts-btn btn-primary color-h-black">Contact Us</a>
                            <!-- <div class="vedio-icone">
                                    <a id="play-video" class="video-play-button" href="#">
                                        <span></span>
                                        <span class="outer-text">Watch Video</span>
                                    </a>
                                    <div id="video-overlay" class="video-overlay">
                                        <a class="video-overlay-close">×</a>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- right area business ENd -->
        </div>
    </div>
</div>
<!-- business goal area End -->

<!-- rts-counter up area start -->
<div class="rts-counter-up-area rts-section-gap counter-bg">
    <div class="container">
        <div class="row">
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter">
                    <img src="assets/images/counterup/icon/1.png" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title"><span class="counter animated fadeInDownBig">240</span></h2>
                        <p class="disc">Successful Projects</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-center two pl--30">
                    <img src="assets/images/counterup/icon/2.png" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title"><span class="counter animated fadeInDownBig">2</span></h2>
                        <p class="disc">Total Branches</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-center three pl--50">
                    <img src="assets/images/counterup/icon/4.png" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title"><span class="counter animated fadeInDownBig">30</span></h2>
                        <p class="disc">Skilled Experts</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-end four">
                    <img src="assets/images/counterup/icon/3.png" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title"><span class="counter animated fadeInDownBig">150</span></h2>
                        <p class="disc">Happy Clients</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
        </div>
    </div>
</div>
<!-- rts-counter up area end -->

<!-- start gallery section -->
<div class="rts-gallery-area rts-section-gap gallery-bg bg_image">
    <div class="container">
        <div class="row">
            <div class="rts-title-area gallery text-start pl_sm--20">
                <p class="pre-title">
                    Popular Projects
                </p>
                <h2 class="title">Our Completed Projects</h2>
            </div>
        </div>
        <div class="row mt--45">
            <div class="col-12">
                <div class="swiper mygallery mySwipers">
                    <div class="swiper-wrapper gallery">
                        <div class="swiper-slide">
                            <div class="row g-5 w-g-100">
                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="thumbnail-gallery">
                                        <img src="assets/images/gallery/1.webp" alt="business-images">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                    <div class="bg-right-gallery">
                                        <div class="icon">
                                            <img src="assets/images/gallery/icon/01.svg" alt="Business-gallery">
                                        </div>
                                        <a href="#">
                                            <h4 class="title">Contact Center Solution</h4>
                                        </a>
                                        <span>cPaas Business Solution</span>
                                        <p class="disc">Elevate customer engagement and streamline communication channels with our advanced Contact Center Solution, delivering a unified and responsive experience.
                                        </p>
                                        <a class="rts-btn btn-primary" href="project-details.html">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-5 w-g-100">
                                <div class="col-lg-7">
                                    <div class="thumbnail-gallery">
                                        <img src="assets/images/gallery/2.webp" alt="business-images">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="bg-right-gallery">
                                        <div class="icon">
                                            <img src="assets/images/gallery/icon/01.svg" alt="Business-gallery">
                                        </div>
                                        <a href="#">
                                            <h4 class="title">AI Live Chat</h4>
                                        </a>
                                        <span>AI Solution</span>
                                        <p class="disc">Transform your customer service with AI Live Chat, where intelligent automation meets personalized support for a seamless and efficient interaction.
                                        </p>
                                        <a class="rts-btn btn-primary" href="project-details.html">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-5 w-g-100">
                                <div class="col-lg-7">
                                    <div class="thumbnail-gallery">
                                        <img src="assets/images/gallery/3.png" alt="business-images">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="bg-right-gallery">
                                        <div class="icon">
                                            <img src="assets/images/gallery/icon/01.svg" alt="Business-gallery">
                                        </div>
                                        <a href="#">
                                            <h4 class="title">IT & Telecom Hardware</h4>
                                        </a>
                                        <span>Business Solution</span>
                                        <p class="disc">Experience seamless IT and Telecom Hardware services, ensuring secure and efficient operations with cutting-edge technology.
                                        </p>
                                        <a class="rts-btn btn-primary" href="project-details.html">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start gallery section -->


<!-- rts features area start -->
<div class="rts-feature-area rts-section-gap">
    <div class="container-fluid padding-controler ">
        <div class="row bg-white-feature  pt--120 pb--120">
            <div class="col-xl-6 col-lg-12">
                <div class="feature-left-area">
                    <img src="assets/images/feature/01.png" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="rts-title-area feature text-start pl--30 pl_sm--0">
                    <p class="pre-title">
                        Boost Your Business Today
                    </p>
                    <h2 class="title feature-title">Most Reliable Efficient <br>
                        Business Solution Provider</h2>
                    <p>Embark on a journey of innovation with our AI products, development expertise, and cutting-edge Contact Center Solutions. We're your trusted partner, committed to delivering tailored business solutions that redefine success in the digital landscape</p>
                </div>

                <div class="feature-one-wrapper pl--30 mt--40 pl_sm--0">
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Development Expertise</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Client-Centric Approach</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Security and Compliance</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Innovative AI Solutions</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>24/7 Support and Monitoring</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Environmental Sustainability</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts features area end -->

<!-- start client review area start -->
<div class="rts-client-feedback">
    <div class="container">
        <div class="row">
            <!-- start testimonials area -->
            <div class="col-lg-7">
                <div class="rts-title-area reviews text-start pl--30 pt--70 mt--70">
                    <p class="pre-title">
                        Our Testimonials
                    </p>
                    <h2 class="title">Client’s Feedbacks</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
            <div class="col-12">
                <div class="swiper mySwiperh2_clients">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="rts-client-reviews-h2">
                                <div class="review-header">
                                    <a href="#" class="thumbnail thumb">
                                        <img src="assets/images/testimonials/02.png" alt="testimonials_area">
                                    </a>
                                    <div class="discription">
                                        <a href="#">
                                            <h6 class="title">Rohit Malhotra</h6>
                                        </a>
                                        <span>CEO</span>
                                    </div>
                                </div>
                                <div class="review-body">
                                    <p class="disc">
                                        “The IT and Telecom Hardware services provided by this team have been exceptional. Their expertise and timely support have helped us streamline our operations and enhance productivity.”
                                    </p>
                                    <div class="body-end">
                                        <!-- <a href="#"><img src="assets/images/testimonials/icon/logo-01.png" alt="Client_logo"></a> -->
                                        <div class="star-icon icon-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- single client reviews -->
                            <div class="rts-client-reviews-h2">
                                <div class="review-header">
                                    <a href="#" class="thumbnail thumb">
                                        <img src="assets/images/testimonials/03.png" alt="testimonials_area">
                                    </a>
                                    <div class="discription">
                                        <a href="#">
                                            <h6 class="title">Neha Gupta</h6>
                                        </a>
                                        <span>Director of Operations</span>
                                    </div>
                                </div>
                                <div class="review-body">
                                    <p class="disc">
                                        “Their commitment to quality and customer satisfaction is truly commendable. We rely on their hardware solutions for all our critical infrastructure needs.”
                                    </p>
                                    <div class="body-end">
                                        <!-- <a href="#"><img src="assets/images/testimonials/icon/logo-02.png" alt="Client_logo"></a> -->
                                        <div class="star-icon icon-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single client reviews End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single client reviews -->
                            <div class="rts-client-reviews-h2">
                                <div class="review-header">
                                    <a href="#" class="thumbnail thumb">
                                        <img src="assets/images/testimonials/04.png" alt="testimonials_area">
                                    </a>
                                    <div class="discription">
                                        <a href="#">
                                            <h6 class="title">Amit Rathore</h6>
                                        </a>
                                        <span>IT Manager</span>
                                    </div>
                                </div>
                                <div class="review-body">
                                    <p class="disc">
                                        “We've experienced seamless integration and outstanding support from their team. Their IT and Telecom Hardware services have been a game-changer for our business.”
                                    </p>
                                    <div class="body-end">
                                        <!-- <a href="#"><img src="assets/images/testimonials/icon/logo-03.png" alt="Client_logo"></a> -->
                                        <div class="star-icon icon-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single client reviews End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start client review area end -->

<!-- blog area start -->
<!-- <div class="rts-blog-area rts-section-gap bg-secondary mt--50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area text-center">
                    <span>Blog Posts</span>
                    <h2 class="title">News & Updates</h2>
                </div>
            </div>
        </div>

        <div class="g-5 mt--20">
            <div class="swiper mySwiperh1_blog">
                <div class="swiper-wrapper">
                    <?php


                    $sql = "SELECT * FROM blogs";
                    $res = mysqli_query($conn, $sql);
                    foreach ($res as $menu) {
                        $tags = explode(',', $menu['tags']);
                    ?>
                        <div class="swiper-slide">
                            <div class="single-blog-one-wrapper">
                                <div class="thumbnail">
                                    <img src="./admin/upload/<?php echo $menu['img']; ?>" style="height:300px; width:500px;" alt="business_Blog">
                                    <div class="blog-badge">
                                        <span><?php echo $menu['created_at']; ?></span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p><span><?php echo $menu['type']; ?> </span>/ <?php echo $menu['created_by']; ?></p>
                                    <a href="blog-details.php">
                                        <h5 class="title" style="height: 60px;"><?php echo $menu['heading1']; ?></h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="newblog.php?id=<?php echo $menu['id']; ?>"><i class="far fa-arrow-right"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div> -->
<!-- blog area end -->

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
                    <form class="contact_form" id="contactForm" novalidate="novalidate" method="post">
                        <div class="name-email">
                            <input type="text" placeholder="Your Name" name="name" required>
                            <input type="email" placeholder="Email Address" name="email" required>
                        </div>
                        <input type="text" placeholder="Business Topic" name="subject">
                        <textarea placeholder="Type Your Message" name="message"></textarea>
                        <button type="submit" name="contact_button" class="rts-btn btn-primary">Submit Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->

<!-- map area start -->
<div class="rts-map-area bg-light-white">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- map area left -->
                <div class="mapdetails-inner-one">
                    <div class="left-area single-wized">
                        <h5 class="title">Get in touch</h5>
                        <div class="details">
                            <p>Work and general inquiries</p>
                            <a class="number" href="tel:+918484902130">+(91) 8484902130</a>

                            <p class="time-header">
                                Assistance hours:
                            </p>
                            <p class="time">
                                Monday – Friday <br> 8 am to 8 pm EST
                            </p>
                        </div>
                    </div>
                    <div class="right-area single-wized">
                        <h5 class="title">Post Address</h5>
                        <div class="details">
                            <p>Service Office</p>
                            <a href="#"> 3rd Floor Office No 301, Gagan Capital, Balkrishna Sakharam Dhole Patil Rd, near Ruby hall clinic, exit gate, Sangamvadi, Pune, Maharashtra 411001</a>

                            <p class="headoffice">
                                Head Office
                            </p>
                            <p class="office">Pune, India</p>
                        </div>
                    </div>
                </div>
                <!-- map area right -->
            </div>
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15132.052767047035!2d73.886395!3d18.528306!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c18966585cb9%3A0xca2b7c3bd31af86e!2sArticle%20Academy%20for%20OET%20%7C%20IELTS%20%7C%20DHA%20%7C%20Prometric%20%26%20Medical%20Coding!5e0!3m2!1sen!2sin!4v1724738248218!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
</div>
<!-- map area end -->

<?php
include_once("footer.php");
?>


<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        const formData = new FormData(this);

        fetch('getfreequote.php', {
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