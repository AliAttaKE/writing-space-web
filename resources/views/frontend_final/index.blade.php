@extends('frontend_final.Layout.masters')
@section('content')

<style>
    
</style>

<div class="hero-section d-flex justify-content-center align-items-center">
    <div class="hero-text text-center">
        <h1 class="header-text">
            Transform Your <span class="gradient-text underline">Grades</span> with <br>
            Our <span class="yellow-text underline">Plagiarism</span><span class="yellow-text">-Free,</span>
        </h1>
        <div class="d-flex align-items-center justify-content-center">
            <h1 class="header-text gradient-text me-2 underline">AI-Proof </h1>
            <h1 class="header-text">Papers!</h1>
        </div>


        <div class="d-flex justify-content-center align-items-center mt-4 turnitin">
            <img src="{{ asset('fronted_final/assets/images/Turnitin_logo_.png')}}" alt="Turnitin_logo_" />
            <img src="{{ asset('fronted_final/assets/images/Turnitin_log2.png')}}" alt="Turnitin_logo_" />
        </div>

        <div class="d-flex justify-content-center align-items-center mt-4 turnitin-2">
            <img src="{{ asset('fronted_final/assets/images/Group.png')}}" alt="Turnitin_logo_" />
        </div>
        <div class="heartbeat-heading d-flex justify-content-between align-items-center home-page-wave">
            <img src="{{ asset('fronted_final/assets/images/heartFullLine.png')}}" alt="heart-line 1" class="w-100" />
        </div>
    </div>
</div>
<!-- Cards Section -->
<section class="bg-dark section-card-phases">



    <!-- TEST -->
    <div class="container">
        <div class="text-center pt-5">
            <div>
                <p class="sectionSubHeading2 mb-0 mt-5"><span class="underline yellow-text">Plagiarism</span> Worries? <span class="gradient-text underline"> AI Detection</span> Stress? </p>
            </div>
            <div>
                <p class="sectionSubHeading2 text-purple my-0">NEVER AGAIN!</p>

                <div class="sectionSubHeading2 text-white">
                    <p>Signup now to validate <span class="gradient-text underline">AI-Proof</span>, <span class="underline yellow-text">Plagiarism</span>-Free Custom Papers!</p>
                </div>
            </div>
        </div>



        <div class="container-lg card-style cardStyles">
            <!-- Card -->
            <div class="card-body">
                <div class="row gx-5">
                    <div class="col-12 col-lg-4 pe-lg-4 ">
                        <h5 class="cardHeading mb-0">Quick Access</h5>
                        <span class="cardSubHeading mb-0">To Success</span>
                        <p class="cardTxt text-start">Sign up in seconds, no credit card needed, and immediately
                            access
                            the pathway to academic excellence.</p>
                    </div>
                    <div class="col-12 col-lg-4 pe-lg-4">
                        <h5 class="cardHeading">Transparent</h5>
                        <h5 class="cardSubHeading">Trust Building</h5>
                        <p class="cardTxt text-start">Validate our claims through verifiable resources before
                            spending a
                            dime. Your trust, earned first.</p>
                    </div>
                    <div class="col-12 col-lg-4 pe-lg-4">
                        <h5 class="cardHeading">Risk-Free</h5>
                        <h5 class="cardSubHeading text-start">Trial</h5>
                        <p class=" cardTxt text-start">Dive in without worry; our no upfront payment policy means
                            you
                            explore our services freely.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="text-center sectionHeading2">
                <p class="sectionSubHeading1">Sample Papers</p>
            </div>
        </div>
<style>

.card-style {
    min-height: 350px; /* Adjust based on content */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 20px;
}

.myCardBody {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}



