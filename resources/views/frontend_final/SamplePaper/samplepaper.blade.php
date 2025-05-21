@extends('frontend_final.Layout.masters')
@section('content')
    <!-- Hero Section -->
    <div class="samplePaper-hero-section d-flex justify-content-center align-items-center">
        <div class="hero-text text-center  mt-custom-5">
            <h1 class="header-text">
                Discover the Path to Scholarly Success - <br>
                <span class="text-purple">Bypass Turnitin with Precision!</span> <br>
            </h1>
            <div class="container">
                <div class="d-flex align-items-center justify-content-center">
                    <p class="sample-hero-text">Welcome to the 'Library', a gateway to transforming your academic aspirations
                        into reality. We demonstrate our expertise in circumventing Turnitin’s <span
                            class="underline yellow-text fw-bolder">Plagiarism</span> and <span
                            class="underline gradient-text fw-bolder"> AI-Detetion </span> checks, offering tangible proof of
                        our dedication to your academic success. Delve into a diverse collection of sample papers across
                        various academic disciplines, each detailed with meta information such as <span
                            class="underline gradient-text fw-bolder"> AI-Detetion </span> rates, <span
                            class="underline yellow-text fw-bolder">Plagiarism</span> percentages, word counts, and more.
                        Embark on a journey through a realm of unparalleled academic resources—your path to transcending
                        academic limitations begins with a simple click!</p>

                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <p class="yellow-text fw-bold">
                        Disclaimer: The provided sample papers are created solely for showcasing the quality of our
                        services and do not represent papers delivered to other students. They are exclusively crafted by
                        our team of experts.
                        We assure you that we
                        do not resell or publish any papers online, emphasizing our commitment to privacy and academic
                        integrity. Each paper
                        is tailored uniquely to meet the individual needs of our clients.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Cards Section -->
    <section class="bg-dark section-card-phases custom-padding-1 plagiarism-custom-1 px-2">
        <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
            <img src="{{ asset('fronted_final/assets/images/heart-line 1.png') }}" alt="heart-line 1"
                class="heartbeat-line start" />
            <div class="text-container flex-grow-1 text-center position-relative">
                <h1 class="">Why Choose Us</h1>
                <div class="position-absolute sub-text">
                    <span class="main-text ">Empower Your Academic Journey - </span> <br />
                    <span class="main-text text-purple">Comprehensive Benefits Unveiled!</span> <br />
                    <span class="gradient-text text-no-warp sample-paper-sec-2-font">Step into a World of Endless
                        Possibilities: Where Education Meets
                        Innovation!</span>
                </div>
            </div>
            <img src="{{ asset('fronted_final/assets/images/heart-line 2.png') }}" alt="heart-line 2"
                class="heartbeat-line end" />
        </div>


        <!-- Card 1 -->
        <div class="container-sm cardStyles2 sample-card-styles mt-custom-6 sample-paper-sec-2">
            <div class="card-body">
                <div class="row px-3 py-4">
                    <div class="col-lg-7 ">
                        <h5 class="cardHeading mb-0"> Instant Access - </h5>
                        <span class="sample-yellow-text"> Zero Costs!</span>
                        <p class="cardTxt ">Secure immediate entry to a treasure trove of Turnitin-beating
                            papers; your academic breakthrough begins now.</p>
                        <p class="cardTxt "> Invest in your future smartly; no upfront payments mean financial
                            security and <br />peace of mind.</p>
                        <p class="cardTxt "> See how our platform propels students beyond traditional academic
                            <br /> boundaries.
                        </p>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center">
                        <img src="{{ asset('fronted_final/assets/images/sampleimg1.png') }}" alt="Turnitin_logo_" />
                    </div>

                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="container-sm cardStyles2 sample-card-styles">
            <div class="card-body">
                <div class="row px-3 py-4">
                    <div class="col-lg-5 d-flex justify-content-center">
                        <img src="{{ asset('fronted_final/assets/images/sampleimg2.png') }}" alt="Turnitin_logo_" />
                    </div>
                    <div class="col-lg-7">
                        <h5 class="cardHeading mb-0"> Enhanced Learning </h5>
                        <span class="sample-yellow-text"> Assistance!</span>
                        <p class="cardTxt ">Beyond assignments, gain insights and knowledge from our premium<br />
                            services that contribute to your academic success, fostering an <br /> environment where
                            you're always one step ahead.</p>
                        <p class="cardTxt "> Stand out from your peers in your class presentations that
                            showcase your <br /> unique insights, secured by our innovative approach.</p>
                        <p class="cardTxt "> Checkout how our other customers are racing ahead of the curve
                            with <br /> the help of our premium services. </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="container-sm cardStyles2 sample-card-styles">
            <div class="card-body">
                <div class="row px-3 py-4">
                    <div class="col-lg-7 ">
                        <h5 class="cardHeading sample-yellow-text mb-0"> Plagiarism </h5>
                        <span class="sample-yellow-text underline"> Reports!</span>
                        <p class="cardTxt ">Make informed decisions for your future with access to our verifiable track
                            record of success. </p>
                        <p class="cardTxt "> Understand the competitive advantage our services offer, ensuring your
                            place at the forefront of academic achievement.</p>

                        <p class="sample-hero-text text-white fs-6">See the difference our service has made for our users,
                            with detailed success metrics and <span
                                class="underline yellow-text fw-bolder">Plagiarism</span> and <span
                                class="underline gradient-text fw-bolder"> AI-Detetion Reports</span> available
                            post-registration.</p>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center">
                        <img src="{{ asset('fronted_final/assets/images/sampleimg3.png') }}" alt="Turnitin_logo_" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="container-sm cardStyles2 sample-card-styles">
            <div class="card-body">
                <div class="row px-3 py-4">
                    <div class="col-lg-5 ">
                        <div class="d-flex justify-content-center ">
                            <img src="{{ asset('fronted_final/assets/images/sampleimg4.png') }}" alt="Turnitin_logo_" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="cardHeading mb-0"> Confidence </h5>
                        <span class="sample-yellow-text"> Booster!</span>
                        <p class="sample-hero-text text-white fs-6">Boost your confidence with access to resources like
                            <span class="underline gradient-text fw-bolder"> AI-Detetion</span> and <br><span
                                class="underline yellow-text fw-bolder underline">Plagiarism Reports</span> that ensure
                            you're always prepared and ahead. </p>
                        <p class="cardTxt "> Trust us to reinforce your academic integrity and prowess. </p>
                        <p class="cardTxt "> Find out how we’ve elevated our customers' academic confidence, with
                            compelling evidence of their achievements. </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="container-sm cardStyles2 sample-card-styles">
            <div class="card-body">
                <div class="row px-3 py-4">
                    <div class="col-lg-7 ">
                        <h5 class="cardHeading mb-0"> Stress </h5>
                        <span class="sample-yellow-text "> Elimination!</span>
                        <p class="cardTxt ">Eliminate academic stress with our reliable educational solutions, leading
                            the way to a calmer, focused study experience.</p>
                        <p class="cardTxt "> Navigate through your academic journey with ease, supported by our
                            evidence-backed success.</p>
                        <p class="cardTxt "> Reduce stress and excel with our custom orders and packages, ready to be
                            explored upon signup.</p>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center">
                        <img src="{{ asset('fronted_final/assets/images/sampleimg5.png') }}" alt="Turnitin_logo_" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="container-sm cardStyles2 sample-card-styles">
            <div class="card-body">
                <div class="row px-3 py-4">
                    <div class="col-lg-5 ">
                        <div class="d-flex justify-content-center ">
                            <img src="{{ asset('fronted_final/assets/images/sampleimg6.png') }}" alt="Turnitin_logo_" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="cardHeading mb-0"> Balance Academia </h5>
                        <span class="sample-yellow-text"> with Life!</span>
                        <p class="cardTxt ">Master your schedule by leveraging our efficient educational resources,
                            giving you more time for life.</p>
                        <p class="cardTxt "> Reclaim your precious time for what truly matters, with quick solutions for
                            academic excellence, and watch as our platform transforms the way you learn and succeed.</p>
                        <p class="cardTxt "> Explore the resources that have helped thousands of students master the
                            balance between academia and life.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center mt-5">


            <a href="{{ route('customer.customerPlaceOrder') }}"
                class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>


            {{-- <a href="https://elementary-solutions.com/writing-space-website/sign-up.php" class="gradient-btn border-0 ms-4 text-decoration-none btn-custom-width">Learn More</a> --}}
        </div>

    </section>

    <!-- Library Access Section-->
    <section class="bg-dark section-card-phases">
        <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
            <img src="{{ asset('fronted_final/assets/images/heart-line 1.png') }}" alt="heart-line 1"
                class="heartbeat-line start" />
            <div class="text-container flex-grow-1 text-center position-relative">
                <h1 class=""> Library Access </h1>
                <div class="position-absolute sub-text">
                    <span class="main-text "> View Papers </span> <br />
                </div>
            </div>
            <img src="{{ asset('fronted_final/assets/images/heart-line 2.png') }}" alt="heart-line 2"
                class="heartbeat-line end" />
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <!-- Form -->
        {{-- <div class="container mt-5">
            <form>
                <div class="row sample-text-field">
                    <div class="col-md-4">
                        <label for="exampleInputEmail1" class="form-label text-white">Subject/Topic</label>

                        @if ($titles->isNotEmpty())
                            <select name="subject" id="subject"
                                class="form-select form-select-solid subject btn-dark-primary custom-options" data-control="select2"
                                data-hide-search="true" data-placeholder="Choose">

                                <option data-select2-id="select2-data-3-38ru" selected disabled>Choose</option>

                                @foreach ($titles as $title)
                                    <option value="{{ $title->subject_topic }}"
                                        {{ isset($subject) && $title->subject_topic === $subject ? 'selected' : '' }}>
                                        {{ $title->subject_topic }}
                                    </option>
                                @endforeach

                            </select>
                        @else
                            <select name="subject" id="subject" class="form-select form-select-solid"
                                data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                <option data-select2-id="select2-data-3-38ru"></option>
                                <option></option>
                            </select>
                        @endif
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputEmail1" class="form-label text-white">Paper Type</label>

                        @if ($terms->isNotEmpty())
                            <select name="term_of_paper_id" id="term_of_paper_id"
                                class="form-select form-select-solid paperTermOption btn-dark-primary custom-options"
                                data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                <option data-select2-id="select2-data-6-1mij" selected disabled>Choose</option>
                                @foreach ($terms as $term)
                                    <option value="{{ $term->paper_type }}"
                                        {{ isset($termOption) && $term->paper_type === $termOption ? 'selected' : '' }}>
                                        {{ $term->paper_type }}</option>
                                @endforeach

                            </select>
                        @else
                            <select name="term_of_paper_id" id="term_of_paper_id" class="form-select form-select-solid"
                                data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                <option data-select2-id="select2-data-6-1mij"></option>
                                <option value="1">No term of paper found in database...</option>
                            </select>
                        @endif
                    </div>

                    <div class="mb-3 col-md-4">
                        <label for="exampleInputEmail1" class="form-label text-white">Word Count</label>

                        @if ($papers->isNotEmpty())
                            <select name="paper_id_word_count" id="paper_id_word_count"
                                class="form-select form-select-solid wordCountOption btn-dark-primary custom-options"
                                data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                <option data-select2-id="select2-data-9-q7hp" selected disabled>Choose</option>
                                @foreach ($papers as $paper)
                                    <option value="{{ $paper->word_count }}"
                                        {{ isset($wordCount) && $paper->word_count == $wordCount ? 'selected' : '' }}>
                                        {{ $paper->word_count }}</option>
                                @endforeach

                            </select>
                        @else
                            <select name="paper_id_word_count" id="paper_id_word_count"
                                class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Choose">
                                <option data-select2-id="select2-data-9-q7hp"></option>
                                <option value="1">No word count found in database...</option>
                            </select>
                        @endif
                    </div>
                </div>

                <div class="row sample-text-field">
                    <div class="mb-3 col-md-10">
                        <label for="exampleInputPassword1" class="form-label text-white">Bibliography format & citation
                            style:*</label>

                        @if ($papers->isNotEmpty())
                            <select name="citation" id="citation"
                                class="form-select form-select-solid paperFormatOption btn-dark-primary custom-options"
                                data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                <option data-select2-id="select2-data-12-cci9" selected disabled>Choose</option>
                                @foreach ($papers as $citations)
                                    <option value="{{ $citations->citation }}"
                                        {{ isset($citation) && $citations->citation == $citation ? 'selected' : '' }}>
                                        {{ $citations->citation }}</option>
                                @endforeach

                            </select>
                        @else
                            <select name="citation" id="citation" class="form-select form-select-solid"
                                data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                <option data-select2-id="select2-data-12-cci9"></option>
                                <option value="1">No paper format found in database...</option>
                            </select>
                        @endif
                    </div>

                    <div class="col-md-2 samplePaper-library-access-sec-btn">
                        <button type="button" class="btn gradient-button Reset">Reset</button>
                    </div>
                </div>
            </form>

            <div class="papers-container">

            </div>

            <div class="papers-container-old">
                @auth
                    @if ($libraries->isNotEmpty())
                        @foreach ($libraries as $library)
                            <div class="container-sm cardStyles2 sample-card-styles">
                                <div class="card-body">
                                    <div class="row px-3 py-4">
                                        <div class="col-md-12">

                                            @php

                                                $fileDetails = [
                                                    [
                                                        'id' => removeDotHtml($library->paper_summary),
                                                        'name' => 'Summary',
                                                        'filename' => $library->paper_summary,
                                                    ],
                                                    [
                                                        'id' => removeDotHtml($library->paper_outline),
                                                        'name' => 'Outline in Bullets',
                                                        'filename' => $library->paper_outline,
                                                    ],
                                                    [
                                                        'id' => removeDotHtml($library->turnitin_ai_report),
                                                        'name' => 'Turnitin AI Report',
                                                        'filename' => $library->turnitin_ai_report,
                                                        'per' => '(50%)',
                                                    ],
                                                    [
                                                        'id' => removeDotHtml($library->turnitin_plg_report),
                                                        'name' => 'Turnitin Plagiarism Report',
                                                        'filename' => $library->turnitin_plg_report,
                                                        'per' => '(50%)',
                                                    ],
                                                    [
                                                        'id' => removeDotHtml($library->paper),
                                                        'name' => 'Paper',
                                                        'filename' => $library->paper,
                                                    ],
                                                ];

                                            @endphp

                                            <span class="yellow-text"> {{ $library->paper_title }} </span>
                                            <h5 class="cardHeading main-text"> {{ $library->subject_topic }}</h5>
                                            <span class="yellow-text"> {{ $library->word_count }} </span>
                                            <p class="cardTxt ">An in-depth examination of enterprise resource planning and
                                                business process
                                                re-engineering. # 154278 | {{ $library->word_count }} words |
                                                {{ $library->word_count }} sources | 2024</p>
                                        </div>
                                        <!--<div class="d-flex justify-content-end">-->
                                        <!--    <button type="submit" class="btn gradient-button ">Download</button>-->
                                        <!--</div>-->
                                        <div class="row library-buttons mt-4">


                                            @foreach ($fileDetails as $file)
                                                @if (isset($file['per']))
                                                <a href="{{ asset('uploads/html_files/' . $file['filename']) }}" class="btn btn-sm fw-bold col btn purple-button col mb-2 me-3 d-flex align-items-center justify-content-center" target="_blank">
                                        {{ ucfirst(str_replace('_', ' ', $file['name'])) }} {{ $file['per'] ?? '' }}
                                    </a>
                                                @else
                                                <a href="{{ asset('uploads/html_files/' . $file['filename']) }}" class="btn btn-sm fw-bold col btn purple-button col mb-2 me-3 d-flex align-items-center justify-content-center" target="_blank">
                                                    {{ ucfirst(str_replace('_', ' ', $file['name'])) }} {{ $file['per'] ?? '' }}
                                                </a>
                                                @endif
                                            @endforeach


                                            <button type="button" class="btn btn-sm fw-bold btn-success col mb-2 me-3"
                                                onclick="window.location.href='{{ route('customer.download.library.files', ['id' => $library->id]) }}'">Download</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        @endforeach
                    @else
                        <h1 class="text-muted text-center text-white">No library available...</h1>
                    @endif


                    <div class="modal fade libraray-modal" id="library_access_new" tabindex="-1"
                        aria-labelledby="library_access_newLabel" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header badge-custom-bg">
                                    <h5 class="modal-title" id="library_access_newLabel">
                                        {{ ucfirst(str_replace('_', ' ', $file['filename'])) }}</h5>
                                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <i class="ki-duotone ki-cross fs-1 text-white">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                </div>
                                <div class="modal-body badge-custom-bg">
                                    <div class="d-flex justify-content-end mb-4">
                                        <!--<button class="btn btn-sm fw-bold btn-primary">Download</button>-->
                                    </div>

                                    <div class="tab-content" id="pills-tabContent">
                                        @php
                                            $directoryPath = public_path('uploads/html_files');
                                            $filePath = $directoryPath . '/' . $file['filename'];
                                            $errorMessage = '';
                                            $htmlContent = '';

                                            if (is_file($filePath)) {
                                                $htmlContent = file_get_contents($filePath);
                                                if ($htmlContent === false) {
                                                    $errorMessage = 'Error reading file';
                                                }
                                            } else {
                                                $errorMessage = 'File does not exist or is a directory';
                                            }
                                        @endphp

                                        <div class="tab-pane abstract fade show active" id="pills-abstract" role="tabpanel"
                                            aria-labelledby="pills-abstract-tab">

                                            {!! $htmlContent ?? ''!!}
                                        </div>

                                        @if (!empty($errorMessage))
                                            <p class="text-white" style="color:red;">{{ $errorMessage }}</p>
                                        @endif

                                    </div>
                                </div>
                                <div class="modal-footer badge-custom-bg">
                                    <button type="button" class="btn btn-dark-primary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>


            

        <!-- Pagination  -->
            <div class="container bg-transparent mt-3 samplePaper-paginate">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link prev-page" href="#" tabindex="-1" aria-disabled="true"><i
                                    class="fa-solid fa-arrow-left"></i></a>
                        </li>
                        @if ($libraries->isNotEmpty())
                        @foreach ($libraries as $key=>$library)
                        <li class="page-item"><a class="page-link active" data-id="{{ $library->id }}">{{ $key + 1 }}</a></li>
                    @endforeach
                        @endif

                        <li class="page-item">
                            <a class="page-link next-page"><i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div> --}}
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
                
                .owl-carousel .owl-nav .owl-prev,
                .owl-carousel .owl-nav .owl-next {
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    background: #f0f0f0;
                    padding: 10px;
                    border-radius: 50%;
                }
                
                .owl-prev { left: -40px; }
                .owl-next { right: -40px; }
                
                </style>
           @include('cms_pages.slider');      
           

    </section>



    <!-- Section FAQs -->
    <section class="bg-dark section-card-phases pt-0">
        <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
            <img src="{{ asset('fronted_final/assets/images/heart-line 1.png') }}" alt="heart-line 1"
                class="heartbeat-line start" />
            <div class="text-container flex-grow-1 text-center position-relative">
                <h1 class="heading text-white">Frequently Asked Questions</h1>
                <div class="position-absolute sub-text3">
                    <span class="main-text text-purple">(FAQs)</span>
                </div>
            </div>
            <img src="{{ asset('fronted_final/assets/images/heart-line 2.png') }}" alt="heart-line 2"
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
                                    1. What types of sample papers can I access in the library?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse "
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our library includes a diverse range of subjects, from humanities to sciences, all
                                    crafted to meet high academic standards. Each sample showcases our commitment to quality
                                    and academic integrity.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. How can I be sure of the quality of the sample papers?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You are welcome to review our sample papers before making any decisions. Each sample is
                                    a testament to our high standards, prepared by experts and vetted through rigorous
                                    quality checks.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Is there a limit to how many sample papers I can access?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Once registered, you have unlimited access to our library. Explore various topics and
                                    examples as much as you need to enhance your learning.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. How often is the library updated with new papers?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse "
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We continuously update our library with new papers to ensure relevance and adherence to
                                    current academic standards. This ensures you always have access to the most recent
                                    research and writing styles.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5. Can I download the papers for offline study?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, registered users can download papers for personal study. We encourage using these
                                    documents as learning tools to aid in your academic development.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    6. Are the sample papers tailored to specific academic formats?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Absolutely! Our papers adhere to various academic formatting standards such as APA, MLA,
                                    and Harvard. This variety helps you understand different formatting requirements.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    7. What should I do if I can’t find a paper on a specific topic?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse "
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Contact our support team if you're looking for specific content not currently available
                                    in our library. We continuously expand our resources and can guide you to similar
                                    materials or possibly add your requested topic to our collection.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    8. How secure is my access to the library?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Access to our library is secured with state-of-the-art technology. Only registered users
                                    can view and download content, ensuring your use remains private and protected.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    9. Can I suggest new subjects or papers to be included in the library?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We welcome suggestions! Your feedback is crucial for us to expand our library in ways
                                    that best serve our users' academic needs.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    10. How do you ensure the content is plagiarism-free?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Each paper in our library is crafted from scratch by academic experts and checked using
                                    plagiarism detection software to ensure originality and integrity.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-5">


                    <a href="{{ route('customer.customerPlaceOrder') }}"
                        class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>


                    <a href="{{ route('front.faq') }}"
                        class="gradient-btn border-0 ms-4 text-decoration-none btn-custom-width">Learn More</a>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


        <script>

$(document).ready(function() {
    $('.pagination').on('click', '.page-link', function(e) {
        e.preventDefault();
        var pageId = $(this).data('id');

        if (pageId) {
            applyFilter(pageId);
        }
    });

    function applyFilter(pageId) {
        var pageId2 = pageId;

        $.ajax({
            url: '{{ route('front.ajaxsamplepaperpage') }}',
            type: 'GET',
            data: {
                page: pageId2
            },
            success: function(response) {
                updatePapers(response.libraries);
                console.log(response.libraries);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

    function updatePapers(papers) {
        var container = $('.papers-container');
        $('.papers-container-old').html('');
        container.empty();
        if (papers.length > 0) {
            papers.forEach(function(library) {
                var fileDetails = [{
                        'id': library.paper_summary,
                        'name': 'Summary',
                        'filename': library.paper_summary
                    },
                    {
                        'id': library.paper_outline,
                        'name': 'Outline in Bullets',
                        'filename': library.paper_outline
                    },
                    {
                        'id': library.turnitin_ai_report,
                        'name': 'Turnitin AI Report',
                        'filename': library.turnitin_ai_report,
                        'per': '(50%)'
                    },
                    {
                        'id': library.turnitin_plg_report,
                        'name': 'Turnitin Plagiarism Report',
                        'filename': library.turnitin_plg_report,
                        'per': '(50%)'
                    },
                    {
                        'id': library.paper,
                        'name': 'Paper',
                        'filename': library.paper
                    }
                ];

                var paperHtml = `
                    <div class="container-sm cardStyles2 sample-card-styles">
                        <div class="card-body">
                            <div class="row px-3 py-4">
                                <div class="col-md-12">
                                    <span class="yellow-text">${library.paper_title}</span>
                                    <h5 class="cardHeading main-text">${library.subject_topic}</h5>
                                    <span class="yellow-text">${library.word_count}</span>
                                    <p class="cardTxt">An in-depth examination of enterprise resource planning and business process re-engineering. # 154278 | ${library.word_count} words | ${library.word_count} sources | 2024</p>
                                </div>
                                <div class="row library-buttons mt-4">`;

                fileDetails.forEach(function(file) {
                    var buttonHtml =
    `<a href="http://127.0.0.1:8000/uploads/html_files/${file.filename}" class="btn btn-sm fw-bold col btn purple-button col mb-2 me-3 d-flex align-items-center justify-content-center" target="_blank">
        ${ucFirst(str_replace('_', ' ', file.name))} ${file.per ?? ''}
    </a>`;

                    paperHtml += buttonHtml;
                });

                paperHtml += `<button type="button" class="btn btn-sm fw-bold btn-success col mb-2 me-3"
                        onclick="window.location.href='{{ url('customer/download/library/files') }}/${library.id}'">
                    Download
                </button>
            </div>
        </div>
    </div>
</div>`;


                container.append(paperHtml);
            });
        } else {
            container.html('<h1 class="text-muted text-center text-white">No library available...</h1>');
        }
    }

    $(document).on('click', '.downloadFiles', function(e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        $.ajax({
            type: "GET",
            url: "{{ route('customer.download.library.files', ['id' => ':id']) }}".replace(':id', id),
            success: function(response) {
                console.log(response);
            },
            error: function(error) {
                console.error(error);
            },
        });
    });
});


function removeDotHtml(filename) {
    return filename.replace('.', '');
}

function ucFirst(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
}

function str_replace(search, replace, subject) {
    return subject.split(search).join(replace);
}

function libraryDownloadUrl(id) {
    // Replace this with the logic to generate the download URL based on the library id
    return '/download/library/' + id;
}


$(document).ready(function() {
    $('.subject, .paperTermOption, .wordCountOption, .paperFormatOption').change(function() {
        applyFilter();
    });

    function applyFilter() {
        var subject = $('.subject').val();
        var termPaper = $('.paperTermOption').val();
        var wordCount = $('.wordCountOption').val();
        var formatOption = $('.paperFormatOption').val();

        $.ajax({
            url: '{{ route('front.ajaxsamplepaper') }}',
            type: 'GET',
            data: {
                subject: subject,
                termOption: termPaper,
                wordCount: wordCount,
                citation: formatOption
            },
            success: function(response) {
                updatePapers(response.libraries);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

    function updatePapers(papers) {
        var container = $('.papers-container');
        $('.papers-container-old').html('');
        container.empty();
        if (papers.length > 0) {
            papers.forEach(function(library) {
                var fileDetails = [{
                        'id': library.paper_summary,
                        'name': 'Summary',
                        'filename': library.paper_summary
                    },
                    {
                        'id': library.paper_outline,
                        'name': 'Outline in Bullets',
                        'filename': library.paper_outline
                    },
                    {
                        'id': library.turnitin_ai_report,
                        'name': 'Turnitin AI Report',
                        'filename': library.turnitin_ai_report,
                        'per': '(50%)'
                    },
                    {
                        'id': library.turnitin_plg_report,
                        'name': 'Turnitin Plagiarism Report',
                        'filename': library.turnitin_plg_report,
                        'per': '(50%)'
                    },
                    {
                        'id': library.paper,
                        'name': 'Paper',
                        'filename': library.paper
                    }
                ];

                var paperHtml = `
                    <div class="container-sm cardStyles2 sample-card-styles">
                        <div class="card-body">
                            <div class="row px-3 py-4">
                                <div class="col-md-12">
                                    <span class="yellow-text">${library.paper_title}</span>
                                    <h5 class="cardHeading main-text">${library.subject_topic}</h5>
                                    <span class="yellow-text">${library.word_count}</span>
                                    <p class="cardTxt">An in-depth examination of enterprise resource planning and business process re-engineering. # 154278 | ${library.word_count} words | ${library.word_count} sources | 2024</p>
                                </div>
                                <div class="row library-buttons mt-4">`;

                fileDetails.forEach(function(file) {
                    var buttonHtml =
                        `<a href="{{ asset('uploads/html_files/') }}/${file.filename}" class="btn btn-sm fw-bold col btn purple-button col mb-2 me-3 d-flex align-items-center justify-content-center" target="_blank">${file.name}${file.per ? ' ' + file.per : ''}</a>`;
                    paperHtml += buttonHtml;
                });

                paperHtml += `<button type="button" class="btn btn-sm fw-bold btn-success col mb-2 me-3"
                        onclick="window.location.href='{{ url('customer/download/library/files') }}/${library.id}'">
                    Download
                </button>
            </div>
        </div>
    </div>
</div>`;


                

                container.append(paperHtml);
            });
        } else {
            container.html('<h1 class="text-muted text-center text-white">No library available...</h1>');
        }
    }

    $(document).on('click', '.downloadFiles', function(e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        $.ajax({
            type: "GET",
            url: "{{ route('customer.download.library.files', ['id' => ':id']) }}".replace(
                ':id', id),
            success: function(response) {
                console.log(response);
            },
            error: function(error) {
                console.error(error);
            },
        });
    });
});


</script>


    <script>
      $(document).ready(function () {
    // $('.Reset').click(function(e) {
    //     e.preventDefault();
    //     var pageId = 2;
        
    //     if (pageId) {
    //         applyFilter(pageId);
    //     }
    // });

    $('.Reset').click(function(e) {
    e.preventDefault(); // Prevent default behavior if it's a form reset
    window.location.reload(); // Reload the page
});


    function applyFilter(pageId) {
        var pageId2 = pageId;

        $.ajax({
            url: '{{ route('front.ajaxsamplepaperpageall') }}',
            type: 'GET',
            data: {
                page: pageId2
            },
            success: function(response) {
                updatePapers(response.libraries);
                console.log(response.libraries);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

    function updatePapers(papers) {
        var container = $('.papers-container');
        $('.papers-container-old').html('');
        container.empty();
        if (papers.length > 0) {
            papers.forEach(function(library) {
                var fileDetails = [{
                        'id': library.paper_summary,
                        'name': 'Summary',
                        'filename': library.paper_summary
                    },
                    {
                        'id': library.paper_outline,
                        'name': 'Outline in Bullets',
                        'filename': library.paper_outline
                    },
                    {
                        'id': library.turnitin_ai_report,
                        'name': 'Turnitin AI Report',
                        'filename': library.turnitin_ai_report,
                        'per': '(50%)'
                    },
                    {
                        'id': library.turnitin_plg_report,
                        'name': 'Turnitin Plagiarism Report',
                        'filename': library.turnitin_plg_report,
                        'per': '(50%)'
                    },
                    {
                        'id': library.paper,
                        'name': 'Paper',
                        'filename': library.paper
                    }
                ];

                var paperHtml = `
                    <div class="container-sm cardStyles2 sample-card-styles">
                        <div class="card-body">
                            <div class="row px-3 py-4">
                                <div class="col-md-12">
                                    <span class="yellow-text">${library.paper_title}</span>
                                    <h5 class="cardHeading main-text">${library.subject_topic}</h5>
                                    <span class="yellow-text">${library.word_count}</span>
                                    <p class="cardTxt">An in-depth examination of enterprise resource planning and business process re-engineering. # 154278 | ${library.word_count} words | ${library.word_count} sources | 2024</p>
                                </div>
                                <div class="row library-buttons mt-4">`;

                fileDetails.forEach(function(file) {
                    var buttonHtml = `<a href="{{ asset('uploads/html_files/') }}/${file.filename}" class="btn btn-sm fw-bold col btn purple-button col mb-2 me-3 d-flex align-items-center justify-content-center" target="_blank">${file.name}${file.per ? ' ' + file.per : ''}</a>`;
                    paperHtml += buttonHtml;
                });

                paperHtml += `<button type="button" class="btn btn-sm fw-bold btn-success col mb-2 me-3 downloadFiles" data-id="${library.id}">Download</button>
                            </div>
                        </div>
                    </div>
                </div>`;

                container.append(paperHtml);
            });
        } else {
            container.html('<h1 class="text-muted text-center text-white">No library available...</h1>');
        }
    }

    $(document).on('click', '.downloadFiles', function(e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        $.ajax({
            type: "GET",
            url: "{{ route('customer.download.library.files', ['id' => ':id']) }}".replace(':id', id),
            success: function(response) {
                console.log(response);
            },
            error: function(error) {
                console.error(error);
            },
        });
    });
});

      
      
      
      
              </script>


    @endsection
