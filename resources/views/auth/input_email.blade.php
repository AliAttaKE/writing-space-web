@extends('frontend_final.Layout.masters')
@section('content')

<section class="bg-dark section-card-phases pt-160px">
    <div class="container d-flex justify-content-center mb-5">
        <div class="bordered-card p-5 col-md-10 forms-custom login-signup-form">
            <form method="POST" action="{{ route('send.email') }}">
                @csrf
                <h1 class="heading gradient-text-2 text-center">
                    Forget Password
                </h1>
                <p class="text-center pb-5 text-white">Enter Your Email Address</p>

                <!-- Display success or error message -->
                @if(session('message'))
                    <div class="alert alert-{{ session('alert-type', 'info') }} text-center">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="mb-3">
                    <input type="email" name="email" placeholder="Email" id="email" class="w-100" value="{{ old('email') }}">
                </div>

                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="mb-3 text-center">
                    <button type="submit" class="gradient-button fw-bold login-button btn btn-primary" style="
                    width: -webkit-fill-available;
                ">
                        Send Email
                    </button>
                    
                    <!--<button type="submit" class="btn btn_dark mb-5">-->
                    <!--    <span><small>Send Email</small> <small>Send Email</small></span>-->
                    <!--</button>-->
                </div>

                <div class="mb-3 text-center fw-bold text-white">
                    <a href="{{ url('/login') }}" class="text-white">Go Back</a>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
