@extends('frontend_final.Layout.masters')
@section('content')

<section class="bg-dark section-card-phases pt-160px">
    <div class="container d-flex justify-content-center mb-5">
        <div class="bordered-card p-5 col-md-10 forms-custom login-signup-form">
            <form action="{{ route('login') }}" method="POST" id="login-form">
                @csrf

                <h1 class="heading gradient-text-2 text-center pb-5">Login</h1>

                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
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

                <div class="mb-3 d-flex flex-column flex-md-row justify-content-between align-items-center text-center gap-3">
                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                    @error('g-recaptcha-response') <small class="text-danger d-block">{{ $message }}</small> @enderror

                    <div class="fw-bold text-white mb-0">
                        Don’t have an account? <a href="{{ route('front.signup') }}" class="yellow-text fw-bold">Signup</a>
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="gradient-button fw-bold login-button w-100">Login</button>
                </div>

                <div class="mb-3 text-center fw-bold text-white d-flex justify-content-between login-form-divider">
                    <span class="divider"></span>
                    <p class="text-white fw-bold">or</p>
                    <span class="divider-2"></span>
                </div>

                <div class="row login-social-options">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center bordered-card py-3 px-3">
                            <img src="{{ asset('fronted_final/assets/images/google.png')}}" alt="" style="height: 32px; width: 32px;">
                            <a href="{{ route('google.login') }}" class="fw-bold text-white mb-0 d-flex align-items-center ms-3">
                                <i class="fa-brands me-2 fa-google"></i>
                                <span class="icon-size text-capitalize">Login with Google</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex justify-content-center bordered-card py-3 px-3">
                            <img src="{{ asset('fronted_final/assets/images/microsoft.png')}}" alt="" style="height: 32px; width: 32px;">
                            <a id="microsoft-login" class="fw-bold text-white mb-0 d-flex align-items-center ms-3" style="cursor:pointer;">
                                <i class="fa-brands me-2 fa-microsoft"></i>
                                <span class="icon-size text-capitalize">Login with Microsoft</span>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Success Modal --}}
    <div class="modal fade" id="login-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3 bordered-card">
                <div class="modal-body text-center pb-0">
                    <img src="{{ asset('fronted_final/assets/images/success-login.png')}}" alt="">
                    <h1 class="heading gradient-text">Login Successful</h1>
                    <p class="mb-0 text-white">You have successfully signed into your account.</p>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-purple w-75 py-2" data-bs-dismiss="modal">Close Window</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Incorrect Password Modal --}}
    <div class="modal fade" id="incorrect-password-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3 bordered-card">
                <div class="modal-body text-center pb-0">
                    <img src="{{ asset('fronted_final/assets/images/incorrect-password.png')}}" alt="">
                    <h1 class="heading gradient-text">Incorrect Password</h1>
                    <p class="mb-0 text-white">The password you entered is incorrect. Please try again.</p>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-purple w-75 py-2" data-bs-dismiss="modal">Close Window</button>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- reCAPTCHA script --}}
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

{{-- jQuery --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

{{-- Microsoft login --}}
<script>
    $('#microsoft-login').click(function () {
        $.ajax({
            url: '{{ route('microsoft.login') }}',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                window.location.href = data.redirect_url;
            },
            error: function (error) {
                console.error(error);
            }
        });
    });
</script>

{{-- Toggle Password Visibility --}}
<script>
    function togglePasswordVisibility(fieldId) {
        const input = document.getElementById(fieldId);
        const icon = document.getElementById(`toggle-${fieldId}`);

        if (input.type === "password") {
            input.type = "text";
            icon.classList.replace("fa-eye", "fa-eye-slash");
        } else {
            input.type = "password";
            icon.classList.replace("fa-eye-slash", "fa-eye");
        }
    }
</script>

{{-- Handle Microsoft redirect with access token --}}
<script>
    $(document).ready(function () {
        const hash = window.location.hash.substring(1);
        const tokenParam = hash.split("&").find(p => p.startsWith("access_token="));
        const accessToken = tokenParam ? tokenParam.split("=")[1] : null;

        if (accessToken) {
            $.ajax({
                url: '{{ route('microsoft.handle.ajax') }}',
                type: 'GET',
                data: { access_token: accessToken },
                success: function () {
                    window.location.href = '{{ route('customer.dashboard') }}';
                },
                error: function (err) {
                    console.error(err);
                }
            });
        }
    });
</script>

@endsection
