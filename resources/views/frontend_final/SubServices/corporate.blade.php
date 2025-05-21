@extends('frontend_final.Layout.masters')
@section('content')
<div class="individual-hero d-flex justify-content-center align-items-center">
</div>

<!-- Cards Section -->
<section class="bg-dark section-card-phases">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1"
            class="heartbeat-line start">
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading heading-custom-3">Corporate Details</h1>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2"
            class="heartbeat-line end">
    </div>


    <!-- Card -->
    <div class="container-lg px-4 plagiarism-custom-2">
        <section class="row my-card mt-3 bordered-card">
            <div class="col-md-8">
                <div class="heading-container">
                    <h2 class="heading-val head-head">Fraught with Corporate Documents? <br> <span
                            class="subhead-subhead yellow-text">Elevate to Precision and Professionalism!</span></h2>
                </div>
                <p class="custom-description text-white">Are you facing challenges in creating corporate documents that
                    meet the high standards of professionalism and precision required in the business world? Crafting
                    robust business plans, conducting detailed market analyses, and preparing annual financial reports
                    demand a level of expertise and accuracy that can be daunting for many. The process of drafting
                    documents like corporate policy manuals requires not only a deep understanding of the industry but
                    also the ability to communicate complex information effectively. This creates a pressing need for a
                    solution that can revolutionize the corporate document creation process, ensuring that your
                    business's documentation not only meets but exceeds industry standards.</p>
            </div>
            <div class="col-md-4 text-center">
                <img class="" src="{{ asset('fronted_final/assets/images/Group-individual.png')}}" alt="Description">
            </div>

            <div class="col-md-8 pt-5">
                <div class="heading-container">
                    <h2 class="heading-val head-head">Corporate Excellence – <br> <span class="subhead-subhead yellow-text">Unleash Potential, Achieve Goals!</span></h2>
                </div>
                <p class="custom-description text-white">Unleash the full potential of your business to achieve your
                    goals with our cutting-edge digital products, designed to revolutionize your corporate document
                    creation process. Our services guide you through every aspect of professional business
                    documentation, ensuring the development of robust business plans, the execution of detailed market
                    analysis, and the preparation of comprehensive financial reports. Each document we help create is a
                    testament to unmatched precision and professionalism, aimed at elevating your corporate policy
                    manual drafting techniques. With our expertise, confidently purchase our professional services and
                    showcase documents that make your mark in the business world, surpassing industry standards and
                    driving your business's success in the competitive marketplace.
                </p>
            </div>
            <div class="col-md-4 pt-5 text-center">
                <img class="" src="{{ asset('fronted_final/assets/images/Groupindividual-2.png')}}" alt="Description">
            </div>

        </section>
    </div>
</section>

 