</style>

  @include('cms_pages.slider');
        <!-- Cards -->
        <!--<div class="container px-0 position-relative">-->
        <!--    <div class="owl-carousel">-->
        <!--        @if(!empty($papers))-->
        <!--            @foreach ($papers as $paper)-->
        <!--                <div class="mb-4">-->
        <!--                    <a href="{{ route('customer.show.libraries') }}" class="text-decoration-none">-->
                                <!-- Card -->
        <!--                        <div class="card-style myCardStyles">-->
        <!--                            <div class="card-body myCardBody">-->
        <!--                                <h5 class="yellow-text fw-bold">{{ substr($paper->paper_title, 0, 12) }}..</h5>-->
        <!--                                <h5 class="myCardHeading">{{ $paper->subject_topic }}</h5>-->
                                        
        <!--                                <div class="row myCardTxt">-->
        <!--                                    <div class="col-6">-->
        <!--                                        <p class="card-text">Format: {{ $paper->citation }}</p>-->
        <!--                                        <p class="card-text">Pages: 5</p>-->
        <!--                                        <p class="card-text">Sources: {{ $paper->word_count }}</p>-->

        <!--                                        <img src="{{ asset('fronted_final/assets/images/image.png') }}" alt="Turnitin Image" style="-->
        <!--                                        margin-left: 106px;-->
        <!--                                    ">-->
                                                
        <!--                                        <p class="card-text d-flex align-items-center justify-content-between mb-3"> <!-- Added justify-content to space out items -->-->
        <!--                                            <span class="me-2">AI_Detection:</span>-->
        <!--                                            <button class="btn btn-primary my-btn" style="background-color: #007bff; border: none; min-width: 120px; margin-left: 13px;">-->
        <!--                                                {{ $paper->ai_report }}%-->
        <!--                                            </button>-->
        <!--                                        </p>-->
                                                
        <!--                                        <p class="card-text d-flex align-items-center justify-content-between mb-3"> <!-- Same adjustment here -->-->
        <!--                                            <span class="me-2">Plagiarism:</span>-->
        <!--                                            <button class="btn btn-secondary my-btn" style="background-color: #dc3545; border: none; min-width: 120px; margin-left: 24px;">-->
        <!--                                                {{ $paper->plagiarism }}%-->
        <!--                                            </button>-->
        <!--                                        </p>-->
        <!--                                    </div>-->
        <!--                                </div>-->
                                        
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            @endforeach-->
        <!--        @endif-->
        <!--    </div>-->
            
            <!-- Custom Navigation for Owl Carousel -->
        <!--    <div class="owl-nav">-->
        <!--        <button type="button" role="presentation" class="owl-prev">-->
        <!--            <i class="fa-solid fa-arrow-left"></i>-->
        <!--        </button>-->
        <!--        <button type="button" role="presentation" class="owl-next">-->
        <!--            <i class="fa-solid fa-arrow-right"></i>-->
        <!--        </button>-->
        <!--    </div>-->
        <!--</div>-->
        

        <div class="container">
            <div class="text-center">
                <h1 class="fw-bolder text-white">Base Your Trust on <span class="underline yellow-text">Verifiable</span> Outcomes!</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-5">

            
                               
            <a href="{{ route('customer.customerPlaceOrder') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
                           
          

       


        <a href="{{ route('front.samplepaper') }}" class="gradient-btn border-0 ms-4 text-decoration-none btn-custom-width">Learn More</a>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-4">
        <p class="text-white text-center">Sign up in seconds, no credit card needed!</p>
    </div>
            
</section>


<!-- Cards Section -->
<section class="bg-dark section-card-phases px-1">
    <div class=" d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container text-container-custom flex-grow-1 text-center position-relative">
            <span class="main-text ">Beat the <span class="yellow-text underline">Plagiarism</span> Check -
            <!--<h1 class="">Beat the <span class="yellow-text">Plagiarism</span> Check -</h1>-->
            <div class="position-absolute sub-text d-flex w-100 justify-content-center mt-2">
                <span class="main-text text-purple">Order <span class="gradient-text underline">AI-Proof</span> Academic Help
                    Now!</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>


    <div class="container-lg my-4 px-5">
        <!-- Part 1 -->
        <section class="section-skepticism custom-pad">
            <div class="content">
                <div class="heading-container">
                    <h2 class="heading-val">From Skepticism</h2>
                    <h2 class="heading-gradient"> to Belief:</h2>
                </div>
                <p class="description">Transition from doubt to trust by experiencing unique, <span class="yellow-text font-we-900 underline">Plagiarism-Free,</span> <span class="gradient-text font-we-900 underline">AI Proof
                        Papers</span> proving
                    the value and integrity of our
                    educational solutions.</p>
            </div>
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/fomSkepticism.png')}}" alt="Description">
            </div>
        </section>

        <!-- Part 2 -->
        <section class=" section-skepticism">
            <div class="image-container d-flex justify-content-start">
                <img src="{{ asset('fronted_final/assets/images/fromBeliefTo.png')}}" alt="Description">
            </div>
            <div class=" content ps-5">
                <div class="heading-container">
                    <h2 class="heading-val">From Belief to </h2>
                    <h2 class="heading-gradient"> Action:</h2>
                </div>
                <p class="description">Move from trust to engagement by trying customized academic services and
                    diverse materials, demonstrating the practical effectiveness and value of our offerings.</p>
            </div>
        </section>

        <!-- Part 3 -->
        <section class="section-skepticism">
            <div class="content">
                <div class="heading-container">
                    <h2 class="heading-val">From Trial to </h2>
                    <h2 class="heading-gradient"> Trust:</h2>
                </div>
                <p class="description">Solidify trust through experiencing the full range of our academic support,
                    including cost-effective bulk options and comprehensive services, highlighting financial and
                    academic value.</p>
            </div>
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/fromTrialTo.png')}}" alt="Description">
            </div>
        </section>

        <!-- Part 4 -->
        <section class="section-skepticism">
            <div class="image-container d-flex justify-content-start">
                <img src="{{ asset('fronted_final/assets/images/fromTrustTo.png')}}" alt="Description">
            </div>
            <div class="  content ps-5">
                <div class="heading-container">
                    <h2 class="heading-val">From Trust to </h2>
                    <h2 class="heading-gradient"> Loyalty:</h2>
                </div>
                <p class="description">Deepen engagement with flexible, renewable academic packages and long-term
                    resources,
                    reflecting a commitment to sustained academic growth and success.</p>
            </div>
        </section>

        <!-- Part 5 -->
        <section class="section-skepticism">
            <div class="content">
                <div class="heading-container">
                    <h2 class="heading-val">From Loyalty to </h2>
                    <h2 class="heading-gradient"> Advocacy:</h2>
                </div>
                <p class="description">Transform into an active community member, promoting ethical academic
                    practices and supporting peers,
                    showcasing the transition from personal benefit to communal contribution.
                </p>
            </div>
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/fromLoyalityTo.png')}}" alt="Description">
            </div>
        </section>

        <div class="d-flex justify-content-center align-items-center mt-5">

                               
            <a href="{{ route('customer.customerPlaceOrder') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
                           
          
    </div>
    </div>

