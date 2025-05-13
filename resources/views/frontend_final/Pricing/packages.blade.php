@extends('frontend_final.Layout.masters')
@section('content')

<!-- Banner Section -->
<div class="packages-pg-banner d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="hero-text text-center mt-custom-2">
            <h1 class="main-text fw-bold">
                Get Ahead, Stay Ahead -<br><span class="text-purple">
                    Stock Pages Now for Less Stress, Top </span> <span class="gradient-text underline">Grades!</span>
            </h1>
            <div class="d-flex align-items-center justify-content-center">
                <h5 class="gradient-text fs-4 fw-semibold">Juggling between Work and Education? Beat this Game!
                    Access Your Package Now!</h5>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <h5 class="gradient-text fs-4 fw-semibold">Maximize Savings, Minimize Stress - One Price, Year-Long
                    Flexibility!</h5>
            </div>


            <div class="d-flex justify-content-center align-items-center mt-4">
                <h5 class="text-white fs-6 fw-light fw-normal lh-base">Unlock the door to academic brilliance and
                    unparalleled savings with our unique flat-rate bulk page purchases! Imagine a world where
                    deadlines don't dictate your budget, where you can amass pages and deploy them at your
                    convenience over an entire year. With our flexible plans starting at just $16/page for 200
                    pages, stepping ahead in your academic journey has never been easier. Enjoy the luxury of
                    premium services without any additional cost, ensuring top grades without the added stress. Get
                    ahead, stay ahead - your ultimate academic partner is here.
                </h5>
            </div>
        </div>
    </div>
</div>

<!-- Section Package Features -->
<section class="bg-dark section-card-phases pt-custom-2 packages-features-mt-1">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative packages-custom">
            <h1 class="heading">Packages Features</h1>
            <div class="position-absolute sub-text1">
                <span class="main-text ">Say Goodbye to Pricing Puzzles! Dive into Our Clear, Upfront Costs –</span>
                <br />
                <span class="main-text text-purple">Perfect for Student Budgets!</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>
    <span class=" invisible gradient-text d-flex justify-content-center align-items-center text-center  heading-another" style="font-weight: 500;"> Plan Ahead, Pay Less - Early Birds Reap Rewards!<br />
        Last-Minute? No Problem - Fast, Fair Pricing Guaranteed!
    </span>

    <div class="container my-5">
        <div class="row justify-content-center">
            @if ($subscription)
            @foreach ($subscription as $s)

            <div class="col-md-6 col-lg-4 p-2">
                <div class="card cards-custom-style h-100">
                    <div class="card-header main-text text-purple text-center fw-bold py-4">
                        {{ $s->subscription_name }}:
                    </div>
                    <div class="card-body text-white fw-normal lh-lg">
                        <ul class="mb-0">
                            <ul class="info_list unordered_list_block text-start" style="list-style: outside;">
									<li>Cost: ${{ $s->cost_per_page }} Per Page</li>
									<li>Time: {{ $s->set_time }} Days (Flexible)</li>
									<li>Purchase between{{ $s->min_page }} to
                                        {{ $s->max_page }} pages</li>
                                        <li>Total Pages in package
                                            {{ $s->total_subscription }}</li>


									<li>Transparency in Pricing</li>
                                    <li>Assured Quality and Originality</li>
                                    <li>Clear Revision Policies</li>
                                    <li>Direct Communication Channels</li>
                                    <li>Consistent Quality Work</li>
                                    <li>Confidentiality Ensured</li>
                                    <li>Engage with Your Writer Directly</li>
                                    <li>Free Revisions and Feedback</li>
								</ul>
                        </ul>


                    </div>
                    <div class="card-footer border-0 pb-4 text-center">


                        @if (Auth()->user())
                        <a type="button"
                           onclick="open_modal({{ $s->id }}, {{ $s->cost_per_page }}, {{ $s->min_page }}, {{$s->min_page}})"
                           class="btn gradient-button py-2 px-4">
                           Select Plan
                        </a>
                        <input type="hidden" id="user_id" value="{{ Auth()->user()->id }}">
                    @else
                        <a type="button"
                           onclick="open_modal_login()"
                           class="btn gradient-button py-2 px-4">
                           Select Plan
                        </a>
                        <input type="hidden" id="user_id" value="">
                    @endif


                    </div>
                </div>
            </div>
            @endforeach
            @endif





            {{-- <div class="modal fade mt-5" id="modal-15" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content badge-custom-bg" style="border-radius: 10px;">
                        <div class="modal-header border-0">
                            <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Add Promotion Code</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="step">
                                <!-- Step Content -->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!-- Input Group -->
                                        <div class="d-flex flex-column mb-4 fv-row">
                                            <!-- Label -->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">Coupon</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify a coupon code">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"></i>
                                                </span>
                                            </label>
                                            <!-- Input Field -->
                                            <input type="text" class="form-control border rounded" id="coupon" name="coupon" placeholder="Enter your coupon code">
                                            <!-- Hidden Fields -->
                                            <input type="hidden" class="form-control" id="totalamount" name="totalamount">
                                            <input type="hidden" class="form-control" id="selectplanid" name="selectplanid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer border-0 justify-content-center">
                            <button type="button" class="btn btn-primary px-4 py-2" onclick="check_coupon()">Next</button>
                            <button type="button" class="btn btn-secondary px-4 py-2" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div> --}}
