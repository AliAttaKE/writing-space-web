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

    <link rel="icon" type="image/x-icon" href="{{asset('frontend_two/assets/images/favicon-32x32.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend_two/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_two/assets/css/custom.css')}}">
</head>

<body>

    <!-- Bootstrap Responsive Navbar -->
    <header>
        <div class="container d-flex justify-content-center">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent position-fixed w-100" id="header">
                <div class="container custom-width">
                    <a class="navbar-brand logo" href="index.php"><img src="{{asset('frontend_two/assets/images/logo.png')}}" alt="hero" /></a>
                    <button class="navbar-toggler secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="nav-parent">
                        <button class="navbar-toggler primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="list-unstyled d-flex justify-content-end align-items-center login-menu-primary login-options">
                            <li class="country-flag"><img src="{{asset('frontend_two/assets/images/country-flag.webp')}}" alt=""></li>
                            <li class="text-white mx-2">|</li>
                            <li class="text-white me-2"><i class="fa-solid fa-phone-volume text-purple" id="header_fs"></i> +12 345
                                67890</li>
                            <li class="me-2"><a href="login.php" class="btn btn-theme-primary">login</a></li>
                            <li><a href="sign-up.php" class="btn btn-theme-primary">Sign Up</a></li>
                        </ul>

                    </div>
                    <div class="collapse navbar-collapse menus" id="navbarSupportedContent">
                        <ul class="list-unstyled d-flex justify-content-end align-items-center login-menu-secondary">
                            <li class="country-flag"><img src="{{asset('frontend_two/assets/images/country-flag.webp')}}" alt=""></li>
                            <li class="text-white mx-2">|</li>
                            <li class="text-white me-2"><i class="fa-solid fa-phone-volume text-purple"></i> +12 345
                                67890</li>
                            <li class="me-2"><a href="login.php" class="btn btn-theme-primary">login</a></li>
                            <li><a href="sign-up.php" class="btn btn-theme-primary">Sign Up</a></li>
                        </ul>
                        <ul class="navbar-nav  ms-auto justify-content-end header-anch" id="navbar-menu">

                            <li class="nav-item active">
                                <a class="nav-link text-white" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="samplepaper.php">Sample Papers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="customer-journey.php">Customer Journey</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="custom-order.php">Custom Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="packages.php">Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="services.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="about-us.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="contactus.php">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="faqs-accpomt-setup.php">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="privacy-policy.php">Policies</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

<!-- Hero Section -->
<div class="blog-hero-section d-flex justify-content-center align-items-center">
    <div class="hero-text text-center">
        <h1 class="header-text"> Blog <br> </h1>
        <div class="container">
            <div class="d-flex align-items-center justify-content-center">
                <div class="col-md-9 p-2">
                    <span class="nav-links blog-nav"> Categort 1 | Category 2 | Category 3 | Category 4 | Category 5</span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Cards Section -->
<section class="bg-dark section-card-phases">
    
    @yield('main_content')

    <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-2">
                        <img src="{{asset('frontend_two/assets/images/logo.png')}}" alt="logo" class="w-100" />

                </div>
                <div class="col-md-10 footer-anch">
                        <div class="row">
                                <div class="col-md-3">
                                        <ul class="list-unstyled">
                                                <li class="text-white text-white h2 fw-bold">Quick <span class="text-purple">Links</span></li>
                                                <li><a href="index.php" class="text-white fw-light text-decoration-none">Home</a>
                                                </li>
                                                <li><a href="samplepaper.php" class="text-white fw-light text-decoration-none">Sample
                                                                Papers</a></li>
                                                <li><a href="customer-journey.php" class="text-white fw-light text-decoration-none">Customer
                                                                Journey</a></li>
                                                <li><a href="custom-order.php" class="text-white fw-light text-decoration-none">Custom
                                                                Order</a></li>
                                                <li><a href="packages.php" class="text-white fw-light text-decoration-none">Packages</a>
                                                </li>
                                                <li><a href="services.php" class="text-white fw-light text-decoration-none">Services</a>
                                                </li>
                                                <li><a href="Individual-product.php" class="text-white fw-light text-decoration-none">Individual Product</a>
                                                </li>
                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">About Us</a>
                                                </li>
                                                <li><a href="contactus.php" class="text-white fw-light text-decoration-none">Contact
                                                                Us</a>
                                                </li>
                                                <li><a href="faqs-accpomt-setup.php" class="text-white fw-light text-decoration-none">FAQs</a>
                                                </li>
                                                <li><a href="blog.php" class="text-white fw-light text-decoration-none">Blog</a>
                                                </li>
                                        </ul>
                                </div>
                                <div class="col-md-9">
                                        <div class="row">
                                                <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                                <li class="text-white h2 fw-bold">Services</li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Term
                                                                                Paper</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Annotated
                                                                                Bibliography</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Marketing Plan</a></li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Article
                                                                                Review</a></li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Creative
                                                                                Writing</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Peer
                                                                                Reviewed Journal</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Poetry/Art Analysis</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">White
                                                                                Paper</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Business
                                                                                Proposal</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">SWOT Analysis</a>
                                                                </li>
                                                        </ul>
                                                </div>
                                                <div class="col-md-3">
                                                        <ul class="list-unstyled">
                                                                <li class="text-white purple-text fw-bold invisible">Services</li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Admission Essay</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Application Essay</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Journal Professional</a></li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Corporate</a></li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">PowerPoint Presentation</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Resume Crafting</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Website Content</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Capstone Project</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Multiple Chapters</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Research
                                                                                Proposal</a>
                                                                </li>
                                                        </ul>
                                                </div>
                                                <div class="col-md-5">
                                                        <ul class="list-unstyled">
                                                                <li class="text-white purple-text fw-bold invisible">Services</li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Case Study</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Business Plan</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Tailor-Made Essays</a></li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Book Report</a></li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Research Paper</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Dissertation or Thesis Complete</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Only the Introduction Chapter</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Only the Hypothesis Chapter</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Only the Literature Review Chapter</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Only the Methodology Chapter</a>
                                                                </li>
                                                                <li><a href="index.html" class="text-white fw-light text-decoration-none">Only the Conclusion Chapter</a>
                                                                </li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>

                <div class="gradient-mask"></div>
        </div>
    </div>

    <div class="rectangle">
            <div class="container">
                    <div class="row">
                            <div class="col-md-6 d-flex justify-content-start">
                                    <span class="copyright">©2024 Copy Right. All Right Reserved</span>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                    <span class="copyright"><a href="#" class="text-white fw-light text-decoration-none">FAQs</a></span>
                                    <span class="copyright px-2">|</span>
                                    <span class="copyright"><a href="privacy-policy.php" class="text-white fw-light text-decoration-none">Privacy Policy</a></span>
                            </div>
                    </div>
            </div>
    </div>

</section>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{asset('frontend_two/assets/js/custom.js')}}"></script>
</body>

</html>