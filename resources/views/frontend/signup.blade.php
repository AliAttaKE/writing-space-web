@extends('frontend.master_layout.master')
@section('main-theme')
   <section class="register_section section_space_lg">
      <div class="container mt-5 pt-5">
         <div class="row justify-content-center">
            <div class="col col-lg-5">
               <h1 class="register_heading text-center">Create Account</h1>
               <p class="register_heading_description text-center">Already have account? <a href="{{ route('login') }}">Login</a></p>
               <form action="{{ route('front.signup.process') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="register_form signup_login_form">
                     <div class="form_item">
                        {{-- <label for="email">Email:</label> --}}
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form_item">
                        {{-- <label for="password">Password:</label> --}}
                        <input type="password" name="password" placeholder="Create Password">
                        @error('password')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form_item">
                        {{-- <label for="password_confirmation">Confirm Password:</label> --}}
                        <input type="password" name="password_confirmation" placeholder="Confirm Password">
                        @error('password_confirmation')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <button type="submit"  class="btn btn_dark mb-5"><span><small>Signup Now</small> <small>Signup Now</small></span></button>
                     <div class="row  mt-4 justify-content-center">
                        <div class="col-md-6 col-sm-4"> 
                            <a href="{{ route('google.login') }}" class="btn btn_dark mb-2 d-flex justify-content-evenly px-4 py-3"><i class="fa-brands fa-light me-2 fa-google"></i><span class="icon-size text-capitalize"> google</span></a>
                        </div>
                        
                        <div class="col-md-6 col-sm-4"> 
                            <a id="microsoft-login" class="btn btn_dark mb-2 d-flex justify-content-evenly px-4 py-3"><i class="fa-brands me-2 fa-microsoft"></i><span class="icon-size text-capitalize">microsoft</span></a>
                        </div>
                    </div>

                     
                     
                  </div>
               </form>
            </div>
         </div>

     
      </div>
      
   </section>
   
   
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