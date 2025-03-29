<html lang="en">
<!-- Mirrored from html.merku.love/collab/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Oct 2023 14:00:54 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Writing Space</title>
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/favourite_icon_1.svg') }}">
    
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
    <div class="page_wrapper">
            


        <div class="backtotop"><a href="#" class="scroll"><i class="far fa-arrow-up"></i></a></div>
        <header class="site_header site_header_1">
            <div class="container">
               
                <div class="row align-items-center">
                    <div class="col col-lg-3 col-5">
                        <div class="site_logo">
                            <a class="site_link {{ (request()->is('/')) ? 'active' : '' }} " href="{{ url('/') }}"><img
                                    src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt width="120"></a>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-2">
                        <nav class="main_menu navbar navbar-expand-lg">
                            <div class="main_menu_inner collapse navbar-collapse justify-content-center"
                                id="main_menu_dropdown">
                                <ul class="main_menu_list unordered_list_center">
                                    <li><a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                                    <li><a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('front.about') }}">About us</a></li>
                                    <li class="dropdown"><a class="nav-link" href="#" id="service_submenu"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                                        <ul class="dropdown-menu" aria-labelledby="service_submenu">
                                            <li><a class="nav-link {{ (request()->is('/subscriptions')) ? 'active' : '' }}" href="{{ route('front.subscriptions') }}">Package</a></li>
                                            <li><a class="nav-link {{ (request()->is('/custom-ordering')) ? 'active' : '' }}" href="{{ route('front.custom.ordering') }}">Custom Ordering</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="nav-link {{ (request()->is('/contact-us')) ? 'active' : '' }}" href="{{ route('front.contact') }}">Contact</a></li>
                                    <li><a class="nav-link " href="{{ route('blogs') }}">Blogs</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    @auth
                        <div class="col col-lg-3 col-5">
                            <ul class="header_btns_group unordered_list_end">
                                <li>
                                    <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#main_menu_dropdown" aria-expanded="false"
                                        aria-label="Toggle navigation"><i class="far fa-bars"></i></button>
                                </li>
                                @if(Auth::user()->role === 'customer')
                                 <li>
                                    <a style="
                                    color: white;
                                    border: solid;
                                " class="btn border_dark" href="{{ route('customer.dashboard') }}">
                                        <span>
                                            <small>Dashboard</small>
                                        </span>
                                    </a>
                                </li>
                                
                                @else
                                <li>
                                    <a  style="
                                    color: white;
                                    border: solid;
                                " class="btn border_dark" href="{{ route('admin.dashboard') }}">
                                        <span>
                                            <small>Dashboard</small>
                                        </span>
                                    </a>
                                </li>
                                
                                @endif
                                
                            </ul>
                        </div>
                    @else
                        <div class="col col-lg-3 col-5">
                            <ul class="header_btns_group unordered_list_end">
                                <li>
                                    <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#main_menu_dropdown" aria-expanded="false"
                                        aria-label="Toggle navigation"><i class="far fa-bars"></i></button>
                                </li>
                                <li><a class="btn border_dark" href="{{ route('login') }}"><span><small>Login</small>
                                            <small>Login</small></span></a></li>
                                <li><a class="btn btn_dark" href="{{ route('front.signup') }}"><span><small>Sign Up</small> <small>Sign
                                                Up</small></span></a></li>
                            </ul>
                        </div>
                    @endauth
                    

                </div>
            </div>
        </header>
        
		<main class="page_content">
            @yield('main-theme')
        </main>
        <footer class="site_footer2">
            <div class="mt-5 pt-5 pb-5 footer1  footerborder">
                <div class="container py-md-4">
                    <div class="row">
                        <div class="col-lg-5 col-xs-12 about-company"><img
                                src="https://eliteblue.net/writing/assets/images/logo/logo.png" alt=""
                                width="150">

                        </div>
                        <div class="col-lg-3 col-xs-12 links">
                            <h4 style="color:black;" class="mt-lg-0 mt-sm-3	">Quick Links</h4>
                            <ul class="m-0 p-0">
                                <li><a style="color:black;" href="{{ url('/') }}">Home</a></li>
                                <li><a style="color:black;" href="{{ route('front.about') }}">About Us</a></li>
                                <li><a style="color:black;" href="{{ route('front.subscriptions') }}">Subscriptions</a></li>
                                <li><a style="color:black;" href="{{ route('front.about') }}">Custom Ordering</a></li>
                                <li><a style="color:black;" href="{{ route('front.custom.ordering') }}">Contact Us</a></li>
                                <li><a style="color:black;" href="{{ route('front.privacy.policy') }}">Privacy Policy</a></li>
                                <li><a style="color:black;" href="{{ route('front.terms.conditions') }}">Terms &#38 Conditions</a></li>
                                <li><a style="color:black;" href="{{ route('front.cookie.policy') }}">Cookie Policy</a></li>
                                <li><a style="color:black;" href="{{ route('front.copyright') }}">Copyright</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-xs-12 location mt-md-0 mt-4">
                            <h4 style="color:black;" class="">News Letter</h4>
                            <form class="d-flex gap-2">
                                <input type="text" class="form-control text-dark w-75 undefined" name="email"
                                    placeholder="Enter Email Address">
                                <button style="color:black;" type="submit" class="w-25 btn bg-white"><i
                                        class="fas fa-paper-plane text-main" aria-hidden="true"></i></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
                <script>
                    function alertfunction() {
                        alert("Coming Soon")
                    }
                </script>

</body>

</html>
