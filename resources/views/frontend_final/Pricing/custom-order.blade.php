@extends('frontend_final.Layout.masters')
@section('content')

<!-- Banner Section -->
<div class="customer-order-banner d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="hero-text text-center">
            <h1 class="header-text">
                Avoid<span class="yellow-text underline"> Plagiarism</span> and <span class="gradient-text underline">AI-Detection</span> - <br>
                <span class="text-blue-custom">Get Original Turnitin-Approved Papers!
                </span>
            </h1>
            <div class="d-flex align-items-center justify-content-center">
                <h5 class="gradient-text fs-3 fw-semibold">Ace your studies with ease! Custom academic help, ready
                    in hours, not days!</h5>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <h5 class="gradient-text fs-3 fw-semibold">Beat the clock, not your brains! Tailored papers for the
                    Proactive Intern!</h5>
            </div>


            <div class="d-flex justify-content-center align-items-center mt-4">
                <h5 class="text-white fs-4 fw-light custom-order-banner-para">Step into the world of academic magnificence with our unrivaled
                    custom paper services that guarantee not just the delivery of impeccably crafted documents, but
                    a stellar journey through your academic pursuits. With urgent custom paper deadline pricing to
                    suit every crunch time, comprehensive academic paper formatting services, and detailed
                    <span class="yellow-text fw-bold underline">Plagiarism </span> and <br> <span class="gradient-text fw-bold underline">AI-Detection Reports</span> included in the price, we ensure
                    excellence is within your grasp. Our promise
                    is to deliver not just a paper, but a masterpiece tailored to your specific needs, all while
                    offering the best custom essay writing price comparison and urgent delivery options. Achieve
                    academic success with our expertly curated solutions that are just a click away.
                </h5>
            </div>
        </div>
    </div>
</div>

<!-- Section Pricing -->
<section class="bg-dark section-card-phases pt-custom-1">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Pricing Table</h1>
            <div class="position-absolute sub-text1 px-2">
                <span class="main-text ">Redefine Your College Budgeting with Pristine Clear Pricing -</span> <br />
                <span class="main-text text-purple">Budget Smart, Study Smarter!</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>
    <span class="mt-5 invisible gradient-text d-flex justify-content-center align-items-center text-center  heading-another" style="font-weight: 500;"> Plan Ahead, Pay Less - Early Birds Reap Rewards!<br />
        Last-Minute? No Problem - Fast, Fair Pricing Guaranteed!
    </span>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <div class="pricing-table" style="overflow-x: auto;">
                    <table class="table listview" style="overflow-x: auto;">
                        <thead>
                            <tr class="listview">
                                <th scope="col" class="th-1">Deals an Offer</th>
                                <th scope="col" class="th-2">Deadline</th>
                                <th scope="col" class="th-3">Cost Per Page</th>
                                <th scope="col" class="th-4">Page Limit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($pricing)
                            @foreach ($pricing as $p)
                                @php
                                    // Remove unwanted words from the 'min' field if needed
                                    $cleanMin = preg_replace('/^(Only|Just|Need it in)\s+/', '', trim($p->min));

                                    // Define the phrases you want to remove from the page_limit field
                                    $removePhrases = [
                                        "ensures your urgent needs,",
                                        "for up to",
                                        "up to",
                                        "limit of",
                                        "With a",
                                        "-page",
                                        "-"
                                    ];
                                    // Remove these phrases (case-insensitive) from the page_limit field
                                    $cleanPageLimit = str_ireplace($removePhrases, "", $p->page_limit);
                                    $cleanPageLimit = trim($cleanPageLimit);
                                @endphp
                                <tr>
                                    <th scope="row" class="th-1">
                                        <span class="text-purple">{{ $p->text }}</span>
                                    </th>
                                    <td class="th-2">
                                        <span class="underline">
                                            @if ($cleanMin == '15')
                                                {{ $cleanMin }} {{ $p->duration_type }} or {{ $p->max }}
                                            @else
                                                {{ $cleanMin }} - {{ $p->max }} {{ $p->duration_type }}
                                            @endif
                                        </span>
                                    </td>
                                    <td class="th-3">
                                        <span class="underline">${{ $p->cost_per_page }}</span>
                                    </td>
                                    <td class="th-4">
                                        {{ $cleanPageLimit }} page-limit
                                    </td>
                                </tr>
                            @endforeach
                        @endif


                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-5">


        <a href="{{ route('customer.customerPlaceOrder') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>


            </div>
        </div>
    </div>

