@extends('frontend_final.Layout.masters')
@section('content')


    <section class="bg-dark section-card-phases pt-160px">
        <div class="container d-flex justify-content-center mb-5">
            <div class="bordered-card p-5 col-md-10 forms-custom login-signup-form">
                <form action="{{ route('front.signup.process') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="heading gradient-text-2 text-center pb-5">
                        Signup
                    </h1>
                    
                      <div class="mb-3 ">

                        <input type="text" name="name" placeholder="Name" class="w-100" value="{{ old('name') }}">
                        @error('name')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="mb-3">
                      
                        <input type="email" name="email" placeholder="Email" class="w-100" value="{{ old('email') }}">
                        @error('email')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="mb-3 password-block">
                      
                            <input type="password"  class="w-100" id="create-password"  name="password" placeholder="Create Password">
                            @error('password')
                                  <span class="text-danger">{{ $message }}</span>
                            @enderror


                        <span class="toggle-password" onclick="togglePasswordVisibility('create-password')">
                            <i class="fas fa-eye" id="toggle-create-password"></i>
                        </span>
                        <p id="password-requirement" class="text-white my-2">Use 8 or more characters with a mix of letters,
                            numbers & symbols.</p>
                        <p id="password-strength" class="password-strength my-2"></p>
                        <div class="progress-bar" id="password-progress">
                            <div id="progress-value" class="progress-value"></div>
                        </div>
                    </div>
                    <div class="mb-3 password-block">
    
                            <input type="password" class="w-100" name="password_confirmation" id="confirm-password" placeholder="Confirm Password">
                            @error('password_confirmation')
                                  <span class="text-danger">{{ $message }}</span>
                            @enderror
                        <span class="toggle-password" onclick="togglePasswordVisibility('confirm-password')">
                            <i class="fas fa-eye" id="toggle-confirm-password"></i>
                        </span>
                        <p id="password-match" class="password-match my-2"></p>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="gradient-button fw-bold login-button w-100">Signup</button>


                    
                    </div>

                    <div class="mb-3 text-center fw-bold text-white">
                        Already have an account? <a href="{{ route('login') }}" class="yellow-text fw-bold">Login</a>
                    </div>

                    <div class="mb-3 text-center fw-bold text-white d-flex justify-content-between login-form-divider">
                        <span class="divider"></span>
                        <p class="text-white fw-bold">or</p><span class="divider-2"></span>
                    </div>

                    <div class="row login-social-options">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-center bordered-card py-3 px-3">
                                <img src="{{ asset('fronted_final/assets/images/google.png')}}" alt="" style="height: 32px; width: 32px;">
                                {{-- <h5 class="fw-bold text-white mb-0 d-flex align-items-center ms-3">Login with Google</h5> --}}

                                <a href="{{ route('google.login') }}" class="fw-bold text-white mb-0 d-flex align-items-center ms-3"><i class="fa-brands fa-light me-2 fa-google"></i><span class="icon-size text-capitalize">Login with Google</span></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-center bordered-card py-3 px-3">
                                <img src="{{ asset('fronted_final/assets/images/microsoft.png')}}" alt="" style="height: 32px; width: 32px;">
                                {{-- <h5 class="fw-bold text-white mb-0 d-flex align-items-center ms-3">Login with Microsoft</h5> --}}
                                <a id="microsoft-login" class="fw-bold text-white mb-0 d-flex align-items-center ms-3"><i class="fa-brands me-2 fa-microsoft"></i><span class="icon-size text-capitalize">microsoft</span></a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        
   <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   <script>
       $(document).ready(function () {
           $('#microsoft-login').click(function () {
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
