{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="#">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>Writing Space Admin</title>
    <meta charset="utf-8" />
    <meta name="description" content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo,
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions.
            Grab your copy now and get life-time updates for free.
        " />
    <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js,
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates,
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button,
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/ws/ws-title.png" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('backend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
	<!--begin::Authentication - Sign-in -->
	<div class="d-flex flex-column flex-lg-row flex-column-fluid">
		<!--begin::Body-->
		<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
			<!--begin::Form-->
			<div class="d-flex flex-center flex-column flex-lg-row-fluid">
				<!--begin::Wrapper-->
				<div class="w-lg-500px p-10">
					<!--begin::Form-->
					<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="" action="{{ route('login') }}" method="POST">
                        @csrf
						<!--begin::Heading-->
						<div class="text-center mb-11">
							<!--begin::Title-->
							<h1 class="text-gray-900 fw-bolder mb-3">Login</h1>
							<!--end::Title-->
						</div>
						<!--begin::Heading-->

						<!--begin::Input group=-->
						<div class="fv-row mb-8">
							<!--begin::Label-->
							<label class="fs-6 fw-semibold">Email</label>
							<!--begin::Label-->
							<!--begin::Email-->
							<input type="text" placeholder="Enter Email" name="email" autocomplete="off" class="form-control bg-transparent" />
							
                            <!--end::Email-->
						</div>
						<!--end::Input group=-->
						<div class="fv-row mb-3">
							<!--begin::Label-->
							<label class="fs-6 fw-semibold">Password</label>
							<!--begin::Label-->
							<!--begin::Password-->
							<input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
							<!--end::Password-->
                            
						</div>
						<!--end::Input group=-->
						<!--begin::Wrapper-->
						<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
							<div></div>
							<!--begin::Link-->
							<a href="#" class="link-primary">Forgot Password ?</a>
							<!--end::Link-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Submit button-->
						<div class="d-grid mb-10">
							<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
								<!--begin::Indicator label-->
								<span class="indicator-label">Login</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
						</div>
						<!--end::Submit button-->
						<!--begin::Sign up-->
						<!-- <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
							<a href="authentication/layouts/corporate/sign-up.html" class="link-primary">Create Account</a>
						</div> -->
						<!--end::Sign up-->
						<!--begin::Login options-->
						<div class="row g-3 mb-9 justify-content-center">

							<!--begin::Separator-->
							<div class="separator separator-content my-14">
								<span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
							</div>
							<!--end::Separator-->
							<!--begin::Col-->
							<div class="col-md-6">
								<!--begin::Google link=-->
								<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
									<img alt="Logo" src="{{ asset('backend/assets/media/svg/brand-logos/apple-black.svg') }}" class="theme-light-show h-15px me-3" />
									<img alt="Logo" src="{{ asset('backend/assets/media/svg/brand-logos/apple-black-dark.svg') }}" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
								<!--end::Google link=-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-6">
								<!--begin::Google link=-->
								<a href="{{ route('google.login') }}" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
									<img alt="Logo" src="{{ asset('backend/assets/media/svg/brand-logos/google-icon.svg') }}" class="h-15px me-3" />Sign in with Google</a>
								<!--end::Google link=-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-6">
								<!--begin::Google link=-->
								<a href="{{ route('microsoft.login') }}" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
									<img alt="Logo" src="{{ asset('backend/assets/media/svg/brand-logos/microsoft-5.svg') }}" class="h-15px me-3" />Sign in with Microsoft</a>
								<!--end::Google link=-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Login options-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Form-->
			<!--begin::Footer-->

			<!--end::Footer-->
		</div>
		<!--end::Body-->
	</div>
	<!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->
<!--begin::Javascript-->
<script>
	var hostUrl = "assets/";
</script>
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('backend/assets/js/custom/authentication/sign-in/general.js') }}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->

    <!--begin::Footer-->
    <!-- <section class="footer pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo mb-5">
                        <a href="#">
                            <img src="assets/media/ws/ws-light-logo.png" class="w-80px" alt="">
                        </a>
                    </div>
                    <p class="mb-3">Looking for an expert Essay Writing Service? We provide tailored, high-quality essays on a variety of topics and academic levels. Our team of experienced writers ensures original, well-researched content, delivered on time, and tailored to your unique requirements.</p>

                </div>
                <div class="col-md-8">
                    <div class="d-flex">
                        <div class="col-4">
                            <ul class="list-unstyled">
                                <li>
                                    <h6 class="mb-5">SERVICES</h6>
                                </li>
                                <li>
                                    <a href="#">Essay Writing</a>
                                </li>
                                <li>
                                    <a href="#">Case Study Writing</a>
                                </li>
                                <li>
                                    <a href="#">Analytical Writing</a>
                                </li>
                                <li>
                                    <a href="#">Review Writing</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="list-unstyled">
                                <li>
                                    <h6 class="mb-5">COMPANY</h6>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Terms and Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Fair Use Policy</a>
                                </li>
                                <li>
                                    <a href="#">Cookie Policy</a>
                                </li>
                                <li>
                                    <a href="#">Complaint Policy</a>
                                </li>
                                <li>
                                    <a href="#">Help Center</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="list-unstyled">
                                <li>
                                    <h6 class="mb-5">CONTACT US:</h6>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center"><i class="fa-regular fa-envelope"></i>
                                        <p class="ps-2">support@writingspace.com</p>
                                    </a>
                                </li>
                                <li class="d-flex">
                                    <i class="fa-solid fa-phone"></i>
                                    <p class="ps-2">+9090 8080 4044</p>

                                </li>
                                <li>
                                    <h6>Social Media</h6>
                                </li>
                                <li>
                                    <ul class="list-unstyled d-flex mb-0 social-links">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 footpay">
                        <img src="assets/media/ws/footer-payment.png" class="w-75" alt="">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class=" copyright">


                            <p class="mb-0">Copyright © 2023 - Writing space is a trading name of Business, a company registered.</p>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section> -->

    <!--end::Footer-->
       <!--begin::Javascript-->
    


       <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        var hostUrl = "assets/";
    </script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea-ordering-page'
        });
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('backend/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/utilities/modals/new-target.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/utilities/modals/users-search.js') }}"></script>



    
    <script>
        $(document).ready(function () {
            $('#microsoft-login').click(function () {
                // Trigger the AJAX request
               
                $.ajax({
                    url: '/microsoftLogin', // Replace with your actual route
                    type: 'GET',
                    success: function (data) {
                        // Handle the success response (redirect or other logic)
                        
                        console.log(data.redirect_url)
                        window.location.href = data.redirect_url;
                    },
                    error: function (error) {
                        // Handle errors
                        console.error(error);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            // Extract the access token from the URL fragment
            var accessToken = window.location.hash.substring(1).split("&")[0].split("=")[1];

            if (accessToken) {

               
                // Using jQuery for simplicity, make sure to include the jQuery library
                $.ajax({
                    url: '/auth/microsoft/callback/ajax', // Replace with your actual route
                    type: 'GET',
                    data: { access_token: accessToken },
                    success: function (data) {
                        // Handle the success response (redirect or other logic)
                        console.log(data);
                    },
                    error: function (error) {
                        // Handle errors
                        console.error(error);
                    }
                });
            }
        });
    </script>
    <!--end::Custom Javascript-->

    <!--end::Javascript-->

</body>
<!--end::Body-->

</html>