<section class="bg-dark section-card-phases">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1"
            class="heartbeat-line start">
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading text-white fw-bold">Sample Papers</h1>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2"
            class="heartbeat-line end">
    </div>
  <div class="container-lg card-style individual-sec-4-mb">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 p-2">
                    <div class="cardStyles-custom mt-custom-3 individual-mt-custom individual-build-card">
                        <div class="p-5">
                            <h2 class="Individual-card text-white">Build Trust Transparently</h2>
                            <p class="individual-description text-white">See the proof before you pay a cent. We earn
                                your trust upfront with verifiable evidence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-2">
                    <div class="cardStyles-custom mt-custom-3 individual-mt-custom individual-build-card">
                        <div class="p-5">
                            <h2 class="Individual-card text-white">Experience with Zero Risk</h2>
                            <p class="individual-description text-white">Embark on our service adventure with no upfront
                                payment. Explore what we offer, completely risk-free.</p>
                        </div>
                    </div>
                </div>
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
     <!--<div class="container px-0 position-relative">-->

    <!--    <div class="owl-carousel">-->
    <!--        @if(!empty($papers))-->
    <!--            @foreach ($papers as $paper)-->
    <!--                <div class=" mb-4">-->
    <!--                    <div class="card-style myCardStyles">-->
    <!--                        <div class="card-body myCardBody">-->
    <!--                            <h5 class="yellow-text fw-bold">{{ $paper->paper_title }}</h5>-->
    <!--                            <h5 class="myCardHeading">{{ $paper->subject_topic }}</h5>-->
    <!--                            <div class="row myCardTxt">-->
    <!--                                <div class="col-6">-->
    <!--                                    <p class="card-text">Format: {{ $paper->citation }}</p>-->
    <!--                                    <p class="card-text">Pages: 5</p>-->
    <!--                                    <p class="card-text">Sources: {{ $paper->word_count }}</p>-->

    <!--                                    <img src="{{ asset('fronted_final/assets/images/image.png') }}" alt="Turnitin Image" style="-->
    <!--                                    margin-left: 112px;-->
    <!--                                ">-->
                                        
    <!--                                   <p class="card-text d-flex align-items-center justify-content-between mb-3">  Added justify-content to space out items -->
    <!--                                                <span class="me-2">AI_Detection:</span>-->
    <!--                                                <button class="btn btn-primary my-btn" style="background-color: #007bff; border: none; min-width: 120px; margin-left: 13px;">-->
    <!--                                                    {{ $paper->ai_report }}%-->
    <!--                                                </button>-->
    <!--                                            </p>-->
                                                
    <!--                                            <p class="card-text d-flex align-items-center justify-content-between mb-3">  Same adjustment here -->
    <!--                                                <span class="me-2">Plagiarism:</span>-->
    <!--                                                <button class="btn btn-secondary my-btn" style="background-color: #dc3545; border: none; min-width: 120px; margin-left: 24px;">-->
    <!--                                                    {{ $paper->plagiarism }}%-->
    <!--                                                </button>-->
    <!--                                            </p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            @endforeach-->
    <!--        @endif-->

    <!--    </div>-->
    <!--    <div class="owl-nav">-->
    <!--        <button type="button" role="presentation" class="owl-prev"><i class="fa-solid fa-arrow-left"></i></button>-->
    <!--        <button type="button" role="presentation" class="owl-next"><i class="fa-solid fa-arrow-right"></i></button>-->
    <!--    </div>-->
    <!--</div>-->
    <div class="heading-indi d-flex justify-content-center mt-5">
        <h4 class="heading text-white text-center">Base Your Trust on <span
                class="yellow-text underline fw-bold">Verifiable</span>
            Outcomes!</h4>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-4">


        <a href="{{ route('customer.customerPlaceOrder') }}"
            class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
    </div>
</section>

<section class="bg-dark section-card-phases ">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1"
            class="heartbeat-line start">
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Pricing</h1>
            <div class="position-absolute sub-text1">
                <span class="main-text ">Tailored Pricing, On-Demand Solutions -</span> <br>
                <span class="main-text text-purple">Your Needs, Your Budget!</span>
            </div>

        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2"
            class="heartbeat-line end">
    </div>
    <span
        class="mt-5-custom gradient-text d-flex justify-content-center align-items-center text-center  heading-another"
        style="font-weight: 500;"> The Early Planner Advantage - Secure Our Best Rates Early!<br>
        Effortless Last-Minute Deals - Competitive Prices, Swift Service!
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
                                        <div class="col-4 service-title">{{ $p->text }}: </div>
                                        <div class="col-8 service-description">
                                            <span class="underline">
                                                @if ($p->min == '15')
                                                    {{ $p->min }} {{ $p->duration_type }} or {{ $p->max }}

                                                @else
                                                    {{ $p->min }}  {{ $p->max }} {{ $p->duration_type }}

                                                @endif                                      </span> {{$p->title}}
                                            <span class="underline">{{ $p->cost }} ${{ $p->cost_per_page }}/page</span>,
                                            {{ $p->page_limit }} {{$p->page_text}}
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

                <a href="{{ route('customer.customerPlaceOrder') }}"
                    class="gradient-btn border-0 text-decoration-none btn-custom-width">Learn more</a>
            </div>
        </div>
    </div>

</section>

