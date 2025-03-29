@extends('frontend_final.Layout.masters')
@section('content')
<!-- Hero Section -->
<div class="services-hero-section d-flex justify-content-center align-items-center">
    <div class="mt-5 text-center">
        <h1 class="header-text">Beat Turnitin’s
            <span class="gradient-text underline">AI </span> and
            <span class="yellow-text underline">Plagiarism</span>Triggers -
            Effortlessly Ace Your Papers
            <span class="text-purple">Every Time!</span> <br>
        </h1>
        <div class="container">
            <div class="d-flex align-items-center justify-content-center">


            </div>
        </div>
    </div>
</div>


<!-- Services Section-->
<section class="bg-dark section-card-phases">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1"
            class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class=""> Services </h1>
            <div class="position-absolute sub-text6">
                <span class="main-text"> Rise Above the Rest - </span> <br />
                <span class="text-purple"> Customized Papers for Every Deadline!</span>
                <div class="gradient-text services-sec-2">Tailored to Perfection: Custom Essays for Every Subject !<br>
                    From MLA to APA: Flawless Formatting, Every Format !</div>
            </div>

        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2"
            class="heartbeat-line end" />
    </div>


    <!-- Cards -->
    <div class="container services-sec-2-inner">
        <div class="row px-1 py-1 mt-4">
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg9.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Admission Essay </h5>
                            <p class="text-white mb-0">Effortlessly Stand Out: Personalized Admission Essays for College
                                Success!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.admissionessay') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg2.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Annotated Bibliography</h5>
                            <p class="text-white mb-0">Elevate Your Research with Our Expert Annotated Bibliographies!
                            </p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.annotatedbibliography') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg10.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Application Essay </h5>
                            <p class="text-white mb-0">Turn Dreams into Reality with Our Winning Application Essay
                                Formula!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.applicationessay') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg4.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Article Review </h5>
                            <p class="text-white mb-0">Outshine Your Peers: Get Flawless Article Reviews, Every Time!
                            </p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.articlereview') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg20.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Book Report </h5>
                            <p class="text-white mb-0">Uncover Literary Insights with Our Expert Book Reports!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.bookreport') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg18.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Business Plan </h5>
                            <p class="text-white mb-0">Business Planning Excellence: Your Pathway to Domination!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.businessplan') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg30.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Business Proposal </h5>
                            <p class="text-white mb-0">Craft Your Next Success: Business Proposals That Persuade and
                                Prevail!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.businessproposal') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg16.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Capstone Project </h5>
                            <p class="text-white mb-0">Excel in Academics: Capstone Projects That Impress and Influence!
                            </p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.capstoneproject') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 17 -->
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg17.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Case Study </h5>
                            <p class="text-white mb-0">Analyze and Achieve: Case Studies That Drive Understanding!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="./case-study.php"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg12.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Corporate </h5>
                            <p class="text-white mb-0">Corporate Excellence: Unleash Potential, Achieve Goals!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.corporate') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg5.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Creative Writing </h5>
                            <p class="text-white mb-0">Effortlessly Charm Audiences with Our Creative Writing Magic </p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.creativewriting') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg22.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Dissertation or Thesis Complete </h5>
                            <p class="text-white mb-0">Master Your Field with a Thesis That Sets You Apart!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.dissertationorthesiscomplete') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg11.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Journal Professional </h5>
                            <p class="text-white mb-0">From Data to Discovery: Journal Articles That Matter!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.journalprofessional') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg3.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Marketing Plan </h5>
                            <p class="text-white mb-0">Instantly Dominate Your Settings with Our Winning Plans!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.marketingplan') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg28.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Multiple Chapters </h5>
                            <p class="text-white mb-0">From Introduction to Conclusion: Cohesive Chapters That
                                Captivate! </p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.multiplechapters') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg27.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Only the Conclusion Chapter </h5>
                            <p class="text-white mb-0">Finish Strong: Conclusions That Synthesize and Impress!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.onlytheconclusionchapter') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">

                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg24.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Only the Hypothesis Chapter </h5>
                            <p class="text-white mb-0">Propose with Confidence: Hypotheses That Define Your Research!
                            </p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.onlythehypothesischapter') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg23.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Only the Introduction Chapter </h5>
                            <p class="text-white mb-0">First Impressions Count: Nail Your Introduction Every Time!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.onlytheliteraturereviewchapter') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg25.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Only the Literature Review Chapter </h5>
                            <p class="text-white mb-0">Lost in literature reviews? Gain depth and perspective with
                                expert guidance!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.onlytheliteraturereviewchapter') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg26.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Only the Methodology Chapter </h5>
                            <p class="text-white mb-0">Build Your Study Backbone: Methodology Chapters That Drive
                                Discovery!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.onlythemethodologychapter') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="">
                            <div class="card-header text-center service-card-header">
                                <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg6.png')}}">
                            </div>
                            <div class="card-body text-center mb-3 ">

                                <h5 class="yellow-text mt-2 fw-bolder">Peer Reviewed Journal </h5>
                                <p class="text-white mb-0">Effortlessly Navigate the Path to Academic Publication</p>

                            </div>
                            <div class="card-footer d-flex service-card-footer">
                                <div class="col-6 p-1">
                                    <a href="{{ route('front.peerreviewedjournal') }}"
                                        class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                        more</a>
                                </div>
                                <div class="col-6 p-1">
                                    <a href="{{ route('customer.customerPlaceOrder') }}"
                                        class="btn gradient-button w-100 footer-btn">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg7.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Poetry/Art Analysis </h5>
                            <p class="text-white mb-0">Dive into a Sea of Words: Poetry and Art Analysis That Touches
                                Souls!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.poetryartanalysis') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg13.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> PowerPoint Presentation </h5>
                            <p class="text-white mb-0">Captivate and Convince: PowerPoint Presentations That Perform</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.powerpointpresentation') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg21.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Research Paper </h5>
                            <p class="text-white mb-0">Discover the Secret to Stellar Research Papers Every Time!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.researchpaper') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg29.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Research Proposal </h5>
                            <p class="text-white mb-0">Lay the Groundwork: Research Proposals That Set the Stage for
                                Success! </p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.researchproposal') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg14.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Resume Crafting </h5>
                            <p class="text-white mb-0">Land Your Dream Job: Resumes That Open Doors Instantly!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.resumecrafting') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg31.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> SWOT Analysis </h5>
                            <p class="text-white mb-0">Master Market Strategy: SWOT Analyses That Deliver Insights! </p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.swotanalysis') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-card col-lg-3">
                <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                    <div class="">
                        <div class="card-header text-center service-card-header">
                            <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg19.png')}}">
                        </div>
                        <div class="card-body text-center mb-3 ">

                            <h5 class="yellow-text mt-2 fw-bolder"> Tailor-Made Essays </h5>
                            <p class="text-white mb-0">Unleash Academic Potential: Essays That Impress Every Time!</p>

                        </div>
                        <div class="card-footer d-flex service-card-footer">
                            <div class="col-6 p-1">
                                <a href="{{ route('front.tailormadeessays') }}"
                                    class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                    more</a>
                            </div>
                            <div class="col-6 p-1">
                                <a href="{{ route('customer.customerPlaceOrder') }}"
                                    class="btn gradient-button w-100 footer-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 service-card col-lg-3">
                    <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                        <div class="">
                            <div class="card-header text-center service-card-header">
                                <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg1.png')}}">
                            </div>
                            <div class="card-body text-center mb-3 ">

                                <h5 class="yellow-text mt-2 fw-bolder"> Term Paper </h5>
                                <p class="text-white mb-0">Boost Grades Instantly with Our Expert Term Paper Solutions!
                                </p>

                            </div>
                            <div class="card-footer d-flex service-card-footer">
                                <div class="col-6 p-1">
                                    <a href="{{ route('front.termpaper') }}"
                                        class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                        more</a>
                                </div>
                                <div class="col-6 p-1">
                                    <a href="{{ route('customer.customerPlaceOrder') }}"
                                        class="btn gradient-button w-100 footer-btn">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="col-md-4 service-card col-lg-3">
                    <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                        <div class="">
                            <div class="card-header text-center service-card-header">
                                <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg15.png')}}">
                            </div>
                            <div class="card-body text-center mb-3">

                                <h5 class="yellow-text mt-2 fw-bolder"> Website Content </h5>
                                <p class="text-white mb-0">Turn Clicks into Customers: Content That Drives Action!</p>

                            </div>
                            <div class="card-footer d-flex service-card-footer">
                                <div class="col-6 p-1">
                                    <a href="{{ route('front.websitecontent') }}"
                                        class="learn-more text-decoration-none w-100 d-flex justify-content-center footer-btn">Learn
                                        more</a>
                                </div>
                                <div class="col-6 p-1">
                                    <a href="{{ route('customer.customerPlaceOrder') }}"
                                        class="btn gradient-button w-100 footer-btn">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-card col-lg-3">
                    <div class="card-style myCardStyles service-cards d-flex align-items-end custom-height">
                        <div class="">
                            <div class="card-header text-center service-card-header">
                                <img src="{{ asset('fronted_final/assets/images/services/ServiceCardImg8.png')}}">
                            </div>
                            <div class="card-body text-center mb-3 ">

                                <h5 class="yellow-text mt-2 fw-bolder"> White Paper</h5>
                                <p class="text-white mb-0">Expertise in Every Line: White Papers That Define Success!
                                </p>

                            </div>
                            <div class="card-footer d-flex service-card-footer">
                                <div class="col-6 p-1">
                                    <a href="{{ route('front.whitepaper') }}"
                                        class="learn-more d-flex justify-content-center w-100 footer-btn text-decoration-none">Learn
                                        more</a>
                                </div>
                                <div class="col-6 p-1">
                                    <a href="{{ route('customer.customerPlaceOrder') }}"
                                        class="btn gradient-button w-100 footer-btn">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 9 -->

            <!-- Card 10 -->



            <!-- Card 11 -->

            <!-- Card 12 -->

            <!-- Card 13 -->

            <!-- Card 14 -->

            <!-- Card 15 -->

            <!-- Card 16 -->

            <!-- Card 18 -->

            <!-- Card 19 -->

            <!-- Card 20 -->





        </div>
    </div>
</section>


<!-- Section Pricing -->
<section class="bg-dark section-card-phases ">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1"
            class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Why Choose Us</h1>
            <div class="position-absolute sub-text1">
                <span class="main-text ">Elevate Your Academic Game -</span> <br />
                <span class="main-text text-purple">Expertly Crafted Papers, Just a Click Away !</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2"
            class="heartbeat-line end" />
    </div>
    <span
        class="mt-5 invisible gradient-text d-flex justify-content-center align-items-center text-center  heading-another"
        style="font-weight: 500;"> Plan Ahead, Pay Less - Early Birds Reap Rewards!<br />
        Last-Minute? No Problem - Fast, Fair Pricing Guaranteed!
    </span>

    <div class="container-lg my-4 px-5">
        <!-- Part 1 -->
        <section class="section-skepticism bordered-card-2 mb-4 px-4 pb-4">
            <div class="content">
                <div class="heading-container">
                    <h1 class="main-text mb-3 fw-bold"><span
                            class="yellow-text underline fw-bold">Plagiarism-Free</span> Submissions</h1>
                </div>
                <p class="description">Get papers that pass Turnitin checks, ensuring academic integrity.</p>
            </div>
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/why-choose-us-img-1.png')}}" alt="Description">
            </div>
        </section>

        <!-- Part 2 -->
        <section class="section-skepticism bordered-card-3 mb-4 px-4 pb-4">

            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/ai-proof.png')}}" alt="Description">
            </div>
            <div class="content">
                <div class="heading-container">
                    <h1 class="main-text mb-3 fw-bold"><span class="gradient-text underline fw-bold">AI-Proof</span>
                        Papers</h1>
                </div>
                <p class="description">Outsmart Turnitin’s AI with essays that evade detection, every time.</p>
            </div>
        </section>

        <!-- Part 3 -->
        <section class="section-skepticism bordered-card-2 mb-4 px-4 pb-4">
            <div class="content">
                <div class="heading-container">
                    <h1 class="main-text text-white mb-3 fw-bold">Review Dual <span class="yellow-text fw-bold">Reports</span>
                    </h1>
                </div>
                <p class="description">Review your <span class="yellow-text underline fw-bold">Plagiarism</span> and
                    <span class="gradient-text fw-bold underline">AI-Detection</span> Report before university
                    submission for peace of mind.</p>
            </div>
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/dual-reports.png')}}" alt="Description">
            </div>
        </section>

        <!-- Part 4 -->
        <section class="section-skepticism bordered-card-3 mb-4 px-4 pb-4">
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/academic-level.png')}}" alt="Description">
            </div>
            <div class="content">
                <div class="heading-container">
                    <h1 class="main-text mb-3 fw-bold">Academic Level <span class="yellow-text fw-bold">Mastery</span>
                    </h1>
                </div>
                <p class="description">From undergrad to PhD, get papers that meet your academic level.</p>
            </div>
        </section>

        <!-- Part 5 -->
        <section class="section-skepticism bordered-card-2 mb-4 px-4 pb-4">
            <div class="content">
                <div class="heading-container">
                    <h1 class="main-text mb-3 fw-bold">Formatting <span class="yellow-text fw-bold">Flexibility</span>
                    </h1>
                </div>
                <p class="description">Perfectly formatted essays in MLA, APA, or any style you require.</p>
            </div>
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/formating.png')}}" alt="Description">
            </div>
        </section>

        <!-- Part 6 -->
        <section class="section-skepticism bordered-card-3 mb-4 px-4 pb-4">
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/time-saving.png')}}" alt="Description">
            </div>
            <div class="content">
                <div class="heading-container">
                    <h1 class="main-text mb-3 fw-bold">Time-<span class="yellow-text fw-bold">Saving</span>
                    </h1>
                </div>
                <p class="description">Save precious time with quick, reliable essay solutions that deliver results.
                </p>
            </div>
        </section>

        <!-- Part 7 -->
        <section class="section-skepticism bordered-card-2 mb-4 px-4 pb-4">
            <div class="content">
                <div class="heading-container">
                    <h1 class="main-text mb-3 fw-bold">Confidentiality <span class="yellow-text fw-bold">Assured</span>
                    </h1>
                </div>
                <p class="description">Your secret to academic success is safe with us, always.</p>
            </div>
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/confedentially.png')}}" alt="Description">
            </div>
        </section>

        <div class="d-flex justify-content-center align-items-center mt-4">

            <a href="{{ route('customer.customerPlaceOrder') }}"
                class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
        </div>
        <!-- <div class="text-center p-4 bg-card-1">
                    <h1 class="main-text text-white mb-3 fw-bold">Bulk Order 
                        <span class="yellow-text underline fw-bold">Alternatives</span>
                    </h1>
                    <p class="yellow-text">
                        Got work in bulk? Let us guide you towards the perfect solution. Our Packages Pricing offers tailored plans to suit your needs, providing maximum value for your academic endeavors.
                    </p>
                    <button class="px-4 py-2 gradient-button"> Order Now</button>
                </div> -->
    </div>