<style>

.modal-dialog {
    margin-top: 150px; /* Adjust this value to position it lower */
}

    /* Set modal background color and text color */
#modal-15 .modal-content {
    background-color: #6610f2;
    color: white;
}

/* Style the modal header */
#modal-15 .modal-header {
    border-bottom: none; /* Remove border */
    color: white;
}

/* Style modal title */
#modal-15 .modal-title {
    color: white;
    font-weight: bold;
}

/* Style close button in the header */
#modal-15 .btn-close {
    color: white;
    opacity: 1;
}

/* Style form labels and any additional text within modal */
#modal-15 .form-label,
#modal-15 #price-details p {
    color: white;
}

/* Style the input fields */
#modal-15 .form-control {
    background-color: #5a0fc9; /* Slightly darker purple */
    color: white;
    border: 1px solid #ffffff50; /* Semi-transparent white border */
}

/* Style footer buttons */
#modal-15 .modal-footer .btn {
    background-color: #5a0fc9; /* Matching button background color */
    color: white;
    border: none;
}

/* Style the error message */
#modal-15 #error-message {
    color: #ffdddd; /* Light red for visibility */
}

</style>

<div class="modal fade mt-5" id="modal-15" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Add Promotion Code</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Error message section -->
                <div id="error-message" style="display: none; color: red; font-weight: bold; margin-bottom: 10px;"></div>

                <div class="w-100">
                    <div class="d-flex flex-column mb-7 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Coupon</span>
                        </label>
                        <input type="text" class="form-control" id="coupon" name="coupon">
                        <input type="hidden" class="form-control" id="totalamount" name="totalamount">
                        <input type="hidden" class="form-control" id="selectplanid" name="selectplanid">
                    </div>
                    <!-- Display Price Details -->
                    <div id="price-details" style="display: none;">
                        <p>Original Price: $<span id="original-price"></span></p>
                        <p>Coupon Discount: $<span id="discount-amount"></span></p>
                        <p>Total Price after Discount: $<span id="discounted-price"></span></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-info" onclick="checkCouponAvailability()">Check Coupon Availability</button>
                <button type="button" class="btn btn-secondary" onclick="check_coupon()">Apply Coupon</button>
                <button type="button" class="btn btn-secondary" onclick="proceedWithoutCoupon()">Skip Coupon</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>







            <div class="modal fade" id="modal-156" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content badge-custom-bg" style="margin-top: 45%;">
                        <div class="modal-header border-0">
                            <h5 class="modal-title " id="exampleModalLabel">please Login First!</h5>
                            <button type="button" class="text-white btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">



                            <div class="modal-footer border-0">



                                <button type="button" class="btn btn-dark-primary"
                                    data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">

                <div class="pricing-table" style="overflow-x: auto;">
                    <table class="table listview" style="overflow-x: auto;">
                        <!--<thead>-->
                        <!--    <tr class="listview">-->
                        <!--        <th scope="col" class="th2-1"><span class="text-purple">Deadline-Proof Deals: </span></th>-->
                        <!--        <th scope="col" class="text-align-start">Flat-rate pricing means no rush fees, ever.</th>-->
                        <!--    </tr>-->
                        <!--</thead>-->
                        <tbody>
                            <tr>
                                <th scope="col" class="th-1"><span class="text-purple">Deadline-Proof Deals: </span></th>
                                <th scope="col" class="text-align-start">Flat-rate pricing means no rush fees, ever.</th>
                            </tr>
                            <tr>
                                <th scope="col" class="th-1"><span class="text-purple">One-Year Validity: </span></th>
                                <td scope="col" class="text-align-start">Use your pages over 12 months, adapting to your schedule.</td>
                            </tr>
                            <tr>
                                <th scope="col" class="th-1"><span class="text-purple">Rollover Rights: </span></th>
                                <td scope="col" class="text-align-start">Unused pages? Roll them over upon request, never lose value.</td>
                            </tr>
                            <tr>
                                <th scope="col" class="th-1"><span class="text-purple">Predictable Pricing: </span></th>
                                <td scope="col" class="text-align-start">Know your costs upfront, with no hidden
                                    charges.</td>
                            </tr>
                            <tr>
                                <th scope="col" class="th-1"><span class="text-purple">Premium Perks Included: </span></th>
                                <td scope="col" class="text-align-start">Access top-tier services without extra fees,
                                    every time.</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Section Premium Services -->
