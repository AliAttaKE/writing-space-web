
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
                <div class="mb-3 password-block">
                    <input type="password" name="password" id="password" placeholder="New Password" class="w-100">
                </div>
                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                 <div class="mb-3 password-block">
                    <input type="password" name="password_confirmation" id="login_password" placeholder="Confirm New Password" class="w-100">
                    
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
    
@endsection