</section>

<!-- Section FAQs -->
<section class="bg-dark section-card-phases pt-0">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1"
            class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading text-white">Frequently Asked Questions</h1>
            <div class="position-absolute sub-text1">
                <span class="main-text text-purple">(FAQs)</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2"
            class="heartbeat-line end" />
    </div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="accordion accordion-flush" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                1. What services do you offer?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We offer a wide range of academic writing services, including essays, research papers,
                                dissertations, and more. Each service is tailored to meet individual academic
                                requirements.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. Can you handle papers for any academic subject?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, our team of experts spans all academic fields, from humanities to science and
                                engineering, ensuring that we can handle any subject you need assistance with.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. How do I know which service is right for me?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our customer support team can help you determine the best service based on your academic
                                needs and project requirements. <a class="text-decoration-none"
                                    href="https://elementary-solutions.com/writing-space-website/contactus.php">Contact
                                    us</a> for a personalized consultation.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4. What makes your writing services unique?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our services are distinguished by our commitment to quality, plagiarism-free work,
                                expert writers, and a personalized approach to each assignment.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                5. How can you ensure the quality of your written work?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We employ a rigorous quality assurance process that includes expert writing, peer
                                reviews, and plagiarism checks to ensure the highest standards.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                6. What if I'm not satisfied with the work delivered?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We offer free revisions until you are satisfied with the final product. Our goal is to
                                ensure that every client receives work that meets their order requirements.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                7. Are your services confidential?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Absolutely. We maintain strict confidentiality and privacy policies to ensure that all
                                client interactions and transactions are secure and private.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                8. Do you provide services for non-academic content?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, we also offer professional writing services including business plans, white papers,
                                and website content creation.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                9. How do I place an order for a service?
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can place an order through our website by filling out the <a
                                    class="text-decoration-none"
                                    href="https://elementary-solutions.com/writing-space-website/sign-up.php">Order
                                    Form</a> with your project details or you can contact our customer service for
                                assistance.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                10. Can you deliver work on tight deadlines?
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, we are equipped to handle urgent orders without compromising on quality. Please
                                specify your deadline when placing an order.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                11. What is included in the price of your services?
                            </button>
                        </h2>
                        <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                The price includes research, writing, plagiarism checks, revisions, and 24/7 customer
                                support. There are no hidden fees or additional charges.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-5">

                <a href="{{ route('customer.customerPlaceOrder') }}"
                    class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
            </div>
        </div>
    </div>
    @endsection