<section class="bg-dark section-card-phases ">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1"
            class="heartbeat-line start">
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Premium Services</h1>
            <div class="position-absolute sub-text5">
                <span class="main-text ">Unlock academic success with every paper!
                </span>
                <br>
                <span class="main-text text-purple">Get custom essays, originality reports, and more</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2"
            class="heartbeat-line end">
    </div>
    <span
        class=" text-white d-flex justify-content-center align-items-center text-center  heading-another pt-5 heading-sub-0"
        style="font-weight: 500;"> Utilize our premium services as a study blueprint, giving you a head start on
        understanding topics, <br> exam preparation and class-presentation success.
    </span>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 p-2">
                <div class="bordered-card pt-4 px-4 pb-3 h-310px text-center">
                    <div class="">
                        <div class="d-flex justify-content-start">
                            <h1 class="main-text yellow-text fw-bold lh-1 mb-0">${{ $Addons->paper_utline_in_bullets }}
                            </h1>
                        </div>
                        <h1 class="main-text text-white">Paper Outline</h1>
                        <p class="text-white custom-line-h">
                        Perfectly structured papers following a bullet-pointed outline ensure logical flow and coherence in your work, gaining nods from professors.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="bordered-card pt-4 px-4 pb-3 h-310px text-center">
                    <div class="">
                        <div class="d-flex justify-content-start">
                            <h1 class="main-text yellow-text fw-bold lh-1 mb-0">${{ $Addons->paper_summary }}</h1>
                        </div>
                        <h1 class="main-text text-white">Detailed Summary</h1>
                        <p class="text-white custom-line-h">
                        Gain deeper understanding with our detailed summaries that highlight the critical insights of your custom order, enhancing your learning, elevating your class presentations
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="bordered-card pt-4 px-4 h-310px pb-3 text-center">
                    <div class="">
                        <div class="d-flex justify-content-start">
                            <h1 class="main-text yellow-text fw-bold lh-1 mb-0">${{ $Addons->turnitin_report }}</h1>
                        </div>
                        <h1 class="main-text text-white">Turnitin <span
                                class="gradient-text underline fw-bold">Plagiarism</span> Reports Available</h1>
                        <p class="text-white custom-line-h">
                        Receive detailed reports on Plagiarism Content, ensuring the authenticity and integrity of your academic work.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="bordered-card pt-4 px-4 pb-3 h-310px text-center">
                    <div class="">
                        <div class="d-flex justify-content-start">
                            <h1 class="main-text yellow-text fw-bold lh-1 mb-0">${{ $Addons->paper_abstract }}</h1>
                        </div>
                        <h1 class="main-text text-white mb-3">Comprehensive Turnitin <span
                                class="gradient-text underline fw-bold">AI-Detection</span> Report</h1>
                        <p class="text-white custom-line-h">
                        Access in-depth reports that identify AI-generated text, guaranteeing the originality and academic honesty of your submissions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="bg-dark section-card-phases">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1"
            class="heartbeat-line start">
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading heading-custom-3">Order Process Details</h1>
            <div class="position-absolute sub-text1 mt-4 academic-using">
                <h4 class="head-individual">Using Our Academic Writing Service is Simple & Rewarding!</h4>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2"
            class="heartbeat-line end">
    </div>
    <div class="container-lg card-style">
        <div class="row ">
            <div class="col-md-6 p-2">
                <div class="cardStyles-custom individual-build-card-2 individual-build-card-2-mt">
                    <h5 class="fs-5 text yellow-text fw-bold ps-3 pt-3 m-0">Step 1:</h5>
                    <div class="individual-padding-custom text-center">
                        <h2 class="Individual-card text-heading text-center text-white">Order with Ease</h2>
                        <p class="individual-description text-white">Just fill out the form, detail your needs, and
                            pay securely. That’s it!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="cardStyles-custom individual-build-card-2-mt card-2 individual-build-card-2">
                    <h5 class="fs-5 text yellow-text fw-bold ps-3 pt-3 m-0">Step 2:</h5>
                    <div class="individual-padding-custom text-center">
                        <h2 class="Individual-card text-heading text-center text-white">Stay in the Loop</h2>
                        <p class="individual-description text-white">Monitor progress easily and chat with your
                            expert for any tweaks.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-lg ">
        <div class="row ">
            <div class="col-md-6 p-2">
                <div class="cardStyles-custom mt-0 individual-build-card-2">
                    <h5 class="fs-5 text yellow-text fw-bold ps-3 pt-3 m-0">Step 3:</h5>
                    <div class="individual-padding-custom text-center">
                        <h2 class="Individual-card text-heading text-center text-white">Receive Perfection</h2>
                        <p class="individual-description text-white">Download your tailored paper. Need tweaks?
                            Revisions are on us!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="cardStyles-custom mt-0 individual-build-card-2">
                    <h5 class="fs-5 text yellow-text fw-bold ps-3 pt-3 m-0">Step 4:</h5>
                    <div class="individual-padding-custom text-center">
                        <h2 class="Individual-card text-heading text-center text-white">Earn & Save</h2>
                        <p class="individual-description text-white">Enjoy loyalty bonuses on every order, making
                            your next one even cheaper!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark section-card-phases">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1"
            class="heartbeat-line start">
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading ">Why Choose Us</h1>
            <!--<div class="position-absolute sub-text1 mt-1 academic-using">-->
            <!--    <h4 class="head-individual fw-bold">Outsmart Turnitin effortlessly, ensuring your academic</h4>-->
            <!--    <h4 class="head-individual fw-bold text-purple mb-5">integrity remains unchallenged</h4>-->
            <!--</div>-->
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2"
            class="heartbeat-line end">
    </div>


      <div class="container-lg px-5 mt-custom-4 Individual-mt-custom plagiarism-custom-1">
        <!-- Part 1 -->

 <!-- Card -->
    <div class="px-2">
        <div class="container-lg card-style cardStyles-custom mb-5">

            <div class="myDiv">
                <div class="bg-individual"></div>
                <div class="card-body">
                    <h4 class="heading-val head-head">Ace Every Class: Custom Academic Papers </h4>
                    <h4 class="subhead-subhead yellow-text">Tailored for You</h4>
                    <p class="custom-description text-white">Imagine never having to dread a looming academic deadline
                        again. With our custom academic writing service, you unlock the door to excellence without
                        sacrificing your precious time.</p>
                    <p class="custom-description text-white">Our tailored, top-tier papers meet your exact needs,
                        ensuring you stand out in your academic journey. From placing your order with ease to
                        downloading your perfect paper, our process is designed with your success in mind.</p>
                    <p class="custom-description text-white">Plus, with our Loyalty Program, the more you achieve, the
                        more you save. It's not just an academic paper; it's a stepping stone to your future.</p>
                    <p class="custom-description text-white">So, order now to transform your academic journey and unlock
                        limitless opportunities with our bespoke academic writing services. Imagine a world where your
                        academic pressures dissolve, leaving you free to focus on what truly matters to you. Our custom
                        written papers are not just documents; they are keys to academic excellence, handcrafted to
                        catapult you towards your dreams. Let us be the architects of your success story, delivering
                        unparalleled quality and value, directly into your hands. Embrace the future with confidence,
                        knowing we are here to support your academic journey every step of the way.</p>
                </div>
            </div>
        </div>

    </div>
        <section class="section-skepticism my-card">
            <div class="">
                <div class="heading-container">
                    <h2 class="heading-val head-head">Outsmart Turnitin Effortlessly, Ensuring Your Academic Integrity Remains
                    </h2>
                    <h2 class="subhead-subhead yellow-text">Unchallenged!</h2>
                </div>
                <p class="custom-description">Beat the System - Always stay one step ahead in the game, effortlessly
                    bypassing any new technological advancements by Turnitin.</p>

                <p class="custom-description">Avoid <span
                        class="underline yellow-text fs-6 text fw-bolder">Plagiarism</span>
                    and <span class="underline fw-bolder pink-text fs-6 text">AI-Detection</span> Penalties - With our
                    unique
                    papers, you'll bypass Turnitin, avoiding <span
                        class="underline fw-bolder yellow-text fs-6 text">Plagiarism</span> and <span
                        class="underline fw-bolder pink-text fs-6 text">AI-Detection</span> flags, ensuring your work
                    stands
                    out as original.
                </p>
                <p class="custom-description">Pre-Submission Confidence - Review your <span
                        class="underline yellow-text fw-bolder fs-6 text">Plagiarism</span> and <span
                        class="underline fw-bolder pink-text fs-6 text">AI-Detection</span> Reports in advance, submit
                    your
                    work with the confidence it will pass scrutiny.
                </p>
            </div>
            <div class="image-container">
                <img class="" src="{{ asset('fronted_final/assets/images/Frame.png')}}" alt="Description">

            </div>
        </section>
    </div>

    <!-- Part 2 -->
    <div class="container-lg my-4 px-5 plagiarism-custom-1">
        <!-- Part 1 -->
        <section class="section-skepticism my-card mt-5">
            <div class="image-container me-4">
                <img class="" src="{{ asset('fronted_final/assets/images/Frame2.png')}}" alt="Description">
            </div>
            <div class="">
                <div class="heading-container">
                    <h2 class="heading-val head-head">Instantly Save Time, Stress Less with Our Quick, Top-Quality <span class="subhead-subhead yellow-text">Academic Aid!</span></h2>
                </div>
                <p class="custom-description">Stress Reduction - Eliminate the stress of meeting deadlines and the
                    fear of failing, knowing your submissions will pass.</p>

                <p class="custom-description">Time Saving - Don't spend endless hours researching; our service
                    ensures quick delivery of high-quality, ready-to-submit papers.</p>
                <p class="custom-description">Seamless Ordering Process - Experience an ultra-smooth ordering
                    process that saves you time and gets you results fast.</p>
            </div>


        </section>
    </div>

    <!-- Part 3 -->
    <div class="container-lg my-4 px-5 plagiarism-custom-1">
        <section class="section-skepticism my-card mt-5">

            <div class="">
                <div class="heading-container">
                    <h2 class="heading-val head-head">Skyrocket <span
                            class="gradient-purple fs-2 text underline">Grades</span> with Expert- Written Papers That Guarantee <span
                            class="subhead-subhead yellow-text">Academic Dominance!</span></h2>
                </div>
                <p class="custom-description">Improve <span
                        class="gradient-purple fs-6 text fw-bolder underline">Grades</span>
                    - Leverage our expertly written papers to boost your <span
                        class="gradient-purple fw-bolder fs-6 text underline">Grades</span> and rise to the top of your
                    class.
                </p>

                <p class="custom-description">Academic Growth - Unlock your full academic potential with submissions
                    that set a new standard of excellence.</p>
                <p class="custom-description">Customized Submissions - Get papers meticulously tailored, by experts,
                    to your specific requirements, ensuring they align perfectly with your academic goals</p>
            </div>
            <div class="image-container">
                <img class="" src="{{ asset('fronted_final/assets/images/rock 1.png')}}" alt="Description">
            </div>

        </section>
    </div>

    <!-- Part 4 -->
    <div class="container-lg my-4 px-5 plagiarism-custom-1">
        <section class="section-skepticism my-card mt-5">
            <div class="image-container me-4">
                <img class="" src="{{ asset('fronted_final/assets/images/OBJECTS.png')}}" alt="Description">
            </div>
            <div class="">
                <div class="heading-container">
                    <h2 class="heading-val head-head">Explore Your Untapped Potential for A Future of <span class="subhead-subhead yellow-text">Academic and Career Triumph!</span></h2>
                </div>
                <p class="custom-description">Portfolio Enhancement - Enhance your academic portfolio with high-
                    quality papers that showcase your supposed strengths and knowledge.</p>

                <p class="custom-description">Future Career Boost - Set the foundation for your future career with
                    academic excellence that employers and graduate schools notice.</p>
                <p class="custom-description">Networking Opportunities - Excel academically and open doors to new
                    networking opportunities with fellow students and professors.</p>
            </div>


        </section>
    </div>

    <!-- Part 5 -->
    <div class="container-lg my-4 px-5 plagiarism-custom-1">
        <section class="section-skepticism my-card mt-5">
            <div class="">
                <div class="heading-container">
                    <h2 class="heading-val head-head">Experience 24/7 Support, Achieve Success with Confidential and Cost-Effective <span class="subhead-subhead yellow-text">Academic Solutions!</span></h2>
                </div>
                <p class="custom-description">24/7 Support - Whatever your time-zone or schedule, our support team
                    is here to help you around the clock.</p>

                <p class="custom-description">Cost Efficiency - Invest in your future success at highly competitive
                    rates, offering unparalleled value for your academic journey.</p>
                <p class="custom-description">Confidentiality Assured - Your secret is safe with us; enjoy complete
                    confidentiality and anonymity with every order.</p>
            </div>
            <div class="image-container">
                <img class="" src="{{ asset('fronted_final/assets/images/OBJECTS-2.png')}}" alt="Description">
            </div>

        </section>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-4">
        <a href="{{ route('customer.customerPlaceOrder') }}"
            class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
    </div>