<section class="bg-dark section-card-phases ">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Premium Services</h1>
            <div class="position-absolute sub-text5">
                <span class="main-text ">Unlock Academic Success with Every Paper -
                </span>
                <br />
                <span class="main-text text-purple">Get Custom Essays, Originality Reports, And More!</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>
    <span class=" text-white d-flex justify-content-center align-items-center text-center  heading-another pt-5 heading-sub-0" style="font-weight: 500;">Utilize our premium services as a study blueprint, giving you a head start on understanding topics, exam preparation and class-presentation success.
    </span>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 p-2">
                <div class="bordered-card pt-4 px-4 pb-3 h-310px text-center">
                    <div class="">
                        <div class="d-flex justify-content-start">
                            <h1 class="main-text yellow-text fw-bold lh-1 mb-0">Free</h1>
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
                            <h1 class="main-text yellow-text fw-bold lh-1 mb-0">Free</h1>
                        </div>
                        <h1 class="main-text text-white">Detailed Summary</h1>
                        <p class="text-white custom-line-h">
                            Gain deeper understanding with our detailed summaries that highlight the critical insights of your custom order, enhancing your learning, elevating your class presentations.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="bordered-card pt-4 px-4 h-310px pb-3 text-center">
                    <div class="">
                        <div class="d-flex justify-content-start">
                            <h1 class="main-text yellow-text fw-bold lh-1 mb-0">Free</h1>
                        </div>
                        <h1 class="main-text text-white">Turnitin <span class="yellow-text underline fw-bold">Plagiarism</span> Reports Available</h1>
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
                            <h1 class="main-text yellow-text fw-bold lh-1 mb-0">Free</h1>
                        </div>
                        <h1 class="main-text text-white mb-3">Comprehensive Turnitin <span class="gradient-text underline fw-bold">AI-Detection </span> Report</h1>
                        <p class="text-white custom-line-h">
                            Access in-depth reports that identify AI-generated text, guaranteeing the originality and academic honesty of your submissions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Section Premium Services -->
<section class="bg-dark section-card-phases ">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Packages Benefits</h1>
            <div class="position-absolute sub-text1">
                <span class="main-text ">Lead in Academia with Turnitin-Proof Custom Papers –
                </span>
                <br />
                <span class="main-text text-purple">Only for Discerning University Students!</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>
    <span class=" invisible text-white d-flex justify-content-center align-items-center text-center  heading-another" style="font-weight: 500;"> Utilize our premium services as a study blueprint, giving you a head start on
        understanding topics, <br> exam preparation and class-presentation success.
    </span>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11">
                <div class="">
                    <div class="row g-3 mb-4">

                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="service-title">Immediate Savings: <span class="service-description">Unlock instant savings with our bulk buy basics, making each page count for less.</span> </div>
                            </div>
                        </div>

                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="service-title">Future Proofing:
                                    <span class="service-description">Buy now, secure your academic future with one-year validity. Future you will thank you.</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="service-title">Budget Predictability:
                                    <span class="service-description">Flat-rate ensures your budget is predictable. No surprises, just results.</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="service-title">Rush Fee Avoidance:
                                    <span class="service-description">Deadline looming? Forget rush fees forever with our deadline-proof deals.</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="service-title">Value Preservation:
                                    <span class="service-description">Roll over unused pages, ensuring every dollar spent retains its value.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="service-title">Premium Access:
                                    <span class="service-description">Get premium services at no extra cost. You deserve the best.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="service-title">Bulk Savings:
                                    <span class="service-description">The more you buy, the more you save. Our ultimate value vault is a game-changer.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 listview py-2 px-3">
                            <div class="row d-flex justify-content-start align-items-center max-width-text">
                                <div class="service-title">Financial Smartness:
                                    <span class="service-description">Make a smart financial choice with our predictable pricing and no hidden fees.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Repeat for each service -->
                    </div>


                </div>
            </div>
        </div>
        <div class="text-center p-4 bg-card-1">
            <h1 class="main-text text-white mb-3 fw-bold">Custom Order
                <span class="yellow-text fw-bold">Alternatives</span>
            </h1>
            <p class="yellow-text fw-semibold fs-5">
                Not ready to invest such a large amount upfront? No worries! We understand that flexibility is key.
                Visit our Custom Order Pricing page, where you pay as you go, ensuring you receive top-notch
                assistance without breaking the bank.
            </p>



        <a href="{{ route('customer.customerPlaceOrder') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>



        <a href="{{ route('front.customorder') }}" class="gradient-btn border-0 ms-4 text-decoration-none btn-custom-width">Learn More</a>
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
                                1. What are the benefits of purchasing a package instead of individual orders?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Purchasing a package offers significant savings, streamlined ordering, and access to premium services at no additional cost. It's an ideal choice for frequent needs.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. How do I choose the right package for my needs?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Consider your academic workload and the frequency of your assignments. Our packages range from small to large volumes to match different student needs. Details are available on our Packages page.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. Can I customize a package based on my specific requirements?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, we offer customizable packages. Contact our customer support to tailor a package that perfectly fits your academic goals.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4. What is included in your packages?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                All packages include a set number of pages that can be used over a specified period, access to all paper types, and premium features such as detailed plagiarism reports and priority support.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                5. How does the page rollover feature work?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Unused pages in your package can be rolled over into the next period, ensuring you get full value from your purchase without losing any resources.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                6. Are there any restrictions on how I can use the pages in my package?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               Pages can be used for any document type listed on our service, with no restrictions on subject matter.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                7. What happens if I use up all my pages before the package expires?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               If you exhaust your pages, you can easily top up your account by purchasing additional pages or upgrading to a larger package.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                8. Can I share my package with friends or colleagues?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Packages are assigned to individual accounts for personal use only. Sharing is not permitted under the terms of service to maintain security and integrity.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                9. Is there a refund policy for unused pages if I decide to cancel my package?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We do not offer refunds for either used or unused pages. Please refer to our terms and conditions on the Legal pages for more details.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                10. What special offers or promotions are currently available with packages?
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We periodically offer promotional discounts on packages, especially during academic peak seasons. Check our Packages page regularly for the latest offers.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                11. How frequently can I renew or change my package?
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can renew or change your package upon the expiry of either the time period or when the allotted pages are used up. Mid-period adjustments are possible but may be subject to certain conditions.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                12. What guarantees do you provide with your packages?
                            </button>
                        </h2>
                        <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We guarantee satisfaction with the quality and reliability of our services included in the packages. If our service does not meet your expectations, we offer support and revisions to ensure your academic needs are fully met.
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script>


    // function check_coupon() {
    //     var coupon = document.getElementById('coupon').value;
    //     let id = $('#selectplanid').val();
    //     let user_id = document.getElementById('user_id').value;
    //     let totalamount = $('#totalamount').val();
    //    // alert(totalamount);


    //     var url4 ='{{ route('customer.check.package', ['sub_id' => ':sub_id']) }}';
    //                         url4 = url4.replace(':sub_id', id);
    //         $.ajax({
    //             type: 'post',
    //             url: url4,
    //             data: {
    //                 sub_id: id,
    //                 _token: '{{ csrf_token() }}',
    //             },
    //             // Assuming id is a parameter you want to send
    //             success: function(response) {
    //                 console.log(response);
    //     if (coupon!== null && coupon!== '') {
    //         console.log(coupon);

    //         let url = "{{ route('check-coupon') }}";
    //         $.ajax({
    //             type: 'post',
    //             url: url,
    //             data: {
    //                 coupon: coupon,
    //                 _token: '{{ csrf_token() }}',
    //             },
    //             // Assuming id is a parameter you want to send
    //             success: function(response) {
    //                 promotion = response.coupon;

    //                 if(promotion!== "The promotion has ended"){
    //                   console.log("Promotion-1:", promotion);
    //                   console.log("response.start_date:", promotion.start_date);
    //                   console.log("response.end_date:", promotion.end_date);
    //                   console.log("response.decrease_everyday", promotion.decrease_everyday);

    //                     if (promotion.start_date && promotion.end_date && promotion.decrease_everyday)
    //                     {

    //                             const decreaseEveryday = JSON.parse(promotion.decrease_everyday);
    //                             const startDate = new Date(promotion.start_date);
    //                             const endDate = new Date(promotion.end_date);
    //                             const currentDate = new Date();



    //                         if (currentDate >= startDate && currentDate <= endDate) {
    //                             const daysDiff = Math.floor((currentDate - startDate) / (1000 * 60 * 60 * 24));
    //                             const discountIndex = Math.min(daysDiff, decreaseEveryday.length - 1);
    //                             const discountPercentage = decreaseEveryday[discountIndex];
    //                             console.log("Discount Percentage:", discountPercentage);


    //                                 console.log(totalamount );
    //                                 totalamount =  parseInt(totalamount) - (parseInt(totalamount) * parseInt(discountPercentage) / 100);
    //                                     console.log(discountPercentage );
    //                                     console.log("totalamount",totalamount );


    //                         } else {
    //                             console.log("Promotion is not active for the current date.");

    //                     }


    //                   }




    //                 }


    //            var url2 = '{{ route('customer.checkout') }}';
    //         $.ajax({
    //             type: 'GET',
    //             url: url2,

    //             // Assuming id is a parameter you want to send
    //             success: function(response) {
    //                console.log(response.sessionId);


    //                 let idgetsession = response.sessionId;

    //             localStorage.setItem('sub_id', JSON.stringify(id));

    //             localStorage.setItem('totalamount', JSON.stringify(totalamount));

    //                  alert('Add Payment Details!');
    //                 // Swal.fire('Success', 'Add Payment Details!', 'success');

    //                         if (response && response.sessionId) {


    //                 window.location.href = '{{ route("customer.card.show.sub", ["sessionid" => ":sessionId"]) }}'.replace(':sessionId', response.sessionId);


    //                 } else {
    //                 console.error('Invalid response format or missing sessionId.');
    //                 }


    //             },

    //             error: function(error) {
    //               window.location.href = '{{ route("login") }}';
    //                 console.error(error);
    //             }
    //         });

    //             },
    //             error: function(error) {
    //                 // Handle any errors here
    //                 console.error(error);
    //                 var url2 = '{{ route('customer.checkout') }}';
    //         $.ajax({
    //             type: 'GET',
    //             url: url2,

    //             // Assuming id is a parameter you want to send
    //             success: function(response) {
    //                console.log(response.sessionId);

    //                 localStorage.setItem('sub_id', JSON.stringify(id));
    //                 localStorage.setItem('totalamount', JSON.stringify(totalamount));
    //                 let idgetsession = response.sessionId;

    //                alert('Add Payment Details!');
    //                 // Swal.fire('Success', 'Add Payment Details!', 'success');

    //                         if (response && response.sessionId) {


    //                 window.location.href = '{{ route("customer.card.show.sub", ["sessionid" => ":sessionId"]) }}'.replace(':sessionId', response.sessionId);


    //                 } else {
    //                 console.error('Invalid response format or missing sessionId.');
    //                 }


    //             },

    //             error: function(error) {
    //               window.location.href = '{{ route("login") }}';
    //                 console.error(error);
    //             }
    //         });


    //             }
    //         });
    //     } else {
    //         console.log('coupon is null or empty');
    //         var url2 = '{{ route('customer.checkout') }}';
    //         $.ajax({
    //             type: 'GET',
    //             url: url2,

    //             // Assuming id is a parameter you want to send
    //             success: function(response) {
    //                console.log(response.sessionId);


    //                 let idgetsession = response.sessionId;
    //                 localStorage.setItem('sub_id', JSON.stringify(id));
    //                 localStorage.setItem('totalamount', JSON.stringify(totalamount));
    //                  alert('Add Payment Details!');
    //                 // Swal.fire('Success', 'Add Payment Details!', 'success');

    //                         if (response && response.sessionId) {


    //                 window.location.href = '{{ route("customer.card.show.sub", ["sessionid" => ":sessionId"]) }}'.replace(':sessionId', response.sessionId);


    //                 } else {
    //                 console.error('Invalid response format or missing sessionId.');
    //                 }


    //             },

    //             error: function(error) {
    //               window.location.href = '{{ route("login") }}';
    //                 console.error(error);
    //             }
    //         });

    //     }},
    //     error: function(response) {

    //      alert("You Already Purchased Packages");
    //         console.log(response);
    //                                 // Handle any errors here
    //                                 console.log(response);
    //                                 console.log(response.responseJSON.message);
    //                             //    alert(response.responseJSON.message);

    //                             }
    //                         });
    // }
    function clearModalData() {
    $('#coupon').val('');
    $('#totalamount').val('');
    $('#selectplanid').val('');
    $('#error-message').hide();
    $('#price-details').hide();
}