</section>


<!-- Section 3 -->
<section class="container-fluid bg-dark section-3">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Why Partner With Us</h1>
            <div class="position-absolute sub-text1">
                <span class="main-text ">Transform Your Academics - </span> <br />
                <span class="main-text">Outsmart, Save Time, and Skyrocket <span class="gradient-text underline">Grades</span>!
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>

    <div class="container-lg mt-margin-2 px-5 custom-pad">
        <section class=" section-cards- jus pad-custom-0">
            <div class=" content">
                <div class="heading-container">
                    <h2 class="heading-val">Outsmart Turnitin</h2>
                    <h3 class="lighter-gradient">Effortlessly:</h3>
                </div>
                <ul class="list-view-description  p-3">
                    <li>Stay ahead with our advanced solutions.</li>
                    <li> Get <span class="yellow-text font-we-900 underline">Plagiarism-Free</span> and <span class="gradient-text font-we-900 underline">
                            AI-Proof</span></li>
                </ul>
            </div>
            <div class="image-container">
                <img src="{{ asset('fronted_final/assets/images/outSmart.png')}}" alt="Description" class="Big-image">
            </div>
        </section>

        <section class="section-cards-">
            <div class="image-container">
                <img src="{{ asset('fronted_final/assets/images/instantTime.png')}}" alt="Description" class="Big-image">
            </div>
            <div class="me-5">
                <div class="heading-container">
                    <h2 class="heading-val"> Instant Time-Saving </h2>
                    <h3 class="lighter-gradient">Academic Aid:</h3>
                </div>
                <ul class="list-view-description  p-3">
                    <li>Reduce stress and fear of failure. </li>
                    <li>Quick, high-quality paper delivery. </li>
                    <li>Smooth, fast ordering process. </li>
                </ul>
            </div>
        </section>

        <section class="section-cards- ">
            <div class="content">
                <div class="heading-container">
                    <h2 class="heading-val"> Skyrocket Your </h2>
                    <h3 class=" "><span class="lighter-gradient-2 underline">Grades:</span></h3>
                </div>
                <ul class="list-view-description  p-3">
                    <li>Boost <span class="gradient-text font-we-900 underline">Grades</span> with expert-written papers.</li>
                    <li>Unlock academic potential.</li>
                    <li>Get customized, expert-tailored submissions.</li>
                </ul>
            </div>
            <div class="image-container">
                <img src="{{ asset('fronted_final/assets/images/skyrocket.png')}}" alt="Description" class="Big-image">
            </div>
        </section>

        <section class="section-cards-">
            <div class="image-container">
                <img src="{{ asset('fronted_final/assets/images/unlockYour.png')}}" alt="Description" class="Big-image">
            </div>
            <div class="me-5">
                <div class="heading-container">
                    <h2 class="heading-val"> Unlock Your Academic </h2>
                    <h3 class="lighter-gradient">and Career Potential:</h3>
                </div>
                <ul class="list-view-description  p-3">
                    <li> Enhance your academic portfolio.</li>
                    <li> Lay the groundwork for future career success.</li>
                    <li> Open doors to new networking opportunities.</li>
                </ul>
            </div>
        </section>

        <section class="section-cards-">
            <div class="content">
                <div class="heading-container">
                    <h2 class="heading-val"> 24/7 Support for </h2>
                    <h3 class="lighter-gradient">Success:</h3>
                </div>
                <ul class="list-view-description  p-3">
                    <li> Always available support.</li>
                    <li> Cost-effective academic investments.</li>
                    <li> Guaranteed confidentiality and anonymity. </li>
                </ul>
            </div>
            <div class="image-container">
                <img src="{{ asset('fronted_final/assets/images/support247.png')}}" alt="Description" class="Big-image">
            </div>
        </section>

    </div>
    <!-- Learn More Button -->
    <div class="d-flex justify-content-center align-items-center mt-5">
       
                               
            <a href="{{ route('customer.customerPlaceOrder') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
                           
           
    </div>
