@extends('frontend_final.Layout.masters')
@section('content')

<section class="bg-dark section-card-phases pt-160px">
    <div class="container d-flex justify-content-center mb-5">
        <div class="bordered-card p-5 col-md-10 forms-custom login-signup-form">
            <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="heading gradient-text-2 text-center pb-5">
                    Login
                </h1>
                @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
                 @endif
                 @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="mb-3">

                     <input type="email" name="email" placeholder="Username or Email"  class="w-100" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                </div>
                <div class="mb-3 password-block">
                    <input type="password" name="password"  id="login_password" placeholder="Password" class="w-100">
                      @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                    <span class="toggle-password" onclick="togglePasswordVisibility('login_password')">
                        <i class="fas fa-eye" id="toggle-login_password"></i>
                    </span>
                </div>
                <div class="mb-3 text-center">
                    <a href="{{ route('email.form.request') }}" class="yellow-text fw-bold">Forget Password</a>
                </div>
                <!--<div class="g-recaptcha" data-sitekey="6LcDcdApAAAAANZyggaWjQPKT9I0H1I7wFt9TmAI"></div>-->
        <!--        <button class="g-recaptcha" -->
        <!--data-sitekey="6LcDcdApAAAAANZyggaWjQPKT9I0H1I7wFt9TmAI" -->
        <!--data-callback='onSubmit' -->
        <!--data-action='submit'>Submit</button>-->
                <div class="mb-3 text-center">
                    {{-- <a href="#" class="gradient-button fw-bold login-button" data-bs-toggle="modal" data-bs-target="#login-modal">Login</a> --}}
                    <button type="submit" class="gradient-button fw-bold login-button w-100" >Login</button>
                    {{-- <button type="submit" class="gradient-button fw-bold login-button" data-bs-toggle="modal" data-bs-target="#login-modal">Login</button> --}}

                </div>

                <div class="mb-3 text-center fw-bold text-white">
                    Don’t have an accoumt? <a href="{{ route('front.signup') }}" class="yellow-text fw-bold">Signup</a>
                </div>

                <div class="mb-3 text-center fw-bold text-white d-flex justify-content-between login-form-divider">
                    <span class="divider"></span>
                    <p class="text-white fw-bold">or</p><span class="divider-2"></span>
                </div>

                <div class="row login-social-options">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center bordered-card py-3 px-3">
                            <img src="{{ asset('fronted_final/assets/images/google.png')}}" alt="" style="height: 32px; width: 32px;">
                            {{-- <h5 class="fw-bold text-white mb-0 d-flex align-items-center ms-3">Login with Google
                            </h5> --}}

                            <a href="{{ route('google.login') }}" class="fw-bold text-white mb-0 d-flex align-items-center ms-3"><i class="fa-brands fa-light me-2 fa-google"></i><span class="icon-size text-capitalize"> Login with Google</span></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center bordered-card py-3 px-3">
                            <img src="{{ asset('fronted_final/assets/images/microsoft.png')}}" alt="" style="height: 32px; width: 32px;">
                            <a id="microsoft-login" class="fw-bold text-white mb-0 d-flex align-items-center ms-3"><i class="fa-brands me-2 fa-microsoft"></i><span class="icon-size text-capitalize">Login with Microsoft</span></a>
                            {{-- <h5 class="fw-bold text-white mb-0 d-flex align-items-center ms-3">Login with Microsoft
                            </h5> --}}
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="login-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3 bordered-card">
                <div class="modal-body justify-content-center text-center pb-0">
                    <img src="{{ asset('fronted_final/assets/images/success-login.png')}}" alt="">
                    <h1 class="heading gradient-text">Login Successful</h1>
                    <p class="mb-0 text-white">You have successfully signed into your account. You can close this window and continue using the product.</p>
                </div>
                <div class="modal-footer border-0 justify-content-center d-flex">
                    <button type="button" class="btn btn-purple w-75 py-2" data-bs-dismiss="modal">Close Window</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="incorrect-password-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3 bordered-card">
                <div class="modal-body justify-content-center text-center pb-0">
                    <img src="{{ asset('fronted_final/assets/images/incorrect-password.png')}}" alt="">
                    <h1 class="heading gradient-text">Incorrect Password</h1>
                    <p class="mb-0 text-white">The password you entered is incorrect.
                        please try again</p>
                </div>
                <div class="modal-footer border-0 justify-content-center d-flex">
                    <button type="button" class="btn btn-purple w-75 py-2" data-bs-dismiss="modal">Close Window</button>
                </div>
            </div>
        </div>
    </div>
  {{-- <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script> --}}



 <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

 <script>
     $(document).ready(function () {
         $('#microsoft-login').click(function () {
            alert('data');
             $.ajax({
 url: '{{ route('microsoft.login') }}',
 type: 'GET',
 dataType: 'json', // Add this line to specify the expected data type
 success: function (data) {
     console.log(data.redirect_url);
     window.location.href = data.redirect_url;
 },
 error: function (error) {
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
         alert('data');
         if (accessToken) {


             // Using jQuery for simplicity, make sure to include the jQuery library
             $.ajax({

                 url: '{{ route('microsoft.handle.ajax') }}',
                 type: 'GET',
                 data: { access_token: accessToken },
                 success: function (data) {
                     // Handle the success response (redirect or other logic)
                     console.log(data);
                     window.location.href = '{{ route('customer.dashboard') }}'
                 },
                 error: function (error) {
                     // Handle errors
                     console.error(error);
                 }
             });
         }
     });
 </script>



@endsection