</section>

<section class="bg-dark section-card-phases pt-0">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1"
            class="heartbeat-line start">
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading text-white">Frequently Asked Questions</h1>
            <div class="position-absolute sub-text3">
                <span class="main-text text-purple">(FAQs)</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2"
            class="heartbeat-line end">
    </div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="accordion accordion-flush" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                1. What types of academic products can I order from this page?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can order a wide range of custom academic products, including essays, term papers,
                                research projects, and thesis work, each tailored to meet specific academic
                                requirements.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. How do I specify my requirements for a custom paper?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                When placing an order, you can fill out a detailed form specifying all your
                                requirements, such as topic, word count, formatting style, and any specific research
                                needs.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. Can I see samples of your work before placing an order?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, we provide access to a selection of sample works on our website which reflect the
                                quality and range of our writing services.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4. What if the product needs revisions?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We offer free revisions for a set period after delivery to ensure that the final product
                                meets your complete satisfaction and all specified requirements.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                5. How are prices determined for individual products?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Prices are based on the type of product, complexity, word count, and turnaround time.
                                Detailed pricing information is available on our pricing page.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                6. Can I order a product with a very tight deadline?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, we are equipped to handle orders with urgent deadlines. Please specify your
                                required timeline when placing an order.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                7. How can I trust the quality of your academic products?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our reputation for quality is built on strict quality control measures, including the
                                use of qualified writers, plagiarism checks, and rigorous proofreading.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                8. What qualifications do your writers have for product creation?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our writers are highly qualified, with many holding advanced degrees in their fields,
                                and have extensive experience in academic writing.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                9. Is customer support available during the writing process?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Yes, our customer support is available to answer any questions and assist with any issues you may encounter during the order process.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                10. How is confidentiality maintained for my order?
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We adhere to strict privacy policies to ensure that all customer details and orders
                                remain confidential and secure.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                11. What payment methods are accepted for individual product orders?
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We accept various payment methods including credit cards, PayPal, and other secure
                                online payment systems.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-4">

                <a href="{{ route('customer.customerPlaceOrder') }}"
                    class="gradient-btn border-0 text-decoration-none btn-custom-width">LEARN MORE</a>
            </div>
        </div>
    </div>

    <div class="container-lg my-4 px-5 d-flex justify-content-center">
        <section class="section-skepticism my-card individual-last-card mt-5 d-flex justify-content-center flex-column">

            <div
                class="text-center d-flex justify-content-center flex-column align-items-center p-4 individual-last-card-mob">
                <div class="heading-container w-75">
                    <h2 class="heading-val head-head">Submit your Assignments with Confidence! Get <span
                            class="yellow-text underline">Plagiarism-free</span> and <span
                            class="gradient-text underline">AI-Proof</span> Papers</h2>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <a href="{{ route('customer.customerPlaceOrder') }}"
                        class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
                </div>
            </div>


        </section>
    </div>

    @endsection