</section>


<!-- Section Pricing -->
<section class="bg-dark section-card-phases ">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Pricing</h1>
            <div class="position-absolute sub-text1">
                <span class="main-text ">Get the Best Price, Every Time - </span> <br />
                <span class="main-text text-purple">Bespoke Papers, Ready When You Are!!</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>
    <span class="mt-5-custom gradient-text d-flex justify-content-center align-items-center text-center  heading-another" style="font-weight: 500;"> Plan Ahead, Pay Less - Early Birds Reap Rewards!<br />
        Last-Minute? No Problem - Fast, Fair Pricing Guaranteed!
    </span>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="">
                    <div class="row g-3 px-5-custom">
                        @if ($pricing)
                            @foreach ($pricing as $p)
                                <div class="col-12 listview py-2 px-3">
                                    <div class="row d-flex justify-content-start align-items-center max-width-text">
                                        <div class="col-4 service-title">{{ $p->text }}</div>
                                        <div class="col-8 service-description">
                                            <span class="underline"> @if ($p->min == '15')
                                                {{ $p->min }} {{ $p->duration_type }} or {{ $p->max }}
                                               
                                                @else
                                                {{ $p->min }} - {{ $p->max }} {{ $p->duration_type }}
                                                
                                                @endif</span> ahead? Enjoy the lowest rate at
                                            <span class="underline">{{ $p->cost }} ${{ $p->cost_per_page }}/page</span>, {{ $p->page_limit }} page limit.
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        

                       

                        <!-- Repeat for each service -->
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-5">

                               
            <a href="{{ route('customer.customerPlaceOrder') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
                           
           
        <a href="{{ route('front.subscriptions') }}" class="gradient-btn border-0 ms-4 text-decoration-none btn-custom-width">Learn More</a>
    </div>
        </div>
    </div>

</section>


<!-- Section Our Packages -->
<section class="bg-dark section-card-phases pt-0">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Our Packages</h1>
            <div class="position-absolute sub-text1">
                <span class="main-text ">Maximize Savings, Minimize Stress - </span> <br />
                <span class="main-text text-purple">One Price, Year-Long Flexibility!</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>
    <span class="mt-5-custom gradient-text d-flex justify-content-center align-items-center text-center  heading-another" style="font-weight: 500;">
        Buy Bulk, Save Big - Unlock Year-Round Academic Freedom!<br />
        Flat Rates, No Surprises - Enjoy Predictable Pricing on Your Terms!

    </span>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="">
                    <div class="row g-3 px-5-custom">
                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="col-4 service-title">Bulk Buy Basics: </div>
                                <div class="col-8 service-description">
                                    Purchase <span class="underline"> 50 pages</span> at
                                    <span class="underline"> $20/page</span>, perfect for regular academic needs.
                                </div>
                            </div>
                        </div>

                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="col-4 service-title">Smart Saver Strategy: </div>
                                <div class="col-8 service-description">
                                    <span class="underline"> 100 pages</span> at
                                    <span class="underline"> $18/page</span>, balancing quantity and budget
                                    efficiently.
                                </div>
                            </div>
                        </div>

                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="col-4 service-title">Ultimate Value Vault: </div>
                                <div class="col-8 service-description">
                                    <span class="underline"> 200 pages</span> at just
                                    <span class="underline">$16/page</span>, for extensive, long-term projects.
                                </div>
                            </div>
                        </div>

                        <!-- Repeat for each service -->
                    </div>

                    <div class="row g-3 px-5-custom">
                        <div class="col-12 listview py-2 px-3" style="visibility:hidden;">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="col-4 service-title"> ggggggg </div>
                                <div class="col-8 service-description">
                                    <span class="underline"> 15+ days</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="col-4 service-title">Deadline-Proof Deals: </div>
                                <div class="col-8 service-description"> Flat-rate pricing means no rush fees, ever.
                                </div>
                            </div>
                        </div>

                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="col-4 service-title">One-Year Validity: </div>
                                <div class="col-8 service-description"> Use your pages over 12 months, adapting to
                                    your schedule. </div>
                            </div>
                        </div>
                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="col-4 service-title">Rollover Rights: </div>
                                <div class="col-8 service-description"> Unused pages? Roll them over upon request,
                                    never lose value. </div>
                            </div>
                        </div>
                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="col-4 service-title">Predictable Pricing: </div>
                                <div class="col-8 service-description"> Know your costs upfront, with no hidden
                                    charges. </div>
                            </div>
                        </div>
                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="col-4 service-title">Premium Perks Included: </div>
                                <div class="col-8 service-description"> Access top-tier services without extra fees,
                                    every time. </div>
                            </div>
                        </div>



                        <!-- Repeat for each service -->
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-5">
        
                               
            <a href="{{ route('customer.customerPlaceOrder') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
                           
          
        <a href="{{ route('front.subscriptions') }}" class="gradient-btn border-0 ms-4 text-decoration-none btn-custom-width">Learn More</a>
    </div>
        </div>
    </div>

