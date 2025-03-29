<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Writing Space</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Custom CSS -->

    <!-- Google Fonts -->

    <link rel="icon" type="image/x-icon" href="{{ asset('fronted_final/assets/images/favicon-32x32.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fronted_final/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('fronted_final/assets/css/custom.css') }}">


    <style>
        .dropdown:hover .dropdown-menu {
      display: block;
      left: -300px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }
    </style>

</head>

<body>

    <!-- Bootstrap Responsive Navbar -->
    <header>
        <div class="container d-flex justify-content-center">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent position-fixed w-100" id="header">
                <div class="container custom-width">
                    <a class="navbar-brand logo" href="{{route('front.index')}}"><img src="{{ asset('fronted_final/assets/images/logo.png')}}" alt="hero" /></a>
                    <button class="navbar-toggler secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="nav-parent">
                        <button class="navbar-toggler primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="list-unstyled d-flex justify-content-end align-items-center login-menu-primary login-options">
                            <li class="country-flag"><img src="{{ asset('fronted_final/assets/images/country-flag.webp')}}" alt=""></li>
                            <li class="text-white mx-2">|</li>
                            <li class="text-white me-2"><i class="fa-solid fa-phone-volume text-purple" id="header_fs"></i> +12 345
                                67890</li>
                                @auth
                               
                                @if (Auth::user()->role === 'customer')
                                    <li>
                                        <a style="
                                        color: white;
                                        border: solid;
                                    " class="btn border_dark text-white" href="{{ route('customer.dashboard') }}">
                                            <span>
                                                <small>Dashboard</small>
                                            </span>
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a class="btn border_dark" href="{{ route('admin.dashboard') }}" style="
                                        color: white;
                                        border: solid;
                                    ">
                                            <span>
                                                <small>Dashboard</small>
                                            </span>
                                        </a>
                                    </li>
                                @endif

                           
                    @else
                        

                    <li class="me-2"><a href="{{ route('login') }}" class="btn btn-theme-primary transition-button">login</a></li>
                    <li><a href="{{ route('front.signup') }}" class="btn btn-theme-primary transition-button">Sign Up</a></li>

                           
                    @endauth
                        </ul>

                    </div>
                    <div class="collapse navbar-collapse menus" id="navbarSupportedContent">
                        <ul class="list-unstyled d-flex justify-content-end align-items-center login-menu-secondary">
                            <li class="country-flag"><img src="{{ asset('fronted_final/assets/images/country-flag.webp')}}" alt=""></li>
                            <li class="text-white mx-2">|</li>
                            <li class="text-white me-2"><i class="fa-solid fa-phone-volume text-purple"></i> +12 345
                                67890</li>

                                @auth
                               
                                        @if (Auth::user()->role === 'customer')
                                            <li>
                                                <a style="
                                                color: white;
                                                border: solid;
                                            " class="btn border_dark text-white" href="{{ route('customer.dashboard') }}">
                                                    <span>
                                                        <small>Dashboard</small>
                                                    </span>
                                                </a>
                                            </li>
                                        @else
                                            <li>
                                                <a style="
                                                color: white;
                                                border: solid;
                                            " class="btn border_dark" href="{{ route('admin.dashboard') }}">
                                                    <span>
                                                        <small>Dashboard</small>
                                                    </span>
                                                </a>
                                            </li>
                                        @endif
        
                                   
                            @else
                                

                            <li class="me-2"><a href="{{ route('login') }}" class="btn btn-theme-primary transition-button">login</a></li>
                            <li><a href="{{ route('front.signup') }}" class="btn btn-theme-primary transition-button">Sign Up</a></li>

                                   
                            @endauth
                         
                           
                     

                        </ul>
                        <ul class="navbar-nav  ms-auto justify-content-center header-anch" id="navbar-menu">

                            <li class="nav-item active primary-nav">
                                <a class="nav-link text-white" href="{{route('front.index')}}">Home</a>
                            </li>
                            <li class="nav-item primary-nav">
                                <a class="nav-link text-white" href="{{ route('front.samplepaper') }}">Sample Papers</a>
                            </li>
                            <li class="nav-item primary-nav">
                                <a class="nav-link text-white" href="{{ route('front.customerjourney') }}">Your Journey With Us</a>
                            </li>
                            <li class="nav-item dropdown services">
                                <a class="nav-link dropdown-toggle text-white" href="{{ route('front.services') }}" id="" role="button" aria-expanded="false">
                                Services
                                </a>
                                <ul class="dropdown-menu bg-purple" aria-labelledby="navbarDropdown">

                                    <li><a class="dropdown-item text-white" href="{{ route('front.admissionessay') }}">Admission Essay</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.annotatedbibliography') }}">Annotated Bibliography</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.applicationessay') }}">Application Essay</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.articlereview') }}">Article Review</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.bookreport') }}">Book Report</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.businessplan') }}">Business Plan</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.businessproposal') }}">Business Proposal</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.capstoneproject') }}">Capstone Project</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.casestudy') }}">Case Study</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.corporate') }}">Corporate</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.creativewriting') }}">Creative Writing</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.dissertationorthesiscomplete') }}">Dissertation Or Thesis</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.journalprofessional') }}">Journal Professional</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.marketingplan') }}">Marketing Plan</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.multiplechapters') }}">Multiple Chapters</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.onlytheconclusionchapter') }}">Conclusion Chapter</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.onlythehypothesischapter') }}">Hypothesis Chapter</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.onlytheliteraturereviewchapter') }}">Literature Review Chapter</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.onlythemethodologychapter') }}">Methodology Chapter</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.peerreviewedjournal') }}">Peer Review Journal</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.poetryartanalysis') }}">Poetry Art Analysis</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.powerpointpresentation') }}">Powerpoint Presentation</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.researchpaper') }}">Research Paper</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.researchproposal') }}">Research Proposal</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.resumecrafting') }}">Resume Crafting</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.swotanalysis') }}">SWOT Analysis</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.tailormadeessays') }}">Tailor Made Essay</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.termpaper') }}">Term Paper</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.websitecontent') }}">Website Content</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.whitepaper') }}">White Paper</a></li>
                                   
                                </ul>
                            </li>
                            
                            
                            
                            
                             <?php 
                            $cmsPages = \App\Models\CmsWebsite::all();
                        ?>
                        
                        <!--<li class="nav-item dropdown services">-->
                        <!--    <a class="nav-link dropdown-toggle text-white" href="{{ route('front.services') }}" id="" role="button" aria-expanded="false">-->
                        <!--        Services CMS-->
                        <!--    </a>-->
                        <!--    <ul class="dropdown-menu bg-purple" aria-labelledby="navbarDropdown">-->
                        <!--        @foreach($cmsPages as $page)-->
                        <!--        @if($page->status == 1)-->
                        <!--            <li><a class="dropdown-item text-white" href="{{ route('admin.cms_pages.show', $page->slug) }}">{{ $page->title }}</a></li>-->
                        <!--            @endif-->
                        <!--            @endforeach-->
                        <!--    </ul>-->
                        <!--</li>-->
                            
                            
                            <li class="nav-item dropdown services">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pricing
                                </a>
                                <ul class="dropdown-menu bg-purple" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item text-white" href="{{ route('front.customorder') }}">Custom Order Pricing</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.subscriptions') }}">Packages</a></li>
                                   
                                </ul>
                            </li>
                            <li class="nav-item dropdown services">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Resources
                                </a>
                                <ul class="dropdown-menu bg-purple" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item text-white" href="{{ route('front.about') }}">About Us</a></li>
                                    <li><a class="dropdown-item text-white" href="{{ route('front.contact') }}">Contact Us</a></li>
                                   <li><a class="dropdown-item text-white" href="{{ route('front.faq') }}">FAQs</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>