// Clear data when modal is closed
$('#modal-15').on('hidden.bs.modal', function () {
    clearModalData();
});

function checkCouponAvailability() {
    var coupon = document.getElementById('coupon').value;
    let id = $('#selectplanid').val();
    let totalamount = parseFloat($('#totalamount').val());
    let originalAmount = parseInt(totalamount);

    if (!coupon) {
        $('#error-message').text("Please enter a coupon code to check availability").show();
        $('#price-details').hide();
        return;
    }

    let couponUrl = "{{ route('check-coupon') }}";

    $.ajax({
        type: 'post',
        url: couponUrl,
        data: {
            coupon: coupon,
            _token: '{{ csrf_token() }}',
        },
        success: function (response) {
            let promotion = response.coupon;

            if (promotion && promotion !== "The promotion has ended") {
                const decreaseEveryday = JSON.parse(promotion.decrease_everyday);
                const startDate = new Date(promotion.start_date);
                const endDate = new Date(promotion.end_date);
                const currentDate = new Date();

                // Check if the promotion is within the valid date range
                if (currentDate >= startDate && currentDate <= endDate) {
                    const daysDiff = Math.floor((currentDate - startDate) / (1000 * 60 * 60 * 24));
                    const discountIndex = Math.min(daysDiff, decreaseEveryday.length - 1);
                    const discountPercentage = decreaseEveryday[discountIndex];

                    // Calculate discount amount and new total
                    const discountAmount = (originalAmount * discountPercentage) / 100;
                    const discountedTotal = originalAmount - discountAmount;

                    // Display price details
                    $('#price-details').show();
                    $('#original-price').text(originalAmount.toFixed(2));
                    $('#discount-amount').text(discountAmount.toFixed(2));
                    $('#discounted-price').text(discountedTotal.toFixed(2));

                    $('#error-message').text("Coupon is valid!").show();
                } else {
                    $('#error-message').text("The promotion is not active for the current date.").show();
                    $('#price-details').hide();
                }
            } else {
                $('#error-message').text("The coupon code you entered is incorrect or expired.").show();
                $('#price-details').hide();
            }
        },
        error: function () {
            $('#error-message').text("Error checking coupon. Please try again.").show();
            $('#price-details').hide();
        }
    });
}


