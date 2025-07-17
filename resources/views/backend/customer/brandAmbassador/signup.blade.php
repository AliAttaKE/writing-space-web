@extends('frontend_final.Layout.masters')
@section('content')

<section class="bg-dark section-card-phases pt-160px">
  <div class="container d-flex justify-content-center mb-5">
    <div class="bordered-card p-5 col-md-10 forms-custom login-signup-form">
      <form action="{{ route('customer.create.brand.ambassadors.signup') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="heading gradient-text-2 text-center pb-5">
          Signup
        </h1>

        <div class="mb-3">
          <input type="email" name="email" placeholder="Email" class="w-100" readonly value="{{ old('email', $email) }}">
          <input type="hidden" name="temprary_token" value="{{ old('temprary_token', $temprary_token) }}">
          <input type="hidden" name="auth_user_id" value="{{ old('auth_user_id', $auth_user_id) }}">
          @error('email')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3 password-block">
          <input type="password" class="w-100" id="create-password" name="password" placeholder="Create Password">
          @error('password')
          <span class="text-danger">{{ $message }}</span>
          @enderror

          <span class="toggle-password" onclick="togglePasswordVisibility('create-password')">
            <i class="fas fa-eye" id="toggle-create-password"></i>
          </span>
          <p id="password-requirement" class="text-white my-2">
            Use 8 or more characters with a mix of letters, numbers & symbols.
          </p>
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
          <button type="submit" class="gradient-button fw-bold login-button w-100">Signup Now</button>
        </div>

        <div class="mb-3 text-center fw-bold text-white">
          Already have an account? <a href="{{ route('login') }}" class="yellow-text fw-bold">Login</a>
        </div>
      </form>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
  function togglePasswordVisibility(fieldId) {
    const field = document.getElementById(fieldId);
    const icon = document.getElementById('toggle-' + fieldId);
    if (field.type === 'password') {
      field.type = 'text';
      icon.classList.remove('fa-eye');
      icon.classList.add('fa-eye-slash');
    } else {
      field.type = 'password';
      icon.classList.remove('fa-eye-slash');
      icon.classList.add('fa-eye');
    }
  }

  // Password strength logic
  $('#create-password').on('input', function () {
    const val = $(this).val();
    let strength = 0;
    if (val.length >= 8) strength += 1;
    if (/[A-Z]/.test(val)) strength += 1;
    if (/[a-z]/.test(val)) strength += 1;
    if (/[0-9]/.test(val)) strength += 1;
    if (/[\W]/.test(val)) strength += 1;

    const strengthText = ['Very Weak', 'Weak', 'Moderate', 'Strong', 'Very Strong'];
    const colors = ['#e74c3c', '#f39c12', '#f1c40f', '#2ecc71', '#27ae60'];
    $('#password-strength').text(strengthText[strength - 1] || '');
    $('#progress-value').css({ width: `${strength * 20}%`, backgroundColor: colors[strength - 1] || '#ccc' });
  });

  // Password match
  $('#confirm-password').on('input', function () {
    const match = $(this).val() === $('#create-password').val();
    $('#password-match').text(match ? 'Passwords match' : 'Passwords do not match')
      .css('color', match ? 'green' : 'red');
  });

  // Microsoft login (optional if needed)
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

  $(document).ready(function () {
    var accessToken = window.location.hash.substring(1).split("&")[0].split("=")[1];
    if (accessToken) {
      $.ajax({
        url: '{{ route('microsoft.handle.ajax') }}',
        type: 'GET',
        data: { access_token: accessToken },
        success: function () {
          window.location.href = '{{ route('customer.dashboard') }}';
        },
        error: function (error) {
          console.error(error);
        }
      });
    }
  });
</script>

@endsection
