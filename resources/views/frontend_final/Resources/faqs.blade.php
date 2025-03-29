@extends('frontend_final.Layout.masters')
@section('content')
<!-- Section FAQs -->
<section class="bg-dark section-card-phases faqs-accpomt-setup-sec-1">
    <div class="d-flex justify-content-between align-items-center">
        <div class="text-container faq-container flex-grow-1 text-center position-relative">
            <h1 class="header-text text-white d-flex justify-content-center w-100">Frequently Asked Questions</h1>
            <div class="position-absolute sub-text7 w-100">
                <span class="main-text text-purple d-flex justify-content-center w-100">(FAQs)</span>
            </div>
        </div>



    </div>

    <!--<div class="container pt-5 faq-sec-1">-->
    <!--    <div class="faqs-acord">-->
    <!--        <div class="accordion" id="accordionExample">-->
    <!--            <div class="accordion-item">-->
    <!--                <h2 class="accordion-header" id="headingOne">-->
    <!--                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
    <!--                        <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How do you ensure the papers are plagiarism-free?-->
    <!--                    </button>-->
    <!--                </h2>-->
    <!--                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">-->
    <!--                    <div class="accordion-body">-->
    <!--                        Each paper is meticulously crafted from scratch by our expert writers. To guarantee originality, we provide a Turnitin report with every paper, which certifies that the content is free from plagiarism and upholds the highest standards of academic integrity.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="accordion-item">-->
    <!--                <h2 class="accordion-header" id="headingTwo">-->
    <!--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
    <!--                        <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Is there a money back-->
    <!--                        guarantee?-->
    <!--                    </button>-->
    <!--                </h2>-->
    <!--                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">-->
    <!--                    <div class="accordion-body">-->
    <!--                        <strong>This is the second item's accordion body.</strong> It is hidden by default,-->
    <!--                        until the collapse plugin adds the appropriate classes that we use to style each-->
    <!--                        element. These classes control the overall appearance, as well as the showing and hiding-->
    <!--                        via CSS transitions. You can modify any of this with custom CSS or overriding our-->
    <!--                        default variables. It's also worth noting that just about any HTML can go within the-->
    <!--                        <code>.accordion-body</code>, though the transition does limit overflow.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="accordion-item">-->
    <!--                <h2 class="accordion-header" id="headingThree">-->
    <!--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
    <!--                        <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Is there a money back-->
    <!--                        guarantee?-->
    <!--                    </button>-->
    <!--                </h2>-->
    <!--                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">-->
    <!--                    <div class="accordion-body">-->
    <!--                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until-->
    <!--                        the collapse plugin adds the appropriate classes that we use to style each element.-->
    <!--                        These classes control the overall appearance, as well as the showing and hiding via CSS-->
    <!--                        transitions. You can modify any of this with custom CSS or overriding our default-->
    <!--                        variables. It's also worth noting that just about any HTML can go within the-->
    <!--                        <code>.accordion-body</code>, though the transition does limit overflow.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="accordion-item">-->
    <!--                <h2 class="accordion-header" id="headingFour">-->
    <!--                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">-->
    <!--                        <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Is there a money back-->
    <!--                        guarantee?-->
    <!--                    </button>-->
    <!--                </h2>-->
    <!--                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">-->
    <!--                    <div class="accordion-body">-->
    <!--                        <strong>This is the first item's accordion body.</strong> It is shown by default, until-->
    <!--                        the collapse plugin adds the appropriate classes that we use to style each element.-->
    <!--                        These classes control the overall appearance, as well as the showing and hiding via CSS-->
    <!--                        transitions. You can modify any of this with custom CSS or overriding our default-->
    <!--                        variables. It's also worth noting that just about any HTML can go within the-->
    <!--                        <code>.accordion-body</code>, though the transition does limit overflow.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="accordion-item">-->
    <!--                <h2 class="accordion-header" id="headingFive">-->
    <!--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">-->
    <!--                        <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Is there a money back-->
    <!--                        guarantee?-->
    <!--                    </button>-->
    <!--                </h2>-->
    <!--                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">-->
    <!--                    <div class="accordion-body">-->
    <!--                        <strong>This is the second item's accordion body.</strong> It is hidden by default,-->
    <!--                        until the collapse plugin adds the appropriate classes that we use to style each-->
    <!--                        element. These classes control the overall appearance, as well as the showing and hiding-->
    <!--                        via CSS transitions. You can modify any of this with custom CSS or overriding our-->
    <!--                        default variables. It's also worth noting that just about any HTML can go within the-->
    <!--                        <code>.accordion-body</code>, though the transition does limit overflow.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="accordion-item">-->
    <!--                <h2 class="accordion-header" id="headingSix">-->
    <!--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">-->
    <!--                        <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Is there a money back-->
    <!--                        guarantee?-->
    <!--                    </button>-->
    <!--                </h2>-->
    <!--                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">-->
    <!--                    <div class="accordion-body">-->
    <!--                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until-->
    <!--                        the collapse plugin adds the appropriate classes that we use to style each element.-->
    <!--                        These classes control the overall appearance, as well as the showing and hiding via CSS-->
    <!--                        transitions. You can modify any of this with custom CSS or overriding our default-->
    <!--                        variables. It's also worth noting that just about any HTML can go within the-->
    <!--                        <code>.accordion-body</code>, though the transition does limit overflow.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="accordion-item">-->
    <!--                <h2 class="accordion-header" id="headingSeven">-->
    <!--                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">-->
    <!--                        <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Is there a money back-->
    <!--                        guarantee?-->
    <!--                    </button>-->
    <!--                </h2>-->
    <!--                <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">-->
    <!--                    <div class="accordion-body">-->
    <!--                        <strong>This is the first item's accordion body.</strong> It is shown by default, until-->
    <!--                        the collapse plugin adds the appropriate classes that we use to style each element.-->
    <!--                        These classes control the overall appearance, as well as the showing and hiding via CSS-->
    <!--                        transitions. You can modify any of this with custom CSS or overriding our default-->
    <!--                        variables. It's also worth noting that just about any HTML can go within the-->
    <!--                        <code>.accordion-body</code>, though the transition does limit overflow.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="accordion-item">-->
    <!--                <h2 class="accordion-header" id="headingEight">-->
    <!--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">-->
    <!--                        <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Is there a money back-->
    <!--                        guarantee?-->
    <!--                    </button>-->
    <!--                </h2>-->
    <!--                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">-->
    <!--                    <div class="accordion-body">-->
    <!--                        <strong>This is the second item's accordion body.</strong> It is hidden by default,-->
    <!--                        until the collapse plugin adds the appropriate classes that we use to style each-->
    <!--                        element. These classes control the overall appearance, as well as the showing and hiding-->
    <!--                        via CSS transitions. You can modify any of this with custom CSS or overriding our-->
    <!--                        default variables. It's also worth noting that just about any HTML can go within the-->
    <!--                        <code>.accordion-body</code>, though the transition does limit overflow.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="accordion-item">-->
    <!--                <h2 class="accordion-header" id="headingNine">-->
    <!--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">-->
    <!--                        <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Is there a money back-->
    <!--                        guarantee?-->
    <!--                    </button>-->
    <!--                </h2>-->
    <!--                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">-->
    <!--                    <div class="accordion-body">-->
    <!--                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until-->
    <!--                        the collapse plugin adds the appropriate classes that we use to style each element.-->
    <!--                        These classes control the overall appearance, as well as the showing and hiding via CSS-->
    <!--                        transitions. You can modify any of this with custom CSS or overriding our default-->
    <!--                        variables. It's also worth noting that just about any HTML can go within the-->
    <!--                        <code>.accordion-body</code>, though the transition does limit overflow.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="accordion-item">-->
    <!--                <h2 class="accordion-header" id="headingTen">-->
    <!--                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">-->
    <!--                        <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Is there a money back-->
    <!--                        guarantee?-->
    <!--                    </button>-->
    <!--                </h2>-->
    <!--                <div id="collapseTen" class="accordion-collapse collapse show" aria-labelledby="headingTen" data-bs-parent="#accordionExample">-->
    <!--                    <div class="accordion-body">-->
    <!--                        <strong>This is the first item's accordion body.</strong> It is shown by default, until-->
    <!--                        the collapse plugin adds the appropriate classes that we use to style each element.-->
    <!--                        These classes control the overall appearance, as well as the showing and hiding via CSS-->
    <!--                        transitions. You can modify any of this with custom CSS or overriding our default-->
    <!--                        variables. It's also worth noting that just about any HTML can go within the-->
    <!--                        <code>.accordion-body</code>, though the transition does limit overflow.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--<div class="container pt-5">-->
    <!--    <div class="d-flex justify-content-between align-items-center">-->
    <!--        <div class="text-container flex-grow-1 text-center position-relative faq-container">-->
    <!--            <h1 class="heading gradient-text">Frequently Asked Questions</h1>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->


    <div class="container pt-5 mt-5">
        <ul class="nav justify-content-center faqs-tab-content" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="plagiarism-originality-tab" data-bs-toggle="tab" data-bs-target="#plagiarism-originality" type="button" role="tab" aria-controls="plagiarism-originality" aria-selected="true">Plagiarism and Originality</a>
            </li>
            <span class="px-3 text-white d-flex align-items-center">|</span>
            <li class="nav-item">
                <a class="nav-link" id="pricing-fess-tab" data-bs-toggle="tab" data-bs-target="#pricing-fess" type="button" role="tab" aria-controls="pricing-fess" aria-selected="false">Pricing and Fees</a>
            </li>
            <span class="px-3 text-white d-flex align-items-center">|</span>
            <li class="nav-item">
                <a class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab" aria-controls="payment" aria-selected="false">Paper Quality and Customization</a>
            </li>
            <span class="px-3 text-white d-flex align-items-center">|</span>
            <li class="nav-item">
                <a class="nav-link" id="sales-order-tab" data-bs-toggle="tab" data-bs-target="#sales-order" type="button" role="tab" aria-controls="sales-order" aria-selected="false">Ethics and Academic Integrity</a>
            </li>
            <span class="px-3 text-white d-flex align-items-center">|</span>
            <li class="nav-item">
                <a class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button" role="tab" aria-controls="security" aria-selected="false">Service Usage and Access</a>
            </li>
            <span class="px-3 text-white d-flex align-items-center">|</span>
            <li class="nav-item">
                <a class="nav-link" id="Delivery-tab" data-bs-toggle="tab" data-bs-target="#Delivery" type="button" role="tab" aria-controls="Delivery" aria-selected="false">Delivery and Timeliness</a>
            </li>
            <span class="px-3 text-white d-flex align-items-center">|</span>
            <li class="nav-item">
                <a class="nav-link" id="Confidentiality-tab" data-bs-toggle="tab" data-bs-target="#Confidentiality" type="button" role="tab" aria-controls="Confidentiality" aria-selected="false">Confidentiality and Security</a>
            </li>
            <span class="px-3 text-white d-flex align-items-center">|</span>
            <li class="nav-item">
                <a class="nav-link" id="Customer-tab" data-bs-toggle="tab" data-bs-target="#Customer" type="button" role="tab" aria-controls="Customer" aria-selected="false">Customer Support and Satisfaction</a>
            </li>
            <span class="px-3 text-white d-flex align-items-center">|</span>
            <li class="nav-item">
                <a class="nav-link" id="Service-tab" data-bs-toggle="tab" data-bs-target="#Service" type="button" role="tab" aria-controls="Service" aria-selected="false">Service Features and Offers</a>
            </li>
        </ul>

        <div class="tab-content pt-5" id="myTabContent">
            <div class="tab-pane fade show active" id="plagiarism-originality" role="tabpanel" aria-labelledby="plagiarism-originality-tab">
                <div class="faqs-acord-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How do you ensure the papers are Plagiarism-Free?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Each paper is meticulously crafted from scratch by our expert writers. To guarantee originality, we provide a Turnitin report with every paper, which certifies that the content is free from plagiarism and upholds the highest standards of academic integrity. In situations where Turnitin is unavailable, we provide equivalent reports from reputable competitors.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What technology do you use to guarantee my work will pass Turnitin?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We use the latest content identification technologies, including Turnitin, to review and ensure that all papers are free from plagiarism. This advanced technology helps us maintain the originality of each submission, giving you peace of mind about the integrity of your work. In situations where Turnitin is unavailable, we provide equivalent reports from reputable competitors.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Are the papers provided truly unique?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Absolutely, each paper is uniquely created to meet the specific requirements of your assignment. We ensure that all content is original and tailored to your instructions, supported by a Turnitin report as proof of uniqueness.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Can I get a plagiarism report with my paper?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we provide a Turnitin report with every paper. This report is a comprehensive check that confirms the paper is free of plagiarism, ensuring that you receive original work every time. In situations where Turnitin is unavailable, we provide equivalent reports from reputable competitors.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How do you handle papers that require strict originality?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    For papers requiring strict originality, we employ rigorous protocols that include drafting from scratch and using multiple plagiarism detection tools to ensure the content is entirely original. Our editorial team also conducts thorough reviews to uphold our high standards of originality.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What steps do you take to update your plagiarism detection tools?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We continuously update our plagiarism detection tools and stay informed about the latest developments in anti-plagiarism technologies. Our commitment to using cutting-edge tools, like Turnitin, ensures that we are equipped to detect even the most subtle instances of plagiarism.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Is each paper checked before delivery?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, every paper undergoes a thorough plagiarism check before delivery. We provide a Turnitin report for each paper, which ensures that the content delivered to you meets our strict standards for originality.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How do you ensure the content isn’t recycled?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our strict policy ensures that neither we nor our writers reuse or resell any paper. Each piece is written specifically for the order placed by a customer, ensuring that every paper is 100% unique and tailored to the client’s needs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What guarantees can you give that my paper will be original?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We offer a $500 guarantee against plagiarism. If any paper is found to have plagiarized content, we commit to addressing the issue immediately, underscoring our dedication to providing only original work.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Do you provide a uniqueness score for the papers?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   Yes, each paper comes with a Turnitin report, which includes a uniqueness score. This score quantifies the originality of the paper, ensuring it meets academic standards. In situations where Turnitin is unavailable, we provide equivalent reports from reputable competitors.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How is AI used to enhance the originality of the papers?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We employ AI-enhanced detectors to review every paper, ensuring that the content is original. These AI tools compare your paper against vast databases and the internet to ensure there is no duplication, providing a further layer of assurance in our plagiarism checks.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.')}}'" alt="" class="me-3"> What makes your plagiarism detection capabilities superior to others?
                                </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our use of premier tools like Turnitin, combined with our transparent practice of providing these reports to our customers, sets us apart. We maintain the highest standards of honesty and transparency in our plagiarism detection processes, ensuring superior quality and originality in every paper we deliver. In situations where Turnitin is unavailable, we provide equivalent reports from reputable competitors.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="pricing-fess" role="tabpanel" aria-labelledby="pricing-fess-tab">
                <div class="faqs-acord-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What are your pricing rates for custom orders?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                               Our pricing for custom orders starts at $18 per page for assignments with a 15-day deadline, with rates varying based on the urgency and complexity of the order. For detailed pricing information, please visit our <a href="./custom-order.php" class="text-decoration-none text-white">Pricing Page</a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How does the pricing structure vary with the urgency of the order?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                The pricing structure is designed to accommodate various deadlines: the shorter the deadline, the higher the rate per page. This reflects the additional resources required to ensure timely delivery of high-quality work. For a complete breakdown of our pricing based on order urgency, please visit our  <a href="./custom-order.php" class="text-decoration-none text-white">Pricing Page</a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Are there any hidden fees I should be aware of?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                No, there are no hidden fees. Our pricing is transparent and all-inclusive, ensuring that you know exactly what you are paying for. We pride ourselves on clear communication regarding costs, without any surprises.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What payment methods do you accept?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                We accept Visa, MasterCard, and American Express. These options are provided to offer convenience and secure payment processes for all our clients.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How does the packages service work?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Our packages service, previously referred to as subscription, allows you to purchase academic help in bulk at a discounted rate. This service provides flexibility and cost-effectiveness, particularly for regular users. For more details on how this service can benefit you, please visit our  <a href="./packages.php" class="text-decoration-none text-white">Packages Page</a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What does the flat-rate packages cover?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                The flat-rate packages cover a predetermined number of pages that you can use over a specified period, typically one year, with no additional costs for rush orders. This package also includes premium services at no extra charge. For a detailed explanation of what is included, please visit our <a href="./packages.php" class="text-decoration-none text-white">Packages Page</a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Can I get a refund if I am not satisfied?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Yes, we have a refund policy in place those rare cases where our work does not meet the agreed-upon standards or if there are significant discrepancies. For details on our refund policy and conditions, please refer to our <a href="./term-paper.php" class="text-decoration-none text-white">Terms and Conditions</a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Are there discounts available for bulk orders?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Yes, we offer significant discounts for bulk orders through our packages. These discounts are designed to provide greater value and accessibility for larger or ongoing academic needs. Details on these discounts can be found on our <a href="./packages.php" class="text-decoration-none text-white">Packages Page</a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What are the costs associated with premium services?   
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Premium services such as detailed summaries, plagiarism reports, and priority support are included free of charge with any of our package plans. If purchased separately, these services have varied costs, which are clearly outlined on our <a href="./custom-order.php" class="text-decoration-none text-white">Pricing Page</a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How transparent is your pricing policy?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Our pricing policy is fully transparent. We provide detailed breakdowns of costs for all services upfront, ensuring that you can make informed decisions without concern for hidden fees or unexpected charges.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Do you offer any loyalty discounts?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Yes, we offer loyalty discounts to returning customers as a part of our commitment to rewarding ongoing relationships. Details on these discounts can be found on our <a href="./packages.php" class="text-decoration-none text-white">Packages Page</a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Is the pricing competitive compared to other services?
                                </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Yes, our pricing is competitive and reflects the high-quality, personalized service we provide. We ensure that our rates are comparable to, or better than, those of similar services in the market, offering excellent value for the quality of work delivered.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                <div class="faqs-acord-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How do you ensure high-quality paper standards?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We maintain high-quality standards by employing expert writers who specialize in various academic fields. Each paper undergoes rigorous checks for accuracy, grammar, and adherence to assignment criteria. Additionally, our internal quality control system includes peer reviews and use of the latest plagiarism and Artificial Intelligence (AI) detection software to ensure that all papers are up to the expected standard.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Can I specify formatting requirements like APA or MLA?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Absolutely! You can specify any formatting requirements, including APA, MLA, Chicago, Harvard, or any other style. Our writers are well-versed in these formats and will ensure that your paper adheres strictly to the specified guidelines.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How are writers matched with my paper’s topic?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Writers are matched based on their educational background, expertise in the subject matter, and previous experience with similar topics. This ensures that your paper is handled by a writer who not only understands the subject deeply but is also familiar with the specific academic requirements of the topic.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Can I request changes to a draft?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, you are encouraged to request changes during the drafting process. Our policy allows for revisions, where you can provide feedback and request amendments to ensure the final product meets your order requirements fully.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Are there different levels of service based on academic complexity?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we offer different levels of service tailored to the academic complexity of the task. For instance, thesis writing or projects that require extensive research and specialization are handled differently and may be priced higher due to the additional expertise and effort required.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What if I need a paper on a very niche topic?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our team includes writers from diverse academic backgrounds, including those who specialize in niche topics. No matter how specific or uncommon your topic might be, we are equipped to find the right expert to handle your paper.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How do you handle highly technical or complex assignments?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Highly technical or complex assignments are assigned to writers with specific qualifications and proven experience in the relevant field. We also ensure that these papers are subject to additional quality controls and review by subject matter experts.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What quality controls are in place for paper review?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our quality control process includes several layers of review. Papers are reviewed for adherence to assignment requirements, grammatical accuracy, and content quality. Additionally, we use advanced plagiarism and AI detection tools to ensure originality.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How can I be involved in the writing process?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We encourage active client involvement through our interactive customer portal. You can communicate directly with your assigned writer, provide ongoing feedback, and track the progress of your paper to ensure it aligns with your expectations.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Do you provide samples of the papers before finalizing?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    To maintain the integrity of our service, we do not provide drafts to avoid misuse of our services. However, snippets or abstracts can sometimes be shared to give you a sense of the writing style and quality.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What steps are taken to tailor papers to individual assignment goals?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our writers start by thoroughly understanding your assignment requirements and goals. They use this information to craft a paper that is not only well-researched but also aligned with your academic objectives and personalized to reflect your perspective and insights.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="sales-order" role="tabpanel" aria-labelledby="sales-order-tab">
                <div class="faqs-acord-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How do you ensure the ethical use of your services?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We ensure the ethical use of our services by providing clear guidelines on how to use our papers as learning tools. We emphasize that our products should be used for research, reference, and to enhance understanding, rather as final submissions for academic credit.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What measures do you take to support academic integrity?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We support academic integrity by ensuring all our papers are plagiarism-free and crafted from scratch. We provide Turnitin reports to verify originality, and we adhere to strict guidelines that align with academic standards.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Is it considered cheating to use your service?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Using our service is not considered cheating as long as the papers are used ethically as study aids or for reference purposes. We advocate for responsible use and provide guidance on how to use our services to support your education ethically.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How can using your service enhance my own understanding and skills?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our services are designed to enhance understanding and academic skills by providing high-quality, well-researched content that can serve as a strong foundation for your studies. By studying our papers, you can gain deeper insights into your subject and learn how to structure and articulate academic content effectively.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What is your policy on academic honesty?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our policy on academic honesty is stringent. We produce only original content and encourage our clients to use our services responsibly. We are committed to upholding high standards of academic integrity and helping students learn in an ethical manner.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How do you educate users about ethical use?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We educate our users about ethical use through our website, customer service, and through the materials we provide. Our terms of use clearly state the intended use of our products, and we continuously remind users to adhere to these guidelines to ensure ethical usage.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Can your papers be used directly for submission?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, our papers are not intended to be submitted as your own work. They are provided for research, reference, and learning purposes only. Direct submission of our papers as your own work violates our terms of service and can contravene academic integrity policies.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What advice do you offer to ensure ethical use of purchased papers?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We advise clients to use the purchased papers as models or additional resources for writing their own papers. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How do you handle confidential user information?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We handle confidential user information with the utmost care. We employ advanced security measures to protect personal data. Our privacy policy outlines these practices in detail.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What ethical guidelines govern your service operations?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our operations are governed by ethical guidelines that prioritize integrity, honesty, and fairness. We comply with all applicable laws and regulations and engage in best practices that ensure ethical conduct across all aspects of our business.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How do you align with institutional academic codes?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We align with institutional academic codes by ensuring our services are used as educational tools. We adhere to ethical standards that respect the academic guidelines of educational institutions, promoting integrity and the proper use of academic materials.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What responsibilities do users have when using your service?
                                </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Users are responsible for using our services ethically. This includes not submitting our work as their own, using our materials to aid their understanding, and citing our work appropriately where necessary. We provide guidance to ensure users understand and fulfill these responsibilities.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                <div class="faqs-acord-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How do I sign up for your service?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Signing up is simple and quick. Just visit our website, click on the sign-up link, and fill in the required information. You will have access to our services immediately after completing the registration process.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What do I get when I register on your platform?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Upon registration, you gain full access to our extensive library of sample papers, the ability to place custom orders, direct communication with writers, and the use of advanced tools like order tracking and management.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How quickly can I access sample papers after signing up?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Access to sample papers is instant once you've registered. You can start browsing and using the samples right away to aid in your academic research and learning.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Is there a tutorial on how to use your service effectively?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our platform is designed to be intuitive and user-friendly. While there is no specific tutorial, navigating through the services is straightforward. Plus, our customer support team is always available to assist you if you need help.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Can I access the service from any device?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, our service is fully responsive and can be accessed from any device, including desktops, laptops, tablets, and smartphones. This ensures you can manage your orders and access resources on-the-go.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What are the main features of your customer interface?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The main features include a dashboard for order management, a library of resources, communication tools to interact with writers, and settings to customize your experience. Our interface is designed to streamline the process and make it efficient for you to manage your academic needs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How can I manage my orders and downloads?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can manage your orders and downloads through your personal dashboard, which allows you to track progress, communicate with writers, and download completed orders or sample papers. This dashboard is part of your account once you sign up and is designed to keep all your academic services organized.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What if I encounter technical issues while using the service?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    If you encounter any technical issues, our technical support team is available to help resolve them promptly. You can reach them via email, or phone as detailed on our website.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How is the user interface tailored to enhance my experience?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our user interface is tailored to be clean, straightforward, and user-friendly, minimizing distractions and focusing on functionality. It is designed to enhance your experience by making navigation simple and ensuring that essential features are easily accessible.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What support is available to help me navigate the service?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Comprehensive support is available through email, and phone. Our customer service team is equipped to help you navigate the service, answer any questions, and provide assistance whenever needed.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How often is your platform updated with new features?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our platform is updated regularly to incorporate new features, enhance security, and improve user experience. We strive to implement the latest technological advances and feedback from users to continuously improve our service.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Can I delete my account if needed?
                                </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, you can delete your account at any time. If you decide to delete your account, please contact our customer support to assist you with the process. Please note that deleting your account will remove all your data from our servers in accordance with our privacy policy.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="Delivery" role="tabpanel" aria-labelledby="Delivery-tab">
                <div class="faqs-acord-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How fast can you deliver a custom paper?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We offer several turnaround times depending on your urgency, ranging from 2-7 hours to more than 15 days. Details of our delivery times and pricing are available on our <a href="./custom-order.php" class="text-decoration-none text-white">Pricing Page</a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What happens if a deadline is missed?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Missing a deadline is rare, but should it happen, our policy includes options for refunds or discounts on future orders, as detailed in our terms and conditions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Can I place a rush order?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we accept rush orders. For urgent delivery requirements, you can select the desired deadline from our range of options when placing your order.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How do you handle urgent revisions?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Urgent revisions are prioritized to ensure that any required changes are made promptly and the revised document is returned to you before your deadline.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What guarantees do you provide regarding timely delivery?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We guarantee timely delivery for all orders. If any delivery is late, our 'Completion on Time Promise' applies, providing you with compensation as outlined in our terms of service.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Can I track the progress of my order?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, you can track the progress of your order from your account panel, where real-time updates are provided.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What if I need a paper within a few hours?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We can accommodate orders with a delivery time as short as 2-7 hours, depending on the complexity of the topic and the length of the paper.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Are there different delivery options available?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we offer various delivery options ranging from several hours to weeks. You can choose the option that best fits your timeline when placing an order.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How do you prioritize orders?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Orders are prioritized based on the delivery deadlines specified by clients. Urgent orders receive immediate attention from our team to ensure timely completion.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What communication can I expect regarding delivery updates?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You will receive regular updates via email or through direct notifications on your dashboard about the status of your order.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How can I ensure my paper is delivered on time during high-demand periods?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    During high-demand periods, we recommend placing your order well in advance and selecting a realistic deadline to ensure timely delivery. Our customer support is also available to help manage and prioritize your orders effectively.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="Confidentiality" role="tabpanel" aria-labelledby="Confidentiality-tab">
                <div class="faqs-acord-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What measures do you take to protect my personal information?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We implement robust security measures including data encryption, secure servers, and strict data access controls to ensure your personal information is protected against unauthorized access and disclosure.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How secure is your website?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   Our website employs industry-standard security protocols, including SSL encryption, to safeguard all data transmitted between your device and our servers.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Can I be assured of my privacy when using your service?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Absolutely. We are committed to maintaining your privacy and handle all personal information in strict compliance with data protection laws.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What data protection standards do you follow?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We adhere to relevant data protection regulations to ensure that your personal data is processed securely and with due care.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Who has access to my personal details?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Only a limited number of authorized personnel have access to your personal details, strictly for business purposes, and we never share your information with third parties without your consent.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How do you handle sensitive academic information?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Sensitive academic information is handled with the utmost confidentiality and is only used to fulfill your order requirements. Access to this data is strictly controlled and monitored.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What happens to my information if I delete my account?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    When you delete your account, your personal information is securely erased from our databases in compliance with legal and regulatory requirements.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Do you share information with third parties?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We do not sell or rent your information to third parties. Any sharing of information is strictly governed by our privacy policy and is only done with your consent or for necessary processing related to your service requests.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How can I control the visibility of my data?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can manage your data visibility through your account settings, where you can control what information is visible and can update or remove information as you see fit.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What security protocols are in place for online transactions?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    All online transactions are secured with advanced encryption technologies. We comply with industry standard protocols and implement additional measures like secure payment gateways to protect your financial data.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How do you ensure the confidentiality of my papers?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We ensure the confidentiality of your papers by not sharing them with any third parties. Each document is handled through a secure system with access restricted to individuals directly involved in the project.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What steps do you take to prevent data breaches?
                                </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We take multiple steps to prevent data breaches, including regular security audits, the use of up-to-date security technologies, and comprehensive employee training on data security.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="Customer" role="tabpanel" aria-labelledby="Customer-tab">
                <div class="faqs-acord-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What support options are available to me?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We offer multiple support options including email support, and a dedicated customer service phone line. You can choose the method that best suits your needs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How can I contact customer service?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can contact our customer service team via email, or call our support hotline. All contact details are available on our Contact Us page.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What is your response time to inquiries?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We strive to respond to all inquiries as quickly as possible, typically within a few hours. Our commitment is to provide prompt and efficient service to address your concerns.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Can I speak directly with my writer?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, our platform allows you to communicate directly with your writer to discuss your project details and make any necessary adjustments.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How do you handle customer complaints?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Customer complaints are handled with the utmost seriousness. We investigate each complaint thoroughly and work to resolve the issue promptly to ensure customer satisfaction.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What is your policy on revisions?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our revision policy allows for free revisions within a specified period after delivery, provided the revision request follows the original project guidelines.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How do I report an issue with my order?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    If you encounter any issue with your order, you can report it directly through your account dashboard or contact our support team for immediate assistance.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What guarantees do you offer to ensure customer satisfaction?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We offer a satisfaction guarantee that includes revisions and adjustments to meet your original project guidelines, as well as, on rare occasions, a refund policy if we fail to meet the agreed-upon requirements.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> Are there any support resources available, like FAQs or guides?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, our website features a comprehensive FAQ section that provides detailed information on using our services and managing your orders.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How is feedback collected and used to improve the service?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We collect feedback through surveys, direct customer feedback, and online reviews. This feedback is analyzed and used to make continuous improvements to our services.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What steps do you take if I'm not satisfied with my paper?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   If you are not satisfied with your paper, you can request revisions or contact our support team to discuss other available options, including reassignment of the paper to another writer if necessary.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="Service" role="tabpanel" aria-labelledby="Service-tab">
                <div class="faqs-acord-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What unique features does your service offer?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our service offers unique features such as subscription-based packages with page rollover options and Turnitin reports to ensure authenticity and high-quality standards.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">How do the premium services add value to my packages?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Premium services included in the packages, such as detailed plagiarism reports, priority support, and summaries enhance your experience by providing additional educational support and ensuring peace of mind.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What are the benefits of your packages model?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The packages model offers cost-effective pricing, flexibility in usage with rollover pages, and access to premium services, making it an ideal choice for ongoing academic support.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">Can you explain the page rollover feature?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The page rollover feature allows you to carry forward unused pages to the next period, ensuring you get full value from your purchase without any waste.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> What special offers or promotions are currently available?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    For the latest offers and promotions, please visit our <a href="./packages.php">Packages Page</a> and <a href="./sign-up.php">Our Current Offers</a> where you can find detailed information about current discounts and special deals.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How do bulk purchases work?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Bulk purchases allow you to buy services in larger quantities at a reduced price, providing significant savings and the flexibility to use the services as needed over time.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How does your service stand out from competitors?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our service stands out due to our commitment to quality, unique features like the rollover of pages, comprehensive support, and the use of Turnitin Reports to guarantee originality.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3">What technology do you use to stay ahead in the market?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We utilize advanced technologies, including AI for paper analysis and the latest web technologies, to provide a seamless user experience and maintain the highest standards of service.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How frequently do you update your service offerings?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We regularly update our services to adapt to new academic standards and incorporate feedback from our users to improve functionality and user satisfaction.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <img src="{{ asset('fronted_final/assets/images/question-mark.png')}}" alt="" class="me-3"> How flexible is your service to meet diverse customer needs?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our service is highly flexible, offering various packages, custom order options, and the ability to tailor services to meet specific academic or professional requirements effectively.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection