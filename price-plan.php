<?php
include_once('header.php');
?>

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center mt--100">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Plans & Price</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.php">Home</a>
                        <span> / </span>
                        <a href="price-plan.php" class="active">Plans & Price</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


    <!-- rts pricing area start -->
    <div class="rts-pricing-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-tab-button-area">
                        <span class="pricing-sub"> <strong>Choose Our Tailored Plans</strong></span>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="cpass-tab" data-bs-toggle="tab" data-bs-target="#cpass_plan" type="button" role="tab" aria-controls="cpass_plan" aria-selected="true" onclick="toggleContent('cpass_plan')">cPaaS Plan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="api-tab" data-bs-toggle="tab" data-bs-target="#api_plan" type="button" role="tab" aria-controls="api_plan" aria-selected="false" onclick="toggleContent('api_plan')">API Plan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="speech-tab" data-bs-toggle="tab" data-bs-target="#speech_to_text" type="button" role="tab" aria-controls="speech_to_text" aria-selected="false" onclick="toggleContent('speech_to_text')">Speech to Text Plan</button>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-12" >
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="cpass_plan">
        <h3 class="text-center mb-2 plans-one__title">CPaaS Plan</h3>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead style="background-color: #ae295e; color: #fff;">
                        <tr>
                            <th style="width: 25%;">Features</th>
                            <th style="width: 18%;">Basic Connect</th>
                            <th style="width: 18%;">Gold Connect</th>
                            <th style="width: 18%;">Premium Connect</th>
                            <th style="width: 18%;">Advanced Connect</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monthly charges per user</td>
                            <td>₹ 999</td>
                            <td>₹ 2499</td>
                            <td>₹ 3499</td>
                            <td>₹ 4999</td>
                        </tr>
                        <tr>
                            <td>Min Number of User</td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Contract Period</td>
                            <td>1 Year</td>
                            <td>1 Year</td>
                            <td>1 Year</td>
                            <td>1 Year</td>
                        </tr>
                        <tr>
                            <td>Per Seat/Month Billed Anually</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Email, Voice, FAX, SMS, Internal Chat,<br> External Chat, Video Conference</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>AI Chatbots</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Multi Campaign</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Omnichannel Inbox</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Skill-Based Call Routing Automation</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Multi Reports</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Campaign Management</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Social Media Integrations</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Call Transfer, Conference</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Multi Follow Ups</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Web Phone Based Calling</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Real Time Reporting</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Real Time Listen/ Barge/ Whisper</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Call Recordings</td>
                            <td>30 Day Backup</td>
                            <td>45 Day Backups</td>
                            <td>45 Day Backups</td>
                            <td>60 Day Backups</td>
                        </tr>
                        <tr>
                            <td>Support</td>
                            <td>24/5</td>
                            <td>24/5</td>
                            <td>24/5</td>
                            <td>24/7</td>
                        </tr>
                        <tr>
                            <td>TAT</td>
                            <td>120 Min</td>
                            <td>60 Min</td>
                            <td>60 Min</td>
                            <td>30 Min</td>
                        </tr>
                        <tr>
                            <td>Support Type</td>
                            <td>Mail Support</td>
                            <td>Mail & Call Support</td>
                            <td>Mail & Call Support</td>
                            <td>Mail, Call & Whatsapp Support</td>
                        </tr>
                        <tr>
                            <td>Dedicated Engineer</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>USA Calling</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Global 40 Countries Calling*</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Global 60 Countries Calling*</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>FAX Number</td>
                            <td>No</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>USA SMS Number</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>USA DID Number</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Voice Mail to Email</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>IVR</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Time Based Call Routing</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Voice Mail to Text</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Call Recording to Text</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>QA Team AI Module</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Payment Terms</td>
                            <td>Yearly</td>
                            <td>Yearly</td>
                            <td>Yearly</td>
                            <td>Yearly</td>
                        </tr>
                        <tr>
                            <td>API Console</td>
                            <td>One Time Cost</td>
                            <td>One Time Cost</td>
                            <td>One Time Cost</td>
                            <td>One Time Cost</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>