</section>


<!-- Section FAQs -->
<section class="bg-dark section-card-phases pt-0">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="text-white">Frequently Asked Questions</h1>
            <div class="position-absolute sub-text1 w-100">
                <span class="main-text text-purple">(FAQs)</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="accordion accordion-flush" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            1.	Can I really sign up without a credit card and still access services?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Absolutely! You can sign up in seconds with no credit card required. Start accessing our resources immediately to see the difference in your academic performance.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2.	How quick is the signup process, and what do I need?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Signing up is lightning-fast—just a few seconds and minimal details are needed. No payment information is required upfront, making it completely risk-free.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3.	Is the Risk-Free Trial genuinely free? What can I access?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Yes, our Risk-Free Trial is completely free. You'll have immediate access to sample papers and resources without any financial commitment, ensuring you can verify the quality and effectiveness of our services first-hand.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4.	How do you ensure the papers provided are truly plagiarism-free?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Every paper is meticulously crafted from scratch and accompanied by a Turnitin report. We guarantee originality and uphold your academic integrity with the highest standards.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5.	What if I need urgent academic assistance?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Our service is tailored for urgent demands. With the 'Hourly Hero Rate,' you can receive help within hours. We’re here to support you swiftly without compromising quality.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6.	Are there any hidden fees or additional costs after signing up?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            We pride ourselves on transparency—what you see is what you get. There are no hidden fees, and all costs are clearly outlined before you commit.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            7.	What makes your service stand out from other academic assistance services?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Our unique blend of rapid service, academic integrity, and comprehensive support sets us apart. We provide not just answers but valuable educational resources that promote success and growth.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            8.	How do you handle data security and privacy on your platform?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Your privacy and data security are paramount. We use industry-standard encryption and do not share your information with third parties without permission. Your interactions with us are safe and confidential.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            9.	Can I cancel my registration if I'm not satisfied?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Yes, you can. While we strive to exceed expectations, you have the freedom to cancel your registration if our services do not meet your needs, no questions asked.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            10.	How can I be sure your papers won't get detected by Turnitin?
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Our papers are designed to be AI-proof and bypass Turnitin checks effectively. Each document is rigorously tested using advanced detection tools before delivery to ensure they stand up against academic scrutiny.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            11.	What guarantees do I have that the papers are high-quality?
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            We guarantee high-quality by employing subject-specific experts who adhere to rigorous academic standards. Each paper undergoes a thorough review process to ensure it meets your requirements and our quality benchmarks.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                            12.	How responsive is your customer support in case I need help?
                            </button>
                        </h2>
                        <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Our customer support team is available 24/7, ensuring that any queries or concerns are addressed promptly. Whether it’s day or night, we’re here to provide the assistance you need.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-5">
        
                               
            <a href="{{ route('customer.customerPlaceOrder') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
                           
           
        <a href="{{ route('front.faq') }}" class="gradient-btn border-0 ms-4 text-decoration-none btn-custom-width">Learn More</a>
    </div>
        </div>
    </div>

  

    @endsection