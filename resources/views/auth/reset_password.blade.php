
@extends('frontend_final.Layout.masters')
@section('content')

<section class="bg-dark section-card-phases pt-160px">
    <div class="container d-flex justify-content-center mb-5">
        <div class="bordered-card p-5 col-md-10 forms-custom login-signup-form">
            <form action="{{route('form.password.update')}}" method="POST">
                 @csrf
                 
                  <input type="hidden" name="token" value="{{ $token }}">
                        <input type="hidden" name="email" value="{{ $email }}">
                <h1 class="heading gradient-text-2 text-center">
                    Update Password
                </h1>
                <p class="text-center pb-3 text-white">Please Enter Your New Password</p>
          <div class="mb-3 password-block position-relative">
    <input type="password" name="password" id="password" placeholder="New Password" class="w-100 pe-5">
    <i class="fa-regular text-white fa-eye position-absolute top-50 end-0 translate-middle-y me-3 cursor-pointer" id="togglePassword"></i>
</div>

                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                <div class="mb-3 password-block position-relative">
    <input type="password" name="password_confirmation" id="login_password" placeholder="Confirm New Password" class="w-100 pe-5">
    <i class="fa-regular text-white fa-eye position-absolute top-50 end-0 translate-middle-y me-3 cursor-pointer" id="toggleConfirmPassword"></i>
</div>

                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                <div class="mb-3 text-center">
                    {{-- <a href="#" class="gradient-button fw-bold login-button" data-bs-toggle="modal" data-bs-target="#login-modal">Update Password</a> --}}
                    <button type="submit" class="gradient-button fw-bold login-button" style="
    width: -webkit-fill-available;
"><span> <small>Update Password</small></span></button>
               
               
                </div>

                <div class="mb-3 text-center fw-bold text-white">
                    <a href="{{ url('/login') }}" class="text-white">Go Back</a>
                </div>
            </form>
        </div>
      
        

    </section>
    <div class="mb-3 password-block position-relative">
    <input type="password" name="password" id="password" placeholder="New Password" class="w-100 pe-5">
    <i class="fa-regular  fa-eye position-absolute top-50 end-0 translate-middle-y me-3 cursor-pointer" id="togglePassword"></i>
</div>

<!-- Font Awesome CDN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<script>
const togglePassword = document.getElementById('togglePassword');
const password = document.getElementById('password');
const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
const confirmPassword = document.getElementById('login_password');

toggleConfirmPassword.addEventListener('click', function() {
    // Password show/hide toggle karein
    const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
    confirmPassword.setAttribute('type', type);
    
    // Eye icon change karein
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});
togglePassword.addEventListener('click', function() {
    // Type change karein (password <-> text)
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    
    // Icon change karein (eye <-> eye-slash)
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});
</script>

<style>
.password-block input {
    padding-right: 35px;
}
.cursor-pointer {
    cursor: pointer;
}
</style>
@endsection