</section>

<!-- Section Premium Service -->
<section class="bg-dark section-card-phases px-2">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line-small-left.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative mt-5">
            <h1 class="heading">Premium Services – <br>
                Each Service has a Cost; Flat Fee in Dollars!
            </h1>
            <div class="position-absolute sub-text4">
                <span class="main-text ">Unlock Academic Success with Every Paper!</span> <br />
                <span class="main-text text-purple">Get Abstracts, Summaries, Originality Reports, And More</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line-small-right.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>

    <span class="text-white pt-3 d-flex justify-content-center align-items-center text-center  heading-another pad-custom-1 custom-order-sec-mt fs-5" style="font-weight: 500;"> Utilize our premium services as a study blueprint, giving you a head start on
        understanding topics, exam <br> preparation and class-presentation success.
    </span>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 p-2">
                <div class="bordered-card pt-3 px-4 pb-3 h-310px text-center d-flex align-items-center">
                    <div class="">
                        <h1 class="main-text text-white">Paper Outline</h1>
                        <p class="text-white custom-line-h">
                            Perfectly structured papers following a bullet-pointed outline ensure logical flow and coherence in your work, gaining nods from professors.
                        </p>
                        <div class="d-flex justify-content-end">
                            <h1 class="main-text yellow-text fw-bold lh-1 mb-0">${{ $Addons->paper_utline_in_bullets }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="bordered-card pt-3 px-4 pb-3 h-310px text-center d-flex align-items-center">
                    <div class="">
                        <h1 class="main-text text-white">Detailed Summary</h1>
                        <p class="text-white custom-line-h">
                            Gain deeper understanding with our detailed summaries that highlight the critical insights of your custom order, enhancing your learning, elevating your class presentations.
                        </p>
                        <div class="d-flex justify-content-end">
                            <h1 class="main-text yellow-text fw-bold lh-1 mb-0">${{ $Addons->paper_summary }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="bordered-card pt-3 px-4 h-310px pb-3 text-center d-flex align-items-center">
                    <div class="">
                        <h1 class="main-text text-white">Turnitin <span class="yellow-text underline">Plagiarism</span> Reports Available</h1>
                        <p class="text-white custom-line-h">
                            Receive detailed reports on <span class="yellow-text underline">Plagiarism</span> Content, ensuring the authenticity and integrity of your academic work.
                        </p>
                        <div class="d-flex justify-content-end">
                            <h1 class="main-text yellow-text fw-bold lh-1 mb-0">${{ $Addons->turnitin_report }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="bordered-card pt-3 px-4 pb-3 h-310px text-center d-flex align-items-center">
                    <div class="">
                        <h1 class="main-text text-white mb-3">Comprehensive Turnitin <span class="gradient-text underline fw-bold">AI-Detection</span> Report</h1>
                        <p class="text-white custom-line-h">Access in-depth reports that identify <span class="gradient-text underline fw-bold">AI-generated</span> text, guaranteeing the originality and academic honesty of your submissions.
                        </p>
                        <div class="d-flex justify-content-end">
                            <h1 class="main-text yellow-text fw-bold lh-1 mb-0">${{ $Addons->paper_abstract }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Section Pricing -->
<section class="bg-dark section-card-phases ">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Why Choose Us</h1>
            <div class="position-absolute sub-text1">
                <span class="main-text ">Elevate Your Academic Game -</span> <br />
                <span class="main-text text-purple">Expertly Crafted Papers, Just a Click Away!</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>
    <span class="mt-5 invisible gradient-text d-flex justify-content-center align-items-center text-center  heading-another" style="font-weight: 500;"> Plan Ahead, Pay Less - Early Birds Reap Rewards!<br />
        Last-Minute? No Problem - Fast, Fair Pricing Guaranteed!
    </span>

    <div class="container-lg my-4 px-5 plagiarism-custom-1">
        <!-- Part 1 -->
        <section class="section-skepticism bordered-card-2 mb-4 px-4 pb-4">
            <div class="content">
                <div class="heading-container">
                    <h1 class="main-text mb-3 fw-bold"><span class="yellow-text underline fw-bold">Plagiarism-Free</span> Submissions
                    </h1>
                </div>
                <p class="description">Get essays that pass Turnitin checks, ensuring academic integrity.</p>
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
                    <h1 class="main-text mb-3 fw-bold"><span class="gradient-text underline fw-bold">AI-Proof</span> Papers</h1>
                </div>
                <p class="description">Outsmart Turnitin’s AI with essays that evade detection, every time.</p>
            </div>
        </section>

        <!-- Part 3 -->
        <section class="section-skepticism bordered-card-2 mb-4 px-4 pb-4">
            <div class="content">
                <div class="heading-container">
                    <h1 class="main-text text-white mb-3 fw-bold">Review Dual <span class="yellow-text fw-bold">Reports</span></h1>
                </div>
                <p class="description">Review your <span class="yellow-text underline fw-bold">Plagiarism</span> and <span class="gradient-text fw-bold underline">AI-Detection</span> Report before university submission for peace of mind.</p>
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
                <p class="description">Save precious time with quick, reliable essay solutions that deliver results.</p>
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

        <div class="d-flex justify-content-center align-items-center my-4">
            <a href="{{ route('customer.customerPlaceOrder') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
        </div>

        <div class="text-center p-4 bg-card-1">
            <h1 class="main-text text-white mb-3 fw-bold">Bulk Order
                <span class="yellow-text underline fw-bold">Alternatives</span>
            </h1>
            <p class="yellow-text fw-bold">
                Got work in bulk? Let us guide you towards the perfect solution. Our Packages Pricing offers tailored plans to suit your needs, providing maximum value for your academic endeavors.
            </p>

            <a href="{{ route('customer.customerPlaceOrder') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
        <a href="{{ route('front.subscriptions') }}" class="gradient-btn border-0 ms-4 text-decoration-none btn-custom-width">Learn More</a>
        </div>
    </div>

</section>

<!-- Section FAQs -->
<section class="bg-dark section-card-phases pt-0">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading text-white">Frequently Asked Questions</h1>
            <div class="position-absolute sub-text1">
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
                            1.	What are your pricing rates for custom orders?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Our pricing rates are flexible and depend on factors such as the academic level, urgency, and complexity of the order. You can find detailed information on our Pricing page.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2.	How does the pricing structure vary with the urgency of the order?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Urgent orders may incur higher rates due to the additional resources required to meet tight deadlines. Our Pricing page outlines the pricing tiers based on urgency.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3.	Are there any hidden fees I should be aware of?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            We believe in transparency, and there are no hidden fees. The price you see on our Pricing page is what you'll pay, with no surprises later on.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4.	What payment methods do you accept?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            We accept Visa, MasterCard, American Express, and other major credit cards for secure and convenient payment transactions.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5.	How does the packages service work?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Our packages service offers bundled solutions with added benefits such as discounted rates, priority support, and access to premium features. Visit our <a href="https://elementary-solutions.com/writing-space-website/packages.php" class="text-decoration-none">Packages Page</a> for more details.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            6.	Can I get a refund if I am not satisfied?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                           Refunds are available only for undelivered orders per our Terms. Revisions are free within 7 days of delivery.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            7.	Are there discounts available for bulk orders?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Yes, we offer discounts for bulk orders to provide added value for our customers. Check our Pricing page for details on bulk order discounts.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            8.	What are the costs associated with premium services?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Premium services may include features such as dedicated support, Plagiarism Reports, AI-Detection Reports, and Summaries among others. Visit our Pricing page for premium service pricing.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            9.	How transparent is your pricing policy?
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Our pricing policy is transparent, with all rates clearly displayed on our Pricing page. We believe in honesty and clarity to ensure our customers can make informed decisions.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            10.	Do you offer any loyalty discounts?
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Yes, we value loyalty and offer discounts to returning customers as a token of appreciation for their continued trust in our service.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                            11.	Is the pricing competitive compared to other services?
                            </button>
                        </h2>
                        <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            We strive to offer competitive pricing while maintaining the highest standards of quality and service. Compare our rates with other providers to see the value we offer.
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
