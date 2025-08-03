@extends('frontend_final.Layout.masters')
@section('content')

<section class="bg-dark section-card-phases pt-160px">
    <div class="container d-flex justify-content-center mb-5">
        <div class="bordered-card p-5 col-md-10 forms-custom login-signup-form">
            <form action="{{ route('login') }}" method="POST" id="login-form">
                @csrf
                <h1 class="heading gradient-text-2 text-center pb-5">Login</h1>

                @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif

                <div class="mb-3">
                    <input type="email" name="email" placeholder="Username or Email" class="w-100" value="{{ old('email') }}">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3 password-block">
                    <input type="password" name="password" id="login_password" placeholder="Password" class="w-100">
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    <span class="toggle-password" onclick="togglePasswordVisibility('login_password')">
                        <i class="fas fa-eye" id="toggle-login_password"></i>
                    </span>
                </div>

                <div class="mb-3 text-center">
                    <a href="{{ route('email.form.request') }}" class="yellow-text fw-bold">Forgot Password?</a>
                </div>

                <!-- ✅ reCAPTCHA v2 checkbox -->
                <div class="mb-3 text-center">
                    <div class="g-recaptcha d-inline-block" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                    @error('g-recaptcha-response') <small class="text-danger d-block">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="gradient-button fw-bold login-button w-100">Login</button>
                </div>

                <div class="mb-3 text-center fw-bold text-white">
                    Don't have an account?
                    <a href="{{ route('front.signup') }}" class="yellow-text fw-bold">Signup</a>
                </div>

                <div class="mb-3 text-center fw-bold text-white d-flex justify-content-between login-form-divider">
                    <span class="divider"></span>
                    <p class="text-white fw-bold">or</p>
                    <span class="divider-2"></span>
                </div>

                <div class="row login-social-options">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center bordered-card py-3 px-3">
                            <img src="{{ asset('fronted_final/assets/images/google.png')}}" alt="" style="height: 32px;">
                            <a href="{{ route('google.login') }}" class="fw-bold text-white mb-0 d-flex align-items-center ms-3">
                                <i class="fa-brands me-2 fa-google"></i> <span class="icon-size text-capitalize">Login with Google</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center bordered-card py-3 px-3">
                            <img src="{{ asset('fronted_final/assets/images/microsoft.png')}}" alt="" style="height: 32px;">
                            <a id="microsoft-login" class="fw-bold text-white mb-0 d-flex align-items-center ms-3" style="cursor:pointer;">
                                <i class="fa-brands me-2 fa-microsoft"></i> <span class="icon-size text-capitalize">Login with Microsoft</span>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- ✅ reCAPTCHA v2 Script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    function togglePasswordVisibility(fieldId) {
        const field = document.getElementById(fieldId);
        const icon = document.getElementById(`toggle-${fieldId}`);
        if (field.type === "password") {
            field.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            field.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }

    // Microsoft login
    document.getElementById('microsoft-login')?.addEventListener('click', function () {
        fetch('{{ route('microsoft.login') }}')
            .then(response => response.json())
            .then(data => window.location.href = data.redirect_url)
            .catch(console.error);
    });
</script>

<script>
    const input = document.getElementById('login_password');
    const icon = document.querySelector('.toggle-password i');

    input.addEventListener('input', function () {
        if (input.value.trim() !== "") {
            icon.style.color = 'black';
        } else {
            icon.style.color = '#fff';
        }
    });
</script>
@endsection