function check_coupon() {
    var coupon = document.getElementById('coupon').value;
    let id = $('#selectplanid').val();
    let totalamount = parseFloat($('#totalamount').val());
    let originalAmount = parseInt(totalamount);

    if (coupon) {
        let couponUrl = "{{ route('check-coupon') }}";

        $.ajax({
            type: 'post',
            url: couponUrl,
            data: {
                coupon: coupon,
                _token: '{{ csrf_token() }}',
            },
            success: function (response) {
                let promotion = response.coupon;

                if (promotion && promotion !== "The promotion has ended") {
                    const decreaseEveryday = JSON.parse(promotion.decrease_everyday);
                    const startDate = new Date(promotion.start_date);
                    const currentDate = new Date();
                    const daysDiff = Math.floor((currentDate - startDate) / (1000 * 60 * 60 * 24));
                    const discountIndex = Math.min(daysDiff, decreaseEveryday.length - 1);
                    const discountPercentage = decreaseEveryday[discountIndex];

                    const discountAmount = (originalAmount * discountPercentage) / 100;
                    const discountedTotal = originalAmount - discountAmount;

                    $('#price-details').show();
                    $('#original-price').text(originalAmount.toFixed(2));
                    $('#discount-amount').text(discountAmount.toFixed(2));
                    $('#discounted-price').text(discountedTotal.toFixed(2));

                    totalamount = discountedTotal;
                    $('#error-message').hide();
                } else {
                    $('#error-message').text("The coupon code is incorrect or expired.").show();
                    $('#price-details').hide();
                }

                setTimeout(function () {
                    proceedToCheckout(totalamount, id);
                }, 2000); // 3-second delay
            },
            error: function () {
                $('#error-message').text("Error applying coupon. Please try again.").show();
                $('#price-details').hide();
            }
        });
    } else {
        proceedToCheckout(totalamount, id);
    }
}