<div class="tab-pane fade" id="api_plan">
        <h3 class="text-center mb-4 plans-one__title">API Plan</h3>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead style="background-color: #ae295e; color: #fff;">
                        <tr>
                            <th style="width: 25%;">API Types</th>
                            <th style="width: 18%;">Subscription Charges</th>
                            <th style="width: 18%;">Payment Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Click2Call API (Without Trunk)</td>
                            <td>₹ 4999</td>
                            <td>One Type</td>
                        </tr>
                        <tr>
                            <td>Chat API</td>
                            <td>₹ 4999</td>
                            <td>₹ One Time</td>
                        </tr>
                        <tr>
                            <td>Chatbot API with Setup</td>
                            <td>₹ 999</td>
                            <td>Monthly</td>
                        </tr>
                        <tr>
                            <td>EFAX for USA</td>
                            <td>₹ 1499</td>
                            <td>₹ Monthly</td>
                        </tr>
                        <tr>
                            <td>WebFAX for USA</td>
                            <td>₹ 1499</td>
                            <td>Monthly</td>
                        </tr>
                        <tr>
                            <td>ESMS for USA</td>
                            <td>₹ 1499</td>
                            <td>₹ Monthly</td>
                        </tr>
                        <tr>
                            <td>WebSMS for USA</td>
                            <td>₹ 1499</td>
                            <td>Monthly</td>
                        </tr>
                        <tr>
                            <td>CDR API</td>
                            <td>₹ 4999</td>
                            <td>One Time</td>
                        </tr>
                        <tr>
                            <td>Call Recording API</td>
                            <td>₹ 1499</td>
                            <td>One Time</td>
                        </tr>
                        <tr>
                            <td>Call Event Log API</td>
                            <td>₹ 4999</td>
                            <td>One Time</td>
                        </tr>
                        <tr>
                            <td>Voice Logger</td>
                            <td>₹ 999</td>
                            <td>Monthly</td>
                        </tr>
                        <tr>
                            <td>Video Conference (Default 5 Connections)</td>
                            <td>₹ 999</td>
                            <td>Monhtly</td>
                        </tr>
                        <tr>
                            <td>Custom IVR with CRM Integrations</td>
                            <td>Based On the Flow</td>
                            <td>Based On the Flow</td>
                        </tr>
                        <tr>
                            <td>WebRTC Phone (Upto 30 Users)</td>
                            <td>₹ 4999</td>
                            <td>Monthly</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>

<div class="tab-pane fade" id="speech_to_text">
        <h3 class="text-center mb-4 plans-one__title">Speech to Text API Plan</h3>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead style="background-color: #ae295e; color: #fff;">
                        <tr>
                            <th style="width: 25%;">Features</th>
                            <th style="width: 18%;">Basic </th>
                            <th style="width: 18%;">Gold</th>
                            <th style="width: 18%;">Platinum </th>
                            <th style="width: 18%;">Unlimited</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monthly Charges</td>
                            <td>₹ 999</td>
                            <td>₹ 2999</td>
                            <td>₹ 4999</td>
                            <td>₹ 9999</td>
                        </tr>
                        <tr>
                            <td>Number of Min</td>
                            <td>1000</td>
                            <td>5000</td>
                            <td>10000</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td>Accuracy</td>
                            <td>80%</td>
                            <td>90%</td>
                            <td>95%</td>
                            <td>95%</td>
                        </tr>
                        <tr>
                            <td>Payment Terms</td>
                            <td>Yearly</td>
                            <td>Half Yearly</td>
                            <td>Half Yearly</td>
                            <td>Quaterly</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
</div>
<div class="text-center mt--50 mb--80">
    <a href="buy-now.php" class="rts-btn btn-primary color-h-black mt-5 mb-5">Buy Now</a>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts pricing area end -->


    <!-- start customers faq section -->
    <div class="rts-faq-area rts-section-gap" style="margin-top: -70px !important;">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-xl-1 order-md-2 order-sm-2 order-2">
                    <div class="accordion-area">
                        <div class="title-area">
                            <span>WHY CHOOSE US</span>
                            <h2 class="title">Your One-Stop Solution for AI and More</h2>
                        </div>
                        <div class="accordion-one-inner">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span>01.</span>What pricing models does VoiceBot Technologies offer for its products and services?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        At VoiceBot Technologies, we offer flexible pricing models to meet the diverse needs of our clients. We provide both subscription-based and one-time cost options, ensuring you can choose the model that aligns with your business requirements.                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02.</span> Can I customize my plan based on specific features my business needs?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Absolutely! We understand that every business is unique. Our pricing structure allows for customization, enabling you to tailor your plan based on the specific features and functionalities that align with your business goals.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span>03.</span> Is there a trial period available for your services?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Yes, we believe in giving our clients the opportunity to experience the value of our solutions firsthand. We offer trial periods for selected services, allowing you to assess the benefits before making a long-term commitment.                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span>04.</span> How does your pricing structure accommodate the scalability needs of growing businesses?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Our pricing structure is designed to scale with your business. Whether you're a small startup or a large enterprise, our solutions are scalable, and our pricing adjusts accordingly. This ensures that you only pay for the resources you need.                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-xl-2 order-md-1 order-sm-1 order-1">
                    <div class="faq-thumbnail">
                        <img src="assets/images/faq/01.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End customers faq section -->
    <script>
    function toggleContent(target) {
        const contents = document.querySelectorAll('.hidden-content');
        contents.forEach(content => content.style.display = 'none');

        document.getElementById(target + '_content').style.display = 'block';

        const buttons = document.querySelectorAll('.enquire-button1');
        buttons.forEach(button => button.classList.remove('active'));

        const clickedButton = document.querySelector(`[data-target="${target}"]`);
        clickedButton.classList.add('active');
    }
</script>
<?php
include_once('footer.php');
?>