function proceedWithoutCoupon() {
    let totalamount = $('#totalamount').val();
    let id = $('#selectplanid').val();

    proceedToCheckout(totalamount, id);
}

function proceedToCheckout(amount, planId) {
    console.log('Proceeding to checkout with amount:', amount, 'and plan ID:', planId);
    // Add your redirect to checkout page logic here
}

function proceedToCheckout(totalamount, id) {
    let checkoutUrl = '{{ route('customer.checkout') }}';

    $.ajax({
        type: 'GET',
        url: checkoutUrl,
        success: function(response) {
            if (response && response.sessionId) {
                localStorage.setItem('sub_id', JSON.stringify(id));
                localStorage.setItem('totalamount', JSON.stringify(totalamount));
                window.location.href = '{{ route("customer.card.show.sub", ["sessionid" => ":sessionId"]) }}'.replace(':sessionId', response.sessionId);
            } else {
                console.error('Invalid response format or missing sessionId.');
            }
        },
        error: function(error) {
            console.error(error);
            window.location.href = '{{ route("login") }}';
        }
    });
}


    // function submit_payment() {
    //     // alert('ok');
    //             var card_name = document.getElementById('card_name').value;
    //             var card_number = document.getElementById('card_number').value;
    //             var card_expiry_month = document.getElementById('card_expiry_month').value;
    //             var card_expiry_year = document.getElementById('card_expiry_year').value;
    //             var card_cvv = document.getElementById('card_cvv').value;
    //             var selectplanid = $('.selectplanid').val();
    //             var totalamount = $('.totalamount').val();
    //             var authuser = $('.authuser').val();



    //             var card_detail = {
    //                 card_name: card_name,
    //                 card_number: card_number,
    //                 card_expiry_month: card_expiry_month,
    //                 card_expiry_year: card_expiry_year,
    //                 card_cvv: card_cvv,
    //                 totalamount: totalamount,
    //                 authuser: authuser
    //             }
    //             localStorage.setItem('card_detail', JSON.stringify(card_detail))
    //             console.log(card_detail);
    //             user_id = authuser;

    //             var url = '{{ route('customer.customer_payment', ['id' => ':id']) }}';
    //             url = url.replace(':id', user_id);

    //             $.ajax({
    //                 type: 'post',
    //                 url: url,
    //                 data: {
    //                     card: card_detail,
    //                     _token: '{{ csrf_token() }}',
    //                 },
    //                 // Assuming id is a parameter you want to send
    //                 success: function(response) {
    //                     console.log(response);
    //                     message = response.message;
    //                     card = message.card;
    //                     var url2 = '{{ route('customer.select-plan', ['sub_id' => ':sub_id']) }}';
    //                     url2 = url2.replace(':sub_id', selectplanid);
    //                     $.ajax({
    //                         type: 'post',
    //                         url: url2,
    //                         data: {
    //                             card: card_detail,
    //                             user_id: user_id,
    //                             totalamount: totalamount,

    //                             _token: '{{ csrf_token() }}',
    //                         },
    //                         // Assuming id is a parameter you want to send
    //                         success: function(response) {
    //                             console.log(response);
    //                             location.reload();



    //                         },
    //                         error: function(error) {
    //                             // Handle any errors here
    //                             console.error(error);
    //                         }
    //                     });

    //                 },
    //                 error: function(error) {
    //                     // Handle any errors here
    //                     console.error(error);
    //                 }
    //             });
    //         };

    function open_modal(id, costPerPage, totalSubscription,$pages) {

      //  alert(totalSubscription);

 $.ajax({
type: 'get',
url: "{{ route('pakage_limit.get_pkg_pur') }}",
data: { totalSubscription: totalSubscription },
success: function (response) {


    if (response.success === 'Package limit exceeded') {
        console.log("Package limit exceeded");


         var totalamount = costPerPage * totalSubscription;

        $('#selectplanid').val('');
        $('#totalamount').val('');
        $('#selectplanid').val(id);
        $('#totalamount').val(totalamount);



                     localStorage.removeItem('costPerPage');
                     localStorage.setItem('costperpage1', JSON.stringify(costPerPage));
                     localStorage.removeItem('pages');
                     localStorage.setItem('pages', $pages);


    var value = $('#totalamount').val();
console.log(value);
        var modal = new bootstrap.Modal(document.getElementById("modal-15"));
        modal.show();
        document.getElementsByClasName("modal-backdrop").style.position = "static";




    } else if (response.success === 'Package limit not exceeded') {
          alert("Thank you for your interest in our services! We are currently at full capacity and unable to take new subscriptions at this moment. Please leave your email with us, and we'll notify you as soon as slots become available. We appreciate your understanding and look forward to serving you in the future.");

    } else {
        console.log("An unexpected error occurred");

    }
},
error: function (error) {
    // Handle any errors here
    console.error(error);
}
});






    }

    function open_modal_login() {
        console.log('hello');
        var modal = new bootstrap.Modal(document.getElementById("modal-156"));
        modal.show();
        document.getElementsByClassName("modal-backdrop6")[0].style.position = "static";
    }
</script>

    @endsection
